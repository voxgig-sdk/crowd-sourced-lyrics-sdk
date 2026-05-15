<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK base feature

class CrowdSourcedLyricsBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(CrowdSourcedLyricsContext $ctx, array $options): void {}
    public function PostConstruct(CrowdSourcedLyricsContext $ctx): void {}
    public function PostConstructEntity(CrowdSourcedLyricsContext $ctx): void {}
    public function SetData(CrowdSourcedLyricsContext $ctx): void {}
    public function GetData(CrowdSourcedLyricsContext $ctx): void {}
    public function GetMatch(CrowdSourcedLyricsContext $ctx): void {}
    public function SetMatch(CrowdSourcedLyricsContext $ctx): void {}
    public function PrePoint(CrowdSourcedLyricsContext $ctx): void {}
    public function PreSpec(CrowdSourcedLyricsContext $ctx): void {}
    public function PreRequest(CrowdSourcedLyricsContext $ctx): void {}
    public function PreResponse(CrowdSourcedLyricsContext $ctx): void {}
    public function PreResult(CrowdSourcedLyricsContext $ctx): void {}
    public function PreDone(CrowdSourcedLyricsContext $ctx): void {}
    public function PreUnexpected(CrowdSourcedLyricsContext $ctx): void {}
}
