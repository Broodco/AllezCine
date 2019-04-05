<template>
    <div class="singleContainer">
        <v-flex >
            <v-card flat tile>
                <!-- {{movie}} -->
                <v-img :src="'https://image.tmdb.org/t/p/original'+movie.movie.poster_path"/>
                <v-card-title class="text-xs-center">
                    <h3 v-if="movie.movie.title">{{movie.movie.title}}</h3>
                    <h3 v-else>{{movie.movie.name}}</h3>
                </v-card-title>
            </v-card>
        </v-flex>
    </div>
</template>

<script>
    export default {
        name : "cp-Card",
        props:{
            movie : Object
        },
        data(){
            return{
            }
        }
    }      
</script>

<style scoped>
    .singleContainer{
        margin:20px 5px;
    }
    h3{
        margin:auto;
        width: 180px;
        height: auto
    }
    /*.v-imgage{
        margin:auto;
    }  */
</style>
