-- CrowdSourcedLyrics SDK configuration

local function make_config()
  return {
    main = {
      name = "CrowdSourcedLyrics",
    },
    feature = {
      ["test"] = {
        ["options"] = {
          ["active"] = false,
        },
      },
    },
    options = {
      base = "https://lrclib.net/api",
      headers = {
        ["content-type"] = "application/json",
      },
      entity = {
        ["get"] = {},
      },
    },
    entity = {
      ["get"] = {
        ["fields"] = {
          {
            ["active"] = true,
            ["name"] = "album_name",
            ["req"] = false,
            ["type"] = "`$STRING`",
            ["index$"] = 0,
          },
          {
            ["active"] = true,
            ["name"] = "artist_name",
            ["req"] = false,
            ["type"] = "`$STRING`",
            ["index$"] = 1,
          },
          {
            ["active"] = true,
            ["name"] = "duration",
            ["req"] = false,
            ["type"] = "`$INTEGER`",
            ["index$"] = 2,
          },
          {
            ["active"] = true,
            ["name"] = "id",
            ["req"] = false,
            ["type"] = "`$INTEGER`",
            ["index$"] = 3,
          },
          {
            ["active"] = true,
            ["name"] = "plain_lyric",
            ["req"] = false,
            ["type"] = "`$STRING`",
            ["index$"] = 4,
          },
          {
            ["active"] = true,
            ["name"] = "synced_lyric",
            ["req"] = false,
            ["type"] = "`$STRING`",
            ["index$"] = 5,
          },
          {
            ["active"] = true,
            ["name"] = "track_name",
            ["req"] = false,
            ["type"] = "`$STRING`",
            ["index$"] = 6,
          },
        },
        ["name"] = "get",
        ["op"] = {
          ["load"] = {
            ["input"] = "data",
            ["name"] = "load",
            ["points"] = {
              {
                ["active"] = true,
                ["args"] = {
                  ["query"] = {
                    {
                      ["active"] = true,
                      ["kind"] = "query",
                      ["name"] = "album_name",
                      ["orig"] = "album_name",
                      ["reqd"] = false,
                      ["type"] = "`$STRING`",
                    },
                    {
                      ["active"] = true,
                      ["example"] = "Rick Astley",
                      ["kind"] = "query",
                      ["name"] = "artist_name",
                      ["orig"] = "artist_name",
                      ["reqd"] = false,
                      ["type"] = "`$STRING`",
                    },
                    {
                      ["active"] = true,
                      ["example"] = 213,
                      ["kind"] = "query",
                      ["name"] = "duration",
                      ["orig"] = "duration",
                      ["reqd"] = false,
                      ["type"] = "`$INTEGER`",
                    },
                    {
                      ["active"] = true,
                      ["example"] = "Never Gonna Give You Up",
                      ["kind"] = "query",
                      ["name"] = "track_name",
                      ["orig"] = "track_name",
                      ["reqd"] = false,
                      ["type"] = "`$STRING`",
                    },
                  },
                },
                ["method"] = "GET",
                ["orig"] = "/get",
                ["parts"] = {
                  "get",
                },
                ["select"] = {
                  ["exist"] = {
                    "album_name",
                    "artist_name",
                    "duration",
                    "track_name",
                  },
                },
                ["transform"] = {
                  ["req"] = "`reqdata`",
                  ["res"] = "`body`",
                },
                ["index$"] = 0,
              },
            },
            ["key$"] = "load",
          },
        },
        ["relations"] = {
          ["ancestors"] = {},
        },
      },
    },
  }
end


local function make_feature(name)
  local features = require("features")
  local factory = features[name]
  if factory ~= nil then
    return factory()
  end
  return features.base()
end


-- Attach make_feature to the SDK class
local function setup_sdk(SDK)
  SDK._make_feature = make_feature
end


return make_config
