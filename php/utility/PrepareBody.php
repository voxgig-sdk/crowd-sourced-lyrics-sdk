<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: prepare_body

class CrowdSourcedLyricsPrepareBody
{
    public static function call(CrowdSourcedLyricsContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
