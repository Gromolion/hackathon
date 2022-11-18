<template>
  <q-page class="row items-center justify-evenly">
    <q-card class="q-px-lg q-py-md">
      <Component :is="stepsMap[steps.selected]" />
    </q-card>
  </q-page>
</template>

<script setup lang="ts">
import { stepsMap } from 'src/shared/steps/stepsMap'
import { useStepsStore } from 'stores/steps-store'

const steps = useStepsStore()
</script>
