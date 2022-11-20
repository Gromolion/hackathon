<template>
  <template :key="step.key" v-for="(step, i) in Object.values(steps.passed)">
    <q-item
      v-if="step.passed"
      clickable
      @click="steps.select(step.key)"
      tag="a"
    >
      <q-item-section>
        <q-item-label>{{i+1}}. {{ step.title }}</q-item-label>
      </q-item-section>
    </q-item>
  </template>

</template>

<script setup>
import { useStepsStore } from 'src/stores/steps-store'

const steps = useStepsStore()
</script>
