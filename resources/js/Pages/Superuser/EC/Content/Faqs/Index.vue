<template>
    <PageHeader :breadcrumb="breadcrumb" title="FAQ一覧">
        <template #actions>
            <InertiaLink :href="Laravel.route('superuser.faqs.create')" class="btn btn-primary">
                <i class="fa fa-fw fa-plus-circle me-1"></i>
                新規登録
            </InertiaLink>
        </template>
    </PageHeader>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers';


defineProps({ faqs: Object })

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "コンテンツ", link: Laravel.route('superuser.faqs.index') },
    { label: "FAQ" },
])
</script>
