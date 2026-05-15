<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class CrowdSourcedLyricsMakeContext
{
    public static function call(array $ctxmap, ?CrowdSourcedLyricsContext $basectx): CrowdSourcedLyricsContext
    {
        return new CrowdSourcedLyricsContext($ctxmap, $basectx);
    }
}
