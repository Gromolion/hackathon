<template>
  <q-item
    :key="def.key"
    v-for="def in stepsDefinitions"
    clickable
    tag="a"
  >
    <q-item-section>
      <q-item-label>{{def.index}}. {{ def.title }}</q-item-label>
      <q-item-label caption>{{ def.caption }}</q-item-label>
    </q-item-section>
  </q-item>
</template>

<script setup lang="ts">
import { STEPS } from 'src/shared/steps/stepsMap'

type StepDefinition = {
  key: STEPS,
  title: string,
  caption: string,
  index: number,
}

const stepsDefinitions: StepDefinition[] = [
  {
    key: STEPS.USER_INFO,
    index: 1,
    title: 'ФИО',
    caption: 'Основные данные пользователя'
  }
]
</script>
