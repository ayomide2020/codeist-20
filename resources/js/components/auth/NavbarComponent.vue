<template>
<div>
    <v-navigation-drawer v-model="drawer" :clipped="$vuetify.breakpoint.lgAndUp" app>
      <v-list dense>
        <template v-for="item in items">
          <v-list-item :key="item.text" :href="item.href" :target="item.target" class="link" link>
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

      <v-btn icon href="/">
        <v-icon>mdi-apps</v-icon>
      </v-btn>
      <!-- <v-btn icon>
        <v-icon>mdi-bell</v-icon>
      </v-btn> -->
    </v-app-bar>
</div>
</template>

<script>
export default {
    name: "NavbarComponent",
    data: () => ({
    drawer: null,
    items: [
      { icon: "mdi-contacts", text: "Home", href: "/home", target: "_self" },
      { icon: "mdi-message-text", text: "Ask Question", href: "/question", target: "_self" },
      { icon: "mdi-content-copy", text: "Manage Tags", href: "/tag", target: "_self" },
      { icon: "mdi-history", text: "Job", href: "/job", target: "_self" },
      { icon: "mdi-contact-mail", text: "Article World", href: "/canvas", target: "_blank" },
      // { icon: "mdi-settings", text: "Settings", href: "/settings", target: "_self" }
    ],
  }),

  methods: {
            mode() {
            this.$vuetify.theme.dark = !this.$vuetify.theme.dark;
            },

            logout: function logout() {
            axios
                .post("/logout")
                .then(function(res) {
                var status = res.status;
                console.log(status);

                if (status == 200) {
                    window.location = "/home";
                }
                })
                ["catch"](function(err) {
                console.log(err);
                });
            },
    },
}
</script>

<style>
.link{
    text-decoration: none !important;
}
.form-title{
    font-size: 30px;
    border:none !important;
}

.form-title:active{
    font-size: 30px;
    outline: 0;
    box-shadow: none !important;
    border:none !important;
}

.form-title:focus{
    box-shadow: none !important;
}
.contain {
  background: #fff;
  box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.5);
}
</style>
