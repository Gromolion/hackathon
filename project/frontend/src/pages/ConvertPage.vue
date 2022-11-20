<template>
  <q-page class="row items-center justify-evenly">
    <q-card
      align="center"
      class="col-12 col-xl-2 col-lg-6 col-md-6 col-sm-8 q-px-lg q-py-md"
    >
      <h6>Конвертация файла</h6>
      <q-select class="q-mb-md"
        label="Формат"
        hint="Выбери формат файла для сохранения"
        v-model="format"
        :options="options"
      />
      <q-file class="q-mb-md" v-model="file" label="Выберите файл в формате frx">
        <template #prepend>
          <q-icon name="attach_file" />
        </template>
      </q-file>
      <q-btn>Скачать</q-btn>
    </q-card>
  </q-page>
</template>

<script setup>
import {ref} from 'vue';

const options = [
  {
    label: 'PDF',
    value: 'pdf',
    description: '',
    category: '1',
  },
  {
    label: 'DOCX',
    value: 'docx',
    description: 'Social media',
    category: '1',
  },
];

const format = ref('PDF');
const file = ref({});


</script>
