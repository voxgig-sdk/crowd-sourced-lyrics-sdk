<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: feature_hook

class CrowdSourcedLyricsFeatureHook
{
    public static function call(CrowdSourcedLyricsContext $ctx, string $name): void
    {
        if (!$ctx->client) {
            return;
        }
        $features = $ctx->client->features ?? null;
        if (!$features) {
            return;
        }
        foreach ($features as $f) {
            if (method_exists($f, $name)) {
                $f->$name($ctx);
            }
        }
    }
}
