const routes = [
  {
    path: '/',
    component: () => import('layouts/FormLayout.vue'),
    children: [
      {
        path: ':document',
        component: () => import('pages/FormPage.vue')
      }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/ErrorNotFound.vue')
  }
]

export default routes
