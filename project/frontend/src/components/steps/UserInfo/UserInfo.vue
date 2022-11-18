<template>
  <q-input placeholder="Фамилия" v-model="ndfl.lastName"/>
  <q-input placeholder="Имя" v-model="ndfl.firstName"/>
  <q-input placeholder="Отчество" v-model="ndfl.middleName"/>
  <q-btn>Далее</q-btn>
</template>

<script setup lang="ts">
import { useNDFLStore } from 'stores/ndfl-store'

const ndfl = useNDFLStore()
</script>

<style scoped>

</style>
