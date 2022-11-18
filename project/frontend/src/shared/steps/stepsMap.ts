import { DefineComponent } from 'vue'
import UserInfoStep from 'components/steps/UserInfo/UserInfoStep.vue'
import PassportStep from 'components/steps/Passport/PassportStep.vue'

export enum STEPS {
  USER_INFO = 'USER_INFO',
  PASSPORT = 'PASSPORT',
}

export type StepsMap = {
  [key in STEPS]: DefineComponent
}

export const stepsMap = {
  [STEPS.USER_INFO]: UserInfoStep,
  [STEPS.PASSPORT]: PassportStep
}

export type StepDefinition = {
  key: STEPS,
  title: string,
  caption: string,
  index: number,
}

export const stepsDefinitions: StepDefinition[] = [
  {
    key: STEPS.USER_INFO,
    index: 1,
    title: 'ФИО',
    caption: 'Ваши основные данные'
  },
  {
    key: STEPS.PASSPORT,
    index: 2,
    title: 'Паспорт',
    caption: 'Данные вашего паспорта'
  }
]
