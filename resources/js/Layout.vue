<template>
    <main class="bg-site">
        <NavBar :pagina="pagina" />
            <article class="pt-20">
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
