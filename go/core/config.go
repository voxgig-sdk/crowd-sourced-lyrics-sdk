package core

import (
	"sync"
)

// MakeConfig builds a fresh, fully materialised config map. Every call
// rebuilds the whole structure, so prefer SharedConfig unless you need a
// private copy you intend to mutate.
func MakeConfig() map[string]any {
	return map[string]any{
		"main": map[string]any{
			"name": "CrowdSourcedLyrics",
		},
		"feature": map[string]any{
			"test": map[string]any{
				"options": map[string]any{
					"active": false,
				},
			},
		},
		"options": map[string]any{
			"base": "https://lrclib.net/api",
			"headers": map[string]any{
				"content-type": "application/json",
			},
			"entity": map[string]any{
				"get": map[string]any{},
			},
		},
		"entity": map[string]any{
			"get": map[string]any{
				"fields": []any{
					map[string]any{
						"name": "albumName",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "artistName",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "duration",
						"type": "`$INTEGER`",
					},
					map[string]any{
						"name": "id",
						"type": "`$INTEGER`",
					},
					map[string]any{
						"name": "plainLyrics",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "syncedLyrics",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "trackName",
						"type": "`$STRING`",
					},
				},
				"name": "get",
				"op": map[string]any{
					"load": map[string]any{
						"input": "data",
						"name": "load",
						"points": []any{
							map[string]any{
								"args": map[string]any{
									"query": []any{
										map[string]any{
											"kind": "query",
											"name": "album_name",
											"orig": "album_name",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "Rick Astley",
											"kind": "query",
											"name": "artist_name",
											"orig": "artist_name",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": 213,
											"kind": "query",
											"name": "duration",
											"orig": "duration",
											"type": "`$INTEGER`",
										},
										map[string]any{
											"example": "Never Gonna Give You Up",
											"kind": "query",
											"name": "track_name",
											"orig": "track_name",
											"type": "`$STRING`",
										},
									},
								},
								"kind": "http",
								"method": "GET",
								"orig": "/get",
								"parts": []any{
									"get",
								},
								"select": map[string]any{
									"exist": []any{
										"album_name",
										"artist_name",
										"duration",
										"track_name",
									},
								},
								"transform": map[string]any{
									"req": "`reqdata`",
									"res": "`body`",
								},
							},
						},
					},
				},
				"relations": map[string]any{
					"ancestors": []any{},
				},
			},
		},
	}
}

var (
	sharedConfigOnce sync.Once
	sharedConfigVal  map[string]any
)

// SharedConfig returns the process-wide config, built once on first use.
// The SDK reads the config on every request and never writes to it, so one
// instance is shared by every client rather than rebuilt per client.
//
// The returned map is shared: treat it as read-only. Callers that need to
// mutate should use MakeConfig, which always returns a fresh copy.
func SharedConfig() map[string]any {
	sharedConfigOnce.Do(func() {
		sharedConfigVal = MakeConfig()
	})
	return sharedConfigVal
}

func makeFeature(name string) Feature {
	switch name {
	case "test":
		if NewTestFeatureFunc != nil {
			return NewTestFeatureFunc()
		}
	default:
		if NewBaseFeatureFunc != nil {
			return NewBaseFeatureFunc()
		}
	}
	return nil
}
