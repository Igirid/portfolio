<template>
  <div class="flex flex-col my-1 py-2 px-2 h-max hover:border-2 border-dashed border-gray-200">
    <p class="font-mono mb-2 lg:mb-3 font-bold text-lg pl-2 text-gray-400">Junior Developer <a href="#" class="hover:underline text-gray-500"> @Apple</a></p>
    <p class="font-mono mb-2 lg:mb-3 font-semibold text-base pl-2 text-gray-400">January - May 2018 </p>
    
    <div class="grid gap-2 px-2 my-2">
      <div
        v-for="(deed, id) in deeds"
        :key="id + 'deed'"
        class="flex flex-row justify-start content-center"
      >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="md:h-4 h-10 w-10 md:w-4 text-blue-700 fill-current mr-4 self-center"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        <div class="text-gray-400">{{ deed }}</div>
      </div>
    </div>
  </div>
</template>
<script>
import { reactive } from "vue";
export default {
  setup() {
    const deeds = reactive([
      "Collaborated with a small team of  student-led design conference at Northeastern",
      "Collaborated with a small team  for Scout’s inaugural student-led design conference at Northeastern",
    ]);

    return { deeds };
  },
};
</script>
