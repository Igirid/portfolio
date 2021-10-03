<template>
  <div >
    <navbar @nav-toggle="toggleBlur"/>
    <main :class="shouldBlur">
      <slot />
    </main>
    <bottom />
  </div>
</template>

<script>
import Navbar from "../Components/Navbar.vue";
import Bottom from "../Components/Bottom.vue";

import { computed, reactive, ref } from "vue";
export default {
  setup() {
    const blur = ref(false);
    function toggleBlur(navToggled) {
      blur.value = navToggled;
      if (navToggled) {
        disableScroll();
      } else {
        enableScroll();
      }
    }

    const disableScroll = () => {
     // document.body.classList.add("h-full");
      document.body.classList.add("overflow-hidden");
    };
    const enableScroll = () => {
     // document.body.classList.remove("h-full");
      document.body.classList.remove("overflow-hidden");
    };
    const shouldBlur = reactive({
      "filter blur-sm": computed(() => blur.value),
    });

    return { toggleBlur, shouldBlur, blur };
  },
  components: {
    Navbar,
    Bottom,
  },
};
</script>