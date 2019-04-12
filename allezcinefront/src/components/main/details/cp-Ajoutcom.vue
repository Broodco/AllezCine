<template>
    <v-container fluid grid-list-md text-ms-center>
        <h1>Commentaires</h1>
            <v-layout row wrap>
                <v-flex xs12 sm7>
                    <v-card>
                        <v-text-field  v-model="comment.title" single-line solo label="Titre...">
                            {{mediaid}}
                        </v-text-field>
                        <v-textarea  v-model="comment.texte" single-line solo label="Ajouter un commentaire...">
                        </v-textarea>
                        <v-layout>
                            <v-flex offset-sm7 xs2>
                                <v-btn @click="sendCom" color="error">AJOUTER LE COMMENTAIRE...</v-btn>
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>
            </v-layout>
    </v-container>
</template>

<script>
import {create} from '../../../axios/localAPI.js'
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
            create (commentLocal)
                .then(response => {
                    this.$emit('sent');
                    this.comment.title = "";
                    this.comment.texte = "";
                    this.requestMade = true;
                    this.message = response.data.message
                    this.requestStatus = response.status
                })
                .catch(err => {
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
