<template>
<div>
<v-app id="inspire">
  <navbar-component></navbar-component>
    <!-- Content -->
    <v-content class="m-0">
    <div class="container-fluid p-0 font-serif">
      <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>
      <form action class="container-fluid p-4" method="POST">
      <div class="row">
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-12 bg-grey contain px-2 py-3 mt-5">
          <h2><p class="mb-0 ml-5 font-weight-bold text-dark">Post Job</p></h2>
          <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 px-2 py-3 mb-5">
                  <input
                    type="text"
                    name="title"
                    v-model="title"
                    id="title"
                    class="form-control pr-0 p-4 mb-4 form"
                    placeholder="Title"
                    autocomplete="off"
                    autofocus
                  />
                  <input
                    type="text"
                    name="Company"
                    v-model="company"
                    id="company"
                    class="form-control pr-0 p-4 mb-4 form"
                    placeholder="Company"
                    autocomplete="off"
                    autofocus
                  />
                  <input
                    type="text"
                    name="location"
                    v-model="location"
                    id="location"
                    class="form-control pr-0 p-4 mb-4 form"
                    placeholder="Location"
                    autocomplete="off"
                    autofocus
                  />
                <div>
                <label for="amount" class="">Amount</label>
                  <div class="row">
                  <div class="col">
                  <input
                    v-model="amount_from"
                    type="number"
                    name="amount_from"
                    id="amount_from"
                    class="form-control pr-0 p-4 mb-4 form"
                    placeholder="amount from"
                    autocomplete="off"
                    autofocus
                    />
                    </div>

                  <div class="col">
                    <input
                    v-model="amount_to"
                    type="number"
                    name="amount_to"
                    id="amount_to"
                    class="form-control pr-0 p-4 mb-4 form"
                    placeholder="amount to"
                    autocomplete="off"
                    autofocus
                    />
                  </div>
                  </div>
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
          </div>

        <h4 class="text-dark ml-5 mb-4">Job Description</h4>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 px-2 py-3 mb-5">
        <editor
          v-model="description"
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
      <a class="btn btn-outline-primary mt-5" @click="postJob">Post Job</a>

      <!-- Show Success Alert on Successful Creation of Job -->
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
          <div
            class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-none d-xl-block d-lg-block d-md-block"
          >
            <job-card class="mt-2"></job-card>
          </div>
    </div>
    </form>
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
    NavbarComponent,
    JobCard,
  },

  mounted() {
    this.fetchTags();
    this.getUser();
  },


    data: () => ({
    success: "",
    title: "",
    company: "",
    location: "",
    description: "",
    amount_from: "",
    amount_to: "",
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

    getUser(){
        axios.get('/user')
        .then((res) => {
            console.log(res.data);
            this.user = res.data;
        })
        .catch(err => console.log(err))
    },

    postJob() {
      const data = {
        user_id: this.user.id,
        title: this.title,
        tag_ids: this.tags,
        company: this.company,
        location: this.location,
        description: this.description,
        amount_from: this.amount_from,
        amount_to: this.amount_to,
      };
      axios
        .post("/jobs", data)
        .then(res => {
          console.log(res.data);
          this.success = res.data.message;
          this.title = "";
          this.company = "";
          this.description = "";
          this.location = "";
          this.tags = [];
          this.amount_from = "";
          this.amount_to = "";
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

<style scoped>
.font-size {
  font-size: 12px;
}
.bg-grey{
    background-color: lightgray;
    opacity: 1.0;
}
</style>
