<template>
    <div class="col-xl-2 ps-xl-0">
        <div class="cart-col text-center bg-white">
            <h5 class="text-black">Yamaha G30E</h5>
            <h5 class="text-red">{{ Currency().format(price) }}/-</h5>
            <InertiaLink
                as="button"
                method="POST"
                href="/cart"
                :data="{ pid: product.id, action: 'addToCart' }"
                class="btn rounded-pill btn-danger"
            >ADD TO CART</InertiaLink>
            <InertiaLink as="button" href="/" class="btn rounded-pill btn-dark">RETURN TO SHOP</InertiaLink>
            <p class="text-center mb-0">
                <span class="fw-bold">Remarks</span>
                <br />
                {{ product.comments }}
            </p>
        </div>
    </div>
</template>
<script setup>
import { Currency } from '@/Helpers';
import { computed } from 'vue';

const props = defineProps({ product: Object })


const price = computed(() => {
    if (isNaN(props.product.meta?.partition_amount)) {
        return 0;
    }

    return props.product.meta?.partition_amount;
})


</script>
