<template>
    <div class='recap'>
        <v-img :src="'https://image.tmdb.org/t/p/original'+mediaData.poster_path"  height="360" contain="true"/>
    </div>
</template>

<script>
export default {
    name : "cp-Recap",
    data(){
        
    },
    props:{
        mediaData : Object
    }
}
</script>

<style scoped>
    .recap{
        display:flex;
        flex-direction: row;
        justify-content: space-around;
    }
</style>