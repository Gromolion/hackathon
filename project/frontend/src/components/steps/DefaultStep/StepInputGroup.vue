<template>
  <template :key="i" v-for="i in limit">
    <q-input
      v-bind="props"
      v-model="models[i]"
    />
  </template>
</template>

<script lang="ts" setup>
import { ref, watch } from 'vue'
import { useDocumentStore } from 'stores/document-store'
import { clone } from 'ramda'
import { InputDefinition } from 'src/shared/schemas'

const props = defineProps<InputDefinition>()

const limit = ref(props.min)

const document = useDocumentStore()

const models = ref([])

watch(models, () => {
  document.model[props.model] = clone(models.value)
})

</script>
