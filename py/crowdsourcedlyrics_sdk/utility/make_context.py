# CrowdSourcedLyrics SDK utility: make_context

from crowdsourcedlyrics_sdk.core.context import CrowdSourcedLyricsContext


def make_context_util(ctxmap, basectx):
    return CrowdSourcedLyricsContext(ctxmap, basectx)
