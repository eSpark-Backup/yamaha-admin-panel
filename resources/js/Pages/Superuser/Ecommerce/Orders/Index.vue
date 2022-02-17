<template>
    <PageHeader :breadcrumb="breadcrumb" title="Orders"></PageHeader>
    <div class="content">
        <div class="row">
            <div class="col-6 col-lg-3">
                <a
                    class="block block-rounded block-link-shadow text-center"
                    href="javascript:void(0)"
                >
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-primary">0</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">{{ __("Pending") }}</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a
                    class="block block-rounded block-link-shadow text-center"
                    href="javascript:void(0)"
                >
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">0</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">{{ __("Today") }}</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a
                    class="block block-rounded block-link-shadow text-center"
                    href="javascript:void(0)"
                >
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">0</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">{{ __("Yesterday") }}</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3">
                <a
                    class="block block-rounded block-link-shadow text-center"
                    href="javascript:void(0)"
                >
                    <div class="block-content block-content-full">
                        <div class="fs-2 fw-semibold text-dark">0</div>
                    </div>
                    <div class="block-content py-2 bg-body-light">
                        <p class="fw-medium fs-sm text-muted mb-0">{{ __("This Month") }}</p>
                    </div>
                </a>
            </div>
        </div>

        <Block rounded theme="default">
            <template #title>{{ __("List All Orders") }}</template>

            <template #content>
                <SearchForm />

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center">{{ __("Ordering distributor") }}</th>
                                <th class="text-center d-md-table-cell">{{ __("Order number") }}</th>
                                <th class="text-center">{{ __("Order status") }}</th>
                                <th class="text-center">{{ __("Billed amount (excluding tax)") }}</th>
                                <th class="text-center">{{ __("Order date and time") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-if="false">
                                <td class="text-center fw-semibold fs-sm">
                                    <a href class="text-muted">Directly managed by Yamaha (dummy)</a>
                                </td>
                                <td class="d-sm-table-cell text-center fs-sm">
                                    <a href class="text-muted">21120210473585736</a>
                                </td>
                                <td class="d-sm-table-cell text-center">
                                    <span class="badge bg-danger">Canceled</span>
                                </td>
                                <td class="d-sm-table-cell text-center fs-sm">
                                    <a href class="text-muted">¥ 270,000</a>
                                </td>
                                <td class="d-sm-table-cell text-center fs-sm">
                                    <a href class="text-muted">2021/12/2 19:47:36</a>
                                </td>
                            </tr>
                            <tr v-else>
                                <td colspan="5">
                                    <Alert theme="warning" class="mb-0">{{ __("No Orders Found.") }}</Alert>
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
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
const breadcrumb = ref([
    { label: "Ecommerce", link: null },
    { label: "Orders", link: Laravel.route('superuser.orders.index') },
    { label: "List" },
])
</script>
