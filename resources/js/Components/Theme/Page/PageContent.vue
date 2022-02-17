<template>
    <ContentBlock :theme="theme">
        <template #header>
            <slot name="header"></slot>
        </template>
        <template #content>
            <slot name="content"></slot>
        </template>
    </ContentBlock>
</template>
<script setup>
defineProps({ theme: { type: String, default: 'default' }, })
</script>
