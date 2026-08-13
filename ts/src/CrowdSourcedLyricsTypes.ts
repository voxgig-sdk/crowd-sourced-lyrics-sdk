// Typed models for the CrowdSourcedLyrics SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface Get {
  albumName?: string
  artistName?: string
  duration?: number
  id?: number
  plainLyrics?: string
  syncedLyrics?: string
  trackName?: string
}

export interface GetLoadMatch {
  albumName?: string
  artistName?: string
  duration?: number
  id: number
  plainLyrics?: string
  syncedLyrics?: string
  trackName?: string
}

