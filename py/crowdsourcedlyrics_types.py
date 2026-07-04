# Typed models for the CrowdSourcedLyrics SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.

from __future__ import annotations

from dataclasses import dataclass
from typing import Optional, Any


@dataclass
class Get:
    album_name: Optional[str] = None
    artist_name: Optional[str] = None
    duration: Optional[int] = None
    id: Optional[int] = None
    plain_lyric: Optional[str] = None
    synced_lyric: Optional[str] = None
    track_name: Optional[str] = None


@dataclass
class GetLoadMatch:
    album_name: Optional[str] = None
    artist_name: Optional[str] = None
    duration: Optional[int] = None
    id: Optional[int] = None
    plain_lyric: Optional[str] = None
    synced_lyric: Optional[str] = None
    track_name: Optional[str] = None

