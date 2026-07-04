// Typed models for the CrowdSourcedLyrics SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface Get {
  album_name?: string
  artist_name?: string
  duration?: number
  id?: number
  plain_lyric?: string
  synced_lyric?: string
  track_name?: string
}

export type GetLoadMatch = Partial<Get>

