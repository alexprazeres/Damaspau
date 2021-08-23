<template>
<div class="my-10">
    <h1 class="w-full text-4xl font-bold leading-tight text-center text-white ">
       {{ title }}
    </h1>
    <div class="w-full">
        <div class="h-1 mx-auto gradient w-64 my-0 py-0 rounded-t"></div>
    </div>
</div>
</template>

<script>
export default {
    props:{
        title: String
    }
}
</script>

<style>

</style>
