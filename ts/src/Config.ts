
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


  main = {
    name: 'CrowdSourcedLyrics',
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
          "type": "`$STRING`"
        },
        {
          "name": "artistName",
          "type": "`$STRING`"
        },
        {
          "name": "duration",
          "type": "`$INTEGER`"
        },
        {
          "name": "id",
          "type": "`$INTEGER`"
        },
        {
          "name": "plainLyrics",
          "type": "`$STRING`"
        },
        {
          "name": "syncedLyrics",
          "type": "`$STRING`"
        },
        {
          "name": "trackName",
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

