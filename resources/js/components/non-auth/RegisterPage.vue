<template>
  <v-app id="inspire">
    <v-content>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="12"
            md="8"
            sm="12"
            lg="8"
          >
            <v-card class="elevation-12">
              <v-toolbar
                color=""
                dark
                flat
              >

                <v-toolbar-title>Register now</v-toolbar-title>

                <v-spacer />
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      :href="source"
                      icon
                      large
                      target="_blank"
                      v-on="on"
                    >
                      <v-icon>mdi-code-tags</v-icon>
                    </v-btn>
                  </template>
                  <span>Source</span>
                </v-tooltip>
                <v-tooltip right>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      large
                      href="https://codepen.io/johnjleider/pen/pMvGQO"
                      target="_blank"
                      v-on="on"
                    >
                      <v-icon>mdi-codepen</v-icon>
                    </v-btn>
                  </template>
                  <span>Codepen</span>
                </v-tooltip>
              </v-toolbar>
              <v-card-text>
                <form>
                    
                  <v-text-field
                    label="First Name" required
                    name="firstname"
                    v-model="firstname"
                    prepend-icon="person"
                    type="text"
                  />

                  <v-text-field
                    label="Last Name" required
                    name="lastname"
                    v-model="lastname"
                    prepend-icon="person"
                    type="text"
                  />


                  <v-text-field
                    label="Email Address" required
                    name="email"
                    v-model="email"
                    prepend-icon="person"
                    type="text"
                  />

                  <v-text-field
                    id="password"
                    label="Password" required
                    v-model="password"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                  />

                  <v-text-field
                    id="password-confirm"
                    label="Confirm Password" required
                    v-model="confirmPassword"
                    name="password-confirm"
                    prepend-icon="lock"
                    type="password"
                  />
                
                </form>
              </v-card-text>
              <v-card-actions>
                <v-spacer />
                <v-btn color="primary" @click="register">Register</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
  export default {
    props: {
      source: String,
    },

    data: () => ({
        firstname: "",
        lastname: "",
        email: "",
        password: "",
        confirmPassword: "",
    }),

    methods:{
        register(){
            var post = {
                first_name: this.firstname,
                last_name: this.lastname,
                email: this.email,
                password: this.password,
            };
            // var post = [
            //     this.firstname, this.lastname, this.email, this.password
            // ];

            axios.post('/register', post)
                .then(res => {
                    console.log(res.data);
                    console.log(res.status);
                    // window.location = "/login";
                })
                .catch(err => {
                console.log(err)
            })
        }
    }
  }
</script>
