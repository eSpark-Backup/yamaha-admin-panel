<template>
    <Alert
        theme="success"
        v-if="isUpdated"
    >Product Storage, Purchase and Pricings Information Updated!</Alert>

    <Block theme="default" v-bind="block">
        <template #title>{{ __("Storage, Purchase & Price Information") }}</template>
        <template #content>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="supplier-customer-name">
                            {{ __("Supplier Customer Name") }}
                            <span class="text-danger">*</span>
                        </label>
                        <input
                            type="text"
                            v-model="form.supplier"
                            id="supplier-customer-name"
                            :class="['form-control', errors.supplier && 'is-invalid']"
                        />
                        <div v-if="errors.supplier" class="invalid-feedback">{{ errors.supplier }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="stock-status">
                            {{ __("Quantity") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            id="stock-status"
                            v-model="form.in_stock"
                            :class="['form-select', errors.in_stock && 'is-invalid']"
                        >
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>
                        </select>
                        <div v-if="errors.in_stock" class="invalid-feedback">{{ errors.in_stock }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="product-purchase-date">
                            {{ __("Purchase Date") }}
                            <span class="text-danger">*</span>
                        </label>
                        <input
                            type="date"
                            id="product-purchase-date"
                            v-model="form.purchased_at"
                            :class="['form-control', errors.purchased_at && 'is-invalid']"
                        />
                        <div
                            v-if="errors.purchased_at"
                            class="invalid-feedback"
                        >{{ errors.purchased_at }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label
                            class="form-label"
                            for="shipping-fee"
                        >{{ __("Shipping fee at the time of purchase (purchase)") }}</label>
                        <input
                            type="number"
                            id="shipping-fee"
                            v-model="form.shipping_fee"
                            :class="['form-control', errors.shipping_fee && 'is-invalid']"
                        />
                        <div
                            v-if="errors.shipping_fee"
                            class="invalid-feedback"
                        >{{ errors.shipping_fee }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="repair-cost">{{ __("Repair Cost") }}</label>
                        <input
                            type="number"
                            id="repair-cost"
                            v-model="form.repair_cost"
                            :class="['form-control', errors.repair_cost && 'is-invalid']"
                        />
                        <div
                            v-if="errors.repair_cost"
                            class="invalid-feedback"
                        >{{ errors.repair_cost }}</div>
                    </div>
                </div>

                <!-- Storage Information -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="product-storage-location">
                            {{ __("Storage (Shipping) location") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            id="product-storage-location"
                            v-model="form.storage_location"
                            :class="['form-select', errors.storage_location && 'is-invalid']"
                        >
                            <option></option>
                            <option>{{ __("Yamaha") }}</option>
                            <option>{{ __("Dealers") }}</option>
                            <option>{{ __("Local") }}</option>
                            <option>{{ __("Other") }}</option>
                        </select>
                        <div
                            class="invalid-feedback"
                            v-if="errors.storage_location"
                        >{{ errors.storage_location }}</div>
                    </div>
                </div>

                <!-- Pricing Information -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="product-purchase-ammount">
                            {{ __("Purchase Amount") }}
                            <span class="text-danger">*</span>
                        </label>
                        <input
                            type="text"
                            id="product-purchase-ammount"
                            v-model="form.purchase_price"
                            :class="['form-control', errors.purchase_price && 'is-invalid']"
                        />
                        <div
                            v-if="errors.purchase_price"
                            class="invalid-feedback"
                        >{{ errors.purchase_price }}</div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="product-price">
                            {{ __("Partition amount") }}
                            <span class="text-danger">*</span>
                        </label>
                        <input
                            type="number"
                            id="product-price"
                            class="form-control"
                            v-model="form.partition_amount"
                            :class="['form-control', errors.partition_amount && 'is-invalid']"
                        />
                        <div
                            v-if="errors.partition_amount"
                            class="invalid-feedback"
                        >{{ errors.partition_amount }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="product-cost">{{ __("Cost") }}</label>
                        <input
                            disabled
                            type="text"
                            placeholder="0"
                            id="product-cost"
                            class="form-control"
                            :value="form.purchase_price"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label
                            class="form-label"
                            for="product-gross-profit"
                        >{{ __("Gross profit") }}</label>
                        <input
                            disabled
                            type="text"
                            class="form-control"
                            :value="gross_profit"
                            id="product-gross-profit"
                        />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-end border-top py-3 bg-gray-lighter rounded-bottom">
                    <button class="btn btn-secondary btn-sm text-uppercase" @click="update">
                        <i class="fa fa-fw fa-save"></i>
                        {{ __(block.loading ? 'Processing...' : 'Save') }}
                    </button>
                </div>
            </div>
        </template>
    </Block>
</template>
<script setup>
import { Laravel } from '@/Helpers';
import { computed, onMounted, reactive, ref } from 'vue';


const errors = ref({});

const isUpdated = ref(false)

const block = reactive({
    loading: false,
    rounded: true,
    theme: "default",
    options: ['fullscreen', 'collapse']
})

const props = defineProps({ product: Object })

const gross_profit = computed(() => {
    let profit = form.partition_amount - form.purchase_price;

    if (isNaN(profit)) return 0;

    return profit;
});


const form = reactive({
    supplier: "",
    in_stock: "",
    purchased_at: "",
    shipping_fee: "",
    repair_cost: "",
    storage_location: "",
    purchase_price: "",
    partition_amount: "",
})


onMounted(() => {
    for (let key in form) {
        if (props.product?.meta) {
            form[key] = props.product?.meta[key];
        }
    }
})


function update() {
    block.loading = true;
    isUpdated.value = false;
    axios.post(Laravel.route('api.products.pricing', { product: props.product.id }), form)
        .then(({ data }) => {
            isUpdated.value = true;
            errors.value = {};
        })
        .catch(e => {
            errors.value = Laravel.handleValidationErrors(e)
        })
        .then(() => block.loading = false)
}
</script>
