<template>
    <div class="gallery">
        <h1>{{properText(contenu)}}</h1>
        <v-layout align-start justify-space-around wrap row >
            <div v-for="(movie,key) in  (movies)" v-bind:key="key">
                <Card :movie="{movie}" :typeOfMedia="contenu"/>
            </div>
        </v-layout>
    </div>
</template>

<script>
import axios from 'axios';
import Card from './cp-Card.vue';
export default {
    data(){
        return{
            movies:{},
            media: "",
        }
    },
    components: {
        Card
    },
    methods:{
        properText : function(typeOfMedia){
            if(typeOfMedia == "tv"){
                return "Serie TV"
            } else {
                return "Films"
            }
        }
    },
    props:{
        contenu : String
    },  
    mounted(){
        axios
            .get(`https://api.themoviedb.org/3/trending/${this.contenu}/day?api_key=833ff06d69182d00cff97e3090365785`)
            .then(response => {
                this.movies = response.data.results.slice(0,12)
            })
            console.log(this.movies)
            this.media = this.contenu
    },
    computed:{
        maxTwelve: function() {
            return this.movies.slice(0,11);
        }
    }
}
</script>

<style scoped>
    .gallery{
        background-color: rgb(255, 255, 255);
        /* border: 1px solid green; */
    }
    h1{
        border-left: 5px solid red;
        padding-left: 15px;
    }
</style>