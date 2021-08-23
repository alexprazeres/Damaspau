<template>
  <!-- Componente Modelo -->
        <div class="bg-gradient-to-r from-pink-400 via-pink-500 to-red-500 min-h-screen py-10 px-10 mt-10 rounded ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">
                <Modelo :modelo="m" v-for="(m, index) in modelos" :key="index" />
            </div>
            <div class="w-full flex mt-20">
                <Link href="/modelos" class="bg-white text-decoration-none hover:bg-pink text-pink font-bold py-2 px-4 border-b-4 border-black hover:border-blue rounded mx-auto">
                    Ver Todas
                </Link>
            </div>
        </div>
</template>

<script>
import Modelo from "../Global/CardModelo";
import {
    Link
} from '@inertiajs/inertia-vue'
export default {
    components:{
        Modelo,Link
    },
    props:{
        modelos:Array
    }
}
</script>

<style>

</style>
