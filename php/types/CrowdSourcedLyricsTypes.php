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
    public ?string $albumName = null;
    public ?string $artistName = null;
    public ?int $duration = null;
    public ?int $id = null;
    public ?string $plainLyrics = null;
    public ?string $syncedLyrics = null;
    public ?string $trackName = null;
}

/** Request payload for Get#load. */
class GetLoadMatch
{
    public ?string $albumName = null;
    public ?string $artistName = null;
    public ?int $duration = null;
    public int $id;
    public ?string $plainLyrics = null;
    public ?string $syncedLyrics = null;
    public ?string $trackName = null;
}

