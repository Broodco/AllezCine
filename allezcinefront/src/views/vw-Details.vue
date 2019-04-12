<template>
    <v-container>
        <Recap :mediaData="mediaData"/>
        <Ajoutcom @sent="getComments" :mediaid="media_id"/>
        <v-container align-start align-content-center >
            <v-layout>
                <v-flex sm12 md10 offset-md1>
                    <v-card v-for="(comment,key) in comments" :key="key">
                        <ShowComments :comment="comment"/>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-container>
    </v-container>
</template>

<script>
import Recap from '../components/main/details/cp-Recap.vue';
import ShowComments from '../components/main/details/cp-ShowComments.vue';
import Ajoutcom from '../components/main/details/cp-Ajoutcom';
import {read} from '../axios/localAPI.js'
import {details} from '../axios/tmdbAPI.js'
export default {
    name: "vw-Details",
    components:{
        Recap,
        ShowComments,
        Ajoutcom
    },
    data(){
        return{
            typeOfMedia : this.$route.params.media,
            media_id : this.$route.params.id,
            mediaData : {},
            comments : {},
        }
    },
    methods: {
        getMediaData(){
            this.mediaData = {};
            details(this.typeOfMedia,this.media_id)
                .then(response => {
                    this.mediaData = response.data
                })
                .catch(err => {
                    throw err
                })
        },
        getComments(){
            this.comments = {};
            read(this.media_id)
                .then(response => {
                    console.log(response.data)
                    this.comments = response.data;
                })
                .catch(err=>{
                    throw err;
                })
        }
    },
    beforeMount(){
        this.getMediaData()
        this.getComments()
    }
}
</script>

<style scoped>

</style>