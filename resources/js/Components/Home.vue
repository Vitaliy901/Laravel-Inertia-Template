<template>
    <head>
        <title>{{ title }}</title>
    </head>
    <h1 class="text-center">{{ title }}!</h1>
</template>

<script>
import Main from '../Layouts/Main.vue'
import { Head } from '@inertiajs/vue3'

export default {
    components: {
        Head
    },
    props: {
        title: String
    },
    layout: Main
}
</script>