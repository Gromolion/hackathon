<template>
    <q-input
      v-model="document.model[props.model]"
      v-bind="props"
  />
</template>

<script setup lang="ts">
import { GroupDefinition, InputDefinition } from 'src/shared/schemas'
import { useDocumentStore } from 'stores/document-store'
import { ref, watch } from 'vue'
import { clone } from 'ramda'

const document = useDocumentStore()

const props = defineProps<InputDefinition>()
</script>
