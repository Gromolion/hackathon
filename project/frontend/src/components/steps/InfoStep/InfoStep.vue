<template>
  <h6>{{steps.selected.title}}</h6>
  <p v-if="steps.selected.text">{{steps.selected.text}}</p>
  <q-btn @click="steps.next">Далее</q-btn>
</template>

<script setup>
import { useStepsStore } from 'stores/steps-store'

const steps = useStepsStore()
</script>
