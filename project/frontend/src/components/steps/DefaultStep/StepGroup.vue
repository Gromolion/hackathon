<template>
  <div>{{props.title}}</div>
  <template :key="i" v-for="i in limit">
    <q-input
      v-bind="input"
      :key="i + input.model"
      v-for="input in props.inputs"
      :model-value="models[i] ? models[i][input.model] : undefined"
      @change="(v) => setModel(i, input.model, v)"
    />
  </template>
</template>

<script setup>
import { useDocumentStore } from 'src/stores/document-store'
import { ref, watch } from 'vue'
import { clamp, clone } from 'ramda'

const document = useDocumentStore()

const props = defineProps()

const models = ref([])

const limit = ref(props.min)

const setModel = (i, key, v) => {
  if (!models.value[i]) {
    models.value[i] = {}
  }
  models.value[i][key] = v
}

watch(props, () => {
  limit.value = clamp(props.min, props.max, limit.value)
  if (props.max && models.value.length > props.max) models.value.length = props.max
})

watch(models, () => {
  document.model[props.model] = clone(models.value)
})
</script>
