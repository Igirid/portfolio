<template>
    <div
        class="relative flex flex-col items-start px-4 rounded-lg shadow-sm border z-10 hover:bottom-2 hover:z-20 hover:shadow-md bg-gray-100"
    >
        <a :href="cardLink" class="py-4">
            <div class="mb-14 relative w-full">
                <a
                    href="/"
                    class="text-gray-500 hover:text-gray-600 absolute top-0 right-0"
                >
                    <span class="sr-only">Github</span>
                    <svg
                        class="w-6 h-6 fill-current"
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
                    :href="cardLink"
                    class="text-gray-500 hover:text-gray-600 absolute top-0 right-8"
                >
                    <span class="sr-only">Link</span>
                    <svg
                        class="w-6 h-6 fill-current"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M21 13v10h-21v-19h12v2h-10v15h17v-8h2zm3-12h-10.988l4.035 4-6.977 7.07 2.828 2.828 6.977-7.07 4.125 4.172v-11z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
                <a
                    href="/"
                    class="text-blue-500 hover:text-blue-600 absolute top-0 left-0"
                >
                    <span class="sr-only">file</span>
                    <svg
                        class="w-10 h-10 fill-current"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M6.083 4c1.38 1.612 2.578 3 4.917 3h11v13h-20v-16h4.083zm.917-2h-7v20h24v-17h-13c-1.629 0-2.305-1.058-4-3z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
            </div>
            <p
                class="text-lg font-bold text-gray-400 mb-2 cursor-not-allowed hover:border-2 border-dashed hover:text-gray-600 hover:border-gray-600"
            >
                {{ title }}
            </p>

            <p class="text-base font-medium text-gray-400 mb-6">
                {{ content }}
            </p>
            <div class="flex gap-2">
                <p
                    v-for="(tag, id) in tags"
                    :key="'tag ' + id"
                    class="text-base font-mono text-gray-500 mb-2"
                >
                    {{ tag }}
                </p>
            </div>
        </a>
    </div>
</template>
<script>
export default {
    props: {
        content: {
            type: String,
            default: ` Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet
          mollitia accusamus itaque explicabo quos iste ipsum commodi`,
        },
        title: {
            type: String,
            default: "Integrating Vue with Laravel and Gridsome",
        },
        githubLink: {
            type: String,
            default: "https://github.com/igirid",
        },
        link: {
            type: String,
            default: "https://github.com/igirid",
        },
        cardLink: {
            type: String,
            default: "https://github.com/igirid",
        },
        tags: {
            type: Array,
            default: ["vs Code", "vs Code", "vs Code"],
        },
    },
    setup(props) {},
};
</script>
