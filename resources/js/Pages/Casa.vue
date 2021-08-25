<template>
<Layout :pagina="pagina">
    <div class="w-full md:pl-4 lg:pl-10 md:pr-4 flex self-start flex-col mt-20">

        <section class="text-indigo-200 body-font p-5 bg-gray-900">

            <div class="mx-auto flex md:px-5  md:flex-row flex-col items-center jobcard">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center">

                    <figure class="visible">

                        <div class="">

                            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-100">A Casa</h1>
                            <div class="pt-10 bg-pink-500 p-5 rounded">
                                <p class="text-indigo-200 text-base pb-6 text-white ">O point conceito da cidade com ambiente moderno e segurança para você desfrutar<br>do que a de melhor na cidade.<br>
                                </p>
                                <p class="text-indigo-200 text-base pb-6 text-white ">Pra você que gosta de beber aquela cerveja gelada, com aquele petisco,<br>ouvindo uma música boa e com a melhor companhia.</p>

                            </div>
                            <div class="grid grid-cols-3 divide-x divide-pink-500 mt-10">
                                <div class="text-center">
                                    <i class="highlight rt-icon2-phone5"></i>
                                    <span class="grey">Telefone:</span>
                                    <br>(98) 98835-0309
                                </div>
                                <div class="text-center">
                                    <i class="highlight rt-icon2-phone5"></i>
                                    <span class="grey">Email:</span>
                                    <br>contato@damasdepaus.com
                                </div>

                            </div>
                        </div>
                    </figure>

                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 sm:block hidden">
                    <img class="object-fill object-center rounded" alt="hero" :src="'/images/casa.jpg'" />
                </div>
            </div>

        </section>
        <!-- component -->
        <header>


            <div class="w-full bg-center bg-cover h-96" style="background-image: url(/images/map.png);">
                <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
                    <div class="text-center bg-pink-500 p-10">
                            <a target="_blank" href="https://www.google.com/maps/@-3.6652752,-45.3959592,17.69z" class="theme_button text-white">
                                R. Henrique Dias, N.899 - Parque Pra Morar 2, Santa Inês - Ma.<br>
								(Rua do Colégio CAIC, A Terceira Rua à Direita)<br>
								Aberto de Terça a domingo 18hrs</a>
                    </div>
                </div>
            </div>
        </header>
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
