package = "voxgig-sdk-crowd-sourced-lyrics"
version = "0.0-1"
source = {
  url = "git://github.com/voxgig-sdk/crowd-sourced-lyrics-sdk.git"
}
description = {
  summary = "CrowdSourcedLyrics SDK for Lua",
  license = "MIT"
}
dependencies = {
  "lua >= 5.3",
  "dkjson >= 2.5",
  "dkjson >= 2.5",
}
build = {
  type = "builtin",
  modules = {
    ["crowd-sourced-lyrics_sdk"] = "crowd-sourced-lyrics_sdk.lua",
    ["config"] = "config.lua",
    ["features"] = "features.lua",
  }
}
