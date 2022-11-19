<template>
  <q-form @submit.prevent.stop="steps.next">
    <h6 v-if="steps.selected.title">{{steps.selected.title}}</h6>
    <template :key="i" v-for="(element, i) in steps.selected.elements">
      <StepGroup v-if="element.type === 'GROUP'" v-bind="element.payload" />
      <StepInputGroup v-else-if="element.type === 'MULTIPLE'" v-bind="element.payload" />
      <StepInput v-else v-bind="element.payload"/>
    </template>
    <q-btn label="Далее" type="submit"/>
  </q-form>
</template>

<script setup>
import { useStepsStore } from 'src/stores/steps-store'
import StepInput from 'components/steps/DefaultStep/StepInput.vue'
import StepInputGroup from 'components/steps/DefaultStep/StepInputGroup.vue'
import StepGroup from 'components/steps/DefaultStep/StepGroup.vue'

const steps = useStepsStore()
</script>
