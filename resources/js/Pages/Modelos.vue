<template>
  <Layout :pagina="pagina">
    <div class="w-full md:pl-4 lg:pl-10 md:pr-4 flex self-start flex-col mt-20">
       <section class="  text-indigo-200 body-font p-5 bg-gray-900">
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">
                <Modelo :modelo="m" v-for="(m, index) in modelos" :key="index" />
            </div>
       </section>

    </div>
  </Layout>
</template>

<script>
import Layout from "../Layout";
import Modelo from "../components/Global/CardModelo";

export default {
  props: {
    pagina: String,
    modelos: Array
  },
  components: {
    Layout,Modelo
  },
};
</script>

<style>
</style>
