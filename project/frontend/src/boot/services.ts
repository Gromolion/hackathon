import { boot } from 'quasar/wrappers'

import services from 'src/services'

declare module 'services' {
}
/* eslint-enable @typescript-eslint/no-empty-interface */

export default boot(({ app }) => {
  app.config.globalProperties.services = services
})
