<template>
  <template :key="def.key" v-for="def in stepsDefinitions">
    <q-item
      v-if="steps.isAllowed(def.key)"
      clickable
      @click="steps.select(def.key)"
      tag="a"
    >
      <q-item-section>
        <q-item-label>{{def.index}}. {{ def.title }}</q-item-label>
        <q-item-label caption>{{ def.caption }}</q-item-label>
      </q-item-section>
    </q-item>
  </template>

</template>

<script setup>
import { useStepsStore } from 'src/stores/steps-store'

const steps = useStepsStore()
</script>
