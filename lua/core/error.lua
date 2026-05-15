-- CrowdSourcedLyrics SDK error

local CrowdSourcedLyricsError = {}
CrowdSourcedLyricsError.__index = CrowdSourcedLyricsError


function CrowdSourcedLyricsError.new(code, msg, ctx)
  local self = setmetatable({}, CrowdSourcedLyricsError)
  self.is_sdk_error = true
  self.sdk = "CrowdSourcedLyrics"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function CrowdSourcedLyricsError:error()
  return self.msg
end


function CrowdSourcedLyricsError:__tostring()
  return self.msg
end


return CrowdSourcedLyricsError
