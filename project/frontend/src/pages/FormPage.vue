<template>
  <q-page class="row items-center justify-evenly">
    <q-card class="q-px-lg q-py-md">
      <template v-if="steps.selected">
        <DefaultStep/>
      </template>
    </q-card>
  </q-page>
</template>

<script setup lang="ts">
import { useStepsStore } from 'stores/steps-store'
import { onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { schemas } from 'src/shared/schemas'
import { useDocumentStore } from 'stores/document-store'
import DefaultStep from 'components/steps/DefaultStep/DefaultStep.vue'

const steps = useStepsStore()
const document = useDocumentStore()

onMounted(() => {
  const route = useRoute()
  console.log(route.params.document)
  const schema = schemas[route.params.document]
  if (!schema) return
  steps.init(schema.steps)
  document.init(schema.model)
})
</script>
