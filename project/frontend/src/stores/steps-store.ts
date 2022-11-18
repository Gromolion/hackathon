import { defineStore } from 'pinia'
import { STEPS, stepsDefinitions } from 'src/shared/steps/stepsMap'

type isPassed = boolean;

export type PassedStepsMap = {
  [key in STEPS]: isPassed
} & {selected: STEPS}

const getSteps = (): PassedStepsMap => ({
  [STEPS.USER_INFO]: false,
  [STEPS.PASSPORT]: false,
  selected: stepsDefinitions[0].key
})

export const useStepsStore = defineStore('steps', {
  state: getSteps,
  getters: {
    isAllowed: (state) => (step: STEPS) => state[step]
  },
  actions: {
    confirm (step: STEPS) {
      this[step] = true
    },
    select (step: STEPS) {
      this.selected = step
    }
  }
})
