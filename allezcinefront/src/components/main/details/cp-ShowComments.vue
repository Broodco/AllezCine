<template>
    <v-container align-start align-content-center >
        <v-layout column>
            <h2>{{comment.TITLE}}</h2>
            <p>{{comment.TEXTE}}</p>
            <div>
                <p class="date">{{comment.DATE}}</p>
                <span> 
                    <v-btn depressed flat fab v-on:click="sendLike">
                        <i class="material-icons">
                            thumb_up
                        </i>
                    </v-btn>
                    <span>{{comment.LIKES}}</span>
                </span>
            </div>
        </v-layout>
    </v-container>
</template>

<script>
import axios from "axios";

export default {
    name: "cp-DisplayComments",
    data(){
        return{

        }
    },
    props:{
        comment: Object,

    },
    methods:{
        sendLike: function() {
            var url = `http://localhost/AllezCine/allezcineback/likes.php?idCom=${this.comment.IDCOM}`
            axios
                .get(url)
                .then(function(response){
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    },
}
</script>

<style scoped>

</style>
