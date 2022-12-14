<template>
  <q-input
    ref="inputRef"
    bottom-slots
    class="q-mb-md"
    v-bind="omit(['hint'], props)"
    :stack-label="stackLabel || type === 'date'"
    v-model="modelProvider"
    :rules="rules ? rules.map((rule) => ruleMap[rule]) : []"
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
        @click="openLink(externalLinkURL)"
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
import emitter from 'src/shared/emitter'
import { computed, ref } from 'vue'

const emit = defineEmits(['update:modelValue']);

const inputRef = ref(null);

emitter.on('answer', () => {
  if (inputRef.value) {
    inputRef.value.validate()
  }
})

const ruleMap = {
  requiredField: (value) =>  !!value || 'Поле обязательно для заполнения',
  floatSum: (value) => {
    if(!value){
      return true
    }
    if(value.includes('.')){
      return value.split('.')[1].length === 2 || 'Укажите копейки корректно'
    }
    return 'Разделите сумму точкой'
  },
  fixedLength: (value) => value.length < props.maxLength || 'Слишком большое значение'
}

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
  rules: [String],
  maxLength: Number
})

function openLink(externalLinkURL){
  open(externalLinkURL)
}

const modelProvider = computed({
  get() {
    return props.modelValue
  },
  set(v) {
    emit('update:modelValue', v)
  }
})
</script>
