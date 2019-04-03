<template>
<div id="cp-Carousel">
    <v-carousel hide-delimiters hide-controls style="height: 100%">
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src">
       <v-jumbotron dark>
            <v-container fill-height>
              <v-layout align-center>
                <!-- <v-flex> -->
                  <span><h3 class="display-3">{{ title }}</h3></span>
                  <span><h3 style="color:red" class="display-3">{{ text }}</h3></span>
                <!-- </v-flex> -->
              </v-layout>
            </v-container>
          </v-jumbotron>
          </v-carousel-item>
   </v-carousel> 
</div>
</template>

<script>
import axios from "axios";
export default {
    name : "cp-Carousel",
    data () {
    return {
      info: null,
      items:[
        {src:""},{src:""},{src:""},{src:""},{src:""},
      ],
      title: "ALLEZ",
      text:"CINE!",
    }
  },
  mounted () {
    axios
        .get('https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=833ff06d69182d00cff97e3090365785')
        .then(response => {
          let i = 0;
            for (i=0;i<5;i++){
              console.log(i);
            (this.items[i].src="https://image.tmdb.org/t/p/original"+ response.data.results[i].poster_path);
            }
        })
  }
} 



</script>

<style scoped>

</style>
