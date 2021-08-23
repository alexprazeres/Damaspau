<template>
<!-- Display Container (not part of component) START -->
<div class=" mx-auto md:w-9/12">

    <!-- Carousel Body -->
    <carousel :nav="false" :items="1" :autoplay="true" class="w-full md:w-4/5 mx-auto relative">
        <!-- Item Carousel -->
        <div v-for="(m,index) in modelos" :key="index" class="mx-2 relative rounded-lg block md:flex items-center bg-gray-100 shadow-xl" style="min-height: 25rem;">
            <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg" style="min-height: 25rem;">
                <img class="transition delay-150 duration-300 ease-in-out absolute inset-0 w-full h-full object-cover object-top bg-pink" :src="m.capa" alt="">

            </div>
            <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
                <div class="p-12 md:pr-24 md:pl-16 md:py-12  ">
                    <p class="text-gray-600 " v-html="m.sobre">{{ m.sobre }}</p>
                    <a class="flex items-baseline mt-3 text-indigo-600 hover:text-indigo-900 focus:text-indigo-900" href="">
                        <span>Ver mais informações</span>
                        <span class="text-xs ml-1">&#x279c;</span>
                    </a>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>

        </div>
        <template slot="prev"><button v-show="modelos.length > 1" class="z-50 prev absolute top-0 mt-40 left-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -ml-6 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(-1);">&#x279c;</span>
            </button>
        </template>
        <template slot="next">
            <button v-show="modelos.length > 1" class="z-50 next absolute top-0 mt-40 right-0 bg-white rounded-full shadow-md h-12 w-12 text-2xl text-indigo-600 hover:text-indigo-400 focus:text-indigo-400 -mr-6 focus:outline-none focus:shadow-outline">
                <span class="block" style="transform: scale(1);">&#x279c;</span>
            </button>
        </template>
    </carousel>
</div>
<!-- Display Container (not part of component) END -->
</template>

<script>
import carousel from 'vue-owl-carousel2';
export default {
    data: () => {
        return {
            indexSlider: 0,
        }
    },
    components: {
        carousel
    },
    props: {
        modelos: Array
    },
}
</script>
