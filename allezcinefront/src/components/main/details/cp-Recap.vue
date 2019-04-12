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
                            <v-flex xs12 pb-1 class='display-2 resp-center'>
                                {{mediaData.title}}
                            </v-flex>
                            <v-flex xs12 align-self-end class="resp-center">
                                <v-icon large color="yellow darken-1" v-for="index in roundUserRating" :key="index.id">star</v-icon>
                                <v-icon large color="yellow darken-1" v-if="modUserRating">star_half</v-icon>
                                <v-icon large color="yellow darken-1" v-for="indexleft in restUserRating" :key="indexleft.id">star_border</v-icon>
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
                            <v-flex d-flex xs6 lg4 v-for="(genre,indexCent) in mediaData.genres" :key="indexCent" >
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
    props:{
        mediaData : Object
    },
    computed: {
        binding () {
            let binding = {}
            if (this.$vuetify.breakpoint.mdAndUp) binding.column = false
            return binding
        },
        userRating(){
            let numRating = parseFloat(this.mediaData.vote_average)
            let numRatingOnFive = numRating/2
            return numRatingOnFive
        },
        roundUserRating(){
            return Math.floor(this.userRating);
        },
        restUserRating(){
            let rest = 0
            if (this.modUserRating){
                rest = 5 - Math.ceil(this.userRating);
            } else {
                rest = 5 - Math.floor(this.userRating);
            }
            return rest;
        },
        modUserRating(){
            if ((this.userRating - this.roundUserRating) > 0.5){
                return true
            } else
            return false
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