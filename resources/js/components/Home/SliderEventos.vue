<template>
<!-- Display Container (not part of component) START -->
<div class="w-full">

    <!-- Carousel Body -->
    <carousel key="slidereventos" :items="responsive()" :nav="false" :autoplay="true">
        <!-- Item Carousel -->
        <div v-for="(m,index) in eventos" :key="index" class="mx-2 mb-4 md:mb-0">
            <div class="bg-white rounded-lg overflow-hidden shadow relative">
                <img class="h-96 w-full object-cover object-center" :src="m.imagem" alt="">
            </div>
        </div>

    </carousel>
</div>
</template>

<script>
import carousel from 'vue-owl-carousel2';
export default {
    data: () => {
        return {
            width: window.innerWidth,

        }
    },
    props: {
        eventos: Array
    },
    components: {
        carousel
    },
    methods:{
        responsive(){
            if (this.width< 600){
                return 1;
            }
            if (this.width > 600 && this.width < 1000){
                return 2;
            }
            return 4;
        }
    }
}
</script>

<style>

</style>
