<script setup>
    import { ref } from 'vue'

    const count = ref(0)
</script>

<template>
    {{ count }}

    <button @click="count++" class="bg-red-700">
        Add
    </button>
</template>
