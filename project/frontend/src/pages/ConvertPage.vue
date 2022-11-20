<template>
  <h6>Конвертация файла</h6>
  <q-select v-model="format" :options="options"/>
  <q-file v-model="file">
    <template #prepend>
      <q-icon name="attach_file" />
    </template>
  </q-file>
  <q-btn>Скачать</q-btn>
</template>

<script setup>
import {ref} from "vue";

const options = [
  {
    label: 'PDF',
    value: 'pdf',
    description: '',
    category: '1'
  },
  {
    label: 'DOCX',
    value: 'docx',
    description: 'Social media',
    category: '1'
  },
]

const format = ref('');
const file = ref({});


</script>
