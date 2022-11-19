import { defineStore } from 'pinia'
import { StepDefinition, StepsSchema } from 'src/shared/schemas'

export interface StepsStoreState {
  schema: StepsSchema,
  passed: {
    [key: keyof StepsSchema]: true,
  },
  selected: StepDefinition,
}

const getSteps = ():StepsStoreState => ({
  schema: {},
  passed: {},
  // eslint-disable-next-line @typescript-eslint/ban-ts-comment
  // @ts-ignore
  selected: null
})

export const useStepsStore = defineStore('steps', {
  state: getSteps,
  getters: {
    isAllowed: (state) => (key: string) => state.passed[key]
  },
  actions: {
    init (schema: StepsSchema) {
      this.select(schema.S1)
    },
    confirm (step?: StepDefinition) {
      this.passed[step?.key ? step.key : this.selected.key] = true
    },
    select (step: StepDefinition) {
      this.selected = step
    }
  }
})
