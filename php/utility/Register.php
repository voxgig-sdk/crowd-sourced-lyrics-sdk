<?php
declare(strict_types=1);

// CrowdSourcedLyrics SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

CrowdSourcedLyricsUtility::setRegistrar(function (CrowdSourcedLyricsUtility $u): void {
    $u->clean = [CrowdSourcedLyricsClean::class, 'call'];
    $u->done = [CrowdSourcedLyricsDone::class, 'call'];
    $u->make_error = [CrowdSourcedLyricsMakeError::class, 'call'];
    $u->feature_add = [CrowdSourcedLyricsFeatureAdd::class, 'call'];
    $u->feature_hook = [CrowdSourcedLyricsFeatureHook::class, 'call'];
    $u->feature_init = [CrowdSourcedLyricsFeatureInit::class, 'call'];
    $u->fetcher = [CrowdSourcedLyricsFetcher::class, 'call'];
    $u->make_fetch_def = [CrowdSourcedLyricsMakeFetchDef::class, 'call'];
    $u->make_context = [CrowdSourcedLyricsMakeContext::class, 'call'];
    $u->make_options = [CrowdSourcedLyricsMakeOptions::class, 'call'];
    $u->make_request = [CrowdSourcedLyricsMakeRequest::class, 'call'];
    $u->make_response = [CrowdSourcedLyricsMakeResponse::class, 'call'];
    $u->make_result = [CrowdSourcedLyricsMakeResult::class, 'call'];
    $u->make_point = [CrowdSourcedLyricsMakePoint::class, 'call'];
    $u->make_spec = [CrowdSourcedLyricsMakeSpec::class, 'call'];
    $u->make_url = [CrowdSourcedLyricsMakeUrl::class, 'call'];
    $u->param = [CrowdSourcedLyricsParam::class, 'call'];
    $u->prepare_auth = [CrowdSourcedLyricsPrepareAuth::class, 'call'];
    $u->prepare_body = [CrowdSourcedLyricsPrepareBody::class, 'call'];
    $u->prepare_headers = [CrowdSourcedLyricsPrepareHeaders::class, 'call'];
    $u->prepare_method = [CrowdSourcedLyricsPrepareMethod::class, 'call'];
    $u->prepare_params = [CrowdSourcedLyricsPrepareParams::class, 'call'];
    $u->prepare_path = [CrowdSourcedLyricsPreparePath::class, 'call'];
    $u->prepare_query = [CrowdSourcedLyricsPrepareQuery::class, 'call'];
    $u->result_basic = [CrowdSourcedLyricsResultBasic::class, 'call'];
    $u->result_body = [CrowdSourcedLyricsResultBody::class, 'call'];
    $u->result_headers = [CrowdSourcedLyricsResultHeaders::class, 'call'];
    $u->transform_request = [CrowdSourcedLyricsTransformRequest::class, 'call'];
    $u->transform_response = [CrowdSourcedLyricsTransformResponse::class, 'call'];
});
