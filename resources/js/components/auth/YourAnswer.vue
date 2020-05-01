<template>
  <div class="container-fluid m-0 p-0">
    <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>

    <form action class="container-fluid p-4" method="POST" style="background:#fff;">
      <div class>
        <editor
          v-model="answer"
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

      <div
        v-show="tipShouldShow"
        class="mt-5 alert alert-warning alert-dismissible fade show"
        role="alert"
      >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h6 class="font-weight-bold">Thanks for contributing an answer to Codeist</h6>
        <p>Please be sure to answer the question. Provide details and share your research!</p>
        <p>
          But avoid …
          Asking for help, clarification, or responding to other answers.
          Making statements based on opinion; back them up with references or personal experience
        </p>
      </div>

      <a class="btn btn-outline-primary mt-5" @click="postAnswer">Post Answer</a>

      <!-- Show Success Alert on Successful Creation of Question -->
      <div class="alert alert-success alert-dismissible fade mt-5 show" v-if="success" role="alert">
        {{ success }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </form>
  </div>
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
import validationError from "../non-auth/ValidationError";

export default {
  name: "YourAnswer",

  props: {
    question: {
      type: Object
    }
  },

  components: {
    editor: Editor,
    validationError
  },

  data: () => ({
    tipShouldShow: false,
    success: "",
    user: {},
    answer: "",
    validationErrors: ""
  }),

  watch: {
    answer(e) {
      e.length > 0 ? (this.tipShouldShow = true) : "";
    }
  },

  mounted() {
    this.getUser();
  },

  methods: {
    getUser() {
      axios
        .get("/user")
        .then(res => {
          console.log(res.data);
          this.user = res.data;
        })
        .catch(err => console.log(err));
    },

    postAnswer() {
      const data = {
        user_id: this.user.id,
        question_id: this.question.id,
        answer: this.answer
      };
      axios
        .post("/answer", data)
        .then(res => {
          console.log(res.data);
          this.success = res.data.message;
          this.answer = "";
          location = window.location.href;
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

<style>
</style>
