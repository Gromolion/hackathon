<template>
  <q-form ref="form" @submit.prevent.stop="touch">
    <h6 v-if="steps.selected.title">{{steps.selected.title}}</h6>
    <template :key="i" v-for="(element, i) in steps.selected.elements">
      <StepGroup v-if="element.type === 'GROUP'" v-bind="element.payload" />
      <StepInputGroup v-else-if="element.type === 'MULTIPLE'" v-bind="element.payload" />
      <StepInput v-else v-bind="element.payload"/>
    </template>
    <q-btn label="Далее" type="submit"/>
  </q-form>
</template>

<script setup>
import axios from 'axios';
import {evaluate} from 'mathjs';
import emitter from 'src/shared/emitter'
import { useStepsStore } from 'src/stores/steps-store'
import StepInput from 'components/steps/DefaultStep/StepInput.vue'
import StepInputGroup from 'components/steps/DefaultStep/StepInputGroup.vue'
import StepGroup from 'components/steps/DefaultStep/StepGroup.vue'
import {useDocumentStore} from 'stores/document-store';

const steps = useStepsStore()
const document = useDocumentStore()

const get = (prop) => document[prop]

const scope = {
  set: (key, value) => () => document.model[key] = value,
  goto: (key) => () => steps.select(key),
  do: (...actions) => actions.forEach((fn) => fn()),
}

const touch = async () => {
  emitter.emit('answer')
  if (steps.selected.asyncHook) {
    const hook = steps.selected.asyncHook
    return new Promise(() => {
      const payload = hook.formData.map((key) => ({
        [key]: document.model[key]
      }));
      if (payload.some((e) => e === undefined)) {
        throw new Error('Undefined parameters is not allowed, skipping asyncHook')
      }
      const formData = new FormData(payload);
      return axios[hook.method](hook.url, formData)
    })
      .then((result) => evaluate(`do(${hook.then})`, {...scope, result}) )
      .catch((error) => evaluate(`do(${hook.catch})`, {...scope, error}) )
      .catch(() => steps.next())
  } else {
    steps.next();
  }
}
</script>
