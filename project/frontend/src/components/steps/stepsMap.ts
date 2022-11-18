import { DefineComponent } from 'vue'
import UserInfo from 'components/steps/UserInfo/UserInfo.vue'

export enum STEPS {
  USER_INFO = 'USER_INFO',
}

export type StepsMap = {
  [key in STEPS]: DefineComponent
}

export const stepsMap = {
  [STEPS.USER_INFO]: UserInfo
}
