<template>
    <div>
        {{ typeOfMedia }}
    </div>
</template>

<script>
export default {
    name: "vw-Movies",
    data(){
        return {
            typeOfMedia : this.$route.params.media,
        }
    }
}
</script>

<style scoped>

</style>