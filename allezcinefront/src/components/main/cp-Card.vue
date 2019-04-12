<template>
    <div class="singleContainer">
        <v-flex >
            <v-card flat tile @click.stop="goToDetails()">
                <v-img class="posterMedia" :src="'https://image.tmdb.org/t/p/original'+movie.movie.poster_path"/>
                <v-card-title class="text-xs-center">
                    <h3 v-if="movie.movie.title">{{movie.movie.title}}</h3>
                    <h3 v-else>{{movie.movie.name}}</h3>
                </v-card-title>
                <v-card-text>
                    <h5 v-if="movie.movie.release_date">{{movie.movie.release_date.slice(0,4)}}</h5>
                    <h5 v-else-if="movie.movie.first_air_date">{{movie.movie.first_air_date.slice(0,4)}}</h5>
                </v-card-text>
            </v-card>
        </v-flex>
    </div>
</template>

<script>
    export default {
        name : "cp-Card",
        props:{
            movie : Object,
            typeOfMedia : String
        },
        data(){
            return{
            }
        },
        computed:{
        },
        methods:{
            goToDetails(){
                this.$router.push({
                    path : `/details/${this.typeOfMedia}/${this.movie.movie.id}`
            })
        }
    }  
}    
</script>

<style scoped>
    .singleContainer{
        margin:20px 5px;
        min-width: 180px;
        max-width: 220px;
    }
    .singleContainer:hover{
        cursor: pointer;
    }
    h3{
        margin:auto;
        width: 180px;
        height: auto
    }

    .posterMedia{
        max-width: 220px;
        width:100%;    
    }
    
</style>
