<template>
    <div id="big">
        <v-container fluid>
            <gallery contenu="movie"/>
            <gallery contenu="tv"/>
        </v-container>
    </div>
</template>

<script>
import gallery from "../components/main/cp-Gallery.vue"
export default {
    name: "vw-Home",
    props:{

    },
    components:{
        gallery,
    }
}
</script>

<style scoped>

</style>
