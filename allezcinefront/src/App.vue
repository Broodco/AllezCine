<template>
  <v-app>
    <cpNavbar @switchDrawer="switchDrawer()"> </cpNavbar>
    <cpDrawer class="hidden-md-and-up" :drawer="drawer"/>
    <cpCarousel></cpCarousel>
    <router-view/>
    <cpFooter></cpFooter>
  </v-app>
</template>

<script>
import cpNavbar from './components/navbar/cp-Navbar.vue';
import cpDrawer from './components/navbar/cp-Drawer.vue';
import cpCarousel from './components/carousel/cp-Carousel.vue';
import cpFooter from './components/footer/cp-Footer.vue';

export default {
  name: 'App',
  components: {
    cpNavbar,
    cpDrawer,
    cpCarousel,
    cpFooter
    
  },
  data () {
    return {
      drawer : false
    }
  },
  methods: {
    switchDrawer(){
      this.drawer = !this.drawer
    }
  }
}
</script>
