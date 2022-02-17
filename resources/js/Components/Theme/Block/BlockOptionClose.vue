<template>
    <button
        type="button"
        class="btn-block-option"
        data-bs-dismiss="modal"
        @click="$emit('onClick', !removed)"
    >
        <i class="si si-close"></i>
    </button>
</template>
<script setup>
defineEmits(['onClick'])
defineProps({ removed: { type: Boolean, default: false } })
</script>
