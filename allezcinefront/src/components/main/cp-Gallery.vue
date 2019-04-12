<template>
    <div>
        <div class="gallery">
            <h1>{{properText(contenu)}}</h1>
            <v-layout align-start justify-space-around wrap row >
                <div v-for="(movie,jul) in  (movies)" v-bind:key="jul">
                    <Card :movie="{movie}" :typeOfMedia="contenu"/>
                </div>
            </v-layout>
        </div>
        <v-btn v-if="!home" large color="error" @click="getFilm">More</v-btn>
    </div>
</template>

<script>
import {discover} from '../../axios/tmdbAPI.js';
import Card from './cp-Card';
export default {
    data(){
        return{
            movies:[],
            media: "",
            pageNumber: 0,
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
        },
        async getFilm(){
            this.pageNumber ++
            await discover(this.contenu,this.pageNumber)
                .then(response => {
                    if(this.home){
                        this.movies.push(...response.data.results.slice(0,11))
                    } else{
                        this.movies.push(...response.data.results)
                    }
                })
                .catch(err => {
                    console.log(err)
                    throw err
                })
            console.log(this.movies),
            this.media = this.contenu
        },
    },
    props:{
        contenu : String,
        nombre : Number,
        home : Boolean,
    },  
    mounted(){
        var thisVue = this
        this.getFilm()
        if(!this.home){
            this.getFilm()
            window.addEventListener('scroll', function(){
                var scrollPos = window.scrollY
                var winHeight = window.innerHeight
                var docHeight = document.documentElement.scrollHeight
                var perc = 100 * scrollPos / (docHeight - winHeight)
                if(perc >= 84){
                    thisVue.getFilm();
                }
            })
        }
    },
    computed:{
        maxTwelve: function() {
            return this.movies.slice(0,this.nombre-1);
        },
    }
}
</script>

<style scoped>
    .gallery{
        background-color: rgb(255, 255, 255);
    }
    h1{
        border-left: 5px solid red;
        padding-left: 15px;
    }
</style>