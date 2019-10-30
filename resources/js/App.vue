<template>
  <v-app>
    <v-app-bar app>
      <v-toolbar-title class="headline text-uppercase">
        <span>Crafter</span>
        <span class="font-weight-light">Office</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn
        text
        href="#"
        target="_blank"
      >
        <span class="mr-2">Nice Dude</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>
    </v-app-bar>

    <SideBarDrawer></SideBarDrawer>

    <v-content>
      <router-view></router-view>
    </v-content>
  </v-app>
</template>

<script>
//import HelloWorld from './components/HelloWorld';
import SideBarDrawer from './components/SideBarDrawer';

export default {
  name: 'App',
  components: {
    //HelloWorld,
    SideBarDrawer,
  },
  data: () => ({
    //
  }),
};
</script>
