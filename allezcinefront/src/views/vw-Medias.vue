<template>
    <div>
        <v-layout row>
            <v-flex offset-md1 md10 sm12>
                <div id="big">
                    <v-container fluid>
                    <Gallery :pageNumber="pageNumber" :nombre="40" :contenu="typeOfMedia"/>
                    <v-btn large color="error" @click="julienlepage">More</v-btn>
                    </v-container>
                </div>
            </v-flex>
        </v-layout>    
    </div>
</template>

<script>
import Gallery from "../components/main/cp-Gallery"
export default {
    name: "vw-Medias",
    components:{
        Gallery
    },
    data(){
        return {
            typeOfMedia : this.$route.params.medias,
            pageNumber:1
        }
    },
    methods: { 
        julienlepage(){
            this.pageNumber++
            console.log(this.pageNumber);
        }


    }
}
</script>

<style scoped>


</style>