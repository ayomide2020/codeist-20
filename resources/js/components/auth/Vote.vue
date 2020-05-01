<template>
  <div>
    <div class="d-flex flex-column align-items-center">
      <i class="thumb fa fa-thumbs-up fa-2x text-success mb-3" @click="vote(1)"></i>
      <h4 class="mb-0 text-primary">{{ question.votecount }}</h4>
      <i class="thumb fa fa-thumbs-down fa-2x text-danger mt-3" @click="vote(0)"></i>

      <span v-if="success" class="mt-4 alert p-2 bg-dark text-white show fade">Great!</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Vote",
  props: {
    question: {
      type: Object
    },
    answer: {
      type: String
    }
  },

  data: () => ({
    success: ""
  }),

  methods: {
    vote(vote) {
      const data = {
        question_id: this.question ? this.question.id : null,
        answer_id: this.answer ? this.answer : null,
        user_id: this.question.user_id,
        vote: vote
      };
      axios
        .post("/vote", data)
        .then(res => {
          console.log(res.data);
          this.success = res.data.message;
          location = window.location.href;
        })
        .catch(err => console.log(err.response.data));
    }
  }
};
</script>

<style scoped>
.thumb {
  cursor: pointer;
}
</style>
