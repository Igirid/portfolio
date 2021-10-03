<template>
  <nav id="header" class="fixed bg-black text-white w-full z-20 top-0">
    <div
      id="progress"
      class="h-1 z-40 top-0"
      style="
        background: linear-gradient(
          to right,
          #ffc100 var(--scroll),
          transparent 0
        );
      "
    ></div>
    <div
      class="
        w-full
        md:max-w-4xl
        mx-auto
        flex flex-wrap
        items-center
        justify-between
        mt-0
        py-3
      "
    >
      <div class="block pl-8 p-2">
        <a
          class="
            text-yellow-300
            font-bold
            text-base
            lg:text-lg
            no-underline
            hover:no-underline
          "
          href="#"
        >
          Igiri David
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button
          id="nav-toggle"
          class="
            flex
            items-center
            px-3
            py-2
            text-yellow-300
            border-gray-600
            focus:outline-none
          "
        >
          <svg
            fill="text-yellow-300"
            viewBox="0 0 20 20"
            class="w-6 h-6 fill-current"
          >
            <title>Menu</title>
            <path
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
      </div>
      <div
        class="
          w-full
          flex-grow
          p-4
          lg:flex
          lg:items-center
          lg:w-auto
          hidden
          mt-2
          lg:mt-0
          bg-black
          md:bg-transparent
          z-20
        "
        id="nav-content"
      >
        <ul class="list-reset lg:flex justify-center flex-1 items-center">
          <li class="mr-3">
            <a
              class="
                hover:text-yellow-300
                active:border-b-0
                md:active:border-b-4
                active:border-yellow-300
                active:text-yellow-300
                inline-block
                py-2
                px-4
                font-bold
              "
              href="/"
              >Home</a
            >
          </li>
          <li class="mr-3">
            <a
              class="
                inline-block
                hover:text-yellow-300 hover:text-underline
                active:border-b-0
                md:active:border-b-4
                active:border-yellow-300
                active:text-yellow-300
                py-2
                px-4
              "
              href="/#About"
              >About Me</a
            >
          </li>
          <li class="mr-3">
            <a
              class="
                border-b-0
                inline-block
                md:border-b-4
                hover:text-yellow-300 hover:text-underline
                active:border-yellow-300
                py-2
                px-4
              "
              href="#/done"
              >What I'Ve Done</a
            >
          </li>
          <li class="mr-3">
            <a
              class="
                border-b-0
                inline-block
                md:border-b-4
                hover:text-yellow-300 hover:text-underline
                active:border-yellow-300
                py-2
                px-4
              "
              href="/#team"
              >Team</a
            >
          </li>
          <li class="mr-3">
            <a
              class="
                border-b-0
                inline-block
                md:border-b-4
                hover:text-yellow-300 hover:text-underline
                active:border-yellow-300
                py-2
                px-4
              "
              href="#"
              >Contact</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { onMounted } from "vue";

export default {
  props: {},
  setup(props) {
    onMounted(() => {
      var h = document.documentElement,
        b = document.body,
        st = "scrollTop",
        sh = "scrollHeight",
        progress = document.querySelector("#progress"),
        scroll;
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");

      document.addEventListener("scroll", function () {
        scroll = ((h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight)) * 100;
        progress.style.setProperty("--scroll", scroll + "%");
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-black");
          navcontent.classList.remove("bg-black");
          navcontent.classList.add("bg-black");
        } else {
          header.classList.remove("bg-black");
          navcontent.classList.remove("bg-black");
          navcontent.classList.add("bg-black");
        }
      });

      document.getElementById("nav-toggle").onclick = function () {
        document.getElementById("nav-content").classList.toggle("hidden");
      };
    });
  },
};
</script>
