<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

const causesCheckBoxes = [
    {
        id: 1,
        cause: 'Domestic Violence',
    },
    {
        id: 2,
        cause: 'Parental Depression',
    },
    {
        id: 3,
        cause: 'Divorce',
    },
    {
        id: 4,
        cause: 'Family Issues',
    },
    {
        id: 5,
        cause: 'Abuse',
    },
    {
        id: 6,
        cause: 'Learning Disabilities',
    },
    {
        id: 7,
        cause: 'Moving towns/ schools',
    },
]

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    gender: '',
    type: 'parent',
    ageRange: '',
    causes: [],
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Register"/>

        <BreezeValidationErrors class="mb-4"/>

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="name" value="Name"/>
                <BreezeInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus
                             autocomplete="name"/>
            </div>

            <div class="mt-4">
                <BreezeLabel for="email" value="Email"/>
                <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                             autocomplete="username"/>
            </div>
            <div class="mt-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Are you a Parent or a Child?</label>
                <select v-model="form.type" id="type" name="type"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="parent" selected>Parent</option>
                    <option value="child">Child</option>
                </select>
            </div>
            <div class="mt-4">
                <label for="gender" class="block text-sm font-medium text-gray-700" v-if="form.type === 'parent'">Is
                    your child male or female?</label>
                <label for="gender" class="block text-sm font-medium text-gray-700" v-else>Are you male or
                    female?</label>
                <select v-model="form.gender" id="gender" name="gender"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mt-4">
                <label for="age-range" class="block text-sm font-medium text-gray-700" v-if="form.type === 'parent'">How
                    old is your child?</label>
                <label for="age-range" class="block text-sm font-medium text-gray-700" v-else>How old are you?</label>
                <select v-model="form.ageRange" id="age-range" name="age-range"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="young">6-12</option>
                    <option value="teenager">12-18</option>
                </select>
            </div>
            <div class="mt-4 mb-2">
                <label for="causes" class="block text-sm font-medium text-gray-700" v-if="form.type === 'parent'">Has
                    your child experienced any of these recently?</label>
                <label for="causes" class="block text-sm font-medium text-gray-700" v-else>Have you experienced any of
                    these recently?</label>
                <div class="relative flex items-start mt-1" v-for="cause in causesCheckBoxes">
                    <div class="flex items-center h-5">
                        <input @click="addCause(cause.cause)" :id="'cause' + cause.id" aria-describedby="comments-description"
                               name="cause"
                               type="checkbox"
                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"/>
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="comments" class="font-medium text-gray-700">{{ cause.cause }}</label>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Password"/>
                <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                             autocomplete="new-password"/>
            </div>

            <div class="mt-4">
                <BreezeLabel for="password_confirmation" value="Confirm Password"/>
                <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full"
                             v-model="form.password_confirmation" required autocomplete="new-password"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>

<script>
export default {
    methods: {
        addCause(causeId) {
            // push into form causes array the cause and remove the cause if it is already in the array
            if (this.form.causes.includes(causeId)) {
                this.form.causes = this.form.causes.filter(cause => cause !== causeId);
            } else {
                this.form.causes.push(causeId);
            }
            console.log(this.form.causes);
        }
    }
};
</script>
