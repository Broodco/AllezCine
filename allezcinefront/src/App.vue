<template>
  <v-app>
    <cpNavbar> </cpNavbar>
    <cpCarousel></cpCarousel>
    <router-view/>
    <cpFooter></cpFooter>
  </v-app>
</template>

<script>
import cpNavbar from './components/navbar/cp-Navbar.vue';
import cpCarousel from './components/carousel/cp-Carousel.vue';
import cpFooter from './components/footer/cp-Footer.vue';

export default {
  name: 'App',
  components: {
    cpNavbar,
    cpCarousel,
    cpFooter
    
  },
  data () {
    return {
      //
    }
  }
}
</script>
