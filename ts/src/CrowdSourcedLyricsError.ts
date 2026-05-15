
import { Context } from './Context'


class CrowdSourcedLyricsError extends Error {

  isCrowdSourcedLyricsError = true

  sdk = 'CrowdSourcedLyrics'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  CrowdSourcedLyricsError
}

