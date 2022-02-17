<template>
    <div class="cart-card-sec mx-auto">
        <div class="row">
            <Product
                :key="index"
                class="col-12"
                :product="product"
                v-for="(product, index) in cart.products"
            />

            <div v-if="cart.products.length === 0" class="my-6">
                <Alert theme="warning">Cart is empty.</Alert>
            </div>
        </div>
        <div class="cart-bottom-row px-3" v-if="cart.products.length">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-black">Total</h2>
                </div>
                <div class="col-6">
                    <h2 class="text-black text-end">{{ Currency().format(total) }}</h2>
                </div>
            </div>
        </div>
        <div class="cart-button-row d-flex justify-content-between align-items-center">
            <InertiaLink as="button" href="/" class="btn rounded-pill btn-dark">CONTINUE SHOPPING</InertiaLink>
            <InertiaLink
                as="button"
                href="/checkout"
                v-if="cart.products.length"
                class="btn rounded-pill btn-danger"
            >TO DELIVERY DESTINATION SETTING</InertiaLink>
        </div>
    </div>
</template>
<script setup>
import { computed } from 'vue'
import { Currency } from '@/Helpers'
import Product from './Cart/Product.vue'

const props = defineProps({ cart: Object })

const total = computed(() => {
    let totalAmount = props.cart.products.reduce((n, { meta }) => (n + Number(meta.partition_amount)), 0);

    if (isNaN(totalAmount)) return 0;

    return totalAmount;
})
</script>
