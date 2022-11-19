<template>
  <template :key="element.model" v-for="element in steps.selected.elements">
    <StepGroup v-if="element.component === 'GROUP'" v-bind="element" />
    <StepInputGroup v-else-if="element.multiple" v-bind="element" />
    <StepInput v-else v-bind="element"/>
  </template>
  <q-btn @click="steps.confirm">Далее</q-btn>
</template>

<script setup lang="ts">
import { useStepsStore } from 'stores/steps-store'
import StepInput from 'components/steps/DefaultStep/StepInput.vue'
import StepInputGroup from 'components/steps/DefaultStep/StepInputGroup.vue'
import StepGroup from 'components/steps/DefaultStep/StepGroup.vue'

const steps = useStepsStore()
</script>
