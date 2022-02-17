<template>
    <PageHeader title="問い合わせ一覧" :breadcrumb="breadcrumb">
        <template #actions>
            <InertiaLink
                class="btn btn-primary"
                :href="Laravel.route('superuser.inquiries.create')"
            >
                <i class="fa fa-fw fa-plus-circle"></i>
                新規登録
            </InertiaLink>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.inquiry_created"
        >{{ __("Inquiry successfully logged.") }}</Alert>
        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.inquiry_deleted"
        >{{ __("Inquiry successfully deleted.") }}</Alert>
    </div>

    <PageContent>
        <template #header>全件</template>

        <template #content>
            <SearchForm placeholder="Search all inquiries..." />

            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-left">オーナー</th>
                            <th class="text-center d-md-table-cell">問い合わせID</th>
                            <th class="text-center">会員名</th>
                            <th class="text-center">所属テナント</th>
                            <th class="text-center">問い合わせステータス</th>
                            <th class="text-center">問い合わせ種別</th>
                            <th class="text-center">対応メモ／引継ぎ欄</th>
                            <th class="text-center">登録日</th>
                            <th class="text-center">更新日</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr :key="index" v-for="(inquiry, index) in inquiries.data">
                            <td class="text-left fw-semibold fs-sm">
                                <a href class="text-muted">Headquarters</a>
                            </td>
                            <td class="d-sm-table-cell text-center fs-sm">
                                <a href class="text-muted">{{ inquiry.id }}</a>
                            </td>
                            <td class="d-sm-table-cell text-center fs-sm">
                                <a href class="text-muted">{{ inquiry.user.name }}</a>
                            </td>
                            <td class="d-sm-table-cell text-center fs-sm">
                                <a href class="text-muted">{{ inquiry.tenant.name }}</a>
                            </td>
                            <td class="d-sm-table-cell text-center fs-sm">
                                <span
                                    :class="{
                                        'bg-info-light text-info': true,
                                        'fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill': true
                                    }"
                                >{{ inquiry.statuses[inquiry.status] }}</span>
                            </td>
                            <td class="d-sm-table-cell text-center fs-sm">
                                <span
                                    class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info"
                                >{{ inquiry.types[inquiry.type] }}</span>
                            </td>
                            <td class="d-sm-table-cell text-center fs-sm">
                                <InertiaLink
                                    class="btn btn-sm btn-alt-primary me-2"
                                    :href="Laravel.route('superuser.inquiries.edit', { inquiry: inquiry.id })"
                                >
                                    <i class="fa fa-fw fa-eye text-primary"></i>
                                </InertiaLink>
                                <button
                                    data-bs-toggle="modal"
                                    @click="trashInquiry(inquiry)"
                                    data-bs-target="#AdminTrashInquiryModal"
                                    class="btn btn-sm btn-alt-danger"
                                >
                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr v-if="inquiries.data.length === 0">
                            <td colspan="7">
                                <Alert class="mb-0" theme="warning">見つかりません</Alert>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <Pagination :paginator="inquiries" />
        </template>
    </PageContent>

    <TrashInquiryModal :inquiry="inquiry" />
</template>

<script setup>
import { ref } from 'vue'
import { Laravel } from '@/Helpers'
import TrashInquiryModal from './Components/TrashInquiryModal.vue'


defineProps({ inquiries: Object })

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "サポート", link: Laravel.route('superuser.inquiries.index') },
    { label: "問い合わせ" }
]);

const inquiry = ref({})

function trashInquiry(o) {
    inquiry.value = o;
}

</script>
