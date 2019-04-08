<template>
  <v-app>
    <cpNavbar @switchDrawer="switchChildDrawer()"> </cpNavbar>
    <cpDrawer ref="drawerComp" class="hidden-md-and-up"/>
    <cpCarousel></cpCarousel>
    <cpSocial class="socialIcons"></cpSocial>
    <router-view></router-view>
    <cpFooter></cpFooter>
  </v-app>
</template>

<script>
import cpNavbar from './components/navbar/cp-Navbar.vue';
import cpDrawer from './components/navbar/cp-Drawer.vue';
import cpCarousel from './components/carousel/cp-Carousel.vue';
import cpFooter from './components/footer/cp-Footer.vue';
import cpSocial from './components/social/cp-Social';

export default {
  name: 'App',
  components: {
    cpNavbar,
    cpDrawer,
    cpCarousel,
    cpSocial,
    cpFooter
    
  },
  methods: {
    switchChildDrawer(){
      this.$refs.drawerComp.switchDrawer();
    }
  }
}
</script>
<style scoped>
  .socialIcons{
    position: fixed;
    top : 80vh;
    left : -200px;
    z-index: 2;
  }
</style>
