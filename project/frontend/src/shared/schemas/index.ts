import ndfl from './ndfl.json'

export type MutableModel = {
  [key: string]: any
}

export interface TooltipConfig {
  text: string,
  links?: {
    to: string,
    href: string,
  }[]
}

export type InputType = 'text' | 'password' | 'textarea' | 'email' | 'search' | 'tel' | 'file' | 'number' | 'url' | 'time' | 'date'

export interface ValidationRules {
  key: boolean,
  gt: [number],
  lt: [number],
}

export interface InputDefinition {
  component: 'SINGLE'
  model: keyof MutableModel,
  label?: string,
  hint?: string
  tooltip?: TooltipConfig,
  mask?: string,
  type?: InputType,
  rules?: ValidationRules,
  placeholder?: string,
  multiple?: boolean,
  min?: number,
  max?: number,
}

export interface GroupDefinition {
  component: 'GROUP',
  title: string,
  model: keyof MutableModel,
  inputs: InputDefinition[]
  multiple: true,
  min?: number,
  max?: number,
}

export interface StepDefinition {
  key: string,
  title: string,
  next: string,
  elements: Array<InputDefinition | GroupDefinition>,
}

export type StepsSchema = {
  [key: string]: StepDefinition
}

export interface DocumentSchema {
  model: MutableModel,
  steps: StepsSchema
}

export interface DocumentSchemas {
  [key: string]: DocumentSchema
}

export const schemas: DocumentSchemas = {
  // eslint-disable-next-line @typescript-eslint/ban-ts-comment
  // @ts-ignore
  ndfl
}
