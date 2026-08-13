# CrowdSourcedLyrics SDK configuration


def make_config():
    return {
        "main": {
            "name": "CrowdSourcedLyrics",
        },
        "feature": {
            "test": {
        "options": {
          "active": False,
        },
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
            "active": True,
            "name": "albumName",
            "req": False,
            "type": "`$STRING`",
            "index$": 0,
          },
          {
            "active": True,
            "name": "artistName",
            "req": False,
            "type": "`$STRING`",
            "index$": 1,
          },
          {
            "active": True,
            "name": "duration",
            "req": False,
            "type": "`$INTEGER`",
            "index$": 2,
          },
          {
            "active": True,
            "name": "id",
            "req": False,
            "type": "`$INTEGER`",
            "index$": 3,
          },
          {
            "active": True,
            "name": "plainLyrics",
            "req": False,
            "type": "`$STRING`",
            "index$": 4,
          },
          {
            "active": True,
            "name": "syncedLyrics",
            "req": False,
            "type": "`$STRING`",
            "index$": 5,
          },
          {
            "active": True,
            "name": "trackName",
            "req": False,
            "type": "`$STRING`",
            "index$": 6,
          },
        ],
        "name": "get",
        "op": {
          "load": {
            "input": "data",
            "name": "load",
            "points": [
              {
                "active": True,
                "args": {
                  "query": [
                    {
                      "active": True,
                      "kind": "query",
                      "name": "album_name",
                      "orig": "album_name",
                      "reqd": False,
                      "type": "`$STRING`",
                    },
                    {
                      "active": True,
                      "example": "Rick Astley",
                      "kind": "query",
                      "name": "artist_name",
                      "orig": "artist_name",
                      "reqd": False,
                      "type": "`$STRING`",
                    },
                    {
                      "active": True,
                      "example": 213,
                      "kind": "query",
                      "name": "duration",
                      "orig": "duration",
                      "reqd": False,
                      "type": "`$INTEGER`",
                    },
                    {
                      "active": True,
                      "example": "Never Gonna Give You Up",
                      "kind": "query",
                      "name": "track_name",
                      "orig": "track_name",
                      "reqd": False,
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
                "index$": 0,
              },
            ],
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
