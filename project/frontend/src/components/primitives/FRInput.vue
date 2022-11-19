<template>
  <q-input
    bottom-slots
    class="q-mb-md"
    v-bind="omit(['hint'], props)"
    :stack-label="stackLabel || type === 'date'"
    v-model="modelProvider"
    :rules="required ? [(v) => !!v || 'Поле обязательно для заполнения'] : []"
  >
    <template
      v-slot:hint
      v-if="hint"
    >
      <div class="q-field__messages row items-center">
        <div>
          {{ hint }}
        </div>
        <q-icon
          class="q-pl-xs"
          name="help"
          size="xs"
          v-if="tooltip"
        >
          <q-tooltip>
            {{ tooltip }}
          </q-tooltip>
        </q-icon>
      </div>
    </template>
    <template
      #after
      v-if="externalLink"
    >
      <q-icon
        size="xs"
        tag="div"
        name="open_in_new"
        @click="open"
      >
        <q-tooltip>
          {{ externalLink }}
        </q-tooltip>
      </q-icon>
    </template>
  </q-input>
</template>

<script setup>
import { omit } from 'ramda'
import { computed } from 'vue'

const emit = defineEmits(['update:modelValue']);

const props = defineProps({
  label: String,
  hint: String,
  tooltip: String,
  externalLink: String,
  externalLinkURL: String,
  modelValue: [String, Number],
  type: String,
  mask: String,
  placeholder: String,
  stackLabel: Boolean,
  required: Boolean,
})

const modelProvider = computed({
  get() {
    return props.modelValue
  },
  set(v) {
    emit('update:modelValue', v)
  }
})
</script>
