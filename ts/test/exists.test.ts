
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { CrowdSourcedLyricsSDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await CrowdSourcedLyricsSDK.test()
    equal(null !== testsdk, true)
  })

})
