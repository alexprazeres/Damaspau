<template>
    <main class="bg-site h-auto">
        <NavBar :pagina="pagina" />
            <article class="pt-32">
                    <slot/>
            </article>
        <Footer />
    </main>
</template>

<script>
import NavBar from "./components/Global/Navbar.vue";
import Footer from "./components/Global/Footer.vue";
export default {
    components: {
        NavBar,
        Footer,
    },
    props:{
        pagina:String
    }
}
</script>

<style>

</style>
