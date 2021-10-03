<template>
  <div class="grid grid-cols-12 w-full grid-rows-1 items-center">
    <div
      class="
        row-start-1 row-end-1
        lg:col-span-6 lg:col-start-6
        md:col-start-4 md:col-span-8
        col-span-12
        flex flex-col
        text-right
        bg-project bg-center bg-no-repeat bg-cover
        md:bg-none
        px-4
        py-8
        relative
        rounded-lg
      "
    >
      <div
        class="
          rounded-lg
          inset-0
          absolute
          w-auto
          bg-gray-100
          opacity-70
          flex
          md:hidden
        "
      ></div>
      <div class="relative">
        <p
          class="
            text-gray-500
            md:text-gray-400
            font-mono
            text-base
            font-bold
            tracking-wide
            mb-4
          "
        >
          Featured Project
        </p>
        <p
          class="
            text-gray-400
            text-xl
            font-bold
            tracking-wide
            mb-4
          "
        >
          {{ theme }}
        </p>
        <div class="relative text-right md:p-6 md:shadow-2xl md:z-20 w-full">
          <p
            class="
              text-gray-400
              font-mono
              text-base
              font-medium
              md:px-2
            "
          >
            {{ content }}
          </p>
        </div>
        <div class="flex gap-x-6 my-4 justify-end">
          <a
            href="#"
            v-for="(tag, id) in tags"
            :key="'tag ' + id"
            class="
              text-gray-500
              text-base
              font-mono font-medium
              hover:underline
            "
            >{{ tag }}
          </a>
        </div>
        <div class="flex justify-end gap-4 mb-2">
          <a
            :href="githubLink"
            class="
              text-gray-500
              hover:text-gray-600
            "
          >
            <span class="sr-only">Github</span>
            <svg
              class="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
          <a
            href="#"
            class="
              text-red-500
              hover:text-red-600
            "
          >
            <span class="sr-only">Instagram</span>
            <svg
              class="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 24 24"
            >
              <path
                fill-rule="evenodd"
                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div
      class="
        col-start-1 col-span-7
        md:col-start-1 md:col-span-6
        row-start-1 row-end-1
        relative
        rounded-sm
        hidden
        md:flex
        z-10
        h-4/5
      "
    >
      <img :src="imageUrl" alt="image" class="rounded-lg w-full" />
    </div>
  </div>
</template>

<script>
export default {
  props: {
    content: {
      type: String,
      default: ` A minimal, dark blue theme for VS Code, Sublime Text, Atom, iTerm,
              and more. Available on Visual Studio Marketplace, Package Control,
              Atom Package Manager, and npm.`,
    },
    theme: {
      type: String,
      default: "Sweet Theme",
    },
    githubLink: {
      type: String,
      default: "https://github.com/igirid",
    },
    tags: {
      type: Array,
      default: ["vs Code", "vs Code", "vs Code"],
    },
    imageUrl: {
      type: String,
      default: "/img/project.jpg",
    },
  },
  setup(props) {},
};
</script>