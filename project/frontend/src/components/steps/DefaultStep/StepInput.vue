<template>
  <FRInput v-bind="props" v-model="document.model[model]"/>
</template>

<script setup>
import FRInput from 'components/primitives/FRInput.vue'
import { useDocumentStore } from 'stores/document-store'

const props = defineProps({
  label: String,
  hint: String,
  tooltip: String,
  externalLink: String,
  externalLinkURL: String,
  model: String,
  type: String,
  mask: String,
  placeholder: String,
  stackLabel: Boolean,
})

const document = useDocumentStore()
</script>
