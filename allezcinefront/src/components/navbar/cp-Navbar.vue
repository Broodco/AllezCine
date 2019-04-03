<template>
    <v-toolbar 
    app 
    color="grey-darken-4"
    flat
    height="60px"
    dark
    >
        <v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>
        <v-toolbar-title>AllezCine</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">
            <v-btn class="flat">Home</v-btn>
            <v-btn class="flat">Movies</v-btn>
            <v-btn class="flat">Series</v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
export default {
    name: "cp-Navbar"
}
</script>

<style scoped>

</style>
