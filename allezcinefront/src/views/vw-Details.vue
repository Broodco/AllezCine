<template>
    <v-container>
        <Recap :mediaData="mediaData"/>
        

        <Ajoutcom @sent="getComments" :mediaid="media_id"/>
        <v-container align-start align-content-center >
            <v-layout column>
                <v-card v-for="(comment,key) in comments" :key="key">
                    <ShowComments :comment="comment"/>
                </v-card>
            </v-layout>
        </v-container>
    </v-container>
</template>

<script>
import Recap from '../components/main/details/cp-Recap.vue';
import ShowComments from '../components/main/details/cp-ShowComments.vue';
import Ajoutcom from '../components/main/details/cp-Ajoutcom';
import axios from 'axios';
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
            const url = `https://api.themoviedb.org/3/${this.typeOfMedia}/${this.media_id}?api_key=833ff06d69182d00cff97e3090365785`;
            axios
                .get(url)
                .then(response => {
                    this.mediaData = response.data;
                })
                .catch(err=>{
                    throw err;
                })
        },
        getComments(){
            this.comments = {};
            const url = `http://localhost/AllezCine/allezcineback/read.php?idMovie=${this.media_id}`;
            axios
                .get(url)
                .then(response => {
                    this.comments = response.data;
                    console.log(this.comments)
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