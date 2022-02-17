<template>
    <PageHeader :breadcrumb="breadcrumb" title="Tenants">
        <template #actions>
            <InertiaLink
                class="btn btn-primary"
                :href="Laravel.route('superuser.announcements.create')"
            >
                <i class="fa fa-fw fa-plus-circle me-1"></i> Create
            </InertiaLink>
        </template>
    </PageHeader>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers';

const breadcrumb = ref([
    { label: "Administration", link: null },
    { label: "Tenants", link: Laravel.route('superuser.tenants.index') },
    { label: "List" },
])
</script>
