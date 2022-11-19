<template>
  <template :key="i" v-for="i in limit">
    <q-input
      v-bind="props"
      v-model="models[i]"
    />
  </template>
</template>

<script setup>
import { ref, watch } from 'vue'
import { useDocumentStore } from 'src/stores/document-store'
import { clone } from 'ramda'

const props = defineProps()

const limit = ref(props.min)

const document = useDocumentStore()

const models = ref([])

watch(models, () => {
  document.model[props.model] = clone(models.value)
})

</script>
