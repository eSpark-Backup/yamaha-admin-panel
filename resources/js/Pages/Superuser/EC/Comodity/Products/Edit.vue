<template>
    <PageHeader title="Product" :breadcrumb="breadcrumb"></PageHeader>

    <div class="content">
        <div v-if="$page.props.flash" class="mb-4">
            <Alert
                class="mb-0"
                theme="success"
                icon="fa-check-circle"
                v-if="$page.props.flash.product_created"
            >{{ __("Product successfully created.") }}</Alert>
            <Alert
                class="mb-0"
                theme="success"
                icon="fa-check-circle"
                v-if="$page.props.flash.product_updated"
            >{{ __("Product successfully updated.") }}</Alert>
        </div>

        <ProductDetails v-bind="shareAcrossComponents" />

        <ProductTags v-bind="shareAcrossComponents" />

        <ProductSpecifications v-bind="shareAcrossComponents" />

        <ProductGallery v-bind="shareAcrossComponents" />

        <StoragePurchaseAndPricing v-bind="shareAcrossComponents" />
    </div>
</template>
<script setup>
import { Laravel } from '@/Helpers'
import { computed, ref } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';
import ProductTags from './Components/Edit/ProductTags.vue';
import ProductDetails from './Components/Edit/ProductDetails.vue';
import ProductGallery from './Components/Edit/ProductGallery.vue';
import ProductSpecifications from './Components/Edit/ProductSpecifications.vue';
import StoragePurchaseAndPricing from './Components/Edit/StoragePurchaseAndPricing.vue';


const breadcrumb = ref([
    { label: "Ecommerce", link: null },
    { label: "Products", link: Laravel.route('superuser.products.index') },
    { label: "Edit" },
])

const shareAcrossComponents = computed(() => ({
    tags: usePage().props.value.tags,
    user: usePage().props.value.user,
    models: usePage().props.value.models,
    product: usePage().props.value.product,
    manufacturers: usePage().props.value.manufacturers,
}));

</script>
