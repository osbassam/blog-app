<!-- This example requires Tailwind CSS v2.0+ -->
<template>
    <Blog>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul role="list" class="divide-y divide-gray-200">
                <li v-for="application in applications" :key="application.applicant.email">
                    <a :href="application.href" class="block hover:bg-gray-50">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">
                                <div class="min-w-0 flex-1 items-center px-4 md:grid md:grid-cols-2 md:gap-4">
                                    <div>
                                        <p class="text-sm font-medium text-indigo-600 truncate">{{ application.applicant.name }}</p>
                                    </div>
                                    <div class="hidden md:block">
                                        <div>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                <CheckCircleIcon class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" aria-hidden="true" />
                                                {{ application.stage }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <ChevronRightIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </Blog>
</template>

<script setup>
import Blog from '@/Pages/Blog.vue';
import { CheckCircleIcon, ChevronRightIcon, MailIcon } from '@heroicons/vue/solid'

const applications = [
    {
        applicant: {
            name: 'Quotes',
            email: 'ricardo.cooper@example.com',
            imageUrl:
                'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        date: '2020-01-07',
        dateFull: 'January 7, 2020',
        stage: 'Play Quotes game',
        href: '/flipping-cards',
    },
    {
        applicant: {
            name: 'To Do List',
            email: 'kristen.ramos@example.com',
            imageUrl:
                'https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        date: '2020-01-07',
        dateFull: 'January 7, 2020',
        stage: 'Create your Own to do list',
        href: '/to-do',
    },
    {
        applicant: {
            name: 'Drawing',
            email: 'ted.fox@example.com',
            imageUrl:
                'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        date: '2020-01-07',
        dateFull: 'January 7, 2020',
        stage: 'Play drawing game',
        href: '/drawing',
    },
    {
        applicant: {
            name: 'Coloring',
            email: 'ted.fox@example.com',
            imageUrl:
                'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
        },
        date: '2020-01-07',
        dateFull: 'January 7, 2020',
        stage: 'Coloring game',
        href: '/painting',
    },
]
</script>

<style></style>
