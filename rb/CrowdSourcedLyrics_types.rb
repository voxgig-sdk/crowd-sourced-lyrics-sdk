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
# @!attribute [rw] albumName
#   @return [String, nil]
#
# @!attribute [rw] artistName
#   @return [String, nil]
#
# @!attribute [rw] duration
#   @return [Integer, nil]
#
# @!attribute [rw] id
#   @return [Integer, nil]
#
# @!attribute [rw] plainLyrics
#   @return [String, nil]
#
# @!attribute [rw] syncedLyrics
#   @return [String, nil]
#
# @!attribute [rw] trackName
#   @return [String, nil]
Get = Struct.new(
  :albumName,
  :artistName,
  :duration,
  :id,
  :plainLyrics,
  :syncedLyrics,
  :trackName,
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
# @!attribute [rw] track_name
#   @return [String, nil]
GetLoadMatch = Struct.new(
  :album_name,
  :artist_name,
  :duration,
  :track_name,
  keyword_init: true
)

