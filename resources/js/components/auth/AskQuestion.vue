<template>
<div>
  <v-app id="inspire">
  <navbar-component></navbar-component>
    <!-- Content -->
    <v-content class="m-0">
      <div class="container-fluid m-0 p-3">
        <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>

        <div class="container-fluid">
          <h1 class="mb-3">Ask Question</h1>

          <div class="row justify-content-between">
            <div
              class="col-xl-8 mt-5 order-md-2 order-lg-1 order-sm-2 col-lg-8 p-0 m-0 col-md-12 col-12"
            >
              <form action class="container-fluid p-4 contain" method="POST">
                <div class="mb-5">
                  <input
                    type="text"
                    name="title"
                    v-model="title"
                    id="title"
                    class="form-control pr-0 p-4 form-title"
                    placeholder="Title"
                    autocomplete="off"
                    autofocus
                  />
                  <span
                    class="card-subtitle text-muted"
                  >Be specific and imagine you’re asking a question to another person</span>
                </div>

                <div class>
                  <editor
                    v-model="question"
                    api-key="s0a0a2vky79uza8yzxwbe4khvedd7mdehfrp4e1b4rxoplw4"
                    :init="{
                        height: 400,
                        menubar: true,
                        plugins: [
                        'advlist codesample autolink lists link image charmap print preview anchor',
                        'searchreplace visualblocks code fullscreen',
                        'insertdatetime media table paste code help wordcount'
                        ],
                        codesample_global_prismjs: true,
                        codesample_languages: [
                            { text: 'HTML/XML', value: 'markup' },
                            { text: 'JavaScript', value: 'javascript' },
                            { text: 'CSS', value: 'css' },
                            { text: 'PHP', value: 'php' },
                            { text: 'Ruby', value: 'ruby' },
                            { text: 'Python', value: 'python' },
                            { text: 'Java', value: 'java' },
                            { text: 'C', value: 'c' },
                            { text: 'C#', value: 'csharp' },
                            { text: 'C++', value: 'cpp' }
                        ],
                        toolbar:
                        'undo redo | codesample | formatselect | bold italic backcolor | \
                        alignleft aligncenter alignright alignjustify | \
                        bullist numlist outdent indent | removeformat | help'
                    }"
                  />
                </div>

                <div class="mt-5">
                  <multiselect
                    v-model="tags"
                    tag-placeholder="Add this as new tag"
                    placeholder="Search or Add a tag"
                    label="name"
                    :options="options"
                    track-by="name"
                    :multiple="true"
                    :taggable="true"
                    @tag="addTag"
                  ></multiselect>
                </div>

                <a class="btn btn-outline-primary mt-5" @click="postQuestion">Publish Question</a>

                <!-- Show Success Alert on Successful Creation of Question -->
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
              </form>
            </div>

            <div
              class="col-xl-3 mt-5 order-lg-2 order-md-1 order-sm-1 mt-xl-0 mt-lg-0 col-lg-3 p-0 col-md-12 col-12"
            >
              <div class="mt-4 card">
                <div class="card-header bg-primary text-white">
                  <h6 class="mb-0 font-weight-bold">Guide to Ask Question</h6>
                </div>
                <div class="card-body px-2">
                  <p
                    class="card-text"
                  >The community is here to help you with specific coding, algorithm, or language problems.</p>
                  <p class="card-text">Avoid asking opinion-based questions.</p>

                  <div class="col-12 p-0">
                    <div
                      class="nav flex-column nav-pills"
                      id="v-pills-tab"
                      role="tablist"
                      aria-orientation="vertical"
                    >
                      <a
                        class="nav-link active"
                        id="v-pills-home-tab"
                        data-toggle="pill"
                        href="#v-pills-home"
                        role="tab"
                        aria-controls="v-pills-home"
                        aria-selected="true"
                      >Summarize the Problem</a>
                      <a
                        class="nav-link"
                        id="v-pills-profile-tab"
                        data-toggle="pill"
                        href="#v-pills-profile"
                        role="tab"
                        aria-controls="v-pills-profile"
                        aria-selected="false"
                      >Say what you've tried</a>
                      <a
                        class="nav-link"
                        id="v-pills-messages-tab"
                        data-toggle="pill"
                        href="#v-pills-messages"
                        role="tab"
                        aria-controls="v-pills-messages"
                        aria-selected="false"
                      >Show some codes</a>
                    </div>
                  </div>

                  <div class="col-12 p-0 mt-5 text-black">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="v-pills-home"
                        role="tabpanel"
                        aria-labelledby="v-pills-home-tab"
                      >
                        <ul style="list-style-type:square">
                          <li>Include details about your goal</li>

                          <li>Describe expected and actual results</li>

                          <li>Include any error messages</li>
                        </ul>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="v-pills-profile"
                        role="tabpanel"
                        aria-labelledby="v-pills-profile-tab"
                      >
                        <p>Show what you’ve tried and tell us what you found (on this site or elsewhere) and why it didn’t meet your needs. You can get better answers when you provide research.</p>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="v-pills-messages"
                        role="tabpanel"
                        aria-labelledby="v-pills-messages-tab"
                      >
                        <p>When appropriate, share the minimum amount of code others need to reproduce your problem (also called a minimum, reproducible example)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <job-card class="mt-5 p-0"></job-card>
            </div>
          </div>
        </div>
      </div>
    </v-content>
  </v-app>
</div>
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
import Multiselect from "vue-multiselect";
import validationError from "../non-auth/ValidationError";
import JobCard from "./JobCard";
import NavbarComponent from "./NavbarComponent";


export default {
  props: {
    source: String
  },
  components: {
    editor: Editor,
    Multiselect,
    validationError,
    JobCard,
    NavbarComponent
  },

  mounted() {
    this.fetchTags();
    this.getUser();
  },

  data: () => ({
    success: "",
    title: "",
    tags: [],
    user: {},
    options: [],
    validationErrors: "",
  }),

  methods: {
    addTag(newTag) {
      const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor(Math.random() * 10000000)
      };
      this.options.push(tag);
      this.tags.push(tag);
    },

    fetchTags() {
      axios
        .get("/tags")
        .then(res => {
          console.log(res.data);
          this.options = res.data;
        })
        .catch(err => console.log(err));
    },

    getUser() {
      axios
        .get("/user")
        .then(res => {
          console.log(res.data);
          this.user = res.data;
        })
        .catch(err => console.log(err));
    },

    postQuestion() {
      const data = {
        user_id: this.user.id,
        title: this.title,
        tag_ids: this.tags,
        question: this.question
      };
      axios
        .post("/question", data)
        .then(res => {
          console.log(res.data);
          this.success = res.data.message;
          this.title = "";
          this.question = "";
          this.tags = [];
          location = "/question/" + res.data.id;
          
        })
        .catch(error => {
          if (error.response.status == 422) {
            console.log(error.response.data.errors);
            this.validationErrors = error.response.data.errors;
          }
          console.log(error.response);
        });
    }
  }
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style scoped>

.nav-pills > .active {
  background: #fff !important;
  color: rgb(58, 49, 49) !important;
  font-weight: bold !important;
  border: 1px solid rgb(58, 49, 49) !important;
}
</style>

<style scoped>
.active {
  color: rgb(58, 49, 49) !important;
}
</style>
