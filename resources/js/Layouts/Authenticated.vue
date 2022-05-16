<script setup>
import {ref} from 'vue';
import {
    Dialog,
    DialogPanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    TransitionChild,
    TransitionRoot,
} from '@headlessui/vue'

import {
    BeakerIcon,
    ClockIcon,
    HomeIcon,
    IdentificationIcon,
    MenuAlt1Icon,
    ScaleIcon,
    XIcon
} from '@heroicons/vue/outline'
import {ChevronDownIcon,} from '@heroicons/vue/solid'
import {usePage} from "@inertiajs/inertia-vue3";

const navigation = [
    {name: 'Home', href: "/", icon: HomeIcon, current: route().current('dashboard') == true ? true : false},
    {name: 'FAQ', href: "/faq", icon: ClockIcon, current: route().current('faq') == true ? true : false},
    {
        name: 'About Us',
        href: "/about-us",
        icon: IdentificationIcon,
        current: route().current('about') == true ? true : false
    },
    {
        name: 'Medical Professionals',
        href: "/medical-professionals",
        icon: BeakerIcon,
        current: route().current('medicals') == true ? true : false
    },
    {
        name: 'Games',
        href: "/games",
        icon: BeakerIcon,
        current: route().current('games') == true ? true : false
    },
]
const secondaryNavigation = []
const cards = [
    {name: 'Account balance', href: '#', icon: ScaleIcon, amount: '$30,659.45'},
    // More items...
]
const transactions = [
    {
        id: 1,
        name: 'Payment to Molly Sanders',
        href: '#',
        amount: '$20,000',
        currency: 'USD',
        status: 'success',
        date: 'July 11, 2020',
        datetime: '2020-07-11',
    },
    // More transactions...
]
const statusStyles = {
    success: 'bg-green-100 text-green-800',
    processing: 'bg-yellow-100 text-yellow-800',
    failed: 'bg-gray-100 text-gray-800',
}

const sidebarOpen = ref(false)


const showingNavigationDropdown = ref(false);

</script>

<template>
    <div class="h-screen bg-gradient-to-r from-purple-500 to-pink-500 pb-52">
        <TransitionRoot as="template" :show="sidebarOpen">
            <Dialog as="div" class="relative z-40 lg:hidden" @close="sidebarOpen = false">
                <TransitionChild as="template" enter="transition-opacity ease-linear duration-300"
                                 enter-from="opacity-0" enter-to="opacity-100"
                                 leave="transition-opacity ease-linear duration-300" leave-from="opacity-100"
                                 leave-to="opacity-0">
                    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"/>
                </TransitionChild>

                <div class="fixed inset-0 flex z-40">
                    <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
                                     enter-from="-translate-x-full" enter-to="translate-x-0"
                                     leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
                                     leave-to="-translate-x-full">
                        <DialogPanel class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-cyan-700">
                            <TransitionChild as="template" enter="ease-in-out duration-300" enter-from="opacity-0"
                                             enter-to="opacity-100" leave="ease-in-out duration-300"
                                             leave-from="opacity-100" leave-to="opacity-0">
                                <div class="absolute top-0 right-0 -mr-12 pt-2">
                                    <button type="button"
                                            class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                            @click="sidebarOpen = false">
                                        <span class="sr-only">Close sidebar</span>
                                        <XIcon class="h-6 w-6 text-white" aria-hidden="true"/>
                                    </button>
                                </div>
                            </TransitionChild>
                            <nav class="mt-5 flex-shrink-0 h-full divide-y divide-cyan-800 overflow-y-auto"
                                 aria-label="Sidebar">
                                <div class="px-2 space-y-1">
                                    <a v-for="item in navigation" :key="item.name" :href="item.href"
                                       :class="[item.current ? 'bg-cyan-800 text-white' : 'text-cyan-100 hover:text-white hover:bg-cyan-600', 'group flex items-center px-2 py-2 text-base font-medium rounded-md']"
                                       :aria-current="item.current ? 'page' : undefined">
                                        <component :is="item.icon" class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"
                                                   aria-hidden="true"/>
                                        {{ item.name }}
                                    </a>
                                </div>
                                <!--                                <div class="mt-6 pt-6">-->
                                <!--                                    <div class="px-2 space-y-1">-->
                                <!--                                        <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href"-->
                                <!--                                           class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600">-->
                                <!--                                            <component :is="item.icon" class="mr-4 h-6 w-6 text-cyan-200"-->
                                <!--                                                       aria-hidden="true"/>-->
                                <!--                                            {{ item.name }}-->
                                <!--                                        </a>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                            </nav>
                        </DialogPanel>
                    </TransitionChild>
                    <div class="flex-shrink-0 w-14" aria-hidden="true">
                        <!-- Dummy element to force sidebar to shrink to fit close icon -->
                    </div>
                </div>
            </Dialog>
        </TransitionRoot>

        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
                <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
                    <div class="px-2 space-y-1">
                        <a v-for="item in navigation" :key="item.name" :href="item.href"
                           :class="[item.current ? 'bg-cyan-800 text-white' : 'text-cyan-100 hover:text-white hover:bg-cyan-600', 'group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md']"
                           :aria-current="item.current ? 'page' : undefined">
                            <component :is="item.icon" class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"
                                       aria-hidden="true"/>
                            {{ item.name }}
                        </a>
                    </div>
                    <div class="mt-6 pt-6">
                        <div class="px-2 space-y-1">
                            <a v-for="item in secondaryNavigation" :key="item.name" :href="item.href"
                               class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-cyan-100 hover:text-white hover:bg-cyan-600">
                                <component :is="item.icon" class="mr-4 h-6 w-6 text-cyan-200" aria-hidden="true"/>
                                {{ item.name }}
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="lg:pl-64 flex flex-col flex-1">
            <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none">
                <button type="button"
                        class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden"
                        @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <MenuAlt1Icon class="h-6 w-6" aria-hidden="true"/>
                </button>
                <!-- Search bar -->
                <div class="flex-1 px-4 flex justify-end sm:px-6  lg:px-8 bg-gradient-to-r from-purple-500 to-pink-500">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <Menu as="div" class="ml-3 relative">
                            <div>
                                <MenuButton
                                    class="max-w-xs bg-white rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 lg:p-2 lg:rounded-md lg:hover:bg-gray-50">
                                    <img class="h-8 w-8 rounded-full"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt=""/>
                                    <span class="hidden ml-3 text-gray-700 text-sm font-medium lg:block"><span
                                        class="sr-only">Open user menu for </span>{{ user.name }}</span>
                                    <ChevronDownIcon class="hidden flex-shrink-0 ml-1 h-5 w-5 text-gray-400 lg:block"
                                                     aria-hidden="true"/>
                                </MenuButton>
                            </div>
                            <transition enter-active-class="transition ease-out duration-100"
                                        enter-from-class="transform opacity-0 scale-95"
                                        enter-to-class="transform opacity-100 scale-100"
                                        leave-active-class="transition ease-in duration-75"
                                        leave-from-class="transform opacity-100 scale-100"
                                        leave-to-class="transform opacity-0 scale-95">
                                <MenuItems
                                    class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <MenuItem v-slot="{ active }">
                                        <a href="#" @click="logout"
                                           :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Logout</a>
                                    </MenuItem>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </div>
                </div>
            </div>
            <main class="flex-1 pb-8 rounded-md bg-gradient-to-r from-purple-500 to-pink-500">
                <!-- Page header -->
                <div class="bg-gradient-to-r from-purple-500 to-pink-500">
                    <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                        <div class="py-2 md:flex md:items-center md:justify-between">
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-purple-500 to-pink-500  rounded-lg">
                        <slot>

                        </slot>
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import {usePage} from "@inertiajs/inertia-vue3";

export default {
    methods: {
        logout() {
            this.$inertia.post(this.route('logout'));
        }
    },
    computed:{
        user(){
            return this.$page.props.auth.user;
        }
    }
}
</script>
