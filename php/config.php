<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK configuration

class CrowdSourcedLyricsConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "CrowdSourcedLyrics",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://lrclib.net/api",
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "get" => [],
                ],
            ],
            "entity" => [
        'get' => [
          'fields' => [
            [
              'active' => true,
              'name' => 'albumName',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 0,
            ],
            [
              'active' => true,
              'name' => 'artistName',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 1,
            ],
            [
              'active' => true,
              'name' => 'duration',
              'req' => false,
              'type' => '`$INTEGER`',
              'index$' => 2,
            ],
            [
              'active' => true,
              'name' => 'id',
              'req' => false,
              'type' => '`$INTEGER`',
              'index$' => 3,
            ],
            [
              'active' => true,
              'name' => 'plainLyrics',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 4,
            ],
            [
              'active' => true,
              'name' => 'syncedLyrics',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 5,
            ],
            [
              'active' => true,
              'name' => 'trackName',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 6,
            ],
          ],
          'name' => 'get',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'active' => true,
                  'args' => [
                    'query' => [
                      [
                        'active' => true,
                        'kind' => 'query',
                        'name' => 'album_name',
                        'orig' => 'album_name',
                        'reqd' => false,
                        'type' => '`$STRING`',
                      ],
                      [
                        'active' => true,
                        'example' => 'Rick Astley',
                        'kind' => 'query',
                        'name' => 'artist_name',
                        'orig' => 'artist_name',
                        'reqd' => false,
                        'type' => '`$STRING`',
                      ],
                      [
                        'active' => true,
                        'example' => 213,
                        'kind' => 'query',
                        'name' => 'duration',
                        'orig' => 'duration',
                        'reqd' => false,
                        'type' => '`$INTEGER`',
                      ],
                      [
                        'active' => true,
                        'example' => 'Never Gonna Give You Up',
                        'kind' => 'query',
                        'name' => 'track_name',
                        'orig' => 'track_name',
                        'reqd' => false,
                        'type' => '`$STRING`',
                      ],
                    ],
                  ],
                  'kind' => 'http',
                  'method' => 'GET',
                  'orig' => '/get',
                  'parts' => [
                    'get',
                  ],
                  'select' => [
                    'exist' => [
                      'album_name',
                      'artist_name',
                      'duration',
                      'track_name',
                    ],
                  ],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'load',
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return CrowdSourcedLyricsFeatures::make_feature($name);
    }
}
