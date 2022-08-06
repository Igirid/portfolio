<template>
    <div
        class="flex flex-col md:flex-row md:justify-between md:mx-32 lg:mx-44 my-10 md:my-24 mx-4"
        id="about"
    >
        <div class="flex flex-col w-full lg:w-2/3">
            <div class="flex md:py-2 content-center">
                <p class="font-bold font-sans text-lg lg:text-xl text-gray-500">
                    <span
                        class="text-gray-400 ml-2 text-lg lg:text-xl font-mono"
                    >
                        01.
                    </span>
                    About Me
                </p>
                <hr class="w-2/5 md:w-2/4 font-semibold mx-4 md:mx-6 mt-4" />
            </div>
            <div class="font-sans p-4 my-4">
                <p class="text-gray-400 font-medium text-base">
                    Hello! My name is David and I'm passionate about building
                    softwares that are accessible on the internet. My interest
                    in web development started back in 2017 when I tried
                    replicating random websites. I got to learn a lot about HTML
                    & CSS by hacking together, piece by piece, websites that I
                    found fascinating.
                </p>
            </div>
            <div class="font-sans px-4 mb-4">
                <p class="text-gray-400 font-medium text-base">
                    Over time I've explored several programming languages and
                    technologies. Sometimes, because they've been massively
                    adopted, and other times out of curiosity.
                </p>
            </div>
            <div class="font-sans px-4 mb-4">
                <p class="text-gray-400 font-medium text-base">
                    As of today, I've had the privilege of working at
                    <a
                        href="https://majesticroobee.com"
                        target="_blank"
                        class="text-blue-800"
                        >Digicomme Solutions
                    </a>
                    and
                    <a
                        href="https://majesticroobee.com"
                        target="_blank"
                        class="text-blue-800"
                        >Making Bosses</a
                    >
                    My main focus these days is building efficient, accessible
                    products and digital experiences.
                </p>
            </div>
            <div class="font-sans px-4 mb-4">
                <p class="text-gray-400 font-medium text-base">
                    Here are a few technologies I've been working with.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-1 px-4">
                <div
                    v-for="(technology, id) in technologies"
                    :key="id + 'tech'"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-2 w-2 text-gray=300 fill-current text-blue-700 inline-block mx-1"
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
                    <span class="text-sm font-mono font-medium text-gray-400">{{
                        technology
                    }}</span>
                </div>
            </div>
        </div>
        <!--
    <div class="lg:flex flex md:block md:w-1/3 md:h-1/3 float-right w-4/6 md:py-24 mx-4 relative my-8 md:my-0">
      <img src="/img/igirid.jpg" alt="David Igiri" class="rounded-lg hover:blur-sm shadow-sm z-10 opacity-70 hover:opacity-100" />
      <div class="absolute md:top-32 top-6 md:hover:top-36 hover:top-10 left-4 hover:left-6 border-2 border-gray-200 hover:border-gray-400 lg:h-3/5 md:h-2/5 h-full w-full md:w-full"></div>
    </div>
    -->
        <div
            class="relative md:w-56 gap-2 w-4/6 md:py-12 mx-2 my-8 md:my-0 md:h-auto"
        >
            <img
                src="/img/igirid3.jpeg"
                alt="David Igiri"
                class="absolute rounded-lg hover:blur-sm shadow-sm z-10 opacity-70 hover:opacity-100 h-80"
            />
            <div
                class="col-span-1 row-start-1 row-span-1 mt-4 hover:mt-6 ml-4 hover:ml-6 border-2 border-gray-200 hover:border-gray-400 h-80 w-56"
            ></div>
        </div>
        <!-- <div
            class="grid grid-cols-1 grid-rows-1 md:w-1/3 gap-2 w-4/6 md:py-12 mx-2 my-8 md:my-0 md:h-1/3"
        >
            <img
                src="/img/igirid3.jpeg"
                alt="David Igiri"
                class="col-start-1 col-span-1 row-start-1 row-span-1 rounded-lg hover:blur-sm shadow-sm z-10 opacity-70 hover:opacity-100 w-full"
            />
            <div
                class="col-start-1 col-span-1 row-start-1 row-span-1 mt-4 hover:mt-6 ml-4 hover:ml-6 border-2 border-gray-200 hover:border-gray-400 h-full w-full"
            ></div>
        </div> -->
    </div>
</template>
<script>
import { reactive } from "vue";
export default {
    setup() {
        const technologies = reactive([
            "Php",
            "Laravel",
            "JS (ES6+)",
            "Vue js",
            "React js",
            "Node js",
            "Typescript",
            "Kotlin",
        ]);

        return { technologies };
    },
};
</script>
