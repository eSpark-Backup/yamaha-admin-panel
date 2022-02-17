<template>
    <Modal :identifier="identifier">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3
                    class="block-title"
                >{{ __(manufacturer.id ? 'Edit Manufacturer' : "Create Manufacturer") }}</h3>
                <div class="block-options">
                    <button
                        type="button"
                        class="btn-block-option"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                        @click="close"
                    >
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content fs-sm pb-4">
                <div>
                    <label class="form-label" for="manufacturer-name">{{ __("Title") }}</label>
                    <input
                        type="text"
                        v-model="form.name"
                        id="manufacturer-name"
                        :class="['form-control', form.errors.name && 'is-invalid']"
                    />
                    <div v-if="form.errors.name" class="invalid-feedback">{{ form.errors.name }}</div>
                </div>
                <div class="mt-3">
                    <label class="form-label" for="manufacturer-short_name">{{ __("Short Name") }}</label>
                    <input
                        type="text"
                        v-model="form.short_name"
                        id="manufacturer-short_name"
                        :class="['form-control', form.errors.short_name && 'is-invalid']"
                    />
                    <div
                        v-if="form.errors.short_name"
                        class="invalid-feedback"
                    >{{ form.errors.short_name }}</div>
                </div>
                <div class="mt-3">
                    <label class="form-label" for="model-status">Status</label>
                    <select
                        id="model-status"
                        v-model="form.status"
                        :class="['form-select', form.errors.status && 'is-invalid']"
                    >
                        <option value="1">{{ __("Public") }}</option>
                        <option value="0">{{ __("Private") }}</option>
                    </select>
                    <div v-if="form.errors.status" class="invalid-feedback">{{ form.errors.status }}</div>
                </div>
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button
                    type="button"
                    @click="close"
                    data-bs-dismiss="modal"
                    class="btn btn-sm btn-alt-secondary me-1"
                >{{ __("Close") }}</button>
                <button
                    type="button"
                    @click="save"
                    class="btn btn-sm btn-danger"
                    :disabled="form.processing"
                >{{ __(form.processing ? 'Processing...' : 'Save') }}</button>
            </div>
        </div>
    </Modal>
</template>
<script setup>
import { watch } from 'vue';
import { BootstrapModal, Laravel } from '@/Helpers';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    identifier: String,
    manufacturer: {
        type: Object,
        default: () => ({
            name: "",
            short_name: "1",
            status: "0"
        })
    }
})

const emit = defineEmits(['close'])

const form = useForm({
    name: props.manufacturer?.name,
    short_name: props.manufacturer?.short_name,
    status: "0"
})


watch(props, ({ manufacturer }) => {

    form.name = manufacturer.name;
    form.short_name = manufacturer.short_name;
    form.status = manufacturer.status;

})

function save() {
    props.manufacturer?.id ? update() : create();
}

function create() {
    form.post(Laravel.route('superuser.manufacturers.store'), { onSuccess: close })
}

function update() {
    form.put(Laravel.route('superuser.manufacturers.update', { manufacturer: props.manufacturer?.id }), { onSuccess: close })
}

function close() {
    emit('close')
    BootstrapModal(props.identifier).hide()
}
</script>
