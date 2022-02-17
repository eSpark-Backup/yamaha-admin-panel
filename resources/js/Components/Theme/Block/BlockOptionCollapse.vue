<template>
    <button type="button" class="btn-block-option" @click="$emit('onClick', !collapsed)">
        <i :class="['si', collapsed ? 'si-arrow-down' : 'si-arrow-up']"></i>
    </button>
</template>
<script setup>
defineEmits(['onClick'])
defineProps({ collapsed: { type: Boolean, default: false } })
</script>
