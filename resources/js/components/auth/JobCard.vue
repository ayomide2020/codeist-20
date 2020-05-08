<template>
  <div>
    <div class="container-fluid p-0">
      <div class="card">
        <div class="card-header bg-primary text-white px-2 py-3">
          <p class="mb-0 font-weight-bold">Secure the Job Position</p>
        </div>
        <img
          class="card-img-top"
          src="https://res.cloudinary.com/oluwatobi/image/upload/v1588106027/codeist/undraw_career_progress_ivdb_vx1nt0.svg"
          alt="Article"
        />

        <div class="card-body font-size p-0">
          <ul class="p-0 list-group list-group-flush" v-for="job in jobs" :key="job.id">
          
            <li class="list-group-item">
              <i class="fa fa-briefcase"></i>
              <b>{{ job.title }}</b>
              <br />
              <span>{{ job.company }}</span>
              <br />
              <i class="fa fa-map-marker"></i>
              <span>{{ job.location }}</span>
              <br />
              <span class="text-danger">{{ job.amount_from }} - {{ job.amount_to }}</span>
              <br />
              <a href="#" v-for="tag in job.tag_ids"
                  :key="tag.id" class="mt-5 mr-2 badge badge-info text-white py-1 px-3">{{ tag.name }}
              </a>
            </li>

          </ul>
        </div>
        <div class="card-body">
          <a href="/job" class="card-link">Create One</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: "JobCard",
  job: {
      type: Object
    },

    data: () => ({
    jobs: []
  }),

  mounted() {
    this.showfive();
  },

  methods: {
    showfive() {
      axios
        .get("/jobs/randomfive")
        .then(res => {
          this.jobs = res.data.jobs;
        })
        .catch(err => console.log(err));
    }
  }

};
</script>

<style>
.font-size {
  font-size: 12px;
}
</style>
