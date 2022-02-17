<template>
    <PageHeader :breadcrumb="breadcrumb" title="EC見積一覧" />

    <div class="content">
        <!-- <div class="row">
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
        </div> -->

        <Block rounded theme="default" :options="['fullscreen']">
            <template #title>結果:0件</template>

            <template #content>
                <SearchForm />

                <div class="estimate-table table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center">見積番号</th>
                                <th
                                    class="text-center d-md-table-cell"
                                >代表商品</th>
                                <th class="text-center">見積日</th>
                                <th class="text-center">納品可能日</th>
                                <th class="text-center">販売額合計</th>
                                <th class="text-center">ステータス</th>
                                <th class="text-center">見積依頼特約店</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr :key="index" v-for="(estimate, index) in estimates.data">
                                <td class>
                                    <a href class="text-muted">{{ estimate.id }}</a>
                                </td>
                                <td class="fw-semibold fs-sm">
                                    <a href class="text-muted">G30E (dummy)</a>
                                </td>
                                <td class="d-sm-table-cell fs-sm">
                                    <a href class="text-muted">2020/03/03 (dummy)</a>
                                </td>
                                <td class="d-sm-table-cell fs-sm">
                                    <a href class="text-muted">2020/03/03 (dummy)</a>
                                </td>
                                <td class="d-sm-table-cell fs-sm">
                                    <a href class="text-muted">¥ 418,000 (dummy)</a>
                                </td>
                                <td class="d-sm-table-cell fs-sm">
                                    <a href class="text-muted">Estimated answered (dummy)</a>
                                </td>
                                <td class="d-sm-table-cell fs-sm">
                                    <a href class="text-muted">Directly managed by Yamaha (dummy)</a>
                                </td>
                            </tr>
                            <tr v-if="estimates.total == 0">
                                <td colspan="7">
                                    <Alert
                                        theme="warning"
                                        class="mb-0"
                                    >見つかりません</Alert>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <Pagination :paginator="estimates" />
            </template>
        </Block>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "見積", link: Laravel.route('superuser.estimates.index') },
    { label: "見積一覧" },
])

defineProps({ estimates: Object })
</script>
