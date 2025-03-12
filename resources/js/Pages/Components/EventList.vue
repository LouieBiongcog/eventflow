<script setup>
defineProps({
    events: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-200">
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Description</th>
                    <th class="border border-gray-300 px-4 py-2">Location</th>
                    <th class="border border-gray-300 px-4 py-2">Start Time</th>
                    <th class="border border-gray-300 px-4 py-2">End Time</th>
                    <th class="border border-gray-300 px-4 py-2">Capacity</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="event in events" :key="event.id" class="text-center">
                    <td class="border border-gray-300 px-4 py-2">{{ event.title }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ event.description }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ event.location ?? 'N/A' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ event.start_time }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ event.end_time ?? 'TBD' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ event.capacity ?? 'Unlimited' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
