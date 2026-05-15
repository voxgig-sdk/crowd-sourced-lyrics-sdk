<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK exists test

require_once __DIR__ . '/../crowdsourcedlyrics_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = CrowdSourcedLyricsSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
