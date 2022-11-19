<template>
  <q-input placeholder="Серия и номер" v-model="ndfl.passport"/>
  <q-btn @click="passStep">Далее</q-btn>
</template>

<script setup lang="ts">
import { useDocumentStore } from 'stores/document-store'
import { useStepsStore } from 'stores/steps-store'
import { STEPS } from 'src/shared/steps/stepsMap'

const ndfl = useDocumentStore()
const steps = useStepsStore()

const passStep = () => {
  steps.confirm(STEPS.PASSPORT)
}
</script>
