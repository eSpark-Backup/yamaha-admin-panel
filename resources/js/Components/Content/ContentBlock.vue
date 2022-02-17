<template>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header" :class="`block-header-${theme}`">
                <slot name="header"></slot>
            </div>
            <div class="block-content">
                <slot name="content"></slot>
            </div>
        </div>
    </div>
</template>
<script setup>
defineProps({ theme: { type: String, default: 'default' }, })
</script>
