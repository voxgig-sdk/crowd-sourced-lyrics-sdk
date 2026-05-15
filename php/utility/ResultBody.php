<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility: result_body

class CrowdSourcedLyricsResultBody
{
    public static function call(CrowdSourcedLyricsContext $ctx): ?CrowdSourcedLyricsResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
