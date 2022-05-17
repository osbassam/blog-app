<script setup>
import Blog from '@/Pages/Blog.vue';</script>

<template>
    <Blog>
        <div class="h-full">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

                <div id="painterro"></div>

                <div class="flex justify-between">
                    <div v-for="img in imagesUrl" class="rounded-lg shadow-lg bg-white max-w-sm">
                        <img class="rounded-t-lg" :src="img" @click="openPainterro(img)" alt=""/>
                    </div>
                </div>

                <div class="flex justify-center mt-5">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Open Report
                    </button>
                </div>

            </div>
        </div>

    </Blog>

</template>

<script>
import Painterro from "painterro";

export default {
    data() {
        return {
            painterro: null,
            imagesUrl: [
                '../storage/img/painting(1).jpeg',
                '../storage/img/painting(2).jpeg',
                '../storage/img/painting(3).jpeg',
                '../storage/img/painting(4).jpeg',
            ]
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
                    const base64string = "";
                    const pageImage = new Image();
                    pageImage.src = 'data:image/png;base64,' + base64string;
                    pageImage.onload = function() {
                        const canvas = document.createElement('canvas');
                        canvas.width = pageImage.naturalWidth;
                        canvas.height= pageImage.naturalHeight;

                        const ctx = canvas.getContext('2d');
                        ctx.imageSmoothingEnabled = false;
                        ctx.drawImage(pageImage, 0, 0);
                        console.log(canvas, pageImage)
                        saveScreenshot(canvas);
                    }
                    function saveScreenshot(canvas) {
                        let fileName = "image"
                        const link = document.createElement('a');
                        link.download = fileName + '.png';
                        console.log(canvas)
                        canvas.toBlob(function(blob) {
                            console.log(blob)
                            link.href = URL.createObjectURL(blob);
                            link.click();
                        });
                    };
                    done(true); //done and hide painterro
                }
            });
        });
    },
    methods: {
        openPainterro(img) {
            this.painterro.show(
                img
            );
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
.env
