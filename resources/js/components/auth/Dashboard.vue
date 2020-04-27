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
      <v-container class="m-0 p-0" fluid>

        <div class="container row justify-content-between">
            <div class="col">
                <h3 class="mb-5">Top Questions</h3>
            </div>
            <div class="col">
                <a href="/question" class="btn btn-outline-primary">Ask Question</a>
            </div>
        </div>


        <div class="container">
          <div class="row text-left">
                <div class="col-md-1">
                    <p>Active</p>
                </div>
                <div class="col-md-1">
                    <p>Hot</p>
                </div>
                <div class="col-md-1">
                    <p>Week</p>
                </div>
                <div class="col-md-1">
                    <p>Month</p>
                </div>
            </div>
        </div>


        <div class="container-fluid">
           <div v-for="question in questions" :key="question.id">
                <div class="row bg-grey border-bottom py-3 justify-content-between">

                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <h3>{{ question.title }}</h3>
                        <div class="row p-0 justify-content-end align-items-start">

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                                <span>
                                    <i class="fas fa-clock"></i> {{ question.created_at }} by <i class="fas fa-user"></i> {{ question.user.first_name }} {{ question.user.last_name }} 
                                </span>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12">
                                <a href="#" v-for="tag in question.tag_ids" :key="tag.id" class="mr-2 badge badge-info text-white py-2 px-4">{{ tag.name }}</a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-12 d-none d-xl-block d-lg-block d-md-block">
                    <div class="row p-0">
                        <div class="col text-center">
                        <span>0</span><br/>
                        <span>votes</span>
                        </div>
                        <div class="col text-center">
                        <span>10</span><br/>
                        <span>answers</span>
                        </div>
                        <div class="col text-center">
                        <span>8</span><br/>
                        <span>views</span>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>


      </v-container>
      <hr/>
    </v-content>

  </v-app>
</template>

<script>
export default {
  props: {
    source: String
  },

  mounted(){
      this.fetchQuestions();
  },

  data: () => ({
    drawer: null,
    items: [
      { icon: "mdi-contacts", text: "Home" },
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
  }
};
</script>

<style scoped>
    .bg-grey{
        background:rgba(225,225,225,0.2);
        border-radius: 5px;
    }
</style>
