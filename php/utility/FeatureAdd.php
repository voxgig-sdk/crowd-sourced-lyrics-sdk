<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: feature_add

class CrowdSourcedLyricsFeatureAdd
{
    public static function call(CrowdSourcedLyricsContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
