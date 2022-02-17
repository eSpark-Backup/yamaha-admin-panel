<template>
    <button type="button" class="btn-block-option" @click="$emit('onClick', !pinned)">
        <i class="si si-pin"></i>
    </button>
</template>
<script setup>
defineEmits(['onClick'])
defineProps({ pinned: { type: Boolean, default: false } })
</script>
