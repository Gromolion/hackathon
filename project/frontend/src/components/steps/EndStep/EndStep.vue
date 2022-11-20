<template>
  <h6>{{steps.selected.title}}</h6>
  <q-btn @click="">Скачать</q-btn>
</template>

<script setup>
import { useStepsStore } from 'stores/steps-store'

const steps = useStepsStore()
</script>
