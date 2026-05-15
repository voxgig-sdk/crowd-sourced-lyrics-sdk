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
            "auth": {
                "prefix": "Bearer",
            },
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
            "name": "album_name",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 0,
          },
          {
            "name": "artist_name",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 1,
          },
          {
            "name": "duration",
            "req": False,
            "type": "`$INTEGER`",
            "active": True,
            "index$": 2,
          },
          {
            "name": "id",
            "req": False,
            "type": "`$INTEGER`",
            "active": True,
            "index$": 3,
          },
          {
            "name": "plain_lyric",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 4,
          },
          {
            "name": "synced_lyric",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 5,
          },
          {
            "name": "track_name",
            "req": False,
            "type": "`$STRING`",
            "active": True,
            "index$": 6,
          },
        ],
        "name": "get",
        "op": {
          "load": {
            "name": "load",
            "points": [
              {
                "args": {
                  "query": [
                    {
                      "kind": "query",
                      "name": "album_name",
                      "orig": "album_name",
                      "reqd": False,
                      "type": "`$STRING`",
                      "active": True,
                    },
                    {
                      "example": "Rick Astley",
                      "kind": "query",
                      "name": "artist_name",
                      "orig": "artist_name",
                      "reqd": False,
                      "type": "`$STRING`",
                      "active": True,
                    },
                    {
                      "example": 213,
                      "kind": "query",
                      "name": "duration",
                      "orig": "duration",
                      "reqd": False,
                      "type": "`$INTEGER`",
                      "active": True,
                    },
                    {
                      "example": "Never Gonna Give You Up",
                      "kind": "query",
                      "name": "track_name",
                      "orig": "track_name",
                      "reqd": False,
                      "type": "`$STRING`",
                      "active": True,
                    },
                  ],
                },
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
                "active": True,
                "index$": 0,
              },
            ],
            "input": "data",
            "key$": "load",
          },
        },
        "relations": {
          "ancestors": [],
        },
      },
    },
    }
