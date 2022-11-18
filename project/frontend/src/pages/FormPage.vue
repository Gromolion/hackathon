<template>
  <q-page class="row items-center justify-evenly">
    <q-card class="q-pa-lg">
      <Component :is="stepsMap[state]" />
    </q-card>
  </q-page>
</template>

<script setup lang="ts">
import { STEPS, stepsMap } from 'src/shared/steps/stepsMap'
import { ref } from 'vue'
const state = ref(STEPS.USER_INFO)
</script>
