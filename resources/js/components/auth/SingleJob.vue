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
              <h4 class="mb-5 ml-3 font-weight-bold">{{ job.title }}</h4>
              <p class="mb-5 ml-3 font-weight-bold">{{ job.company }}</p>
              <span class="ml-3">
                <i class="fa fa-clock"></i>
                Posted:
                <b>{{ job.date }}</b>
              </span>
            </div>
            <div class="m-0 p-0 col-2">
              <a href="/job" class="btn btn-outline-primary">Post Job</a>
            </div>


          <div class="mt-5 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <!-- Job -->
            <div class="container-fluid row m-0 bg-grey px-3 py-5">
              <div class="col-12">
                  Technologies:<br/>
                <span v-html="job.tag"></span>
                <a
                  href="#"
                  v-for="tag in job.tag_ids"
                  :key="tag.id"
                  class="mt-5 mr-2 badge badge-info text-white py-2 px-4"
                >{{ tag.name }}</a>
                <hr class="space-top-3" />
              </div>

              <div class="col-12">
                  <div>
                  Job description:<br/><br/>
                  <span v-html="job.description">
                  {{ job.description }}</span>
                  <hr class="space-top-3" />
                </div>
              </div>

              <div class="col-12">
                  Salary:<br/><br/>
                <span>{{ job.amount_from }} - {{ job.amount_to }}</span>
                <hr class="space-top-3" />
              </div>
            </div>

            <div class="space-top-5">
              <!-- If there are no job post -->
              <div v-if="job.length == 0" class="container-fluid bg-grey px-3 py-5">
                <div class="mt-5">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      <span class="sr-only">Close</span>
                    </button>
                    <strong>Oops!</strong> No Job Post yet. Be the first to do so.
                  </div>
                </div>
              </div>

              <!-- If there are jobs -->
              <div v-else class="container-fluid bg-grey px-3 py-5">
                <div class="space-top-3" v-for="job in jobs" :key="job.id">
                  <span v-html="job.job"></span>
                  <hr class="space-top-3" />
                </div>
              </div>
            </div>

          </div>

          <div
            class="mt-5 p-0 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-none d-xl-block d-lg-block d-md-block"
          >
            <job-card class="mt-5"></job-card>
          </div>
        </div>
      </div>
    </div>
    </v-content>
  </v-app>
</div>
</template>

<script>
import JobCard from "./JobCard";
import NavbarComponent from "./NavbarComponent";

export default {
  props: {
    job: {
      type: Object
    },
  },

  components: {
    JobCard,
    NavbarComponent
  },

  mounted() {},

  data: () => ({
    url: window.location.href,
    jobs: []
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
