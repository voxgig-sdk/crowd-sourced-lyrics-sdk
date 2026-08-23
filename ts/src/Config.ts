
import { BaseFeature } from './feature/base/BaseFeature'
import { TestFeature } from './feature/test/TestFeature'



const FEATURE_CLASS: Record<string, typeof BaseFeature> = {
   test: TestFeature,

}


class Config {

  makeFeature(this: any, fn: string) {
    const fc = FEATURE_CLASS[fn]
    const fi = new fc()
    // TODO: errors etc
    return fi
  }

  // False for a feature added at runtime via options.extend (station's
  // adopt path) - the constructor uses this to skip makeFeature for names
  // no generated class backs.
  hasFeature(this: any, fn: string) {
    return null != FEATURE_CLASS[fn]
  }


  main = {
    name: 'CrowdSourcedLyrics',
        slug: "crowd-sourced-lyrics",
    version: "0.0.1",
    target: "ts",

  }


  feature = {
     test:     {
      "options": {
        "active": false
      }
    },

  }


  options = {
    base: "https://lrclib.net/api",

    headers: {
      "content-type": "application/json"
    },

    entity: {
      
      get: {
      },

    }
  }


  entity = {
    "get": {
      "fields": [
        {
          "name": "albumName",
          "short": "The name of the album",
          "type": "`$STRING`"
        },
        {
          "name": "artistName",
          "short": "The name of the artist",
          "type": "`$STRING`"
        },
        {
          "name": "duration",
          "short": "Duration of the track in seconds",
          "type": "`$INTEGER`"
        },
        {
          "name": "id",
          "short": "Unique identifier for the lyrics entry",
          "type": "`$INTEGER`"
        },
        {
          "name": "plainLyrics",
          "short": "Plain text lyrics without timestamps",
          "type": "`$STRING`"
        },
        {
          "name": "syncedLyrics",
          "short": "Synchronized lyrics in LRC format with timestamps",
          "type": "`$STRING`"
        },
        {
          "name": "trackName",
          "short": "The name of the track",
          "type": "`$STRING`"
        }
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
                    "type": "`$STRING`"
                  },
                  {
                    "example": "Rick Astley",
                    "kind": "query",
                    "name": "artist_name",
                    "orig": "artist_name",
                    "type": "`$STRING`"
                  },
                  {
                    "example": 213,
                    "kind": "query",
                    "name": "duration",
                    "orig": "duration",
                    "type": "`$INTEGER`"
                  },
                  {
                    "example": "Never Gonna Give You Up",
                    "kind": "query",
                    "name": "track_name",
                    "orig": "track_name",
                    "type": "`$STRING`"
                  }
                ]
              },
              "kind": "http",
              "method": "GET",
              "orig": "/get",
              "parts": [
                "get"
              ],
              "select": {
                "exist": [
                  "album_name",
                  "artist_name",
                  "duration",
                  "track_name"
                ]
              },
              "transform": {
                "req": "`reqdata`",
                "res": "`body`"
              }
            }
          ]
        }
      },
      "relations": {
        "ancestors": []
      }
    }
  }
}


const config = new Config()

export {
  config
}

