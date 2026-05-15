<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: result_headers

class CrowdSourcedLyricsResultHeaders
{
    public static function call(CrowdSourcedLyricsContext $ctx): ?CrowdSourcedLyricsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
