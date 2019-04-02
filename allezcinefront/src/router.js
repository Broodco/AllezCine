import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/vw-Home.vue'
import Movies from './views/vw-Movies.vue'
import Series from './views/vw-Series.vue'
import Details from './views/vw-Details.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/',
      name: 'movies',
      component: Movies
    },
    {
      path: '/',
      name: 'series',
      component: Series
    },
    {
      path: '/',
      name: 'details',
      component: Details,
      props: true
    }
  ]
})
