<template>
    <PageHeader :breadcrumb="breadcrumb" title="商品情報CSV" />

    <div class="content">
        <Filters />

        <Block :options="['collapse']" rounded v-if="hasQueryData">
            <template #title>{{ __("Filtered Products") }}</template>
            <template #content>
                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>{{ __("Product ID") }}</th>
                                <th>{{ __("Model Name") }}</th>
                                <th>{{ __("Manufacturer Name") }}</th>
                                <th>{{ __("Description of item") }}</th>
                                <th>{{ __("Registration division") }}</th>
                                <th>{{ __("Internal Memo") }}</th>
                                <th>{{ __("Product Tag") }}</th>
                                <th>{{ __("Sales Suspension Setting") }}</th>
                                <th>{{ __("Sales Start Date And Time") }}</th>
                                <th>{{ __("End of sale date") }}</th>
                                <th>{{ __("Release end date") }}</th>
                                <th>{{ __("Display as a recommendation") }}</th>
                                <th>{{ __("Purchase Date") }}</th>
                                <th>{{ __("Supplier Customer Name") }}</th>
                                <th>{{ __("Purchasing source prefecture") }}</th>
                                <th>{{ __("The purchase amount") }}</th>
                                <th>{{ __("Shipping fee at the time of purchase (purchase)") }}</th>
                                <th>{{ __("Repair cost") }}</th>
                                <th>{{ __("Supplier introduction distributor") }}</th>
                                <th>{{ __("Storage (shipping) location") }}</th>
                                <th>{{ __("Made Date") }}</th>
                                <th>{{ __("Headquarters shipping year") }}</th>
                                <th>{{ __("Model") }}</th>
                                <th>{{ __("Unit") }}</th>
                                <th>{{ __("Genre") }}</th>
                                <th>{{ __("Power") }}</th>
                                <th>{{ __("Capacity") }}</th>
                                <th>{{ __("Colour") }}</th>
                                <th>{{ __("Window Shield Specifications") }}</th>
                                <th>{{ __("Bag Support") }}</th>
                                <th>{{ __("ROM Specifications") }}</th>
                                <th>{{ __("OP Included") }}</th>
                                <th>{{ __("Degree") }}</th>
                                <th>{{ __("Manufacturer Maintenance") }}</th>
                                <th>{{ __("Repair Location") }}</th>
                                <th>{{ __("Remarks") }}</th>
                                <th>{{ __("Partition Amount") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr :key="index" v-for="(product, index) in products">
                                <td class>{{ product.id }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.model?.name }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.manufacturer?.name }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.description }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.registration_type }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.internal_memo }}</td>
                                <td class="fw-semibold fs-sm">{{ '' }}</td>
                                <td class="fw-semibold fs-sm">{{ '' }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.sale_started_at }}</td>
                                <td class="fw-semibold fs-sm">{{ '' }}</td>
                                <td class="fw-semibold fs-sm">{{ '' }}</td>
                                <td class="fw-semibold fs-sm">{{ '' }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.purchased_at }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.supplier }}</td>
                                <td class="fw-semibold fs-sm">{{ '' }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.purchase_price }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.shipping_fee }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.repair_cost }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.null }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.storage_location }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.manufactured_at }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.shipping_year }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.model }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.unit }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.genre }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.power }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.capacity }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.color }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.window_shield }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.bag_support }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.rom_specification }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.op_included }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.degree }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.maintenance }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.repair_location }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.remark }}</td>
                                <td class="fw-semibold fs-sm">{{ product?.meta?.partition_amount }}</td>
                            </tr>
                            <tr v-if="products.total === 0">
                                <td colspan="7">
                                    <Alert
                                        theme="warning"
                                        class="mb-0"
                                    >{{ __("No products found") }}.</Alert>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </template>
        </Block>
    </div>
</template>
<script setup>
import { computed, ref } from 'vue';
import { Laravel } from '@/Helpers';
import Filters from './Components/ProductCSV/Filters.vue';
import { usePage } from '@inertiajs/inertia-vue3';

defineProps({ products: Array })

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "商品", link: Laravel.route('superuser.products.index') },
    { label: "商品情報CSV" },
])


const pageProps = usePage().props.value;
const hasQueryData = computed(() => Object.values(pageProps?.query).length)
</script>
