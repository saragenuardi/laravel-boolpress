<template>
  <div class="container text-center mt-4">
    <myHeader />
    <router-view></router-view>
    <!-- <h2>Questa è la mia App di Vue</h2>
    <Posts /> -->
  </div>
</template>

<script>
 import myHeader from "../components/myHeader.vue";
export default {
  name: "App",
  components: {
     myHeader 
  }
    
    
};
</script>

<style>

</style>