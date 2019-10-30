<template>
  <div class="home">

    <h1>{{msg}}</h1>

    <!--
    <img alt="Vue logo" src="../assets/logo.png">
    
    <HelloWorld msg="Welcome to Your Vue.js App"/>
    -->
  </div>
</template>

<script>
// @ is an alias to /src
//import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'home',
  components: {
    //HelloWorld
  },
  data: function(){
    return {
      msg: 'Hello World'
    }
  }
}
</script>
