<template>
    <div :class="`alert alert-${theme} d-flex align-items-center`" role="alert">
        <div class="flex-shrink-" v-if="icon">
            <i :class="`fa fa-fw ${icon}`"></i>
        </div>
        <div class="flex-grow-1" :class="icon && 'ms-3'">
            <p class="mb-0">
                <slot></slot>
            </p>
        </div>
        <div class="flex-shrink-" v-if="dismissable">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</template>
<script setup>
defineProps({ icon: String, dismissable: { type: Boolean, default: false }, theme: { type: String, default: 'primary' } })
</script>
