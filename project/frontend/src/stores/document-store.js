import { defineStore } from 'pinia'
import { clone } from 'ramda'

export const useDocumentStore = defineStore('documentModel', {
  state: () => ({
    model: {}
  }),
  actions: {
    init (model) {
      this.model = clone(model)
    }
  }
})
