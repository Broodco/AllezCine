<template>
    <div>
        <v-layout row>
            <v-flex offset-md1 md10 sm12>
                <div id="big">
                    <v-container fluid>
                    <Gallery :nombre="40" :contenu="typeOfMedia"/>
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
        }
    }
}
</script>

<style scoped>

</style>