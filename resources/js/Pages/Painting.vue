<script setup>
import Blog from '@/Pages/Blog.vue';

import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { ExclamationIcon } from '@heroicons/vue/outline'
</script>

<template>
    <Blog>
        <div class="h-full">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

                <TransitionRoot as="template" :show="openModal">
                    <Dialog as="div" class="relative z-10" @close="openModal = false">
                        <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100" leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
                        </TransitionChild>

                        <div class="fixed z-10 inset-0 overflow-y-auto">
                            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                                <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200" leave-from="opacity-100 translate-y-0 sm:scale-100" leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                    <DialogPanel class="relative bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full sm:p-6">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <DialogTitle as="h3" class="text-5xl font-extrabold  text-center text-gray-900 mb-5"> What Colors Represent? </DialogTitle>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold my-3 italic text-red-500 mx-3">Red: </p>
                                                    <p class="text-lg font-semibold my-3 text-red-500 mx-3">Passion, Love, Anger</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold my-3 italic text-orange-500 mx-3">Orange: </p>
                                                    <p class="text-lg font-semibold my-3 text-orange-500 mx-3">Energy, Happiness, Vitality. </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold my-3 italic text-green-500 mx-3">Green: </p>
                                                    <p class="text-lg font-semibold my-3 text-green-500 mx-3">New Beginnings, Abundance, Nature. </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold italic my-3 text-blue-500 mx-3">Blue: </p>
                                                    <p class="text-lg font-semibold text-blue-500 my-3 mx-3">Calm, Responsible, Sadness. </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold italic text-purple-500 my-3 mx-3">Purple: </p>
                                                    <p class="text-lg font-semibold text-purple-500 my-3 mx-3">Creativity, Royalty, Wealth </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold italic mx-3 my-3">Black: </p>
                                                    <p class="text-lg font-semibold my-3 mx-3">Mystery, Elegance, Depression. </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold my-3 text-gray-700 italic mx-3">Gray: </p>
                                                    <p class="text-lg font-semibold my-3 text-gray-700  mx-3">Moody, Conservative, Formality.  </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold my-3 text-pink-700 italic mx-3">Pink: </p>
                                                    <p class="text-lg font-semibold my-3 text-pink-700  mx-3">Love, Kindness, Compassion.  </p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="text-lg font-extrabold my-3 text-cyan-600 italic mx-3">Turquoise: </p>
                                                    <p class="text-lg font-semibold my-3 text-cyan-600 mx-3">Calmness, Clarity, Peace.  </p>
                                                </div>
                                            </div>
                                        </div>
                                    </DialogPanel>
                                </TransitionChild>
                            </div>
                        </div>
                    </Dialog>
                </TransitionRoot>

                <div id="painterro" ref="el"></div>

                <div class="flex justify-between">
                    <div v-for="img in imagesUrl" class="rounded-lg shadow-lg bg-white max-w-sm">
                        <img class="rounded-t-lg" :src="img" @click="openPainterro(img)" alt=""/>
                    </div>
                </div>

                <div class="flex justify-center mt-5">
                    <button @click="openModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Open Report
                    </button>
                </div>

            </div>
        </div>

    </Blog>

</template>

<script>
import Painterro from "painterro";
import html2canvas from "html2canvas";

export default {
    data() {
        return {
            painterro: null,
            imagesUrl: [
                '../storage/img/painting(1).jpeg',
                '../storage/img/painting(2).jpeg',
                '../storage/img/painting(3).jpeg',
                '../storage/img/painting(4).jpeg',
            ],
            canvas: '',
            openModal: false,

        }
    },
    mounted() {
        this.$nextTick(() => {
            this.painterro = Painterro({
                id: 'painterro',
                colorScheme: {
                    main: '#f8f8f8',
                    control: '#d5d5d5',
                    controlContent: '#434649'
                },
                defaultTool: 'brush',
                hiddenTools: ['crop'],
                backplateImgUrl: '../storage/img/painting(1).jpeg',
                how_to_paste_actions: ['replace_all'],
                saveHandler: (image, done) => {
                    this.printThis();
                    done(true); //done and hide painterro
                }
            });
        });

        setTimeout(() => {
            this.canvas = document.getElementById('painterro-canvas');
        }, 0);

    },
    methods: {
        openPainterro(img) {
            this.painterro.show(
                img
            );
        },
        async printThis() {
            const el = this.canvas;

            const options = {
                type: "dataURL",
            };
            const printCanvas = await html2canvas(el, options);

            const link = document.createElement("a");
            link.setAttribute("download", "download.png");
            link.setAttribute(
                "href",
                printCanvas
                    .toDataURL("image/png")
                    .replace("image/png", "image/octet-stream")
            );
            link.click();
        }
    }
}
</script>

<style scoped>
#painterro {
    position: fixed;
    top: 65px;
    right: 20px;
    bottom: 20px;
    left: 20px;
    z-index: 1000;
    box-shadow: 0 0 20px 5px #505050;
}
</style>
