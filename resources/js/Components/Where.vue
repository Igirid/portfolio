<template>
    <div
        class="flex flex-col md:px-32 lg:px-44 items-start mb-10 md:mb-24 mx-4"
        id="experience"
    >
        <div class="flex md:py-2 content-center my-4">
            <p class="font-bold font-sans text-lg md:text-xl text-gray-500">
                <span class="text-gray-400 ml-2 text-lg md:text-xl font-mono">
                    02.
                </span>
                Where I've Worked
            </p>
            <hr class="w-/4 font-semibold mx-4 md:mx-6 mt-4 bg-gray-400" />
        </div>
        <div
            class="flex flex-col md:flex-row overflow-x-scroll md:overflow-visible"
        >
            <div class="flex md:flex-col mx-2 md:mx-6 mb-4 md:mb-0">
                <button
                    class="md:border-l-2 border-b-2 md:border-b-0 px-2 md:h-auto w-auto md:w-auto md:mx-0 md:py-2 md:px-4 text-left font-mono hover:bg-blue-700 text-gray-300"
                    :class="
                        place == currentPlace
                            ? 'border-gray-200 bg-blue-800'
                            : 'border-gray-200'
                    "
                    v-for="(place, id) in places"
                    :key="'place ' + id"
                    @click="currentPlace = place"
                >
                    {{ place }}
                </button>
            </div>

            <keep-alive>
                <component :is="currentPlaceComponent"> </component>
            </keep-alive>
        </div>
    </div>
</template>
<script>
import { computed, reactive, ref } from "vue";
// import tabApple from "./Where/tabApple.vue";
import tabMakingBosses from "./Where/tabMakingBosses.vue";
import tabDigicomme from "./Where/tabDigicomme.vue";

export default {
    components: {
        tabMakingBosses,
        tabDigicomme,
        // tabFacebook,
    },
    setup() {
        const places = reactive(["Digicomme Solutions", "Making Bosses"]);
        const currentPlace = ref("Digicomme Solutions");
        const currentPlaceComponent = computed(() => {
            if (currentPlace.value == "Making Bosses") {
                return "tab-making-bosses";
            }
            if (currentPlace.value == "Digicomme Solutions") {
                return "tab-digicomme";
            }
            return "tab-" + currentPlace.value.toLowerCase();
        });

        return { places, currentPlaceComponent, currentPlace };
    },
};
</script>
