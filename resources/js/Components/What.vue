<template>
  <div
    class="
      flex
      gap-8
      flex-col
      px-2
      md:px-10
      md:pl-40
      md:pr-38
      mt-8
      mb-6
      md:mb-8
    "
    id="work"
  >
    <div class="flex md:py-2">
      <p
        class="font-bold font-sans text-lg md:text-xl lg:text-2xl text-gray-500"
      >
        <span
          class="
            text-gray-400
            ml-2
            md:ml-3
            text-lg
            md:text-xl
            lg:text-2xl
            font-mono
          "
        >
          03.
        </span>
        Things I've Built
      </p>
      <hr class="w-2/6 md:2/4 font-semibold ml-3 md:mx-6 mt-4" />
    </div>
    <card />
    <card />
    
    <p class="font-bold font-sans text-center text-lg md:text-xl lg:text-2xl text-gray-500 mb-4 md:mr-20">
      Other noteworthy projects
    </p>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 md:mr-20">
      <simple-card />
      <simple-card />
      <simple-card />
      <simple-card />
    </div>
  </div>
</template>
<script>
import Card from "../Components/Card.vue";
import simpleCard from "../Components/simpleCard.vue";
export default {
  components: {
    Card,
    simpleCard,
  },
  setup() {
    return {};
  },
};
</script>
