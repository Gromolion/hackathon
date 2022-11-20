<template>
  <q-form @submit.stop.prevent="submit">
    <h6 v-if="steps.selected.title">{{steps.selected.title}}</h6>
    <template :key="i" v-for="(element, i) in steps.selected.elements">
      <StepGroup v-if="element.type === 'GROUP'" v-bind="element.payload" />
      <StepInputGroup v-else-if="element.type === 'MULTIPLE'" v-bind="element.payload" />
      <StepInput v-else v-bind="element.payload"/>
    </template>
    <q-btn label="Далее" type="submit" @click="touch"/>
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
import {ref} from 'vue';

const steps = useStepsStore()
const document = useDocumentStore()

const form = ref(null)

const get = (prop) => document[prop]

const scope = {
  set: (key, value) => () => document.model[key] = value,
  goto: (key) => () => steps.select(key),
  next: () => () => steps.next(),
  do: (...actions) => actions.forEach((fn) => fn()),
}

const touch = async () => {
  emitter.emit('answer')
}

const submit = async () => {
  if (steps.selected.asyncHook) {
    console.log('hook');
    const hook = steps.selected.asyncHook

    const payload = hook.formData.map((key) => ({
      [key]: document.model[key]
    }));
    if (payload.some((e) => e === undefined)) {
      throw new Error('Undefined parameters is not allowed, skipping asyncHook')
    }
    const formData = new FormData();
    Object.entries(payload).forEach(([k, v]) => formData.set(k, v))
    await axios[hook.method](`${process.env.BACKEND}/${hook.path}}`, formData)
      .then((result) => evaluate(`do(${hook.onSuccess})`, {...scope, result}) )
      .catch((error) => {
        console.error(error);
        console.log(`do(${hook.onFail})`);
        evaluate(`do(${hook.onFail})`, {...scope, error})
        console.log('evaluated');
      })
      .catch((e) => {
        console.error(e);
        steps.next()
      })
  } else {
    steps.next();
  }
}
</script>
