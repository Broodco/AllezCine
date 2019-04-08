<template>
    <v-container fluid grid-list-md text-ms-center>
        <v-layout row wrap v-bind="binding">
            <v-flex xs12 sm6 pr-3>
                <v-img :src="'https://image.tmdb.org/t/p/original'+mediaData.poster_path" contain max-height="500"/>
            </v-flex>
            <v-flex xs12 sm6>
                <v-layout column>
                    <v-flex xs12 >
                        <v-layout row wrap pb-5 align-space-around>
                            <v-flex xs12 md12 lg6 class='display-2 resp-center'>
                                {{mediaData.title}}
                            </v-flex>
                            <v-flex xs12 md12 lg6 align-self-center class="resp-center">
                                <v-icon v-for="(rating,index) in roundUserRating" :key="index">star</v-icon>
                                <v-icon v-if="modUserRating">star_half</v-icon>
                            </v-flex>
                        </v-layout>
                    </v-flex>
                    <v-flex xs12 pb-1 class='headline'>
                        <v-layout justify-end column>
                            <v-flex xs12>
                                Synopsis
                            </v-flex>
                        </v-layout>
                    </v-flex>
                    <v-flex xs12 pb-5>
                        {{ mediaData.overview }}
                    </v-flex>
                    <v-flex>
                        <v-layout row wrap class='resp-center'>
                            <v-flex d-flex xs6 md3 v-for="(genre,index) in mediaData.genres" :key="index" >
                                <v-btn>{{ genre.name }}</v-btn>
                            </v-flex>
                        </v-layout>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
export default {
    name : "cp-Recap",
    data(){
        return{

        }
    },
    props:{
        mediaData : Object
    },
    computed: {
        binding () {
            const binding = {}
            if (this.$vuetify.breakpoint.mdAndUp) binding.column = false
            return binding
        },
        userRating(){
            return Math.round(parseFloat(this.mediaData.vote_average))/2
        },
        roundUserRating(){
            return Math.floor(this.userRating);
        },
        restUserRating(){
            let rest = 5 - this.roundUserRating - this.modUserRating;
            return rest;
        },
        modUserRating(){
            return this.userRating%2;
        }
    }
}
</script>

<style scoped>
@media only screen and (max-width : 600px){
    .resp-center{
        text-align : center;
        margin-top : 10px;
    }
}
</style>