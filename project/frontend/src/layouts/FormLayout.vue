<template>
  <q-layout view="hHh Lpr lff">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="drawer.toggle"
        />

        <q-toolbar-title>
          EasyNDFL by CRAB RAVE TEAM
        </q-toolbar-title>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="drawer.opened"
      bordered
    >
      <q-list>
        <q-item-label
          header
        >
           Шаги заполнения формы:
        </q-item-label>

        <step-links />
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script setup lang="ts">
import StepLinks from 'components/StepLinks.vue'
import { useDrawerStore } from 'stores/drawer-store'

const drawer = useDrawerStore()
</script>
