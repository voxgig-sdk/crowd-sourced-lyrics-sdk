package core

type CrowdSourcedLyricsError struct {
	IsCrowdSourcedLyricsError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewCrowdSourcedLyricsError(code string, msg string, ctx *Context) *CrowdSourcedLyricsError {
	return &CrowdSourcedLyricsError{
		IsCrowdSourcedLyricsError: true,
		Sdk:              "CrowdSourcedLyrics",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *CrowdSourcedLyricsError) Error() string {
	return e.Msg
}
