<template>
  <div id="cp-Carousel">
    <v-carousel hide-delimiters hide-controls>
      <v-carousel-item class="carous"
          v-for="(item,i) in items"
          :key="i"
          :src="item.src">
        <v-jumbotron dark>
          <v-container container fill-height grid-list-md text-xs-center>
            <v-layout row wrap>
              <v-flex xs12 md4 lg4  class="nom">
                <div><h2>ALLEZ<span class="red--text">CINE!</span></h2> </div>
              </v-flex>
              <v-flex xs12 class="descr">
                <h1>LASTEST <span class="red--text">ON</span>LINE <span class="red--text">MO</span>VIES</h1>
                <h3>IN SPACE NO ONE CAN HEAR YOU SCREAM</h3>
                <v-btn color="red" @click="goToDetails(item.id)">GO TO THE FILM</v-btn>
              </v-flex>
            </v-layout>  
          </v-container>
        </v-jumbotron>
      </v-carousel-item>
    </v-carousel> 
  </div>
</template>

<script>
import {discover} from '../../axios/tmdbAPI.js';
export default {
    name : "cp-Carousel",
    data () {
    return {
      info: null,
      items:[{src:'',id:""},{src:'',id:""},{src:'',id:""},{src:'',id:""},{src:'',id:""}],
    }
  },
  methods:{
      goToDetails(id){
          this.$router.push({
              path : `/details/movie/${id}`
          })
      },
      getItems(){
        discover('movie','1')
          .then(response => {
            let i = 0;
            for (i=0;i<5;i++){
              this.items[i].src="https://image.tmdb.org/t/p/original"+ response.data.results[i].poster_path;
              this.items[i].id= response.data.results[i].id;
            }
          })
          .catch(err => {
            throw err
          })
      }
  },
  mounted () {
    this.getItems()
  }
} 

</script>

<style scoped>
.container.grid-list-md .layout .flex {
    padding: 63px;
}
h2{
  font-size:2.5em;;
}
</style>