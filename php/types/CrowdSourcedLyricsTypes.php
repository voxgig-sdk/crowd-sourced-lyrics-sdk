<?php
declare(strict_types=1);

// Typed models for the CrowdSourcedLyrics SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** Get entity data model. */
class Get
{
    public ?string $album_name = null;
    public ?string $artist_name = null;
    public ?int $duration = null;
    public ?int $id = null;
    public ?string $plain_lyric = null;
    public ?string $synced_lyric = null;
    public ?string $track_name = null;
}

/** Match filter for Get#load (any subset of Get fields). */
class GetLoadMatch
{
    public ?string $album_name = null;
    public ?string $artist_name = null;
    public ?int $duration = null;
    public ?int $id = null;
    public ?string $plain_lyric = null;
    public ?string $synced_lyric = null;
    public ?string $track_name = null;
}

