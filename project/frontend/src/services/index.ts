import { EventEmitter } from 'events'

export const testEmitter = new EventEmitter()

class Services {
  constructor () {
    testEmitter.on('test', (data) => console.log(data))
  }
}

export default new Services()
