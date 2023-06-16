<template>
    <div class="container mx-auto mb-10">
        <div class="text-center mb-10">
            <Link :href="route('show.account')" as="button" type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                Home
            </Link>

            <Link :href="route('show.deal')" as="button" type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                Dashboard
            </Link>
        </div>
        <slot />
    </div>
</template>


<script>
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        Link
    }

}
</script>