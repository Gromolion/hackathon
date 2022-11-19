<template>
  <q-input
    class="q-mb-md"
    v-bind="props"
    :stack-label="stackLabel || type === 'date'"
    v-model="document.model[model]"
  >
    <template #after v-if="externalLink">
      <q-icon size="xs" tag="div" name="open_in_new" @click="open">
        <q-tooltip>
          {{externalLink}}
        </q-tooltip>
      </q-icon>
    </template>
  </q-input>
</template>

<script setup>
import { useDocumentStore } from 'src/stores/document-store'

const document = useDocumentStore()

const props = defineProps({
  label: String,
  hint: String,
  externalLink: String,
  externalLinkURL: String,
  model: String,
  type: String,
  mask: String,
  placeholder: String,
  stackLabel: Boolean,
})

const open = () => {
  if (!props.externalLinkURL) return;
  window.open(props.externalLinkURL, '_blank')
}
</script>
