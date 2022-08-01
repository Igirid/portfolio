<template>
    <div class="flex flex-col my-1 py-1 md:my-2 md:py-4 px-2 md:px-44">
        <p class="font-mono mb-2 md:mb-3 font-bold text-lg pl-2 text-gray-400">
            Hi, my name is
        </p>
        <p
            class="font-sans mb-2 md:mb-3 font-bold text-4xl md:text-5xl lg:text-7xl pl-1 md:pl-0 text-gray-600"
        >
            David Igiri.
        </p>
        <p
            class="font-sans mb-2 md:mb-3 font-semibold text-3xl md:text-4xl lg:text-6xl pl-2 md:pl-0 text-gray-500"
        >
            I build apps for mobile and the web.
        </p>
        <div class="md:w-4/5 py-3 px-2">
            <p class="font-sans mb-3 font-bold text-base text-gray-500">
                I’m a software engineer specializing in building (and
                occasionally designing) superb digital experiences. Currently
                I’m focused on building open source packages on
                <a
                    href="/https://github.com/igirid"
                    class="font-bold text-base hover:underline"
                >
                    Github
                </a>
            </p>
        </div>
        <div
            class="flex flex-col md:flex-row items-center md:justify-start gap-2"
        >
            <div class="flex flex-row gap-2 items-center justify-between">
                <div
                    class="border-2 bg-blue-800 w-max py-4 px-4 h-auto rounded-md hover:bg-gray-50 text-gray-100 hover:text-blue-800 text-center"
                >
                    <a
                        href="https://github.com/igirid"
                        class="font-normal text-sm font-mono border-gray-200"
                    >
                        Find My Github!</a
                    >
                </div>
                <div
                    class="border-2 bg-blue-800 w-max py-4 px-4 h-auto rounded-md hover:bg-gray-50 text-gray-100 hover:text-blue-800 text-center"
                >
                    <a
                        href="https://gitlab.com/igirid"
                        class="font-normal text-sm font-mono border-gray-200"
                    >
                        Find My Gitlab!</a
                    >
                </div>

            </div>
                <div
                    class="border-2 bg-blue-800 w-max py-4 px-4 h-auto rounded-md hover:bg-gray-50 text-gray-100 hover:text-blue-800 text-center"
                >
                    <a
                    href="https://stackoverflow.com/users/9646225/igiri-david"
                        class="font-normal text-sm font-mono border-gray-200"
                    >
                        Check Out My Stackoverflow!</a
                    >
                </div>

        </div>
    </div>
</template>
<script>
import { ref, reactive, computed } from "vue";
export default {
    setup() {
        const navToggled = ref(false);
        const responsiveNav = reactive({
            hidden: computed(() => !navToggled.value),
        });

        return { navToggled, responsiveNav };
    },
};
</script>
