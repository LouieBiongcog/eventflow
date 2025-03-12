<script setup>
import { Link } from '@inertiajs/vue3';

import { usePage } from '@inertiajs/vue3';

const page = usePage();

</script>

<template>
    <nav class="bg-blue-600 text-white p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Event Flow</h1>
            <div class="main">
                <ul class="flex space-x-6">
                    <Link href="/" class="hover:underline"  :class="{ 'text-yellow-400 font-bold': page.url === '/' }" >Home</Link>
                    <Link href="/about" class="hover:underline"  :class="{ 'text-yellow-400 font-bold': page.url === '/about' }" >About</Link>
                    <Link href="/events" class="hover:underline"  :class="{ 'text-yellow-400 font-bold': page.url === '/events' }">Events</Link>
                    <Link href="/contact" class="hover:underline"  :class="{ 'text-yellow-400 font-bold': page.url === '/contact' }">Contact</Link>
            </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>
   
</style>
