<script setup>
import Layout from '../Layouts/Layout.vue';
</script>

<template>
    <Layout>
        <div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Contact Us</h1>
        
        <p class="text-gray-600 text-lg text-center mb-4">
            Have questions or feedback? We'd love to hear from you! Feel free to reach out to us using any of the methods below.
        </p>

        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <h2 class="text-xl font-semibold text-gray-800">📧 Email</h2>
            <p class="text-gray-600">
                Reach us at <a href="mailto:contact@example.com" class="text-blue-600 hover:underline">contact@example.com</a>
            </p>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <h2 class="text-xl font-semibold text-gray-800">📍 Address</h2>
            <p class="text-gray-600">
                123 Main Street, Cityville, Country
            </p>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg mb-6">
            <h2 class="text-xl font-semibold text-gray-800">📞 Phone</h2>
            <p class="text-gray-600">
                Call us at <a href="tel:+1234567890" class="text-blue-600 hover:underline">+1 (234) 567-890</a>
            </p>
        </div>

        <div class="text-center">
            <a href="mailto:contact@example.com" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-semibold text-lg hover:bg-blue-700 transition">
                Send an Email
            </a>
    </div>
</div>

</Layout>
</template>