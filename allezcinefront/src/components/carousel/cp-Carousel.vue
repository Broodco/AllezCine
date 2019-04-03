<template>
    <!-- <v-carousel hide-delimiters>
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
      ></v-carousel-item>
   </v-carousel> -->
   <div id="app">
        {{ info }}
   </div>
</template>

<script>
export default {
    data () {
    return {
      info: null
    }
  },
  mounted () {
    axios
      .get('https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=833ff06d69182d00cff97e3090365785')
      .then(response => (this.info = response))
  }


}
</script>

<style scoped>

</style>
