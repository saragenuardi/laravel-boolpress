<template>
  <div class="container text-center mt-4">
    <h2>Questa è la mia App di Vue</h2>
    <Posts />
  </div>
</template>

<script>
import Posts from "../components/Posts.vue"
export default {
    name: 'App',
    components: {
      Posts,
    },
};
</script>

<style>

</style>