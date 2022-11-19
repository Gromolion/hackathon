<template>
  <q-input placeholder="Фамилия" v-model="ndfl.lastName"/>
  <q-input placeholder="Имя" v-model="ndfl.firstName"/>
  <q-input placeholder="Отчество" v-model="ndfl.middleName"/>
  <q-card-actions align="center" class="q-my-md">
    <q-btn @click="passStep">Далее</q-btn>
  </q-card-actions>
</template>

<script setup lang="ts">
import { useDocumentStore } from 'stores/document-store'
import { useStepsStore } from 'stores/steps-store'
import { STEPS } from 'src/shared/steps/stepsMap'
import { useDrawerStore } from 'stores/drawer-store'

const ndfl = useDocumentStore()
const steps = useStepsStore()
const drawer = useDrawerStore()
const passStep = () => {
  steps.confirm(STEPS.USER_INFO)
  steps.select(STEPS.PASSPORT)
  drawer.open()
}
</script>
