<template>
    <div class='autocomplete'>
        <input 
        type="text" 
        v-model="search" 
        class="searchbar" 
        placeholder="Recherche" 
        @input="onChange()"
        @keydown.down="onArrowDown()"
        @keydown.up="onArrowUp()"
        @keydown.enter="onEnter()"
        >
        <ul v-show="isOpen" class="autocomplete-results">
            <li 
                class="loading" 
                v-if="isLoading">
                Recherche en cours...
            </li>
            <li 
                v-else 
                v-for="(result,index) in results"
                :key="index"
                @click="setResult(result)"
                class="autocomplete-result"
                :class="{ 'is-active': index === arrowCounter }"
            >
                {{ result.name }}
            </li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';
import debounce from 'lodash.debounce'

export default {
    // const url = `https://api.themoviedb.org/3/search/multi?sort_by=popularity.desc&query=${query}&api_key=833ff06d69182d00cff97e3090365785`
    name: "cp-Searchbar",
    data(){
        return{
            search: '',
            id : null,
            results : [],
            isOpen : false,
            isLoading: false,
            arrowCounter : -1
        }
    },
    methods: {
        onChange : debounce(function(){
            if (this.isOpen){
                this.isLoading = true
            } else {
                this.isOpen = true;
                this.loadResults()
            }
        },1000),
        loadResults(){
            this.results = []
            const url = `https://api.themoviedb.org/3/search/multi?sort_by=popularity.desc&query=${this.search}&api_key=833ff06d69182d00cff97e3090365785`;
            axios
                .get(url)
                .then(response => {
                    for (let i = 0 ; i < response.data.results.length; i++){
                        if (i<5){
                            if (response.data.results[i].name){
                                let item = {
                                    id : response.data.results[i].id,
                                    name : response.data.results[i].name
                                }
                                this.results.push(item)
                            } else {
                                let item = {
                                    id : response.data.results[i].id,
                                    name : response.data.results[i].title
                                }
                                this.results.push(item)
                            }
                        }
                    }
                })
        },
        setResult(result){
            this.search = result.name
            this.id = result.id
            this.isOpen = false
        },
        onArrowDown() {
            if (this.arrowCounter < this.results.length) {
                this.arrowCounter = this.arrowCounter + 1;
            }
        },
        onArrowUp() {
            if (this.arrowCounter > 0) {
            this.arrowCounter = this.arrowCounter - 1;
            }
        },
        onEnter() {
            this.search = this.results[this.arrowCounter].name;
            this.id = this.results[this.arrowCounter].id;
            this.isOpen = false;
            this.arrowCounter = -1;
            this.gotoDetails(this.id);
        },
        handleClickOutside(evt) {
            if (!this.$el.contains(evt.target)) {
                this.isOpen = false;
                this.arrowCounter = -1;
            }
        },
        gotoDetails(){
            // LINK TO DETAILS PAGE
        }
    },
    mounted() {
        document.addEventListener('click', this.handleClickOutside);
    },
    destroyed() {
        document.removeEventListener('click', this.handleClickOutside);
    }
}
</script>

<style scoped>
    .autocomplete{
        width: 300px;
    }
    .searchbar{
        background-color: white;
        color: black;
        border-radius : 50px;
        height: 30px;
        width: 300px;
        padding: 5px;
        padding-left:20px;
    }
    .autocomplete-results {
        position: fixed;
        top: 45px;
        right: 35px;
        padding: 0;
        margin: 0;
        background: white;
        color : black;
        border: 1px solid #eeeeee;
        height: auto;
        width: 275px;
    }
    .autocomplete-result {
        list-style: none;
        text-align: left;
        padding: 4px 2px;
        cursor: pointer;
    }
    .autocomplete-result.is-active,
    .autocomplete-result:hover {
        background-color: #000000;
        color: white;
    }
</style>