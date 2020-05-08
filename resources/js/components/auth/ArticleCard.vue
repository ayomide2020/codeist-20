<template>
  <div>
    <div class="container-fluid p-0">
      <div class="card">
        <div class="card-header bg-primary text-white px-2 py-3">
          <p class="mb-0 font-weight-bold">You don't want to miss this!</p>
        </div>
        <img
          class="card-img-top"
          src="https://res.cloudinary.com/oluwatobi/image/upload/v1588103249/codeist/undraw_online_articles_79ff_fcznp6.svg"
          alt="Article"
        />
        <div class="card-body p-0">
          <ul class="p-0 list-group list-group-flush" v-for="post in posts" :key="post.id">
            <li class="py-2 px-3 post list-group-item">
              <i class="fa fa-edit"></i>
              {{ post.title }}
            </li>
          </ul>
        </div>
        <div class="card-body">
          <a href="/canvas" class="card-link">Create One</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ArticleCard",

  data: () => ({
    posts: []
  }),

  mounted() {
    this.showfive();
  },

  methods: {
    showfive() {
      axios
        .get("/posts/randomfive")
        .then(res => {
          this.posts = res.data.posts;
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style scoped>
.post {
  font-size: 12px !important;
}
</style>
