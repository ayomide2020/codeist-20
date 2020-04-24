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
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center"></v-row>
      </v-container>
    </v-content>


    <!-- Bottom Button -->
    <v-btn bottom color="pink" dark fab fixed right @click="dialog = !dialog">
      <v-icon>mdi-plus</v-icon>
    </v-btn>

    <!-- Dialog -->
    <v-dialog v-model="dialog" width="800px">
      <v-card class="p-5">
          <v-text></v-text>
      </v-card>
    </v-dialog>


  </v-app>
</template>

<script>
export default {
  props: {
    source: String
  },
  data: () => ({
    dialog: false,
    drawer: null,
    items: [
      { icon: "mdi-contacts", text: "Link 1" },
      { icon: "mdi-history", text: "Link 2" },
      { icon: "mdi-content-copy", text: "Link  3" },
      { icon: "mdi-contacts", text: "Article World" },
      { icon: "mdi-settings", text: "Settings" },
    ]
  })
};
</script>
