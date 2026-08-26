# CrowdSourcedLyrics SDK configuration


_shared_config = None


def shared_config():
    """Return the process-wide config, built once on first use.

    The SDK reads the config on every request and never writes to it, so one
    instance is shared by every client rather than rebuilt per client.

    The returned dict is shared: treat it as read-only. Callers that need to
    mutate should use make_config, which always returns a fresh copy.
    """
    global _shared_config
    if _shared_config is None:
        _shared_config = make_config()
    return _shared_config


def make_config():
    """Build a fresh, fully materialised config dict.

    Every call rebuilds the whole structure, so prefer shared_config unless
    you need a private copy you intend to mutate.
    """
    return {
        "main": {
            "name": "CrowdSourcedLyrics",
            "slug": "crowd-sourced-lyrics",
            "version": "0.0.1",
            "target": "py",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
        "transport": "base",
      },
        },
        "options": {
            "base": "https://lrclib.net/api",
            "headers": {
        "content-type": "application/json",
      },
            "entity": {
                "get": {},
            },
        },
        "entity": {
      "get": {
        "fields": [
          {
            "name": "albumName",
            "short": "The name of the album",
            "type": "`$STRING`",
          },
          {
            "name": "artistName",
            "short": "The name of the artist",
            "type": "`$STRING`",
          },
          {
            "name": "duration",
            "short": "Duration of the track in seconds",
            "type": "`$INTEGER`",
          },
          {
            "name": "id",
            "short": "Unique identifier for the lyrics entry",
            "type": "`$INTEGER`",
          },
          {
            "name": "plainLyrics",
            "short": "Plain text lyrics without timestamps",
            "type": "`$STRING`",
          },
          {
            "name": "syncedLyrics",
            "short": "Synchronized lyrics in LRC format with timestamps",
            "type": "`$STRING`",
          },
          {
            "name": "trackName",
            "short": "The name of the track",
            "type": "`$STRING`",
          },
        ],
        "name": "get",
        "op": {
          "load": {
            "input": "data",
            "name": "load",
            "points": [
              {
                "args": {
                  "query": [
                    {
                      "kind": "query",
                      "name": "album_name",
                      "orig": "album_name",
                      "type": "`$STRING`",
                    },
                    {
                      "example": "Rick Astley",
                      "kind": "query",
                      "name": "artist_name",
                      "orig": "artist_name",
                      "type": "`$STRING`",
                    },
                    {
                      "example": 213,
                      "kind": "query",
                      "name": "duration",
                      "orig": "duration",
                      "type": "`$INTEGER`",
                    },
                    {
                      "example": "Never Gonna Give You Up",
                      "kind": "query",
                      "name": "track_name",
                      "orig": "track_name",
                      "type": "`$STRING`",
                    },
                  ],
                },
                "kind": "http",
                "method": "GET",
                "orig": "/get",
                "parts": [
                  "get",
                ],
                "select": {
                  "exist": [
                    "album_name",
                    "artist_name",
                    "duration",
                    "track_name",
                  ],
                },
                "transform": {
                  "req": "`reqdata`",
                  "res": "`body`",
                },
              },
            ],
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
