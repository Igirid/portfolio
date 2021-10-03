<template>
  <nav class="h-auto py-4 md:py-8 w-full sticky top-0 z-30 bg-blue-800" ref="nav">
    <div class="flex font-mono w-full h-auto relative justify-between">
      <a href="/" class="text-base md:text-lg md:mx-24">
        <img src="/img/brand.png" alt="" class="h-12 w-12 object-center" />
      </a>
      <div class="flex justify-end md:px-8">
        <transition name="slide-fade">
          <ul
            @click.stop
            v-if="responsiveNav"
            class="
            bg-blue-800
              text-gray-300
              shadow-md
              md:shadow-none
              z-20
              md:z-auto
              w-3/4
              md:w-auto
              absolute
              -top-4
              right-0
              px-4
              h-screen
              md:h-auto
              list-none
              md:static
              md:flex md:flex-row
              md:justify-between
              py-12
              md:py-0
            "
          >
            <li class="my-8 md:my-0">
              <a href="/#about" @click.stop="toggleNav" class="md:mx-4">
                01 About Me
              </a>
            </li>
            <li class="my-8 md:my-0">
              <a href="/#experience" @click.stop="toggleNav" class="md:mx-4">
                02 Experience
              </a>
            </li>
            <li class="my-8 md:my-0">
              <a href="/#work" class="md:mx-4" @click.stop="toggleNav">
                03 Work
              </a>
            </li>
            <li class="my-8 md:my-0">
              <a href="/#contact" class="md:mx-4" @click.stop="toggleNav">
                04 Contact</a
              >
            </li>
            <li
              class="
                mt-4
                sm:mt-8
                md:my-0
                border-2
                h-8
                border-gray-200
                md:mx-2
                rounded-md
                w-max
                ml-2
              "
            >
              <a
                href="/resume"
                target="blank"
                class="px-2"
                @click.stop="toggleNav"
              >
                Resume
              </a>
            </li>
          </ul>
        </transition>
      </div>

      <div class="md:hidden inline-block absolute right-2 -bottom-0 z-30">
        <transition name="rotate" mode="out-in">
          <svg
            v-if="navToggled"
            xmlns="http://www.w3.org/2000/svg"
            class="h-10 w-10 fill-current text-gray-300 cursor-pointer"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            @click.stop="toggleNav"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>

          <svg
            v-else
            @click.stop="toggleNav"
            xmlns="http://www.w3.org/2000/svg"
            class="h-10 w-10 fill-current text-gray-300 cursor-pointer"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16m-7 6h7"
            />
          </svg>
          <!--
          </a>
          -->
        </transition>
      </div>
    </div>
  </nav>
</template>
<script>
import { ref, reactive, computed, onMounted } from "vue";
export default {
  emits: ["navToggle"],
  setup(props, { emit }) {
    const nav = ref(null);
    var prevScrollpos = window.pageYOffset;

    const navToggled = ref(false);
    /*
    const responsiveNav = reactive({
      hidden: computed(() => !navToggled.value),
    });
     */

    const responsiveNav = computed(() => {
      if (window.screen.width < 768) {
        if (navToggled.value) {
          return true;
        }
        return false;
      }
      return true;
    });
    const handleEventBubbledToWindow = () => {
      navToggled.value = false;
      emit("navToggle", false);
    };
    const handleEventAtTarget = () => {
      navToggled.value = !navToggled.value;
      emit("navToggle", navToggled.value);
    };
    const toggleNav = (e) => {
      if (window.screen.width > 780) {
        emit("navToggle", false);
        return;
      }
      if (e.eventPhase === Event.BUBBLING_PHASE) {
        handleEventBubbledToWindow();
        return;
      }
      handleEventAtTarget();
    };
    const adjustNavbar = () => {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        nav.value.style.top = "0";
        nav.value.classList.add("shadow-lg");
        if (window.pageYOffset == 0.0) {
          nav.value.classList.remove("shadow-lg");
        }
      } else {
        nav.value.classList.add("shadow-lg");
        nav.value.style.top = "-7rem";
      }
      prevScrollpos = currentScrollPos;
    };

    onMounted(() => {
      window.onscroll = adjustNavbar;
      document.body.onclick = toggleNav;
    });
    return { navToggled, responsiveNav, toggleNav, nav };
  },
};
</script>
