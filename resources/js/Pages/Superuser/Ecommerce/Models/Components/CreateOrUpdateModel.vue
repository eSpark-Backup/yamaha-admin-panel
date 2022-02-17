<template>
    <Modal :identifier="identifier">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ __(model.id ? 'Edit Model' : "Create Model") }}</h3>
                <div class="block-options">
                    <button
                        type="button"
                        @click="close"
                        aria-label="Close"
                        data-bs-dismiss="modal"
                        class="btn-block-option"
                    >
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content fs-sm pb-4">
                <div>
                    <label class="form-label" for="model-name">{{ __("Title") }}</label>
                    <input
                        type="text"
                        id="model-name"
                        v-model="form.name"
                        :class="['form-control', form.errors.name && 'is-invalid']"
                    />
                    <div v-if="form.errors.name" class="invalid-feedback">{{ form.errors.name }}</div>
                </div>
                <div class="mt-3">
                    <label class="form-label" for="model-status">{{ __("Status") }}</label>
                    <select
                        id="model-status"
                        v-model="form.status"
                        :class="['form-select', form.errors.status && 'is-invalid']"
                    >
                        <option value="1">{{ __("Active") }}</option>
                        <option value="0">{{ __("Inactive") }}</option>
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
    model: {
        type: Object,
        default: () => ({
            name: "",
            status: "1",
        })
    }
})

const emit = defineEmits(['close'])

const form = useForm({
    name: props.model?.name,
    status: props.model?.status
})


watch(props, ({ model }) => {

    form.name = model.name;
    form.status = model.status;

})

function save() {
    props.model?.id ? update() : create();
}

function create() {
    form.post(Laravel.route('superuser.models.store'), { onSuccess: close })
}

function update() {
    form.put(Laravel.route('superuser.models.update', { model: props.model?.id }), { onSuccess: close })
}

function close() {
    emit('close')
    BootstrapModal(props.identifier).hide()
}
</script>
