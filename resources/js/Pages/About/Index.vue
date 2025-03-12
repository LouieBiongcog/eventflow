<script setup>
import Layout from '../Layouts/Layout.vue';
</script>

<template>
    <Layout>
        <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">About Event Flow</h1>

            <p class="text-gray-600 text-lg mb-4">
                Event Flow is a powerful yet user-friendly platform designed to help users create, manage, and participate in events effortlessly. 
                Whether you’re organizing a small meetup or a large conference, our platform makes event management seamless.
            </p>

            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-xl font-semibold text-gray-800">🎯 Our Mission</h2>
                <p class="text-gray-600">
                    Our goal is to simplify event planning by providing an easy-to-use interface where users can create, discover, and register for events with just a few clicks.
                </p>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg mb-6">
                <h2 class="text-xl font-semibold text-gray-800">💻 Built With Modern Technologies</h2>
                <p class="text-gray-600">
                    Event Flow is built using <span class="font-semibold text-blue-600">Laravel</span> for a robust backend and 
                    <span class="font-semibold text-green-600">Vue.js</span> for an interactive frontend experience.
                </p>
            </div>

            <div class="text-center">
                <a href="/events" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold text-lg hover:bg-blue-700 transition">
                    Browse Events
                </a>
            </div>
        </div>
    </Layout>
</template>
