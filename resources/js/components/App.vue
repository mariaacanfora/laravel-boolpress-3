<template>
  <div class="container text-center">
      <div v-for="post in postsLists" :key="post.id">
          <h1>{{helloMsg}}</h1>
      </div>
  </div>
</template>

<script>
export default {
    name: 'App', 
    data() {
        return {
            helloMsg: "Benvenuto in Matrix",
            postsList: [],
        };
    },
    mounted() {
        window.axios.get("/api/posts").then((resp) => {
            this.postsList = resp.data;
        });
    },
}
</script>

<style>

</style>