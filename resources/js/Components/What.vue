<template>
    <div
        class="flex gap-8 flex-col px-2 md:px-10 md:pl-40 md:pr-38 mt-8 mb-6 md:mb-8"
        id="work"
    >
        <div class="flex md:py-2">
            <p
                class="font-bold font-sans text-lg md:text-xl lg:text-2xl text-gray-500"
            >
                <span
                    class="text-gray-400 ml-2 md:ml-3 text-lg md:text-xl lg:text-2xl font-mono"
                >
                    03.
                </span>
                My Work History
            </p>
            <hr class="w-2/6 md:2/4 font-semibold ml-3 md:mx-6 mt-4" />
        </div>
        <card
            :tags="['Nuxt js','Vue js', 'Adonis js', 'Node js']"
            :content="`A Revolutionary Approach To Business Management`"
            :theme="'Tinock'"
            :imageUrl="`/img/tinock.png`"
            :githubLink="`https://tinock.com/`"
        />
        <card
            :tags="['Vue js', 'Laravel', 'Mysql', 'Bootstrap']"
            :content="`A reality talent show, showcasing Nigeria's strongest undiscovered vocalists as they compete for an ultimate prize with the help of some established superstar coaches.`"
            :theme="'The Voice Nigeria'"
            :imageUrl="`https://res.cloudinary.com/dgs1cnxex/image/upload/c_scale,h_285,w_660/v1659276824/portfolio/thevoice_mooiie.webp`"
            :githubLink="`https://thevoicenigeria.com/`"
        />
        <card
            :tags="['Vue js', 'Laravel', 'Mysql', 'Tailwind']"
            :content="`VoteStudio - Engage with your favourite Reality TV formats from Africa and around the world.`"
            :theme="'VoteStudio'"
            :imageUrl="`https://res.cloudinary.com/dgs1cnxex/image/upload/v1659276823/portfolio/vs_dbjemd.webp`"
            :githubLink="`https://votestudio.live/`"
        />

        <p
            class="font-bold font-sans text-center text-lg md:text-xl lg:text-2xl text-gray-500 mb-4 md:mr-20"
        >
            Other noteworthy projects
        </p>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 md:mr-20 p-4">
            <simple-card
                :githubLink="''"
                :cardLink="''"
                :content="`Majestic Roobee is an Online Store for your Amazing Luxurious Designer Oil Fragrances, Ikeja, Lagos, Nigeria.`"
                :title="`Majestic Roobee`"
                :tags="['OpenCart', 'PHP', 'Cloud']"
            />
            <simple-card
                :githubLink="''"
                :cardLink="''"
                :content="`Edo State Insurance company. Strengthen the Healthcare system by reducing out-of-pocket spending & improve access to effective, efficient & sustainable healthcare.`"
                :title="`Edhic`"
                :tags="['Mysql', 'Laravel']"
            />
            <simple-card
                :githubLink="''"
                :cardLink="''"
                :content="`Edo State Insurance company. Strengthen the Healthcare system by reducing out-of-pocket spending & improve access to effective, efficient & sustainable healthcare.`"
                :title="`Naiarbox API`"
                :tags="['Mysql', 'Laravel']"
            />
            <simple-card
                :githubLink="''"
                :cardLink="''"
                :content="`Edo State Insurance company. Strengthen the Healthcare system by reducing out-of-pocket spending & improve access to effective, efficient & sustainable healthcare.`"
                :title="`PHP Parallex package`"
                :tags="['PHP', 'Encryption', 'Decryption']"
            />
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
