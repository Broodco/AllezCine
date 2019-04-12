<template>
    <v-container fluid grid-list-md text-ms-center>
        <h1>Commentaires</h1>
            <v-layout row wrap pt-4>
                <v-flex xs12 md10 offset-md1>
                    <v-card>
                        <v-card-title>
                            <v-text-field  v-model="comment.title" single-line placeholder="Titre...">
                                {{mediaid}}
                            </v-text-field> 
                        </v-card-title>
                        <v-card-text>
                            <v-textarea  v-model="comment.texte" single-line placeholder="Ajouter un commentaire...">
                            </v-textarea>
                        </v-card-text>
                        <v-card-actions>
                                <v-btn @click="sendCom()" color="error">AJOUTER LE COMMENTAIRE...</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
    </v-container>
</template>

<script>
import { createCom } from '../../../axios/localAPI.js'
export default {
    data(){
        return {
            comment:{
                idMovies:"",
                title:"",
                texte:"",
            }
        }
    },
    props:{
        mediaid: String,
    },
    methods:{
        idClic(){
            this.comment.idMovies= parseInt(this.mediaid);
        },
        sendCom(){
            let commentLocal = this.comment;
            this.idClic();
            createCom (commentLocal)
                .then(response => {
                    console.log(response)
                    this.$emit('sent');
                    this.comment.title = "";
                    this.comment.texte = "";
                    this.requestMade = true;
                    this.message = response.data.message
                    this.requestStatus = response.status
                })
                .catch(err => {
                    console.log(err)
                    throw err;
                });
        } 
    }
}
</script>

<style scoped>
h1{
    color:gray;
}
</style>
