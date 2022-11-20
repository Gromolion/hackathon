<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
          @click="toggleLeftDrawer"
        />

        <q-toolbar-title>
          Быстрое заполнение документов
        </q-toolbar-title>

        <div>На базе быстрых отчетов</div>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
    >
      <q-list>
        <q-item-label
          header
        >
          Основное
        </q-item-label>

        <q-item
          clickable
          tag="a"
          @click="$router.push('/convert')"
        >
          <q-item-section>
            <q-item-label>Конвертация файлов</q-item-label>
          </q-item-section>
        </q-item>

        <q-item-label
          header
        >
          Сценарии заполнения документов
        </q-item-label>

        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        />
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from 'vue'
import EssentialLink from 'components/EssentialLink.vue'
import {schemas} from "src/shared/schemas";

const linksList = [
  {
    title: schemas['3-ndfl'].title,
    link: 'go/3-ndfl',
    icon: schemas['3-ndfl'].icon
  },
  {
    title: schemas['act'].title,
    link: 'go/act',
    icon: schemas['act'].icon
  },
]

export default defineComponent({
  name: 'MainLayout',

  components: {
    EssentialLink
  },

  setup () {
    const leftDrawerOpen = ref(false)

    return {
      essentialLinks: linksList,
      leftDrawerOpen,
      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
})
</script>
