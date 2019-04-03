<template>
    <div class="gallery">
        <p>{{movies}}</p>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            movies:{},
        }
    },
    components: {
        
    },
    props:[
        'contenu'],
    mounted(){
        axios
            .get(`https://api.themoviedb.org/3/trending/${this.contenu}/day?api_key=833ff06d69182d00cff97e3090365785`)
            .then(response => {
                this.movies = response.data.results
            })
            console.log(this.movies)
    },
}
</script>

<style scoped>

</style>