import { defineStore } from 'pinia'

export const useNDFLStore = defineStore('ndfl', {
  state: () => ({
    _lastName: '',
    _firstName: '',
    _middleName: ''
  }),
  getters: {
    getLastName: state => state._lastName,
    getFirstName: state => state._firstName,
    getMiddleName: state => state._middleName
  },
  actions: {
    setLastName (v: string) {
      this._lastName = v
    }
  }
})
