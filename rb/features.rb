# CrowdSourcedLyrics SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module CrowdSourcedLyricsFeatures
  def self.make_feature(name)
    case name
    when "base"
      CrowdSourcedLyricsBaseFeature.new
    when "test"
      CrowdSourcedLyricsTestFeature.new
    else
      CrowdSourcedLyricsBaseFeature.new
    end
  end
end
