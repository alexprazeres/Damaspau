<template>
<Layout :pagina="pagina">
    <div class="w-full sm:px-5 lg:px-10 flex self-start flex-col ">
        <!-- Componente Slider -->
        <Slider :modelos="destaques" />

        <!-- Componente Modelo -->
        <div class="bg-gradient-to-r from-pink-400 via-pink-500 to-red-500 min-h-screen py-10 px-10 mt-10 rounded">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">
                <Modelo v-for="(m, index) in modelos" :key="index" />
            </div>
        </div>
    </div>
</Layout>
</template>

<script>
import Layout from "../Layout";
import Slider from "../components/Home/Slider";
import Modelo from "../components/Global/CardModelo";
export default {

    props: {
        pagina: String,
        destaques: Array,
        modelos: Array,
    },
    components: {
        Layout,
        Slider,
        Modelo
    },

};
</script>

<style>
</style>
