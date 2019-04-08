<template>
    <v-container>
        <Recap :mediaData="mediaData"/>
    </v-container>
</template>

<script>
import Recap from '../components/main/details/cp-Recap.vue';
import axios from 'axios';
export default {
    name: "vw-Details",
    components:{
        Recap
    },
    data(){
        return{
            typeOfMedia : this.$route.params.media,
            media_id : this.$route.params.id,
            mediaData : {}
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
        }
    },
    beforeMount(){
        this.getMediaData()
    }
}
</script>

<style scoped>

</style>