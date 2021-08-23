<template>
<Layout :pagina="pagina">
    <div class="w-full sm:px-5 lg:px-10 flex self-start flex-col ">

        <!-- Destaques -->
        <Title title="Destaques" />
        <SliderDestaque :modelos="destaques" />

        <!-- Grid de Modelos -->
        <Title title="Nossas Modelos" />
        <ModelosGrid :modelos="modelos" />

        <!-- Eventos -->
        <Title title="Eventos" />
        <SliderEventos :eventos="eventos" />
    </div>
</Layout>
</template>

<script>
import Layout from "../Layout";
import SliderDestaque from "../components/Home/SliderDestaque";
import SliderEventos from "../components/Home/SliderEventos";
import ModelosGrid from "../components/Home/ModelosGrid";
import Title from "../components/Global/Title";
export default {

    props: {
        pagina: String,
        destaques: Array,
        modelos: Array,
        eventos: Array
    },
    components: {
        Layout,
        SliderDestaque,
        ModelosGrid,
        Title,
        SliderEventos
    },

};
</script>

<style>
</style>
