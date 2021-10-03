<template>
  <div>
    <hero />
    <about />
    <where />
    <what />
    <contact />
  </div>
</template>
<script>
import App from "../Layouts/App.vue";
import Hero from "../Components/Hero.vue";
import About from "../Components/About.vue";
import Where from "../Components/Where.vue";
import What from "../Components/What.vue";
import Contact from "../Components/Contact.vue";
export default {
  layout: App,
  props: {},
  components: {
    Hero,
    About,
    Where,
    What,
    Contact,
  },
};
</script>