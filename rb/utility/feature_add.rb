# CrowdSourcedLyrics SDK utility: feature_add
module CrowdSourcedLyricsUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
