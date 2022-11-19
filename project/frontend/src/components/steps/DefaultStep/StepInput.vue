<template>
  <q-input
    bottom-slots
    class="q-mb-md"
    v-bind="omit(['hint'], props)"
    :stack-label="stackLabel || type === 'date'"
    v-model="document.model[model]"
  >
    <template v-slot:hint v-if="hint">
        <div class="q-field__messages row items-center">
          <div>
            {{hint}}
          </div>
          <q-icon class="q-pl-xs" name="help" size="xs" v-if="tooltip">
            <q-tooltip>
              {{tooltip}}
            </q-tooltip>
          </q-icon>
        </div>
    </template>
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
import { omit } from 'ramda'
import { useDocumentStore } from 'src/stores/document-store'

const document = useDocumentStore()

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

const open = () => {
  if (!props.externalLinkURL) return;
  window.open(props.externalLinkURL, '_blank')
}
</script>
