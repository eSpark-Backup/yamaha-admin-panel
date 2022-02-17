<template>
    <Base :layout-classes="layoutClasses">
        <template #content>
            <slot></slot>
        </template>
    </Base>
</template>
<script>
export default {
    name: "BackendLayout"
}
</script>
<script setup>
import Base from '../Base.vue';
import { reactive } from '@vue/reactivity';

const layoutClasses = reactive({
    sideOverlay: '',
    sidebar: '',
    header: '',
    footer: ''
})
</script>
