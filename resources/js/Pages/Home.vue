<template>
<Layout :pagina="pagina">
    <div class="w-full sm:px-5 lg:px-10 flex self-start flex-col ">
        <!-- Componente Slider -->
        <Slider :modelos="modelos" />
    </div>
</Layout>
</template>

<script>
import Layout from "../Layout";
import Slider from "../components/Home/Slider";
export default {

    props: {
        pagina: String,
        modelos: Array,
    },
    components: {
        Layout,Slider
    },

};
</script>

<style>
</style>
