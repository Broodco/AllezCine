<template>
    <v-layout row>
        <v-flex offset-sm1 sm10>
            <div id="big">
                <v-container fluid>
                    <Gallery contenu="movie"/>
                    <Gallery contenu="tv"/>
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
