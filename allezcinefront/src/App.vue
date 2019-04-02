<template>
  <v-app>
<cpNavbar> </cpNavbar>
<cpCarousel></cpCarousel>
<cpContent></cpContent>
<cpFooter></cpFooter>
  </v-app>
</template>

<script>
import cpNavbar from './components/navbar/cp-Navbar.vue';
import cpCarousel from './components/carousel/cp-Carousel.vue';
import cpContent from './components/content/cp-Content.vue';
import cpFooter from './components/footer/cp-Footer.vue';

export default {
  name: 'App',
  components: {
    cpNavbar,
    cpCarousel,
    cpContent,
    cpFooter
    
  },
  data () {
    return {
      //
    }
  }
}
</script>
