<template>
    <PageHeader :breadcrumb="breadcrumb" title="商品一覧">
        <template #actions>
            <InertiaLink :href="Laravel.route('superuser.products.create')" class="btn btn-primary">
                <i class="fa fa-fw fa-plus-circle me-1"></i>
                新規登録
            </InertiaLink>
        </template>
    </PageHeader>

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
                theme="danger"
                icon="fa-check-circle"
                v-if="$page.props.flash.product_deleted"
            >{{ __("Product successfully deleted.") }}</Alert>
        </div>

        <Block rounded theme="default" :options="['fullscreen']">
            <template #title>結果:0件/ 全件</template>

            <template #content>
                <SearchForm />

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>メーカー</th>
                                <th class="d-md-table-cell">モデル</th>
                                <th>号機</th>
                                <th>登録区分</th>
                                <th class="text-center">公開開始日時</th>
                                <th
                                    class="d-md-table-cell text-center"
                                    style="width: 5rem;"
                                >販売開始日時</th>
                                <th style="width: 10rem;" class="text-center">おすすめに表示</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr :key="index" v-for="(product, index) in products.data">
                                <td class>{{ product.id }}</td>
                                <td class="fw-semibold fs-sm">{{ product.title }}</td>
                                <td class="fw-semibold fs-sm">{{ product.model.name }}</td>
                                <td class="fw-semibold fs-sm">{{ product.manufacturer.name }}</td>
                                <td class="fw-semibold fs-sm text-center">
                                    <span
                                        v-if="product.status === 1"
                                        class="badge bg-success"
                                    >{{ __("Public") }}</span>
                                    <span
                                        v-else-if="product.status === 0"
                                        class="badge bg-danger"
                                    >{{ __("Private") }}</span>
                                </td>
                                <td class="d-sm-table-cell fs-sm">{{ product.registration_type }}</td>
                                <td class="text-center">
                                    <InertiaLink
                                        class="btn btn-sm btn-alt-primary me-2"
                                        :href="Laravel.route('superuser.products.edit', { product: product.id })"
                                    >
                                        <i class="fa fa-fw fa-eye text-primary"></i>
                                    </InertiaLink>
                                    <button
                                        data-bs-toggle="modal"
                                        @click="moveToTrash(product)"
                                        data-bs-target="#TrashProductModal"
                                        class="btn btn-sm btn-alt-danger"
                                    >
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="products.total === 0">
                                <td colspan="7">
                                    <Alert
                                        class="mb-0"
                                        theme="warning"
                                    >見つかりません</Alert>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </template>
        </Block>
    </div>

    <TrashProductModal identifier="TrashProductModal" :product="trashProduct" />
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import TrashProductModal from './Components/TrashProductModal.vue'

defineProps({ products: Object })

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "商品", link: null },
    { label: "商品一覧" },
])

const trashProduct = ref({})



function moveToTrash(o) {
    trashProduct.value = o;
}
</script>
