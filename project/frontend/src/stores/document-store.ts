import { defineStore } from 'pinia'
import { MutableModel } from 'src/shared/schemas'
import { clone } from 'ramda'

export const useDocumentStore = defineStore('documentModel', {
  state: () => ({
    model: {} as {[key: string]: any}
  }),
  actions: {
    init (model: MutableModel) {
      this.model = clone(model)
    }
  }
})
