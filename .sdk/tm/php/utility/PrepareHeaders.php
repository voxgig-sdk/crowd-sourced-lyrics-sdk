<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: prepare_headers

class CrowdSourcedLyricsPrepareHeaders
{
    public static function call(CrowdSourcedLyricsContext $ctx): array
    {
        $options = $ctx->client->options_map();
        $headers = \Voxgig\Struct\Struct::getprop($options, 'headers');
        if (!$headers) {
            return [];
        }
        $out = \Voxgig\Struct\Struct::clone($headers);
        return is_array($out) ? $out : [];
    }
}
