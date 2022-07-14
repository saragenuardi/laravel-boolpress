<template>
  <div class="container">
    <h2>Lista di post</h2>
    <div class="row row-cols-3">
      <div v-for="post in posts" :key="post.id" class="col">
      <PostCard :post="post"/>
      </div>
    </div>
  </div>
</template>

<script>
import PostCard from '../components/PostCard.vue';
export default {
  name: "Posts",
  components: {
    PostCard,
  },
  data() {
    return {
      posts: [],
    };
  },
  created() {
    this.getPosts();
  },
  methods: {
    getPosts() {
      axios.get("http://127.0.0.1:8000/api/posts").then(resp => {
        this.posts = resp.data.results;
      });
    },
  
  },
};
</script>

<style>
</style>