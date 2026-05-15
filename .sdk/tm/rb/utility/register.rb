# CrowdSourcedLyrics SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

CrowdSourcedLyricsUtility.registrar = ->(u) {
  u.clean = CrowdSourcedLyricsUtilities::Clean
  u.done = CrowdSourcedLyricsUtilities::Done
  u.make_error = CrowdSourcedLyricsUtilities::MakeError
  u.feature_add = CrowdSourcedLyricsUtilities::FeatureAdd
  u.feature_hook = CrowdSourcedLyricsUtilities::FeatureHook
  u.feature_init = CrowdSourcedLyricsUtilities::FeatureInit
  u.fetcher = CrowdSourcedLyricsUtilities::Fetcher
  u.make_fetch_def = CrowdSourcedLyricsUtilities::MakeFetchDef
  u.make_context = CrowdSourcedLyricsUtilities::MakeContext
  u.make_options = CrowdSourcedLyricsUtilities::MakeOptions
  u.make_request = CrowdSourcedLyricsUtilities::MakeRequest
  u.make_response = CrowdSourcedLyricsUtilities::MakeResponse
  u.make_result = CrowdSourcedLyricsUtilities::MakeResult
  u.make_point = CrowdSourcedLyricsUtilities::MakePoint
  u.make_spec = CrowdSourcedLyricsUtilities::MakeSpec
  u.make_url = CrowdSourcedLyricsUtilities::MakeUrl
  u.param = CrowdSourcedLyricsUtilities::Param
  u.prepare_auth = CrowdSourcedLyricsUtilities::PrepareAuth
  u.prepare_body = CrowdSourcedLyricsUtilities::PrepareBody
  u.prepare_headers = CrowdSourcedLyricsUtilities::PrepareHeaders
  u.prepare_method = CrowdSourcedLyricsUtilities::PrepareMethod
  u.prepare_params = CrowdSourcedLyricsUtilities::PrepareParams
  u.prepare_path = CrowdSourcedLyricsUtilities::PreparePath
  u.prepare_query = CrowdSourcedLyricsUtilities::PrepareQuery
  u.result_basic = CrowdSourcedLyricsUtilities::ResultBasic
  u.result_body = CrowdSourcedLyricsUtilities::ResultBody
  u.result_headers = CrowdSourcedLyricsUtilities::ResultHeaders
  u.transform_request = CrowdSourcedLyricsUtilities::TransformRequest
  u.transform_response = CrowdSourcedLyricsUtilities::TransformResponse
}
