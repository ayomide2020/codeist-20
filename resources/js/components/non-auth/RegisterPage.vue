<template>
  <v-app id="inspire">
    <v-content>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" md="8" sm="12" lg="8">
            <v-card class="elevation-12">
              <v-toolbar color dark flat>
                <v-toolbar-title>Continue to create a free Account</v-toolbar-title>
                <v-spacer />
              </v-toolbar>
              <validation-error :errors="validationErrors" v-if="validationErrors"></validation-error>
              <p v-if="passError" class="alert alert-danger">The password does not match</p>
              <v-card-text>
                <form>
                  <v-text-field
                    label="First Name"
                    required
                    name="firstname"
                    v-model="firstname"
                    prepend-icon="person"
                    type="text"
                  />

                  <v-text-field
                    label="Last Name"
                    required
                    name="lastname"
                    v-model="lastname"
                    prepend-icon="person"
                    type="text"
                  />

                  <v-text-field
                    label="Email Address"
                    required
                    name="email"
                    v-model="email"
                    prepend-icon="person"
                    type="text"
                  />

                  <v-text-field
                    id="password"
                    label="Password"
                    required
                    v-model="password"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                  />

                  <v-text-field
                    id="password-confirm"
                    label="Confirm Password"
                    required
                    v-model="confirmPassword"
                    name="password-confirm"
                    prepend-icon="lock"
                    type="password"
                  />
                </form>
              </v-card-text>
              <!-- <v-card-actions> -->
              <v-spacer />
              <div class="d-flex justify-content-center">
                <v-btn color="primary" @click="register" :disabled="isloading">Register</v-btn>
                <img
                  v-if="isloading"
                  src="https://res.cloudinary.com/oluwatobi/image/upload/v1587998113/codeist/loading_wimvhn.gif"
                  class="ml-3"
                  width="35"
                  height="20"
                  alt="Loading"
                />
              </div>
              <!-- </v-card-actions> -->
              <div class="mt-4 mb-5 text-center">
                <p>
                  Already have an account ?
                  <a href="/login">Sign In</a>
                </p>
              </div>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
import validationError from "./ValidationError";
export default {
  props: {
    source: String
  },

  components: {
    validationError
  },

  data: () => ({
    firstname: "",
    lastname: "",
    email: "",
    password: "",
    confirmPassword: "",
    validationErrors: "",
    isloading: false,
    passError: false
  }),

  methods: {
    
    register() {
      if(this.password !== this.confirmPassword){
        return this.passError = true;
      }
      this.isloading = true;
      var post = {
        first_name: this.firstname,
        last_name: this.lastname,
        email: this.email,
        password: this.password,  
      };

      axios
        .post("/register", post)
        .then(res => {
          let status = res.status;
          console.log(status);
          if (status == 200) {
            this.isloading = false;
            window.location = "/home";
          }
        })
        .catch(error => {
          console.log(error);
          this.validationErrors = error.response.data.errors;
          this.isloading = false;
          this.passError = "";
        });
    }
  }
};
</script>
