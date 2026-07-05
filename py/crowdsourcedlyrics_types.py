# Typed models for the CrowdSourcedLyrics SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.
#
# These are TypedDicts, not dataclasses: the SDK ops return/accept plain dicts
# at runtime, and a TypedDict IS a dict shape, so the types match the runtime.
# Optional (req:false) keys are modelled as TypedDict key-optionality
# (total=False), split into a required base + total=False subclass when a type
# has both required and optional keys.

from __future__ import annotations

from typing import TypedDict, Any


class Get(TypedDict, total=False):
    album_name: str
    artist_name: str
    duration: int
    id: int
    plain_lyric: str
    synced_lyric: str
    track_name: str


class GetLoadMatchRequired(TypedDict):
    id: int


class GetLoadMatch(GetLoadMatchRequired, total=False):
    album_name: str
    artist_name: str
    duration: int
    plain_lyric: str
    synced_lyric: str
    track_name: str
