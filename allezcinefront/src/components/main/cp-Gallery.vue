<template>
    <div class="gallery">
        <h1>{{properText(contenu)}}</h1>
        <div v-for="(page,key) in pageNumber" :key="key">
        <v-layout align-start justify-space-around wrap row >
            <div v-for="(movie,jul) in  (movies)" v-bind:key="jul">
                <Card :movie="{movie}" :typeOfMedia="contenu"/>
            </div>
        </v-layout>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Card from './cp-Card';
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
        contenu : String,
        nombre : Number,
        pageNumber: Number,
    },  
    mounted(){
        axios
            .get(`https://api.themoviedb.org/3/discover/${this.contenu}?api_key=833ff06d69182d00cff97e3090365785&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=${this.pageNumber}`)
            .then(response => {
                this.movies = response.data.results.slice(0,this.nombre);
            }),
            console.log(this.movies),
            this.media = this.contenu
    },
    computed:{
        maxTwelve: function() {
            return this.movies.slice(0,this.nombre-1);
        },
        julmax(){
             axios
            .get(`https://api.themoviedb.org/3/discover/${this.contenu}?api_key=833ff06d69182d00cff97e3090365785&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=${this.pageNumber}`)
            .then(response => {
                this.movies += response.data.results.slice(0,this.nombre);
            }),
            console.log(this.movies),
            this.media = this.contenu
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