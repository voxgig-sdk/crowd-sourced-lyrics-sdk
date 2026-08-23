<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK configuration

class CrowdSourcedLyricsConfig
{
    /** @var array<string,mixed>|null */
    private static ?array $shared_config = null;

    /**
     * Return the process-wide config, built once on first use. The SDK reads
     * the config on every request and never writes to it, so one instance is
     * shared by every client rather than rebuilt per client.
     *
     * PHP arrays are copy-on-write, so callers that do mutate the result get
     * their own copy and cannot disturb the shared one.
     */
    public static function shared_config(): array
    {
        if (self::$shared_config === null) {
            self::$shared_config = self::make_config();
        }
        return self::$shared_config;
    }

    /**
     * Build a fresh, fully materialised config array. Every call rebuilds the
     * whole structure, so prefer shared_config unless you need a private copy.
     */
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "CrowdSourcedLyrics",
                "slug" => "crowd-sourced-lyrics",
                "version" => "0.0.1",
                "target" => "php",
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
              'name' => 'albumName',
              'short' => 'The name of the album',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'artistName',
              'short' => 'The name of the artist',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'duration',
              'short' => 'Duration of the track in seconds',
              'type' => '`$INTEGER`',
            ],
            [
              'name' => 'id',
              'short' => 'Unique identifier for the lyrics entry',
              'type' => '`$INTEGER`',
            ],
            [
              'name' => 'plainLyrics',
              'short' => 'Plain text lyrics without timestamps',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'syncedLyrics',
              'short' => 'Synchronized lyrics in LRC format with timestamps',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'trackName',
              'short' => 'The name of the track',
              'type' => '`$STRING`',
            ],
          ],
          'name' => 'get',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'args' => [
                    'query' => [
                      [
                        'kind' => 'query',
                        'name' => 'album_name',
                        'orig' => 'album_name',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 'Rick Astley',
                        'kind' => 'query',
                        'name' => 'artist_name',
                        'orig' => 'artist_name',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 213,
                        'kind' => 'query',
                        'name' => 'duration',
                        'orig' => 'duration',
                        'type' => '`$INTEGER`',
                      ],
                      [
                        'example' => 'Never Gonna Give You Up',
                        'kind' => 'query',
                        'name' => 'track_name',
                        'orig' => 'track_name',
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
                ],
              ],
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
