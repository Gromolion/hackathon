import { defineStore } from 'pinia'

export const useNDFLStore = defineStore('ndfl', {
  state: () => ({
    lastName: '',
    firstName: '',
    middleName: '',
    passport: ''
  })
})
