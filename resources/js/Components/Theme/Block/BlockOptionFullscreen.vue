<template>
    <button type="button" class="btn-block-option" @click="$emit('onClick', !fullscreen)">
        <i :class="['si', fullscreen ? 'si-size-actual' : 'si-size-fullscreen']"></i>
    </button>
</template>
<script setup>
defineEmits(['onClick'])
defineProps({ fullscreen: { type: Boolean, default: false } })
</script>
