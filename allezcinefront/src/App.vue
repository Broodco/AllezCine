<template>
  <v-app>
    <cpNavbar @switchDrawer="switchDrawer()"> </cpNavbar>
    <cpDrawer :drawer="drawer"/>
    <cpCarousel></cpCarousel>
    <cpContent></cpContent>
    <cpFooter></cpFooter>
  </v-app>
</template>

<script>
import cpNavbar from './components/navbar/cp-Navbar.vue';
import cpDrawer from './components/navbar/cp-Drawer.vue';
import cpCarousel from './components/carousel/cp-Carousel.vue';
import cpContent from './components/content/cp-Content.vue';
import cpFooter from './components/footer/cp-Footer.vue';

export default {
  name: 'App',
  components: {
    cpNavbar,
    cpDrawer,
    cpCarousel,
    cpContent,
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
