import Axios from 'axios'

class APIBase {
  private fetchModule = new Axios()

  public async GET (path: string) {
    return this.fetchModule.get(path)
  }
}

export default new APIBase()
