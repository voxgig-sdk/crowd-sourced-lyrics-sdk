package voxgigcrowdsourcedlyricssdk

import (
	"github.com/voxgig-sdk/crowd-sourced-lyrics-sdk/go/core"
	"github.com/voxgig-sdk/crowd-sourced-lyrics-sdk/go/entity"
	"github.com/voxgig-sdk/crowd-sourced-lyrics-sdk/go/feature"
	_ "github.com/voxgig-sdk/crowd-sourced-lyrics-sdk/go/utility"
)

// Type aliases preserve external API.
type CrowdSourcedLyricsSDK = core.CrowdSourcedLyricsSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type CrowdSourcedLyricsEntity = core.CrowdSourcedLyricsEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type CrowdSourcedLyricsError = core.CrowdSourcedLyricsError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewGetEntityFunc = func(client *core.CrowdSourcedLyricsSDK, entopts map[string]any) core.CrowdSourcedLyricsEntity {
		return entity.NewGetEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewCrowdSourcedLyricsSDK = core.NewCrowdSourcedLyricsSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig

// No-arg convenience constructors. Go has no default-argument syntax,
// so these aliases let callers write `sdk.New()` / `sdk.Test()`
// instead of `sdk.NewCrowdSourcedLyricsSDK(nil)` / `sdk.TestSDK(nil, nil)`
// for the common no-options case.
func New() *CrowdSourcedLyricsSDK  { return NewCrowdSourcedLyricsSDK(nil) }
func Test() *CrowdSourcedLyricsSDK { return TestSDK(nil, nil) }
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
