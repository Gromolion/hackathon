import { defineStore } from 'pinia'

export const useDrawerStore = defineStore('drawer', {
  state: () => ({
    opened: false
  }),
  actions: {
    open () {
      this.opened = true
    },
    close () {
      this.opened = false
    },
    toggle () {
      this.opened = !this.opened
    }
  }
})
