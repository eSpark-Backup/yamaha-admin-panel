<template>
    <InertiaLink
        as="button"
        class="btn btn-sm btn-alt-secondary"
        :href="Laravel.route('language', { language })"
    >{{ language.toUpperCase() }}</InertiaLink>
</template>
<script setup>
import { computed } from "vue";
import { Laravel } from "@/Helpers";
import { usePage } from "@inertiajs/inertia-vue3";

const language = computed(() => {
    let locale = usePage().props.value.locale;

    if (locale === 'jp') {
        return 'en';
    }

    return 'jp';
})
</script>
