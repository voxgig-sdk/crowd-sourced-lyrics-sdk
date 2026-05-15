# CrowdSourcedLyrics SDK feature factory

from feature.base_feature import CrowdSourcedLyricsBaseFeature
from feature.test_feature import CrowdSourcedLyricsTestFeature


def _make_feature(name):
    features = {
        "base": lambda: CrowdSourcedLyricsBaseFeature(),
        "test": lambda: CrowdSourcedLyricsTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
