<template>
    <main>
        <NavBar :pagina="pagina" />
            <article class="pt-20">
                    <slot/>
            </article>
        <Footer />
    </main>
</template>

<script>
import NavBar from "./components/Navbar.vue";
import Footer from "./components/Footer.vue";
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
