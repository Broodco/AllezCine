<template>
    <div id="big">
        <gallery contenu="movie"/>
        <gallery contenu="tv"/>
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
#big{
    margin-top:200px;
}
</style>
