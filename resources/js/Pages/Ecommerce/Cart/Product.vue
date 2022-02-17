<template>
    <div>
        <div class="cart-card d-flex align-items-start align-items-sm-center bg-white border-20">
            <img src="/images/bg/cart-product.png" alt="cart-product" />
            <div
                class="description-box d-flex flex-column flex-sm-row justify-content-between align-items-sm-center"
            >
                <div class="product-description">
                    <h5 class="text-red mb-0 fw-bold">{{ product.manufacturer?.name }}</h5>
                    <h4 class="mb-0 text-black fw-bold pt-1">{{ product.model?.name }}</h4>
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
                </div>
                <div class="product-price text-center pt-4 pt-sm-0">
                    <h4 class="text-red m-0 fw-bold">{{ price }}</h4>
                    <InertiaLink
                        as="button"
                        method="POST"
                        href="/cart"
                        :data="{ pid: product.id, action: 'removeFromCart' }"
                        class="text-red mb-0 mt-0 ms-3 ms-sm-0 mt-sm-5 fw-bold"
                    >Delete</InertiaLink>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { Currency } from '@/Helpers';
import Moment from 'moment'
import { computed } from 'vue';


const props = defineProps({ product: Object })

const price = computed(() => {
    let total = Currency().format(props.product.meta?.partition_amount);

    if (isNaN(total)) return 0;

    return total;
})
</script>
