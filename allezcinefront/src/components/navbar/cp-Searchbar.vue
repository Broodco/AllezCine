<template>
    <div>
        <suggestions
        class='searchbar'
            v-model="searchQuery"
            :onItemSelected="onSearchItemSelected"
            :onInputChange="onInputChange">
            <div slot="item" slot-scope="props" class="single-item">
                <template v-if="props.item.Icon && props.item.Icon.URL">
                <div class="image-wrap" :style="{'backgroundImage': 'url('+ props.item.Icon.URL + ')' }"></div>
                </template>
                <span class="name">{{props.item.Text}}</span>
            </div>
        </suggestions>
    </div>
</template>

<script>
import axios from 'axios';
import Suggestions from 'v-suggestions';

export default {
    name: "cp-Searchbar",
    components:{
        Suggestions},
    data(){
        return{
            searchQuery: '',
            selectedSearchItem: array()
        }
    },
    methods: {
        onInputChange (query) {
            if (query.trim().length === 0) {
                return null
            }
            const url = `https://api.themoviedb.org/3/search/multi?sort_by=popularity.desc&query=${query}&api_key=833ff06d69182d00cff97e3090365785`
            axios
            .get(url)
            .then(response => {
                for (let i = 0; i< response.data.results.length ; i++)
                if (i<5){
                    let item = {
                        id : response.data.results[i].id,
                        name : response.data.results[i].name
                    }
                    this.selectedSearchItem.push(item)
                }
            })
        },
    }
}
</script>

<style scoped>
    .searchbar{
        background-color: white;
        color: black;
        border-radius : 50px;
        height: 30px;
        width: 300px;
        padding: 5px;
        padding-left:20px;
    }
</style>
