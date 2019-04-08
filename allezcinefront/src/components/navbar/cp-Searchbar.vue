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
        @submit="gotoDetails(this.id,this.mediaType)"
        >
        <ul v-show="isOpen" :class="[isMobile? 'autocomplete-results-mobile' : 'autocomplete-results']">
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
    name: "cp-Searchbar",
    data(){
        return{
            search: '',
            id : null,
            mediaType : null,
            results : [],
            isOpen : false,
            isLoading: false,
            arrowCounter : -1
        }
    },
    props:{
        isMobile : Boolean
    },
    methods: {
        onChange : debounce(function(){
            if (this.isLoading){
                this.isOpen = false
            } else {
                if (this.search != ''){
                    this.isOpen = true;
                    this.isLoading = true
                    this.loadResults()
                }
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
                                    name : response.data.results[i].name,
                                    mediaType : response.data.results[i].media_type
                                }
                                this.results.push(item)
                            } else {
                                let item = {
                                    id : response.data.results[i].id,
                                    name : response.data.results[i].title,
                                    mediaType : response.data.results[i].media_type
                                }
                                this.results.push(item)
                            }
                        }
                    }
                })
            this.isLoading = false;
        },
        setResult(result){
            this.search = result.name
            this.id = result.id
            this.mediaType = result.mediaType
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
            this.mediaType = this.results[this.arrowCounter].mediaType;
            this.isOpen = false;
            this.arrowCounter = -1;
            this.gotoDetails(this.id,this.mediaType);
        },
        handleClickOutside(evt) {
            if (!this.$el.contains(evt.target)) {
                this.isOpen = false;
                this.isLoading = false;
                this.results = [];
                this.arrowCounter = -1;
            }
        },
        gotoDetails(id,media){
            this.$router.push({
                path : `/details/${media}/${id}`
            })
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
    .autocomplete-results-mobile {
        position: fixed;
        top: 95px;
        left: 90px;
        padding: 0;
        margin: 0;
        background: white;
        color : black;
        border: 1px solid #eeeeee;
        height: auto;
        width: 194px;
        z-index: 5;
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
