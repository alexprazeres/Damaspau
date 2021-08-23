import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import VueLazyLoad from 'vue-lazyload'

import '../css/index.css'
import '../css/style.css'

InertiaProgress.init()
Vue.use(VueLazyLoad)

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props }) {
    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})
