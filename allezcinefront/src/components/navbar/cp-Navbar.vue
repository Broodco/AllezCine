<template>
    <v-toolbar 
        app 
        color="grey-darken-4"
        flat
        height="60px"
        dark
    >
        <v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn small depressed flat color="red" class="custom-hover font-weight-bold" @click="changeView($event,'home')">Home</v-btn>
            <v-btn small depressed flat class='text-capitalize' @click="changeView($event,'movies')">Films Populaires</v-btn>
            <v-btn small depressed flat class='text-capitalize' @click="changeView($event,'series')">Séries TV</v-btn>
        </v-toolbar-items>
        <v-spacer></v-spacer>
        <input 
        type="search" 
        v-model="search" 
        class="searchbar" 
        placeholder="Recherche"
        @click="searchData($event,this.value)"
        > 
    </v-toolbar>
</template>

<script>
export default {
    name: "cp-Navbar",
    data(){
        return{
            search : ""
        }
    },
    methods:{
        changeView(event,reference){
            this.$router.push({
                name : reference
            })
        },
        searchData(event,reference){
            // Search Bar
        }
    }
}
</script>

<style scoped>
    .v-btn:hover:before{
        background :rgba(255,255,255,0.5);
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
    
</style>
