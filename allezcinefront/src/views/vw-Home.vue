<template>
    <v-layout row>
        <v-flex offset-md1 md10 sm12>
            <div id="big">
                <v-container fluid>
                    <Gallery :home="true" :nombre="12" contenu="movie"/>
                    <Gallery :home="true" :nombre="12" contenu="tv"/>
                </v-container>
            </div>
        </v-flex>
    </v-layout>
</template>

<script>
import Gallery from "../components/main/cp-Gallery.vue"
export default {
    name: "vw-Home",
    components:{
        Gallery,
    }
}
</script>

<style scoped>

</style>
