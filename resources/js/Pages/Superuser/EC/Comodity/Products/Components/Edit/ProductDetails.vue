<template>
    <Block v-bind="block">
        <template #title>{{ __("Details") }}</template>

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
                            v-if="form.errors.description"
                            class="invalid-feedback"
                        >{{ form.errors.description }}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label" for="product-comment">{{ __("internal notes") }}</label>
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
                            <option
                                :value="form.manufacturer_id === null ? null : ''"
                            >Select Manufacturer</option>
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
                            <option :value="form.product_model_id === null ? null : ''">Select Model</option>
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
                            :class="['form-select', form.errors.prefecture_id && 'is-invalid']"
                            id="source-prefecture"
                            v-model="form.prefecture_id"
                        >
                            <option selected></option>
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
                            :class="['form-select', form.errors.tenant_id && 'is-invalid']"
                            id="supplier-destributor"
                            v-model="form.tenant_id"
                        >
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
                            v-if="form.errors.registration_type"
                            class="invalid-feedback"
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
        </template>
        <template #footer>
            <div class="text-end">
                <button
                    @click="save"
                    :disabled="form.processing"
                    class="btn btn-secondary btn-sm text-uppercase"
                >
                    <i class="fa fa-fw fa-save"></i>
                    {{ __(form.processing ? 'Processing...' : 'Save Product') }}
                </button>
            </div>
        </template>
    </Block>
</template>
<script setup>
import { reactive } from 'vue';
import { Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({ manufacturers: Array, prefectures: Array, tags: Array, product: Object, models: Array })

const block = reactive({
    loading: false,
    rounded: true,
    theme: "default",
    options: ['fullscreen', 'collapse']
})

const form = useForm({
    title: props.product?.title,
    description: props.product?.description,
    tenant_id: props.product?.tenant_id,
    prefecture_id: props.product?.prefecture_id,
    product_model_id: props.product?.product_model_id,
    manufacturer_id: props.product?.manufacturer_id,
    registration_type: props.product?.registration_type,
    comments: props.product?.comments,
    status: props.product?.status
})


function save() {
    block.loading = true;
    form.put(Laravel.route('superuser.products.update', { product: props.product.id }), {
        onFinish: () => block.loading = false
    })
}
</script>
