<template>
  <div class="column content-start col-grow q-my-md q-py-lg">
    <q-btn @click="add" size="xs" v-if="limit < max">Добавить</q-btn>
    <div class="row full-width" :key="i" v-for="i in limit">
      <div class="column col-7 q-mr-sm">
        <FRInput v-bind="props" v-model="document.model[model][i - 1]" />
      </div>
      <div class="column col-4 q-pt-lg" v-if="limit > min">
        <q-btn color="red" size="xs" @click="removeFromDoc(i - 1)">Удалить</q-btn>
      </div>
    </div>
  </div>
</template>

<script setup>
import FRInput from 'components/primitives/FRInput.vue'
import { remove } from 'ramda'
import { ref } from 'vue'
import { useDocumentStore } from 'src/stores/document-store'

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
  min: Number,
  max: Number,
})

const limit = ref(props.min)

const document = useDocumentStore()

const add = () => {
  limit.value++
}

const removeFromDoc = (i) => {
  limit.value--
  remove(i, 1, document.model[props.model][i])
}

</script>
