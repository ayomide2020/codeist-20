<template>
<div>
  <v-app id="inspire">
  <navbar-component></navbar-component>

    <div class="container-fluid mt-5 justify-content-between">
        <div class="row">
            <div class="col-md-6 text-center"><h3 class="">Answer</h3></div>
            <div class="col-md-6 text-right">
                    <h3><span class="border p-2">Active</span>
                    <span class="border p-2">Oldest</span>
                    <span class="border p-2">Votes</span></h3>
            </div>
        </div>
    </div>

<!-- Content -->
    <v-content class="m-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 p-0 mt-5 col-lg-2 col-md-2">
                    <div class="arrow"><i class="fas fa-caret-up"></i></div>
                        <h3 class="text-left">0</h3>
                    <div class="arrow"><i class="fas fa-caret-down"></i></div>
                </div>
                <div class="contnt col-xl-8 mt-5 col-lg-8 col-md-8">
                    <div>
                        <h1>Hello</h1>
                    </div>
                </div>
            </div>
        </div>
    </v-content>


    <!-- Content -->
    <v-content class="m-0">
        <div class="container-fluid m-0 p-3">

            <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>

            <div class="container-fluid">
                <h1 class="mb-3">Your Answer</h1>
                <div class="row justify-content-between">

                    <div class="col-xl-8 mt-5 order-md-2 order-1 order-sm-2 col-lg-8 p-0 m-0 col-md-12 col-12">
                        <form action="" class="container-fluid p-4 contain" method="POST">

                            <div class="mb-5">
                                <input type="text" name="title" v-model="title" id="title" class="form-control pr-0 p-4 form-title" placeholder="Title" autocomplete="off" autofocus>
                                <span class="card-subtitle text-muted">Thanks for contributing an answer to Codeist</span>
                            </div>


                            <div class="">
                                <editor v-model="answer"
                                    api-key="s0a0a2vky79uza8yzxwbe4khvedd7mdehfrp4e1b4rxoplw4"
                                    :init="{
                                        height: 400,
                                        menubar: false,
                                        plugins: [
                                        'advlist autolink lists link image charmap print preview anchor',
                                        'searchreplace visualblocks code fullscreen',
                                        'insertdatetime media table paste code help wordcount'
                                        ],
                                        toolbar:
                                        'undo redo | formatselect | bold italic backcolor | \
                                        alignleft aligncenter alignright alignjustify | \
                                        bullist numlist outdent indent | removeformat | help'
                                    }"
                            />
                            </div>

                            <div class="mt-5">
                                <multiselect v-model="tags" tag-placeholder="Add this as new tag" placeholder="Search or add a tag" label="name" :options="options" :multiple="true" :taggable="true" @tag="addTag"></multiselect>
                                <pre class="language-json"><code>{{ tags }}</code></pre>
                            </div>

                            <a class="btn btn-outline-primary mt-5" @click="postAnswer">Post Your Answer</a>


                            <!-- Show Success Alert on Successful Creation of Question -->
                            <div class="alert alert-success alert-dismissible fade mt-5 show" v-if="success" role="alert">
                                {{ success }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        </form>
                    </div>

                    
                </div>
            </div>


        </div>
    </v-content>
  </v-app>
</template>

<script>
import Editor from '@tinymce/tinymce-vue';
import Multiselect from 'vue-multiselect';
import validationError from '../non-auth/ValidationError';
import NavbarComponent from './NavbarComponent';


export default {
  props: {
    source: String
  },
  components: {
     'editor': Editor,
     Multiselect,
     validationError,
     NavbarComponent
  },

  mounted(){
      this.fetchTags();
      this.getUser();
  },

  data: () => ({
    success: "",
    title: "",
    question: "",
    tags: [],
    user: {},
    options: [],
    validationErrors:'',
  }),
  methods:{
      addTag (newTag) {
      const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
      }
      this.options.push(tag)
      this.tags.push(tag)
    },

    fetchTags(){
        axios.get('/tags')
        .then((res) => {
            console.log(res.data);
            this.options = res.data;
        })
        .catch(err => console.log(err))
    },

    getUser(){
        axios.get('/user')
        .then((res) => {
            console.log(res.data);
            this.user = res.data;
        })
        .catch(err => console.log(err))
    },

    postAnswer(){
        const data = {
            user_id: this.user.id,
            title: this.title,
            tag_ids: this.tags,
            question: this.question,
        };
        axios.post('/answer', data)
        .then((res) => {
            console.log(res.data);
            this.success = res.data.message;
            this.title = "";
            this.question = "";
            this.tags = [];
        })
        .catch(error => {
            if (error.response.status == 422){
                console.log(error.response.data.errors);
                this.validationErrors = error.response.data.errors;
            }
            console.log(error.response);
        })
    }
  }
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

<style scoped>
    .arrow{
        font-size: 3.5em;
        color: lightgray;
    }
    .contnt{
        background-color: lightgray;
    }
</style>
