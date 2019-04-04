<template>
  <v-app>
    <cpNavbar> </cpNavbar>
    <cpCarousel></cpCarousel>
    <cpSocial></cpSocial>
    <cpContent></cpContent>
    <cpFooter></cpFooter>
  </v-app>
</template>

<script>
import cpNavbar from './components/navbar/cp-Navbar.vue';
import cpCarousel from './components/carousel/cp-Carousel.vue';
import cpContent from './components/content/cp-Content.vue';
import cpFooter from './components/footer/cp-Footer.vue';
import cpSocial from './components/social/cp-Social';

export default {
  name: 'App',
  components: {
    cpNavbar,
    cpCarousel,
    cpContent,
    cpFooter,
    cpSocial,
    
  },
  data () {
    return {
      //
    }
  }
}
</script>
