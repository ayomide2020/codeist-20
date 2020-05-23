<template>
<div>
  <v-app id="inspire">
  <navbar-component></navbar-component>
    <!-- Content -->
    <v-content>
      <div class="m-0 p-0 container-fluid">
        <div class="container-fluid row p-0 m-0">
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="container-fluid m-0 row justify-content-between">
              <div class>
                <h3 class="mb-5">Tags</h3>
                <p class="lead text-secondary">Tags are great for describing the details of your question</p>
              </div>
              <div class>
                <a href="/question" class="btn btn-outline-primary">Ask Question</a>
              </div>
            </div>

            <!-- Tag Content -->
            <form>
              <div class="container-fluid p-0">
                <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>
                <div class="container-fluid row marginFive p-0">
                  <div class="container-fluid col-xl-10 col-lg-10 col-md-12 col-12 font-serif">
                    <div class="container-fluid m-0 row p-0 justify-content-between">
                      <div class="col-10 p-0 m-0">
                        <input
                          type="text"
                          v-model="name"
                          name="tag"
                          id="tag"
                          :items="tags"
                          class="form-control pr-0 p-4 form-tag"
                          placeholder="Add a tag"
                          autocomplete="off"
                          @focus="success = ''"
                        />
                      </div>
                      <div class="col-2 p-0 m-0">
                        <a class="btn btn-outline-primary px-5 py-3" @click="postTag">Add Tag</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="alert alert-success alert-dismissible fade mt-5 show"
                  v-if="success"
                  role="alert"
                >
                  {{ success }}
                  <button
                    type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </form>

            <div class="col-xl-12 py-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 ">
                <a href="#" v-for="tag in tags" :key="tag.id" class="ml-5 mt-5 badge badge-info text-white py-2 px-4">{{ tag.name }}</a>
            </div>
          </div>

          <div
            class="p-0 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-none d-xl-block d-lg-block d-md-block"
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
import validationError from "../non-auth/ValidationError";
import NavbarComponent from './NavbarComponent';

export default {
  props: {
    source: String,
    default: {
      type: Object
    }
  },

  components: {
    ArticleCard,
    JobCard,
    validationError,
    NavbarComponent
  },

mounted() {
    this.fetchTags();
  },

  data: () => ({
    name: "",
    user: {},
    tags: [],
    success: "",
    validationErrors: "",
  }),

  methods: {
    fetchTags() {
      axios
        .get("/tags")
        .then(res => {
          console.log(res.data);
          this.tags = res.data;
        })
        .catch(err => console.log(err));
    },

    postTag() {
      const data = {
        name: this.name
      };
      axios
        .post("/tags", data)
        .then(res => {
          console.log(res.data);
          this.success = res.data.message;
          this.name = '';
          this.fetchTags();
        })
        .catch(error => {
          if (error.response.status == 422) {
            console.log(error.response.data.errors);
            this.validationErrors = error.response.data.errors;
          }
          console.log(error.response);
        });
    },

  }
};
</script>

<style scoped>
.form-tag {
  font-size: 20px;
  border: none !important;
  border-bottom: 1px solid #000 !important;
}

.form-tag:active {
  font-size: 20px;
  outline: 0;
  box-shadow: none !important;
  border: none !important;
}

.form-tag:focus {
  box-shadow: none !important;
}
.marginFive{
  margin-top: 50px;
}
</style>