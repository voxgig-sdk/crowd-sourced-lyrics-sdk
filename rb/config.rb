# CrowdSourcedLyrics SDK configuration

module CrowdSourcedLyricsConfig
  def self.make_config
    {
      "main" => {
        "name" => "CrowdSourcedLyrics",
      },
      "feature" => {
        "test" => {
          "options" => {
            "active" => false,
          },
        },
      },
      "options" => {
        "base" => "https://lrclib.net/api",
        "auth" => {
          "prefix" => "Bearer",
        },
        "headers" => {
          "content-type" => "application/json",
        },
        "entity" => {
          "get" => {},
        },
      },
      "entity" => {
        "get" => {
          "fields" => [
            {
              "name" => "album_name",
              "req" => false,
              "type" => "`$STRING`",
              "active" => true,
              "index$" => 0,
            },
            {
              "name" => "artist_name",
              "req" => false,
              "type" => "`$STRING`",
              "active" => true,
              "index$" => 1,
            },
            {
              "name" => "duration",
              "req" => false,
              "type" => "`$INTEGER`",
              "active" => true,
              "index$" => 2,
            },
            {
              "name" => "id",
              "req" => false,
              "type" => "`$INTEGER`",
              "active" => true,
              "index$" => 3,
            },
            {
              "name" => "plain_lyric",
              "req" => false,
              "type" => "`$STRING`",
              "active" => true,
              "index$" => 4,
            },
            {
              "name" => "synced_lyric",
              "req" => false,
              "type" => "`$STRING`",
              "active" => true,
              "index$" => 5,
            },
            {
              "name" => "track_name",
              "req" => false,
              "type" => "`$STRING`",
              "active" => true,
              "index$" => 6,
            },
          ],
          "name" => "get",
          "op" => {
            "load" => {
              "name" => "load",
              "points" => [
                {
                  "args" => {
                    "query" => [
                      {
                        "kind" => "query",
                        "name" => "album_name",
                        "orig" => "album_name",
                        "reqd" => false,
                        "type" => "`$STRING`",
                        "active" => true,
                      },
                      {
                        "example" => "Rick Astley",
                        "kind" => "query",
                        "name" => "artist_name",
                        "orig" => "artist_name",
                        "reqd" => false,
                        "type" => "`$STRING`",
                        "active" => true,
                      },
                      {
                        "example" => 213,
                        "kind" => "query",
                        "name" => "duration",
                        "orig" => "duration",
                        "reqd" => false,
                        "type" => "`$INTEGER`",
                        "active" => true,
                      },
                      {
                        "example" => "Never Gonna Give You Up",
                        "kind" => "query",
                        "name" => "track_name",
                        "orig" => "track_name",
                        "reqd" => false,
                        "type" => "`$STRING`",
                        "active" => true,
                      },
                    ],
                  },
                  "method" => "GET",
                  "orig" => "/get",
                  "parts" => [
                    "get",
                  ],
                  "select" => {
                    "exist" => [
                      "album_name",
                      "artist_name",
                      "duration",
                      "track_name",
                    ],
                  },
                  "transform" => {
                    "req" => "`reqdata`",
                    "res" => "`body`",
                  },
                  "active" => true,
                  "index$" => 0,
                },
              ],
              "input" => "data",
              "key$" => "load",
            },
          },
          "relations" => {
            "ancestors" => [],
          },
        },
      },
    }
  end


  def self.make_feature(name)
    require_relative 'features'
    CrowdSourcedLyricsFeatures.make_feature(name)
  end
end
