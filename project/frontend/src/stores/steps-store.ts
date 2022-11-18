import { defineStore } from 'pinia'
import { STEPS } from 'src/shared/steps/stepsMap'

type isPassed = boolean;

export type PassedStepsMap = {
  [key in STEPS]: isPassed
}

const getSteps = (): PassedStepsMap => ({
  [STEPS.USER_INFO]: false
})

export const useStepsStore = defineStore('steps', {
  state: getSteps,
  getters: {
    stateOfStep: (state) => (step: STEPS) => state[step]
  },
  actions: {
    setPassed (step: STEPS) {
      this[step] = true
    }
  }
})
