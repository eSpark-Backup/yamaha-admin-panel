<template>
    <div class="col-lg-6 pb-4 pb-lg-0">
        <div class="card-col bg-white">
            <div class="upper-box flex-column flex-sm-row d-flex">
                <div class="img-box">
                    <img src="/images/bg/card-img.png" alt="card-img" />
                </div>
                <div class="text-box ps-3 ps-xl-5 pt-3 pe-3">
                    <h5
                        class="text-red"
                    >{{ product?.manufacturer?.name }} {{ product?.model?.name }}</h5>
                    <h4>{{ product.title }}</h4>
                    <p
                        class="text-grey"
                    >Headquarters shipping date: {{ Moment(product.meta?.shipping_year).format('MMMM YYYY') }} {{ product.meta?.power }}</p>
                </div>
            </div>
            <div class="lower-box d-flex justify-content-between p-3 align-items-center">
                <div class="price-box">
                    <h4
                        class="text-red m-0"
                    >{{ price }}</h4>
                </div>
                <div class="btn-box">
                    <InertiaLink
                        :href="`/product/${product.slug}`"
                        class="btn rounded-pill btn-danger"
                    >MORE DETAILS</InertiaLink>
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
