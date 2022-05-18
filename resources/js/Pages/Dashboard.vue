<script setup>
import Blog from '@/Pages/Blog.vue';
import {Head} from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard"/>

    <Blog>
        <div class="">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-center">
                        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 ml-52 lg:items-center lg:gap-12">
                                <div class="md:7/12 lg:w-6/12  flex justify-center ">
                                    <div>
                                        <h2 class="text-2xl  font-bold md:text-5xl border-animate">Our Message</h2>
                                        <p class="text-2xl flex justify-center  font-semibold"> This blog is to raise awareness about depression in the
                                            younger generation and to give tips and advice on how to create a healthy relationship
                                            between children and parents where both parties can communicate and help each other out
                                            in the best way possible. Read more to find the signs of depression in kids/teens, how
                                            to spot it, and how to help.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </Blog>
</template>

<script>
export default{
    data(){
        return{
            count:25
        }
    }
}
</script>

<style scoped>
.border-animate {
    border:10px solid black;
    padding: 2rem 1rem;
    min-height: 3em;
    resize: both;
    background: #ffd73e33;
    border-image: url("data:image/svg+xml;charset=utf-8,%3Csvg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'%3E %3Cstyle%3Epath%7Banimation:stroke 5s infinite linear%3B%7D%40keyframes stroke%7Bto%7Bstroke-dashoffset:776%3B%7D%7D%3C/style%3E%3ClinearGradient id='g' x1='0%25' y1='0%25' x2='0%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%232d3561' /%3E%3Cstop offset='25%25' stop-color='%23c05c7e' /%3E%3Cstop offset='50%25' stop-color='%23f3826f' /%3E%3Cstop offset='100%25' stop-color='%23ffb961' /%3E%3C/linearGradient%3E %3Cpath d='M1.5 1.5 l97 0l0 97l-97 0 l0 -97' stroke-linecap='square' stroke='url(%23g)' stroke-width='3' stroke-dasharray='388'/%3E %3C/svg%3E") 1;
}
</style>
