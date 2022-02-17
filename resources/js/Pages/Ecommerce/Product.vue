<template>
    <div class="main-sec">
        <div class="row">
            <Gallery :product="product" />

            <Specifications :product="product" />

            <AddToCart :product="product" />
        </div>
    </div>
</template>
<script setup>
import Gallery from "./Product/Gallery.vue";
import AddToCart from "./Product/AddToCart.vue";
import Specifications from "./Product/Specifications.vue";

defineProps({ product: Object })

</script>
