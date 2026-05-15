<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class CrowdSourcedLyricsFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new CrowdSourcedLyricsBaseFeature();
            case "test":
                return new CrowdSourcedLyricsTestFeature();
            default:
                return new CrowdSourcedLyricsBaseFeature();
        }
    }
}
