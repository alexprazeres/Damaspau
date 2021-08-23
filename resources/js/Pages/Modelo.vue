<template>
  <Layout :pagina="pagina">
    <div class="w-full md:pl-4 lg:pl-10 md:pr-4 flex self-start flex-col mt-20">
       <section class="  text-indigo-200 body-font p-5 bg-gray-900">


           <p>MODELO</p>
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
    modelo: Object
  },
  components: {
    Layout,Modelo
  },
};
</script>

<style>
</style>
