<template>
    <PageHeader title="問い合わせ新規登録" :breadcrumb="breadcrumb">
        <template #actions>
            <InertiaLink :href="Laravel.route('superuser.inquiries.index')" class="btn btn-primary">
                <i class="fa fa-fw fa-list"></i>
                戻る
            </InertiaLink>
        </template>
    </PageHeader>

    <PageContent>
        <template #content>
            <form method="POST" @submit.prevent="formSubmit">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-title">
                                {{ __("Title") }}
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                id="inquiry-title"
                                v-model="form.title"
                                :class="['form-control', form.errors.title && 'is-invalid']"
                            />
                            <div
                                v-if="form.errors.title"
                                class="invalid-feedback"
                            >{{ form.errors.title }}</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-body">
                                {{ __("Inquiry") }}
                                <span class="text-danger">*</span>
                            </label>
                            <textarea
                                rows="4"
                                v-model="form.body"
                                id="inquiry-body"
                                :class="['form-control', form.errors.body && 'is-invalid']"
                            ></textarea>
                            <div
                                v-if="form.errors.body"
                                class="invalid-feedback"
                            >{{ form.errors.body }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-part">{{ __("Part No.") }}</label>
                            <input
                                type="text"
                                id="inquiry-part"
                                :class="['form-control', form.errors.part_no && 'is-invalid']"
                                v-model="form.part_no"
                            />
                            <div
                                v-if="form.errors.part_no"
                                class="invalid-feedback"
                            >{{ form.errors.part_no }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-order">{{ __("Order No.") }}</label>
                            <input
                                type="text"
                                id="inquiry-order"
                                v-model="form.order_no"
                                :class="['form-control', form.errors.order_no && 'is-invalid']"
                            />
                            <div
                                v-if="form.errors.order_no"
                                class="invalid-feedback"
                            >{{ form.errors.order_no }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="select-tenant">
                                {{ __("Destination") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="select-tenant"
                                v-model="form.tenant_id"
                                :class="['form-select', form.errors.tenant_id && 'is-invalid']"
                            >
                                <option :value="form.tenant_id === null ? null : ''">Select Tenant</option>
                                <option
                                    :key="index"
                                    :value="tenant.id"
                                    v-for="(tenant, index) in tenants"
                                >{{ tenant.name }}</option>
                            </select>
                            <div
                                v-if="form.errors.tenant_id"
                                class="invalid-feedback"
                            >{{ form.errors.tenant_id }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-sender">
                                {{ __("Sender") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="inquiry-sender"
                                v-model="form.sender"
                                :class="['form-select', form.errors.sender && 'is-invalid']"
                            >
                                <option value="0">{{ __("Admin") }}</option>
                                <option value="1">{{ __("Member") }}</option>
                            </select>
                            <div
                                v-if="form.errors.sender"
                                class="invalid-feedback"
                            >{{ form.errors.sender }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-type">
                                {{ __("Type") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="inquiry-type"
                                v-model="form.type"
                                :class="['form-select', form.errors.order_no && 'is-invalid']"
                            >
                                <option value="0">{{ __("Inquiry related to") }}</option>
                                <option value="1">{{ __("Product") }}</option>
                                <option value="2">{{ __("Order") }}</option>
                                <option value="4">{{ __("Delivery") }}</option>
                                <option value="3">{{ __("Others") }}</option>
                            </select>
                            <div
                                v-if="form.errors.type"
                                class="invalid-feedback"
                            >{{ form.errors.type }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="inquiry-status">{{ __("Status") }}</label>
                            <select
                                id="inquiry-status"
                                v-model="form.status"
                                :class="['form-select', form.errors.order_no && 'is-invalid']"
                            >
                                <option value="0"></option>
                                <option value="1">{{ __("Unanswered") }}</option>
                                <option value="2">{{ __("Answered") }}</option>
                                <option value="3">{{ __("Supported") }}</option>
                            </select>
                            <div
                                v-if="form.errors.status"
                                class="invalid-feedback"
                            >{{ form.errors.status }}</div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 text-end border-top py-3 bg-gray-lighter rounded-bottom">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="btn btn-secondary text-uppercase"
                        >
                            <i class="fa fa-fw fa-save"></i>
                            {{ __(form.processing ? 'Processing...' : 'Save Inquiry') }}
                        </button>
                    </div>
                </div>
            </form>
        </template>
    </PageContent>
</template>
<script setup>
import { ref } from 'vue'
import { Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';

defineProps({ tenants: Array })

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "サポート", link: Laravel.route('superuser.inquiries.index') },
    { label: "問い合わせ" }
])

const form = useForm({
    tenant_id: "",
    title: "",
    body: "",
    order_no: "",
    part_no: "",
    type: "0",
    status: "0",
    sender: "0"
})

function formSubmit() {
    form.post(Laravel.route('superuser.inquiries.store'))
}
</script>
