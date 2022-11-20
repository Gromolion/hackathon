import { defineStore } from 'pinia'
import emitter from 'src/shared/emitter'

const getSteps = () => ({
  schema: {
    S1: {},
  },
  passed: {},
  selected: null,
  confirmedCount: 0,
})

export const useStepsStore = defineStore('steps', {
  state: getSteps,
  getters: {
    isAllowed: (state) => (key) => state.passed[key]?.passed
  },
  actions: {
    init (schema) {
      this.schema = Object.fromEntries(
        Object
          .entries(schema)
          .map(([key, step]) => [key, {key, ...step}])
      )
      this.select("TITLE")
    },
    select (stepKey) {
      this.selected = this.schema[stepKey]
      this.confirm(stepKey)
    },
    confirm (key) {
      this.confirmedCount++;
      const selectedKey = key ?? this.selected.key;
      const step = this.schema[selectedKey]
      this.passed[step.key] = {
        key: step.key,
        passed: true,
        title: step.title,
      }
    },
    next() {
      this.select(this.selected.next)
    },
    prompt(answer) {

    },
  }
})
