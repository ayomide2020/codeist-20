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

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">

                <div class="container-fluid m-0 row justify-content-between">
                    <div class="">
                        <h3 class="mb-5">Top Questions</h3>
                    </div>
                    <div class="">
                        <a href="/question" class="btn btn-outline-primary">Ask Question</a>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row m-0 justify-content-start">
                        <div class="col-2">
                            <p>Active</p>
                        </div>
                        <div class="col-2">
                            <p>Hot</p>
                        </div>
                        <div class="col-2">
                            <p>Week</p>
                        </div>
                        <div class="col-2">
                            <p>Month</p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid" v-if="questions.length < 1">
                    <div class="d-flex justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                            <div class="">
                                <img src="https://img.zohostatic.com/sprints/zs3/images/emptysprintcol.svg"/><br/>
                                <h5 class="text-danger"><strong>Oops!</strong> Looks like they're no questions for now. Kindly check back 😊.</h5>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid border" v-else>
                    <div v-for="question in questions" :key="question.id">
                        <div style="border-radius:0px;" class="row bg-grey border-bottom py-3 justify-content-between align-items-center">

                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="question font-weight-bold"><a :href="'/question/' + question.id"> {{ question.title }}</a></h5>
                                <div class="row p-0 justify-content-between align-items-start">

                                    <div class="col-xl-12 py-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                                        <span class="" style="font-size:13px;">
                                            <i class="fas fa-clock"></i> {{ question.date }} by <i class="fas fa-user"></i> <span class="font-weight-bold">{{ question.user.first_name }} {{ question.user.last_name }}</span>
                                        </span>
                                    </div>

                                    <div class="col-xl-12 py-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                                        <a href="#" v-for="tag in question.tag_ids" :key="tag.id" class="mr-2 badge badge-info text-white py-2 px-4">{{ tag.name }}</a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-3 col-md-12 p-0 d-none d-xl-block d-lg-block d-md-block">
                                <div class="container-fluid m-0 row p-0 justify-content-between">
                                    <div class="col-4 p-0 py-2 text-center">
                                        <span>0</span><br/>
                                        <span>votes</span>
                                    </div>
                                    <div class="border border-success rounded col-4 p-0 py-2 text-center">
                                        <span>10</span><br/>
                                        <span>answers</span>
                                    </div>
                                    <div class="col-4 p-0 py-2 text-center">
                                        <span>8</span><br/>
                                        <span>views</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="p-0 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 d-none d-xl-block d-lg-block d-md-block">
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
    source: String
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
    .question > a{
        text-decoration: none !important;
        transition: .5s all;
        color: #1665c0 !important;
        transition-timing-function: ease-in-out;
        transition-property: 'color';
    }

    .question > a:hover{
        text-decoration: none !important;
        color: #000 !important;
    }

    .bg-grey{
        background:rgba(225,225,225,0.2);
        border-radius: 5px;
    }
</style>
