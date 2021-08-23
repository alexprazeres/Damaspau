<!--./src/components/NavBar.vue -->

<template>
<nav id="header" class="fixed bg-black text-white w-full z-20 top-0 fundo-fixo border-b-4 border-pink-500">
    <div id="progress" class="h-1 z-40 top-0" style="background:linear-gradient(to right, #FFC100 var(--scroll), transparent 0);"></div>
    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
        <div class="block pl-8 p-2">
            <a class="text-yellow-300 font-bold text-base no-underline hover:no-underline" href="#">
                <img src="/images/logowhite.png" width="150px">
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button @click="exibirMenu = !exibirMenu" id="nav-toggle" class="flex items-center px-3 py-2 text-yellow-300 border-gray-600 focus:outline-none">
                <svg fill="text-yellow-300" viewBox="0 0 20 20" class="w-6 h-6 fill-current">
                    <title>Menu</title>
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow p-4 lg:items-center lg:w-auto lg:block mt-2 lg:mt-0 bg-black md:bg-transparent z-20" :class="exibirMenu?'':'hidden'" id="nav-content">
            <ul class="list-reset lg:flex justify-center flex-1 items-center">
                <li class="mr-3">
                    <Link :class="(pagina == 'Inicio'?'md:border-b-4 border-pink-500 hover:text-white text-pink-500':'hover:text-pink-500')" class="border-b-0 md:no-underline md:hover:no-underline  inline-block py-2 px-4  font-bold" href="/">Inicio</Link>
                </li>
                <li class="mr-3">
                    <Link :class="(pagina == 'Modelos'?'md:border-b-4 border-pink-500 hover:text-white text-pink-500':'hover:text-pink-500')" class="inline-block hover:text-pink-500 md:no-underline md:hover:no-underline py-2 px-4 font-bold" href="/modelos">Modelos</Link>
                </li>
                <li class="mr-3">
                    <Link :class="(pagina == 'A Casa'?'md:border-b-4 border-pink-500 hover:text-white text-pink-500':'hover:text-pink-500')" class="inline-block hover:text-pink-500 md:no-underline md:hover:no-underline py-2 px-4 font-bold" href="/acasa">A Casa</Link>
                </li>

                <li class="mr-3">
                    <Link :class="(pagina == 'Contatos'?'md:border-b-4 border-pink-500 hover:text-white text-pink-500':'hover:text-pink-500')" class="inline-block hover:text-pink-500 md:no-underline md:hover:no-underline py-2 px-4 font-bold" href="/contatos">Contatos</Link>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
</template>

<script>
import {
    Link
} from '@inertiajs/inertia-vue'

export default {
    name: "NavBar",
    data: function () {
        return {
            exibirMenu: false
        }
    },
    components: {
        Link
    },
    props: {
        pagina: String
    }
};
</script>
