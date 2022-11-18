import { boot } from 'quasar/wrappers'

import services from 'src/services'
import { inject } from 'vue'

const APP_SERVICES_TOKEN = 'APP_SERVICES_TOKEN'

export default boot(({ app }) => {
  app.config.globalProperties.services = services
  app.provide(APP_SERVICES_TOKEN, services)
})

export const useServices = () => inject(APP_SERVICES_TOKEN)
