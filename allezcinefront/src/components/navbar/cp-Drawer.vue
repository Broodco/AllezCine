<template>
    <v-navigation-drawer
        :mini-variant="mini"
        v-model="drawer"
        dark
        fixed
        clipped
    >
        <v-list class='pa-1'>
            <v-list-tile 
                v-if="mini"
                @click.stop="mini = !mini"
            >
                <v-list-tile-action>
                    <v-icon>chevron_right</v-icon>
                </v-list-tile-action>
            </v-list-tile>
            <v-list-tile v-else>
                <v-list-tile-content>
                    <v-list-tile-title>AllezCiné</v-list-tile-title>
                </v-list-tile-content>
                <v-list-tile-action>
                    <v-btn icon @click.stop="mini = !mini">
                        <v-icon>chevron_left</v-icon>
                    </v-btn>
                </v-list-tile-action>
            </v-list-tile>
        </v-list>
        <v-list class="pt-0 dense">
            <v-divider light></v-divider>
            <v-list-tile>
                <v-list-tile-action>
                    <v-icon>search</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <SearchBar :isMobile='true'/>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile
            @click="changeView($event,'home')">
                <v-list-tile-action>
                    <v-icon>home</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>
                        Home
                    </v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile
            @click="changeView($event,'movies')">
                <v-list-tile-action>
                    <v-icon>movie</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>
                        Movies
                    </v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile
            @click="changeView($event,'series')">
                <v-list-tile-action>
                    <v-icon>tv</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                    <v-list-tile-title>
                        Series TV
                    </v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
import SearchBar from './cp-Searchbar.vue'

export default {
    name: "cp-Drawer",
    components:{
        SearchBar
    },
    data(){
        return{
            mini : false,
            searchStatus : false,
            drawer : false
        }
    },
    methods:{
        changeView(event,reference){
            this.$router.push({
                name : reference
            })
        },
        showSearchBar(){
            this.searchStatus = !this.searchStatus
        },
        switchDrawer(){
            this.drawer = !this.drawer
        }
    } 
}
</script>

<style>
</style>
