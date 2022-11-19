<template>
  <div class="column content-start col-grow q-my-md q-py-lg">
    <q-btn class="q-mb-md" @click="add" size="xs" v-if="!max || limit < max">Добавить</q-btn>
    <q-card class="q-mb-md full-width" :key="i" v-for="i in limit">
      <q-card-section>
        <FRInput
          v-for="element in elements"
          v-bind="element"
          v-model="document.model[model][i-1][element.model]"
        />
        <q-btn v-if="limit > min" color="red" size="xs" @click="removeFromDoc(i - 1)">Удалить</q-btn>
      </q-card-section>
    </q-card>
  </div>
</template>

<script setup>
import FRInput from 'components/primitives/FRInput.vue'
import { nextTick, onBeforeMount, ref } from 'vue'
import { useDocumentStore } from 'src/stores/document-store'

const props = defineProps({
  model: String,
  min: Number,
  max: Number,
  elements: Array,
})

const limit = ref(props.min)

const document = useDocumentStore()

const updateObjects = (adjust = 0) => {
  for (let i = 0; i < limit.value + adjust; i++) {
    if (!document.model[props.model][i]) {
      document.model[props.model][i] = {};
    }
  }
}

const add = () => {
  updateObjects(+1);
  nextTick(() => limit.value++)
}

const removeFromDoc = (i) => {
  limit.value--
  nextTick(() => {
    document.model[props.model].splice(i, 1)
  })
}

onBeforeMount(updateObjects)
</script>
