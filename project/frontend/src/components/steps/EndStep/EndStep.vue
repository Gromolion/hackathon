<template>
  <h6>{{steps.selected.title}}</h6>
  <q-btn @click="onClick">Скачать</q-btn>
</template>

<script setup>
import { useStepsStore } from 'stores/steps-store';
import {useDocumentStore} from "stores/document-store";

function onClick(){
  console.log(23132132);
  axios.post('backend/api/get-file', document).then((data) => console.log(data));
}

const document = useDocumentStore();
const steps = useStepsStore();
</script>
