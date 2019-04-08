import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/vw-Home.vue'
import Medias from './views/vw-Medias.vue'
import Details from './views/vw-Details.vue'

Vue.use(Router)

export default new Router({
  mode : 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/:medias',
      name: 'medias',
      component: Medias
    },
    {
      path: '/details/:media/:id',
      name: 'details',
      component: Details,
    }
  ]
})
