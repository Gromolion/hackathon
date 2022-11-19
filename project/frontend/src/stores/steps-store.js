import { clone } from 'ramda'
import { defineStore } from 'pinia'

const getSteps = () => ({
  schema: {
    S1: {},
  },
  passed: {},
  selected: null
})

export const useStepsStore = defineStore('steps', {
  state: getSteps,
  getters: {
    isAllowed: (state) => (key) => state.passed[key]
  },
  actions: {
    init (schema) {
      this.schema = clone(schema)
      this.select(schema.S1)
    },
    confirm (step) {
      this.passed[step?.key ? step.key : this.selected.key] = true
    },
    select (step) {
      this.selected = step
    }
  }
})
