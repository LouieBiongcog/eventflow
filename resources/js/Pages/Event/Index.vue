<script setup>
import Layout from '../Layouts/Layout.vue';
import EventList from '../Components/EventList.vue';

defineProps({
    events: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <Layout>
        <div class="container mx-auto p-6">
            <h1 class="text-2xl font-bold mb-4">Events</h1>
            <EventList :events="events" />
        </div>
    </Layout>
</template>
