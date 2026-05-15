# CrowdSourcedLyrics SDK utility: make_context
require_relative '../core/context'
module CrowdSourcedLyricsUtilities
  MakeContext = ->(ctxmap, basectx) {
    CrowdSourcedLyricsContext.new(ctxmap, basectx)
  }
end
