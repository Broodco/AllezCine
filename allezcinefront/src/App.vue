<template>
  <v-app>
    <cpNavbar @switchDrawer="switchChildDrawer()"> </cpNavbar>
    <cpDrawer ref="drawerComp" class="hidden-md-and-up"/>
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
  methods: {
    switchChildDrawer(){
      this.$refs.drawerComp.switchDrawer();
    }
  }
}
</script>
