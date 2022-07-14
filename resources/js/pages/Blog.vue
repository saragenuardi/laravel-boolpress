<template>
    <div>
        <Banner />
        <h1>Blog</h1>
        <Posts />
    </div>
</template>

<script>
import Banner from "./Banner.vue"
import Posts from "../components/Posts.vue"

export default {
name: "Blog",
components: {
    Posts,
    Banner
}
}
</script>

<style>
;
</style>