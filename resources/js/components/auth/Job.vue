<template>
<div>
  <v-app id="inspire">
  <navbar-component></navbar-component>
    <!-- Content -->
    <v-content class="m-0">
        <div class="container-fluid p-0 font-serif">
          <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>
          <h3><p class="mb-0 ml-5 font-weight-bold text-dark">Post Job</p></h3>
          <v-row justify="between">
            <v-col cols="12" sm="10" md="8" lg="8">
              <v-card ref="form" method="POST">
                <v-card-text>
                  <form>
                  <v-text-field
                    type="text"
                    id="title"
                    ref="title"
                    v-model="title"
                    label="Title"
                    placeholder="Title"
                    outlined
                    required
                  ></v-text-field>
                  <v-text-field
                    type="text"
                    id="company"
                    ref="company"
                    v-model="company"
                    label="Company"
                    placeholder="company"
                    outlined
                    required
                  ></v-text-field>
                  <v-text-field
                    type="text"
                    id="location"
                    ref="location"
                    v-model="location"
                    label="Location"
                    placeholder="location"
                    outlined
                    required
                  ></v-text-field>

                  <label for="salary" class="">Salary</label>
                  <v-row>
                    <!-- <v-col>
                    <v-text-field
                      v-model="currency"
                      label="$"
                      type="currency"
                      name="currency"
                      outlined
                    ></v-text-field>
                  </v-col> -->
                  
                  <v-col>
                    <v-text-field
                      v-model="amount_from"
                      label="From"
                      type="number"
                      name="amount_from"
                      outlined
                      prefix="$"
                    ></v-text-field>
                  </v-col>
                  
                  <v-col>
                    <v-text-field
                      v-model="amount_to"
                      label="To"
                      type="number"
                      name="amount_to"
                      outlined
                      prefix="$"
                    ></v-text-field>
                  </v-col>
                </v-row>
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

        <h4 class="text-dark my-5">Job Description</h4>
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
                  </form>
                </v-card-text>
                <v-divider class="mt-12"></v-divider>
                <v-card-actions>
                  <v-btn text>Cancel</v-btn>
                  <v-spacer></v-spacer>
                  <v-btn color="primary" text @click="postJob">Post Job</v-btn>
                </v-card-actions>
              </v-card>
              
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

            </v-col>
            <v-col cols="12" sm="10" md="4" lg="3">
            <job-card class="mt-2"></job-card>
          </v-col>
          </v-row>
          
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
    source: String,
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
    currency: "",
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
        currency: this.currency,
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
          this.currency="";
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
</style>