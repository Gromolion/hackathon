<template>
  <q-page class="row items-center justify-evenly">
    <q-card align="center" class="col-12 col-xl-2 col-lg-4 col-md-4 col-sm-6 q-px-lg q-py-md">
      <template v-if="steps.selected">
        <InfoStep v-if="steps.selected.type === 'INFO'" />
        <BranchStep v-else-if="steps.selected.type === 'BRANCH'" />
        <DefaultStep v-else/>
      </template>
    </q-card>
  </q-page>
</template>

<script setup>
import BranchStep from 'components/steps/BranchStep/BranchStep.vue'
import InfoStep from 'components/steps/InfoStep/InfoStep.vue'
import { useStepsStore } from 'src/stores/steps-store'
import { onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { schemas } from 'src/shared/schemas'
import { useDocumentStore } from 'src/stores/document-store'
import DefaultStep from 'components/steps/DefaultStep/DefaultStep.vue'

const steps = useStepsStore()
const document = useDocumentStore()

onMounted(() => {
  const route = useRoute()
  const schema = schemas[route.params.document]
  if (!schema) return
  steps.init(schema.steps)
  document.init(schema.model)
})
</script>
