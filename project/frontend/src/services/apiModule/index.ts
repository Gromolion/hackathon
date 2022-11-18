import APIBase from '../apiBase'

class APIModule extends APIBase {
  constructor (path: string) {
    super()
    this.path = path
  }

  private path: string
}
