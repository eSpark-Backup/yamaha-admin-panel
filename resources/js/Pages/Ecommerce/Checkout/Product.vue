<template>
    <div class="cart-card d-flex bg-white border-20 align-items-start">
        <img src="/images/bg/checkout-img.png" alt="cart-product" />
        <div class="product-description">
            <h5 class="text-red mb-0 fw-bold">{{ product?.manufacturer?.name }}</h5>
            <h4 class="mb-0 text-black fw-bold pt-1">{{ product?.model?.name }}</h4>
            <p class="text-grey mb-0 pt-2">
                Headquarters shipping date:
                <span
                    class="fw-bold"
                >{{ Moment(product.meta?.shipped_at).format("LL") }}</span>
            </p>
            <p class="text-grey mb-0">
                Unit
                <span class="fw-bold">{{ product.meta?.unit }}</span>
            </p>
            <h4
                class="text-red m-0 fw-bold pt-1"
            >{{ Currency().format(product.meta?.partition_amount) }}</h4>
        </div>
    </div>
</template>
<script setup>
import Moment from 'moment'
import { Currency } from '@/Helpers';

const props = defineProps({ product: Object })

</script>
