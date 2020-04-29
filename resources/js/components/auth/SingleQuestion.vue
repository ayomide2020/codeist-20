<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer" :clipped="$vuetify.breakpoint.lgAndUp" app>
        <v-list dense>
            <template v-for="item in items">

                <v-list-item :key="item.text" link>
                    <v-list-item-action>
                    <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-action>
                    <v-list-item-content>
                    <v-list-item-title>{{ item.text }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>


            </template>

               <v-list-item link @click="logout">
                <v-list-item-action>
                    <v-icon>mdi-logout</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>LogOut</v-list-item-title>
                </v-list-item-content>
              </v-list-item>

              <v-list-item link>
                <v-list-item-action>
                    <v-icon>mdi-mode</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>
                      <v-switch class="p-0" @change="mode" inset label="Dark Mode"></v-switch>
                    </v-list-item-title>
                </v-list-item-content>
              </v-list-item>

        </v-list>
    </v-navigation-drawer>

    <!-- AppBar -->
    <v-app-bar :clipped-left="$vuetify.breakpoint.lgAndUp" app color="blue darken-3" dark>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />

      <v-toolbar-title style="width: 300px" class="ml-0 pl-4">
        <span class="hidden-sm-and-down">Welcome to Codeist</span>
      </v-toolbar-title>

      <v-text-field
        flat
        solo-inverted
        hide-details
        prepend-inner-icon="mdi-magnify"
        label="Search"
        class="hidden-sm-and-down"
      />
      <v-spacer />

      <v-btn icon>
        <v-icon>mdi-apps</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>mdi-bell</v-icon>
      </v-btn>
    </v-app-bar>


    <!-- Content -->
    <v-content>
      <div class="m-0 p-0 container-fluid">

        <div class="conatiner-fluid row p-0 m-0">

            <div class="container-fluid border-bottom pb-5 m-0 row justify-content-between align-items-start">
                <div class="m-0 p-0 col-10">
                    <h4 class="font-weight-bold">{{ question.title }}</h4>
                </div>
                <div class="m-0 p-0 col-2">
                    <a href="/question" class="btn btn-outline-primary">Ask Question</a>
                </div>
            </div>

            <div class="mt-5 col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                <div class="container-fluid bg-grey">
                    <span v-html="question.question"></span>
                </div>

            </div>

            <div class="mt-5 p-0 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-none d-xl-block d-lg-block d-md-block">
                <article-card></article-card>
                <job-card class="mt-5"></job-card>
            </div>

        </div>

      </div>

    </v-content>

  </v-app>
</template>

<script>
import ArticleCard from './ArticleCard';
import JobCard from './JobCard';

export default {
  props: {
    question:{
        type: Object
    }
  },

  components:{
      ArticleCard,
      JobCard
  },

  mounted(){
      this.fetchQuestions();
  },

  data: () => ({
    drawer: null,
    items: [
      { icon: "mdi-contacts", text: "Home"},
      { icon: "mdi-history", text: "Question" },
      { icon: "mdi-content-copy", text: "Tags" },
      { icon: "mdi-contacts", text: "Article World" },
      { icon: "mdi-settings", text: "Settings" },
    ],
    questions: [],
  }),

  methods:{
      fetchQuestions(){
        axios.get('/questions')
        .then((res) => {
            console.log(res.data);
            this.questions = res.data;
        })
        .catch(err => console.log(err))
    },

    mode(){
      this.$vuetify.theme.dark = !this.$vuetify.theme.dark;
    },

    logout: function logout() {
      axios.post('/logout').then(function (res) {
        var status = res.status;
        console.log(status);

        if (status == 200) {
          window.location = "/home";
        }
      })["catch"](function (err) {
        console.log(err);
      });
    },

  }
};
</script>

<style scoped>
    .bg-grey{
        background:rgba(225,225,225,0.2);
        border-radius: 5px;
    }
</style>
