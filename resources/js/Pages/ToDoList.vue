<script setup>
import Blog from '@/Pages/Blog.vue';
import taskList from "@/Components/TaskList";
import 'animate.css';
</script>


<template>
    <Blog>
        <div class="h-full">
            <div class="mr-4 max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="flex  justify-between mx-2 animate__jackInTheBox">
                    <task-list class="px-2 w-1/3" title="Morning" :tasks="morningTasks"></task-list>
                    <task-list class="px-2 w-1/3" title="Evening" :tasks="afternoonTasks"></task-list>
                </div>
                <div class="flex justify-center">
                    <task-list class="px-2 w-1/3" title="Evening" :tasks="eveningTasks"></task-list>
                </div>
            </div>
        </div>
    </Blog>
</template>

<script>
export default {
    data() {
        return {
            morningTasks: [
                {
                    title: 'Make Bed',
                    completed: false
                },
                {
                    title: 'Brush Teeth',
                    completed: false
                },
                {
                    title: 'Water The Plants',
                    completed: false
                },
                {
                    title: 'Pray',
                    completed: false
                },
                {
                    title: 'Feed Pet',
                    completed: false
                },
            ],
            afternoonTasks: [
                {
                    title: 'Finish Homework',
                    completed: false
                },
                {
                    title: 'Talk to A friend',
                    completed: false
                },
                {
                    title: 'Read for 30 minutes',
                    completed: false
                },
                {
                    title: 'Family time',
                    completed: false
                },
                {
                    title: 'Go for a walk',
                    completed: false
                },
            ],
            eveningTasks: [
                {
                    title: 'Make Dinner with family',
                    completed: false
                },
                {
                    title: 'Bath/ brush teeth',
                    completed: false
                },
                {
                    title: 'Say Good night',
                    completed: false
                },
                {
                    title: 'Story Time',
                    completed: false
                },
                {
                    title: 'Go for a walk',
                    completed: false
                },
            ],
        }
    }
}
</script>

<style scoped>
body {
    background-color: #abc;
}
*,
h1,
button {
    font-family: 'Nunito', sans-serif;
}
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-active {
    opacity: 0;
}
.tasks {
    width: 100%;
    max-width: 45rem;
    padding: 1em;
    margin: 1em auto;
    overflow: auto;
    background-color: #fff;
    box-shadow: 0px 0.25rem 1rem rgba(0,0,0,0.25);
}
.tasks__list {
    clear: both;
}
.tasks__item {
    margin-bottom: 0.5em;
    position: relative;
}
.tasks__item__toggle {
    cursor: pointer;
    width: 100%;
    text-align: left;
    padding: 0.85em 2.25em 0.85em 1em;
    background-color: rgba(0,0,0,0.05);
    border: 1px solid rgba(0,0,0,0.1);
}
.tasks__item__toggle:hover {
    background-color: rgba(0,0,0,0.1);
    border-color: rgba(0,0,0,0.15);
}
.tasks__item__toggle--completed {
    text-decoration: line-through;
    background-color: rgba(0,128,0,0.15);
    border-color: rgba(0,128,0,0.2);
}
.tasks__item__toggle--completed:hover {
    background-color: rgba(0,128,0,0.25);
    border-color: rgba(0,128,0,0.3);
}
.tasks__item__remove {
    position: absolute;
    height: 100%;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
}
.tasks__item__remove i {
    vertical-align: middle;
}

</style>
