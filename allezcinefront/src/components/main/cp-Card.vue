<template>
    <div class="singleContainer">

        <v-flex >
            <v-card flat tile>
                <!-- {{movie}} -->
                <v-img
                    :src="'https://image.tmdb.org/t/p/original'+movie.movie.poster_path"
                    
                />
                <v-card-title>
                    <h3>{{movie.movie.title}}</h3>
                    <h3>{{movie.movie.name}}</h3>
                </v-card-title>
            </v-card>
        </v-flex>

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

h3{
    margin:auto;
    width: 90px;
    height: auto
}
/*.v-imgage{
    margin:auto;
}  */
</style>
