<template>
    <PageHeader :breadcrumb="breadcrumb" title="商品タグ一覧">
        <template #actions>
            <InertiaLink :href="Laravel.route('superuser.tags.create')" class="btn btn-primary">
                <i class="fa fa-fw fa-plus-circle me-1"></i>
                新規登録
            </InertiaLink>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.tag_created"
        >{{ __("Tag successfully created.") }}</Alert>
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.tag_updated"
        >{{ __("Tag successfully updated.") }}</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.tag_deleted"
        >{{ __("Tag successfully deleted.") }}</Alert>
    </div>

    <div class="content">
        <Block rounded theme="default" :options="['fullscreen']">
            <template #title>結果:0件/ 全件</template>

            <template #content>
                <SearchForm />

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th class="d-md-table-cell">オーナー</th>
                                <th style="width: 4rem;">ID</th>
                                <th class="d-md-table-cell">商品タグコード</th>
                                <th class="text-center">商品タグ名</th>
                                <th class="text-center">公開設定</th>
                                <th class="text-center">公開開始日時</th>
                                <th class="text-center">公開終了日時</th>
                                <th class="text-center">登録日</th>
                                <th class="text-center">更新日</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(tag, index) in tags.data" :key="index">
                                <td class>{{ __('All') }}</td>
                                <td class>{{ tag.id }}</td>
                                <td class="fw-semibold fs-sm">{{ tag.name }}</td>
                                <td class="fw-semibold fs-sm text-center">{{ tag.code }}</td>
                                <td class="fw-semibold fs-sm text-center">{{ tag.order }}</td>
                                <td class="text-center">
                                    <InertiaLink
                                        :href="Laravel.route('superuser.tags.edit', { tag: tag.id })"
                                        class="btn btn-sm btn-alt-primary me-2"
                                    >
                                        <i class="fa fa-fw fa-eye text-primary"></i>
                                    </InertiaLink>
                                    <button
                                        data-bs-toggle="modal"
                                        data-bs-target="#TrashTagModal"
                                        class="btn btn-sm btn-alt-danger"
                                        @click="deleteRow(tag)"
                                    >
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="tags.total === 0">
                                <td colspan="5">
                                    <Alert theme="warning" class="mb-0">見つかりません</Alert>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <Pagination :paginator="tags" />
            </template>
        </Block>
    </div>

    <TrashTag @close="resetModal" :tag="trashTag" identifier="TrashTagModal" />
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import TrashTag from './Components/TrashTag.vue';

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "商品", link: null },
    { label: "商品タグ", link: Laravel.route('superuser.tags.index') }
])

const trashTag = ref({})

defineProps({ tags: Object })

function deleteRow(tag) {
    trashTag.value = tag;
}

function resetModal() {
    trashTag.value = {};
}
</script>
