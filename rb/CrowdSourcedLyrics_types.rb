# frozen_string_literal: true

# Typed models for the CrowdSourcedLyrics SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Get entity data model.
#
# @!attribute [rw] album_name
#   @return [String, nil]
#
# @!attribute [rw] artist_name
#   @return [String, nil]
#
# @!attribute [rw] duration
#   @return [Integer, nil]
#
# @!attribute [rw] id
#   @return [Integer, nil]
#
# @!attribute [rw] plain_lyric
#   @return [String, nil]
#
# @!attribute [rw] synced_lyric
#   @return [String, nil]
#
# @!attribute [rw] track_name
#   @return [String, nil]
Get = Struct.new(
  :album_name,
  :artist_name,
  :duration,
  :id,
  :plain_lyric,
  :synced_lyric,
  :track_name,
  keyword_init: true
)

# Request payload for Get#load.
#
# @!attribute [rw] album_name
#   @return [String, nil]
#
# @!attribute [rw] artist_name
#   @return [String, nil]
#
# @!attribute [rw] duration
#   @return [Integer, nil]
#
# @!attribute [rw] id
#   @return [Integer]
#
# @!attribute [rw] plain_lyric
#   @return [String, nil]
#
# @!attribute [rw] synced_lyric
#   @return [String, nil]
#
# @!attribute [rw] track_name
#   @return [String, nil]
GetLoadMatch = Struct.new(
  :album_name,
  :artist_name,
  :duration,
  :id,
  :plain_lyric,
  :synced_lyric,
  :track_name,
  keyword_init: true
)

