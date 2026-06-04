# CrowdSourcedLyrics SDK

Fetch community-contributed synchronized lyrics (LRC) for songs by track signature

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Crowd Sourced Lyrics API

[LRCLIB](https://lrclib.net) is a free, community-driven repository of song lyrics, including time-synchronized lyrics in the LRC format used by media players to highlight lines as a track plays. The project hosts a public HTTP API at `https://lrclib.net/api` that any client can call without an API key.

What you get from the API:

- Lookup of lyrics for a specific track by signature (artist name, track name, album name, and duration)
- Plain-text lyrics and synchronized LRC-format lyrics when available
- A simple JSON response shape suitable for embedding in music players and tagging tools

The service is HTTP-only with CORS enabled, so it can be called from browser apps as well as native clients. Because the catalogue is crowd-sourced, coverage and quality vary by track, and a duration tolerance is used when matching requests against stored entries.

## Try it

**TypeScript**
```bash
npm install crowd-sourced-lyrics
```

**Python**
```bash
pip install crowd-sourced-lyrics-sdk
```

**PHP**
```bash
composer require voxgig/crowd-sourced-lyrics-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/crowd-sourced-lyrics-sdk/go
```

**Ruby**
```bash
gem install crowd-sourced-lyrics-sdk
```

**Lua**
```bash
luarocks install crowd-sourced-lyrics-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { CrowdSourcedLyricsSDK } from 'crowd-sourced-lyrics'

const client = new CrowdSourcedLyricsSDK({})

```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o crowd-sourced-lyrics-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "crowd-sourced-lyrics": {
      "command": "/abs/path/to/crowd-sourced-lyrics-mcp"
    }
  }
}
```

## Entities

The API exposes one entity:

| Entity | Description | API path |
| --- | --- | --- |
| **Get** | Lyrics lookup by track signature — call `GET /api/get` with `artist_name`, `track_name`, `album_name`, and `duration` query parameters to retrieve plain and synchronized (LRC) lyrics for a song. | `/get` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from crowdsourcedlyrics_sdk import CrowdSourcedLyricsSDK

client = CrowdSourcedLyricsSDK({})


# Load a specific get
get, err = client.Get(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'crowdsourcedlyrics_sdk.php';

$client = new CrowdSourcedLyricsSDK([]);


// Load a specific get
[$get, $err] = $client->Get(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/crowd-sourced-lyrics-sdk/go"

client := sdk.NewCrowdSourcedLyricsSDK(map[string]any{})

```

### Ruby

```ruby
require_relative "CrowdSourcedLyrics_sdk"

client = CrowdSourcedLyricsSDK.new({})


# Load a specific get
get, err = client.Get(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("crowd-sourced-lyrics_sdk")

local client = sdk.new({})


-- Load a specific get
local get, err = client:Get(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = CrowdSourcedLyricsSDK.test()
const result = await client.Get().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = CrowdSourcedLyricsSDK.test(None, None)
result, err = client.Get(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = CrowdSourcedLyricsSDK::test(null, null);
[$result, $err] = $client->Get(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.Get(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = CrowdSourcedLyricsSDK.test(nil, nil)
result, err = client.Get(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:Get(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Crowd Sourced Lyrics API

- Upstream: [https://lrclib.net](https://lrclib.net)
- API docs: [https://lrclib.net/docs](https://lrclib.net/docs)

- Lyrics on LRCLIB are crowd-sourced from users and may carry third-party copyright
- The service itself is free to use without authentication
- Review the LRCLIB site for any attribution or redistribution guidance before reusing data commercially

---

Generated from the Crowd Sourced Lyrics API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
