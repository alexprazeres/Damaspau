<template>
<Layout :pagina="pagina">
    <div class="w-full md:pl-4 lg:pl-10 md:pr-4 flex self-start flex-col mt-20">
        <section class="  text-indigo-200 body-font p-5 bg-gray-900">
            <div class="items-center grid grid-cols-2 gap-4">
                <div>
                    <p>
                        <b class="grey fontsize_12 text-uppercase bold">Endereço:</b>
                        <br> R. Henrique Dias, N.899 - Parque Pra Morar 2, Santa Inês - Ma.<br>
                        (Rua do Colégio CAIC, A Terceira Rua à Direita)<br>
                        Aberto de Terça a domingo 18hrs
                    </p>
                    <p class="mt-10">
                        <b class="grey fontsize_12 text-uppercase bold">Contatos:</b>
                        <br>
                        <span class="grey fontsize_12 text-uppercase bold">Telefone:</span>

                        <a href="tel:98985302835">
                            <em>(98) 98530-2835 </em>
                        </a>
                    </p>
                    <p class="bottommargin_0">
                        <span class="grey fontsize_12 text-uppercase bold">Email:</span>

                        <a href="mainto:agency@support.com">
                            <em>contato@damasdepaus.com</em>
                        </a>
                    </p>
                </div>

                <div>

                    <div class="flex items-center bg-gray-50 dark:bg-gray-900">
                        <div class="container mx-auto">
                            <div class="p-5">
                                <div v-for="(error, index) in errors" :key="index">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-md mx-auto bg-white rounded-md shadow-sm">
                                <div class="text-center">
                                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Entre em Contato</h1>
                                </div>

                                <div class="m-1">
                                    <form @submit.prevent="enviarContato" action="https://api.web3forms.com/submit" method="POST" id="form">

                                        <div class="mb-6">
                                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nome</label>
                                            <input type="text" v-model="contato.nome" placeholder="Seu Nome" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 text-black text-opacity-100" />
                                        </div>
                                        <div class="mb-6">

                                            <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">Telefone</label>
                                            <input type="tel" v-model="contato.telefone" placeholder="Seu Telefone" required class="text-opacity-100 w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 text-black" />
                                        </div>
                                        <div class="mb-6">
                                            <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Sua mensagem</label>

                                            <textarea rows="5" v-model="contato.mensagem" name="message" id="message" placeholder="Your Message" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 text-opacity-100 text-black" required></textarea>
                                        </div>
                                        <div class="mb-6">
                                            <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Enviar Mensagem</button>
                                        </div>
                                        <p class="text-base text-center text-gray-400" id="result">
                                        </p>
                                    </form>
                                    <div v-if="flash.success != null" class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ flash.success }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</Layout>
</template>

<script>
import Layout from "../Layout";
export default {
    data: () => {
        return {
            contato: {
                nome: "",
                telefone: "",
                mensagem: ""
            },

        }
    },
    props: {
        pagina: String,
        errors: Object,
        flash: Object
    },
    components: {
        Layout,
    },
    methods: {
        enviarContato() {
            this.$inertia.post('/contatos', this.contato);
        }
    }
};
</script>

<style>
</style>
