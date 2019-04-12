<template>
    <v-container align-start align-content-center >
        <v-layout column>
            <h2>{{comment.TITLE}}</h2>
            <p>{{comment.TEXTE}}</p>
            <div>
                <p class="date">{{comment.DATE}}</p>
                <span> 
                    <v-btn :disabled="disabledButton" :ripple="{ center: true }" depressed icon v-on:click="sendLike">
                        <i class="material-icons">
                            thumb_up
                        </i>
                    </v-btn>
                    <span >{{comment.LIKES}}</span>
                </span>
            </div>
        </v-layout>
    </v-container>
</template>

<script>
import {like} from '../../../axios/localAPI.js'
export default {
    name: "cp-DisplayComments",
    data(){
        return{
            disabledButton : false,
        }
    },
    props:{
        comment: Object,

    },
    methods:{
        sendLike: function() {
            this.disabledButton = true;
            this.comment.LIKES++;
            like(this.comment.IDCOM)
                .then(response => {
                    return console.log(response);
                })
                .catch(err => {
                    return console.log(err);
                })
        }
    },
}
</script>

<style scoped>
    .green{
        background-color: black;
    }
</style>
