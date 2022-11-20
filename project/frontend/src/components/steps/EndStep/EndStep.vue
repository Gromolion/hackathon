<template>
  <h6>{{steps.selected.title}}</h6>
  <p>{{steps.selected.text}}</p>
  <q-btn @click="send">{{steps.selected.button}}</q-btn>
</template>

<script setup>
import axios from 'axios';
import {useQuasar} from 'quasar';
import {useDocumentStore} from 'stores/document-store';
import { useStepsStore } from 'stores/steps-store'
import {useRoute} from 'vue-router';

const steps = useStepsStore()
const document = useDocumentStore()
const route = useRoute()
const q = useQuasar();


const send = async () => {
  q.loading.show({
    delay: 400
  })

  await axios.post(`${process.env.BACKEND}/api/get-file`, {
    docType: route.params.document,
    fileName: steps.selected.filename,
    format: steps.selected.format,
    formData: document.model
  })
             .then(() => {
                q.loading.hide()
                q.notify("Операция выполнена успешно!")
             })
             .catch(() => {
               q.loading.hide()
               q.notify("Не удалось отправить данные")
             })
}
</script>
