<template>
<Link :href="'/modelo/'+modelo.id">
 <div class="py-4">
    <div :style="'background-image: url(/'+modelo.capa+');'" class="shadow-lg group transition-all  rounded-md bg-white  max-w-sm flex justify-center items-center  mx-auto content-div">
        <div class="w-100">
            <div class="w-full image-cover rounded-t-md">

            </div>
            <div class="py-8 px-4 min-w-full bg-white transition-all rounded-b-md fd-cl  w-full">
                <span class="block text-lg text-gray-800 font-bold tracking-wide">{{ modelo.nome }}</span>
            </div>
        </div>
        <div class="absolute opacity-0 fd-sh group-hover:opacity-100">
            <span class="text-3xl font-bold text-white tracking-wider leading-relaxed font-sans">{{ modelo.nome }}</span>
            <div class="pt-8 text-center">
                <button class="text-center rounded-lg p-4 bg-white  text-gray-700 font-bold text-lg">Ver mais</button>
            </div>
        </div>
    </div>

</div>
</Link>
</template>

<script>
import {
    Link
} from '@inertiajs/inertia-vue'
export default {
    props:{
        modelo:Object
    },
    components:{
        Link
    }
}
</script>

<style>

</style>
