<template>
    <div class="singleContainer">
        <v-card flat tile>
            <!-- {{movie}} -->
            <v-img
                :src="'https://image.tmdb.org/t/p/original'+movie.movie.poster_path"
                max-width="180px"
            />
            <v-card-title>
                <h3 v-if="move.movie.title">{{movie.movie.title}}</h3>
                <h3 v-if="move.movie.title">{{movie.movie.title}}</h3>
            </v-card-title>
        </v-card>
    </div>
</template>

<script>
    export default {
        props:[
            'movie'
            ],
        data(){
            return{

            }
        },

    }      
</script>

<style scoped>
 .singleContainer{
    margin:20px 5px;
}
/*
h3{
    margin:auto;
}
.v-imgage{
    margin:auto;
}  */
</style>
