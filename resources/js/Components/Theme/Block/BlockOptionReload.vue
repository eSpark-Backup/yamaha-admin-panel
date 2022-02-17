<template>
    <button type="button" class="btn-block-option" @click="$emit('onClick', !loading)">
        <i class="si si-refresh"></i>
    </button>
</template>
<script setup>
defineEmits(['onClick'])
defineProps({ loading: { type: Boolean, default: false } })
</script>
