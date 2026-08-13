# CrowdSourcedLyrics SDK feature factory

from crowdsourcedlyrics_sdk.feature.base_feature import CrowdSourcedLyricsBaseFeature
from crowdsourcedlyrics_sdk.feature.test_feature import CrowdSourcedLyricsTestFeature


def _make_feature(name):
    features = {
        "base": lambda: CrowdSourcedLyricsBaseFeature(),
        "test": lambda: CrowdSourcedLyricsTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
