<template>
<div>
  <v-app id="inspire">
  <navbar-component></navbar-component>
    <!-- Content -->
    <v-content>
      <div class="m-0 p-0 container-fluid">
        <div class="container-fluid row p-0 m-0">
          <div
            class="container-fluid border-bottom pb-5 m-0 row justify-content-between align-items-start"
          >
            <div class="m-0 p-0 col-10">
              <h4 class="mb-5 font-weight-bold">{{ question.title }}</h4>
              <span>
                Asked:
                <i class="fa fa-clock"></i>
                <b>{{ question.date }}</b>
              </span>
              <span class="ml-4">
                Difficulty:
                <i class="fa fa-task"></i>
                <b>{{ question.level }}</b>
              </span>
              <span class="ml-4">
                Status:
                <i class="fa fa-task"></i>
                <b>{{ question.solved ? 'Closed' : 'Open' }}</b>
              </span>
            </div>
            <div class="m-0 p-0 col-2">
              <a href="/question" class="btn btn-outline-primary">Ask Question</a>
            </div>
          </div>

          <div class="mt-5 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
            <!-- Question -->
            <div class="container-fluid row m-0 bg-grey px-3 py-5">
              <div class="col-1">
                <vote :question="question"></vote>
              </div>
              <div class="col-11">
                <span v-html="question.question"></span>
                <a
                  href="#"
                  v-for="tag in question.tag_ids"
                  :key="tag.id"
                  class="mt-5 mr-2 badge badge-info text-white py-2 px-4"
                >{{ tag.name }}</a>
              </div>
            </div>

            <!-- Answers -->
            <div class="space-top-5">
              <h4 class="mb-5 font-weight-bold">{{ question.answers.length }} Answers</h4>

              <!-- If there are no answers -->
              <div v-if="question.answers.length == 0" class="container-fluid bg-grey px-3 py-5">
                <div class="mt-5">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      <span class="sr-only">Close</span>
                    </button>
                    <strong>Oops!</strong> This question hasn't been answered by anyone yet. Be the first to do so.
                  </div>
                </div>
              </div>

              <!-- If there are answers -->
              <div v-else class="container-fluid bg-grey px-3 py-5">
                <div class="space-top-3" v-for="answer in question.answers" :key="answer.id">
                  <span v-html="answer.answer"></span>
                  <hr class="space-top-3" />
                </div>
              </div>
            </div>

            <!-- Share Answer -->
            <div class="space-top-5 container-fluid">
              <h5>
                Know someone that can answer this question?
                <b>Share on</b>
              </h5>
              <div class="d-flex mt-4">
                <div>
                  <a
                    :href="'https://twitter.com/share?url=' + url"
                    class="btn btn-outline-dark"
                  >Twitter</a>
                </div>

                <div class="ml-3">
                  <a
                    :href="'https://www.facebook.com/sharer/sharer.php?u=#' + url"
                    class="btn btn-outline-dark"
                  >Facebook</a>
                </div>

                <div class="ml-3">
                  <a href="#" @click="doCopy" class="btn btn-outline-dark">Copy link</a>
                </div>
              </div>
            </div>

            <!-- Provide your Answer -->
            <div class="space-top-5 container-fluid px-3 py-5">
              <h4>Your Answer</h4>
              <your-answer :question="question"></your-answer>
            </div>
          </div>

          <div
            class="mt-5 p-0 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-none d-xl-block d-lg-block d-md-block"
          >
            <article-card></article-card>
            <job-card class="mt-5"></job-card>
          </div>
        </div>
      </div>
    </v-content>
  </v-app>
</div>
</template>

<script>
import ArticleCard from "./ArticleCard";
import JobCard from "./JobCard";
import YourAnswer from "./YourAnswer";
import Vote from "./Vote";
import NavbarComponent from "./NavbarComponent";

export default {
  props: {
    question: {
      type: Object
    },
  },

  components: {
    ArticleCard,
    JobCard,
    YourAnswer,
    Vote,
    NavbarComponent
  },

  mounted() {},

  data: () => ({
    url: window.location.href,
  }),

  methods: {
    doCopy: function () {
        this.$copyText(this.url).then(function (e) {
          alert('Copied')
          console.log(e)
        }, function (e) {
          alert('Can not copy')
          console.log(e)
        })
    },

  }
};
</script>

<style scoped>
.bg-grey {
  background: rgba(225, 225, 225, 0.2);
  border-radius: 5px;
}

.space-top-5 {
  margin-top: 5em;
}

.space-top-3 {
  margin-top: 3em;
}
</style>
