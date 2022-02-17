<template>
    <PageHeader title="Product Registration" :breadcrumb="breadcrumb"></PageHeader>

    <div class="content">
        <Block rounded theme="default" :options="['fullscreen']">
            <template #title>{{ __("Product Registration Form") }}</template>
            <template #content>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-4">
                            <label class="form-label" for="product-title">
                                {{ __("Title") }}
                                <span class="text-danger">*</span>
                            </label>
                            <input
                                type="text"
                                id="product-title"
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
                            <label class="form-label" for="product-description">
                                {{ __("product description (up to 50 characters)") }}
                                <span
                                    class="text-danger"
                                >*</span>
                            </label>
                            <textarea
                                rows="4"
                                id="product-description"
                                v-model="form.description"
                                :class="['form-control', form.errors.description && 'is-invalid']"
                            ></textarea>
                            <div
                                class="invalid-feedback"
                                v-if="form.errors.description"
                            >{{ form.errors.description }}</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-4">
                            <label
                                class="form-label"
                                for="product-comment"
                            >{{ __("internal notes") }}</label>
                            <textarea
                                rows="4"
                                id="product-comment"
                                v-model="form.comments"
                                :class="['form-control', form.errors.comments && 'is-invalid']"
                            ></textarea>
                            <div
                                v-if="form.errors.comments"
                                class="invalid-feedback"
                            >{{ form.errors.comments }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="product-manufacturer">
                                {{ __("Manufacturer Name") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="product-manufacturer"
                                v-model="form.manufacturer_id"
                                :class="['form-select', form.errors.manufacturer_id && 'is-invalid']"
                            >
                                <option></option>
                                <option
                                    :key="index"
                                    :value="manufacturer.id"
                                    v-for="(manufacturer, index) in manufacturers"
                                >{{ manufacturer.name }}</option>
                            </select>
                            <div
                                v-if="form.errors.manufacturer_id"
                                class="invalid-feedback"
                            >{{ form.errors.manufacturer_id }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="product-model">
                                {{ __("Model Name") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="product-model"
                                v-model="form.product_model_id"
                                :class="['form-select', form.errors.product_model_id && 'is-invalid']"
                            >
                                <option></option>
                                <option
                                    :key="index"
                                    :value="model.id"
                                    v-for="(model, index) in models"
                                >{{ model.name }}</option>
                            </select>
                            <div
                                v-if="form.errors.product_model_id"
                                class="invalid-feedback"
                            >{{ form.errors.product_model_id }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="source-prefecture">
                                {{ __("Source Prefecture") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="source-prefecture"
                                v-model="form.prefecture_id"
                                :class="['form-select', form.errors.prefecture_id && 'is-invalid']"
                            >
                                <option></option>
                                <option
                                    :key="index"
                                    :value="prefecture.id"
                                    v-for="(prefecture, index) in $page.props.prefectures"
                                >{{ prefecture.title }}</option>
                            </select>
                            <div
                                v-if="form.errors.tenant_id"
                                class="invalid-feedback"
                            >{{ form.errors.tenant_id }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="supplier-destributor">
                                {{ __("Suppliers Introduction") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="supplier-destributor"
                                v-model="form.tenant_id"
                                :class="['form-select', form.errors.tenant_id && 'is-invalid']"
                            >
                                <option></option>
                                <option
                                    :key="index"
                                    :value="tenant.id"
                                    v-for="(tenant, index) in $page.props.tenants"
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
                            <label class="form-label" for="product-registration_type">
                                {{ __("Registration Category") }}
                                <span class="text-danger">*</span>
                            </label>
                            <select
                                id="product-registration_type"
                                v-model="form.registration_type"
                                :class="['form-select', form.errors.registration_type && 'is-invalid']"
                            >
                                <option>{{ __("Temporary Registration") }}</option>
                                <option>{{ __("Main registration") }}</option>
                            </select>
                            <div
                                class="invalid-feedback"
                                v-if="form.errors.registration_type"
                            >{{ form.errors.registration_type }}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="model-status">{{ __("Status") }}</label>
                            <select
                                id="model-status"
                                v-model="form.status"
                                :class="['form-select', form.errors.status && 'is-invalid']"
                            >
                                <option value="1">{{ __("Publish") }}</option>
                                <option value="0">{{ __("Draft") }}</option>
                            </select>
                            <div
                                v-if="form.errors.status"
                                class="invalid-feedback"
                            >{{ form.errors.status }}</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-end border-top py-3 bg-gray-lighter rounded-bottom">
                        <button
                            @click="save"
                            :disabled="form.processing"
                            class="btn btn-secondary text-uppercase"
                        >
                            <i class="fa fa-fw fa-save"></i>
                            {{ __(form.processing ? 'Processing...' : 'Save Product') }}
                        </button>
                    </div>
                </div>
            </template>
        </Block>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';

defineProps({ manufacturers: Array, models: Array })

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "Product List", link: Laravel.route('superuser.products.index') },
    { label: "Product Registration" },
])


const form = useForm({
    title: "",
    status: "0",
    comments: "",
    tenant_id: "",
    description: "",
    prefecture_id: "",
    manufacturer_id: "",
    product_model_id: "",
    registration_type: "0",
})


function save() {
    form.post(Laravel.route('superuser.products.store'))
}
</script>
