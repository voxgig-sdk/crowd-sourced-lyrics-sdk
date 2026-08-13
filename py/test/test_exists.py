# CrowdSourcedLyrics SDK exists test

import pytest
from crowdsourcedlyrics_sdk import CrowdSourcedLyricsSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = CrowdSourcedLyricsSDK.test(None, None)
        assert testsdk is not None
