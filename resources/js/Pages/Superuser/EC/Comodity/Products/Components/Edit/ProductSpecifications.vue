<template>
    <Alert theme="success" v-if="isUpdated">{{ __("Product Specifications Updated!") }}</Alert>

    <Block v-bind="block">
        <template #title>{{ __("Specifications") }}</template>
        <template #content>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label
                            class="form-label"
                            for="specification-manufactured_at"
                        >{{ __("Made date") }}</label>
                        <input
                            type="date"
                            v-model="form.manufactured_at"
                            id="specification-manufactured_at"
                            :class="['form-control', errors.manufactured_at && 'is-invalid']"
                        />
                        <div
                            v-if="errors.manufactured_at"
                            class="invalid-feedback"
                        >{{ errors.manufactured_at }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-shipping-date">
                            {{ __("Headquarters shipping year") }}
                            <span class="text-danger">*</span>
                        </label>
                        <input
                            type="date"
                            v-model="form.shipped_at"
                            id="specification-shipping-date"
                            :class="['form-control', errors.shipped_at && 'is-invalid']"
                        />
                        <div
                            v-if="errors.shipped_at"
                            class="invalid-feedback"
                        >{{ errors.shipped_at }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-model">
                            {{ __("Model (alphanumeric hyphen only)") }}
                            <span class="text-danger">*</span>
                        </label>
                        <input
                            type="text"
                            v-model="form.model"
                            id="specification-model"
                            :class="['form-control', errors.model && 'is-invalid']"
                        />
                        <div v-if="errors.model" class="invalid-feedback">{{ errors.model }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-unit">
                            {{ __("Unit (uppercase and capitalized hyphens only)") }}
                            <span
                                class="text-danger"
                            >*</span>
                        </label>
                        <input
                            type="text"
                            v-model="form.unit"
                            id="specification-unit"
                            :class="['form-control', errors.unit && 'is-invalid']"
                        />
                        <div v-if="errors.unit" class="invalid-feedback">{{ errors.unit }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-genre">
                            {{ __("Genre") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            v-model="form.genre"
                            id="specification-genre"
                            :class="['form-select', errors.genre && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("Guide") }}</option>
                            <option>{{ __("Hand") }}</option>
                            <option>{{ __("Monorail") }}</option>
                            <option>{{ __("Passenger") }}</option>
                            <option>{{ __("Passenger Electromagnetics") }}</option>
                            <option>{{ __("Standing") }}</option>
                            <option>{{ __("STD Electromagnetic") }}</option>
                            <option>{{ __("Other") }}</option>
                        </select>
                        <div v-if="errors.genre" class="invalid-feedback">{{ errors.genre }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-power">
                            {{ __("Power") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            v-model="form.power"
                            id="specification-power"
                            :class="['form-select', errors.power && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("E/G") }}</option>
                            <option>{{ __("Lead Battery") }}</option>
                            <option>{{ __("Lithium") }}</option>
                        </select>
                        <div v-if="errors.power" class="invalid-feedback">{{ errors.power }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-capacity">
                            {{ __("Capacity") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            v-model="form.capacity"
                            id="specification-capacity"
                            :class="['form-select', errors.capacity && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("1") }}</option>
                            <option>{{ __("2") }}</option>
                            <option>{{ __("4-5 People") }}</option>
                            <option>{{ __("Other") }}</option>
                        </select>
                        <div v-if="errors.capacity" class="invalid-feedback">{{ errors.capacity }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-color">
                            {{ __("Colour") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            v-model="form.color"
                            id="specification-color"
                            :class="['form-select', errors.color && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("White") }}</option>
                            <option>{{ __("Red") }}</option>
                            <option>{{ __("Green") }}</option>
                            <option>{{ __("Blue") }}</option>
                            <option>{{ __("Other") }}</option>
                        </select>
                        <div v-if="errors.color" class="invalid-feedback">{{ errors.color }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-windowshield">
                            {{ __("Window Shield") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            v-model="form.window_shield"
                            id="specification-windowshield"
                            :class="['form-select', errors.window_shield && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("One Sheet") }}</option>
                            <option>{{ __("Split") }}</option>
                        </select>
                        <div
                            v-if="errors.window_shield"
                            class="invalid-feedback"
                        >{{ errors.window_shield }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-bagsupport">
                            {{ __("Bag support") }}
                            <span class="text-danger">*</span>
                        </label>
                        <select
                            v-model="form.bag_support"
                            id="specification-bagsupport"
                            :class="['form-select', errors.bag_support && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("Foldable") }}</option>
                            <option>{{ __("Fixed type") }}</option>
                            <option>{{ __("2-pack vertical") }}</option>
                            <option>{{ __("Diagonal 2-pack type") }}</option>
                            <option>{{ __("Diagonal 4-pack type") }}</option>
                            <option>{{ __("Other") }}</option>
                        </select>
                        <div
                            v-if="errors.bag_support"
                            class="invalid-feedback"
                        >{{ errors.bag_support }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-degree">{{ __("Degree") }}</label>
                        <select
                            v-model="form.degree"
                            id="specification-degree"
                            :class="['form-select', errors.degree && 'is-invalid']"
                        >
                            <option value></option>
                            <option>{{ __("A") }}</option>
                            <option>{{ __("B") }}</option>
                            <option>{{ __("C") }}</option>
                            <option>{{ __("S") }}</option>
                        </select>
                        <div v-if="errors.degree" class="invalid-feedback">{{ errors.degree }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label
                            class="form-label"
                            for="specification-maintenance"
                        >{{ __("Manufacturer maintenance") }}</label>
                        <select
                            v-model="form.maintenance"
                            id="specification-maintenance"
                            :class="['form-select', errors.maintenance && 'is-invalid']"
                        >
                            <option value></option>
                            <option value="0">{{ __("No") }}</option>
                            <option value="1">{{ __("Yes") }}</option>
                        </select>
                        <div
                            v-if="errors.maintenance"
                            class="invalid-feedback"
                        >{{ errors.maintenance }}</div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-4">
                        <label
                            class="form-label"
                            for="specification-repair"
                        >{{ __("Repair location") }}</label>
                        <input
                            type="text"
                            id="specification-repair"
                            v-model="form.repair_location"
                            :class="['form-control', errors.repair_location && 'is-invalid']"
                        />
                        <div
                            v-if="errors.repair_location"
                            class="invalid-feedback"
                        >{{ errors.repair_location }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label
                            class="form-label"
                            for="specification-rom"
                        >{{ __("ROM specifications") }}</label>
                        <textarea
                            rows="4"
                            id="specification-rom"
                            v-model="form.rom_specification"
                            :class="['form-control', errors.rom_specification && 'is-invalid']"
                        ></textarea>
                        <div
                            v-if="errors.rom_specification"
                            class="invalid-feedback"
                        >{{ errors.rom_specification }}</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="specification-op">{{ __("OP included") }}</label>
                        <textarea
                            rows="4"
                            id="specification-op"
                            v-model="form.op_included"
                            :class="['form-control', errors.op_included && 'is-invalid']"
                        ></textarea>
                        <div
                            v-if="errors.op_included"
                            class="invalid-feedback"
                        >{{ errors.op_included }}</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label" for="specification-remark">{{ __("Remarks") }}</label>
                        <textarea
                            rows="4"
                            v-model="form.remark"
                            id="specification-remark"
                            :class="['form-control', errors.remark && 'is-invalid']"
                        ></textarea>
                        <div v-if="errors.remark" class="invalid-feedback">{{ errors.remark }}</div>
                    </div>
                </div>
            </div>
        </template>

        <template #footer>
            <div class="text-end">
                <button @click="update" class="btn btn-sm btn-secondary text-uppercase">
                    <i class="fa fa-fw fa-save"></i>
                    {{ __(block.loading ? 'Processing...' : 'Save Specifications') }}
                </button>
            </div>
        </template>
    </Block>
</template>
<script setup>
import { onMounted, reactive, ref } from 'vue';
import { Laravel } from '@/Helpers';

const props = defineProps({ product: Object })


const block = reactive({
    loading: false,
    rounded: true,
    theme: "default",
    options: ['collapse']
})

const errors = ref({});

const isUpdated = ref(false)

const form = reactive({
    genre: "",
    power: "",
    capacity: "",
    color: "",
    window_shield: "",
    bag_support: "",
    degree: "",
    unit: "",
    model: "",
    manufactured_at: "",
    shipped_at: "",
    maintenance: "",
    repair_location: "",
    rom_specification: "",
    op_included: "",
    remark: ""
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
    axios.post(Laravel.route('api.products.specifications', { product: props.product.id }), form)
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
