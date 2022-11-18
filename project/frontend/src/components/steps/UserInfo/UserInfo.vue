<template>
  <q-input placeholder="Фамилия" v-model="lastName"/>
  <q-input placeholder="Имя" v-model="firstName"/>
  <q-input placeholder="Отчество" v-model="middleName"/>
  <q-btn>Далее</q-btn>
</template>

<script setup lang="ts">

import { ref } from 'vue'
import { useNDFLStore } from 'stores/ndfl-store'

const ndfl = useNDFLStore()

const lastName = ref(ndfl.getLastName)
const firstName = ref(ndfl.getFirstName)
const middleName = ref(ndfl.getMiddleName)

</script>

<style scoped>

</style>
