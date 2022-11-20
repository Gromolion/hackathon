<template>
  <h6>{{steps.selected.title}}</h6>
  <p v-if="steps.selected.text">{{steps.selected.text}}</p>
  <q-card-actions>
    <q-btn @click="accept">{{steps.selected.acceptText || "Ок"}}</q-btn>
    <q-btn @click="decline">{{steps.selected.declineText || "Отмена"}}</q-btn>
  </q-card-actions>
</template>

<script setup>
import { useDocumentStore } from 'stores/document-store'
import { useStepsStore } from 'stores/steps-store'

import {evaluate} from 'mathjs'

const steps = useStepsStore()

const document = useDocumentStore()

const scope = {
  set: (key, value) => () => document.model[key] = value,
  goto: (key) => () => steps.select(key),
  do: (...actions) => actions.forEach((fn) => fn()),
}

const accept = () => evaluate(`do(${steps.selected.accept})`, scope)
const decline = () => evaluate(`do(${steps.selected.decline})`, scope)
</script>

