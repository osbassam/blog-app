<script setup>
import Blog from '@/Pages/Blog.vue';
</script>

<template>
    <Blog>
        <div class="h-full">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

                <div id="painterro"></div>

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
                hiddenTools: ['crop', 'line', 'arrow', 'rect', 'ellipse', 'text', 'rotate', 'resize', 'save', 'open', 'undo', 'redo', 'zoomin', 'zoomout', 'bucket'],
                saveHandler: (image, done) => {
                    const type = 'image/png';
                    const file = new File([image.asBlob(type)], "file.png", {
                        type: type,
                    });
                    this.add_file(file);
                    done(true); //done and hide painterro
                }
            }).show();
        });
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
