-- Typed models for the CrowdSourcedLyrics SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class Get
---@field albumName? string
---@field artistName? string
---@field duration? number
---@field id? number
---@field plainLyrics? string
---@field syncedLyrics? string
---@field trackName? string

---@class GetLoadMatch
---@field album_name? string
---@field artist_name? string
---@field duration? number
---@field track_name? string

local M = {}

return M
