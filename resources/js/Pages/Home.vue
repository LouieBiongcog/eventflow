<script setup>
import Layout from './Layouts/Layout.vue';
</script>

<template>
    <Layout>
        <div class="min-h-screen flex items-center justify-center bg-white text-gray-900">
            <div class="text-center">
                <h1 class="text-5xl font-extrabold mb-4 animate-fade-in">🎉 Welcome to Event Flow 🎉</h1>
                <p class="text-lg text-gray-600 mb-6">Your ultimate platform for creating, managing, and exploring events.</p>
                <a href="/events" 
                   class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold text-lg shadow-md hover:bg-blue-700 transition">
                    Explore Events
                </a>
            </div>
        </div>
    </Layout>
</template>
