<template>
  <Layout :pagina="pagina">
    <div class="w-full md:pl-4 lg:pl-10 md:pr-4 flex self-start flex-col mt-20">
      <p>Casa</p>

    </div>
  </Layout>
</template>

<script>
import Layout from "../Layout";
export default {
  props: {
    pagina: String
  },
  components: {
    Layout,
  },
};
</script>

<style>
</style>
