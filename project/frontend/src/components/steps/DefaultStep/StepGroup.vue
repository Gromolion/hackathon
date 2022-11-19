<template>
  <div>{{props.title}}</div>
  <template :key="i" v-for="i in limit">
    <q-input
      v-bind="input"
      :key="i + input.model"
      v-for="input in inputs"
      :model-value="models[i] ? model[i][input.model] : undefined"
      @change="(v) => setModel(i, input.model, v)"
    />
  </template>
</template>

<script setup lang="ts">
import { GroupDefinition } from 'src/shared/schemas'
import { useDocumentStore } from 'stores/document-store'
import { ref, watch } from 'vue'
import { clamp, clone } from 'ramda'

const document = useDocumentStore()

const props = defineProps<GroupDefinition>()

const models = ref([])

const limit = ref(props.min)

const setModel = (i: number, key: string | number, v: string | number) => {
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
