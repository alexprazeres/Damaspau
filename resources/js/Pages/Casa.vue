<template>
<Layout :pagina="pagina">
    <div class="w-full md:pl-4 lg:pl-10 md:pr-4 flex self-start flex-col mt-20">

        <section class="text-indigo-200 body-font p-5 bg-gray-900">

            <div class="mx-auto flex px-5  md:flex-row flex-col items-center jobcard">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center">

                    <figure class="visible">

                        <div class="">

                            <div class="pt-10">

                                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-100">A Casa
                                </h1>
                                <p class="text-indigo-200 text-base pb-6 text-white bg-pink-500">O point conceito da cidade com ambiente moderno e segurança para você desfrutar<br>do que a de melhor na cidade.<br>
                                </p>
                                <p class="text-indigo-200 text-base pb-6 text-white bg-pink-500">Pra você que gosta de beber aquela cerveja gelada, com aquele petisco,<br>ouvindo uma música boa e com a melhor companhia.</p>

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
