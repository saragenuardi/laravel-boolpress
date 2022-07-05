<template>
  <div>
    <h2>Questa è la mia App di Vue</h2>
    <WorkInProgress />
  </div>
</template>

<script>
import WorkInProgress from '../components/WorkInProgress.vue';
export default {
    name: 'App',
    components: {
      WorkInProgress,
    },
};
</script>

<style>

</style>