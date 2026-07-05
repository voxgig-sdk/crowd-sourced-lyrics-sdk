-- Typed models for the CrowdSourcedLyrics SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class Get
---@field album_name? string
---@field artist_name? string
---@field duration? number
---@field id? number
---@field plain_lyric? string
---@field synced_lyric? string
---@field track_name? string

---@class GetLoadMatch
---@field album_name? string
---@field artist_name? string
---@field duration? number
---@field id number
---@field plain_lyric? string
---@field synced_lyric? string
---@field track_name? string

local M = {}

return M
