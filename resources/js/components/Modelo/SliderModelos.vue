<template>
<!-- Display Container (not part of component) START -->
<div class="w-full">

    <!-- Carousel Body -->
    <carousel key="slidermodelos" :items="responsive()" :nav="false" :autoplay="true">
        <!-- Item Carousel -->
        <div v-for="(m,index) in modelos" :key="index" class="mx-2 mb-4 md:mb-0">
            <Modelo :modelo="m" />
        </div>

    </carousel>
</div>
</template>

<script>
import carousel from 'vue-owl-carousel2';
import Modelo from "../Global/CardModelo";

export default {
    data: () => {
        return {
            width: window.innerWidth,

        }
    },
    props: {
        modelos: Array
    },
    components: {
        carousel,Modelo
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
