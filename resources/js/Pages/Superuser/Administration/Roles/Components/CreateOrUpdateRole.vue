<template>
    <Modal :identifier="identifier">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ role.id ? 'Edit Role' : "Create Role" }}</h3>
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
                    <label class="form-label" for="role-title">Title</label>
                    <input
                        disabled
                        type="text"
                        id="role-title"
                        v-model="form.title"
                        :class="['form-control']"
                    />
                </div>
                <div class="mt-4">
                    <label class="form-label" for="role-title">Slug</label>
                    <input
                        disabled
                        type="text"
                        id="role-title"
                        v-model="form.slug"
                        :class="['form-control']"
                    />
                </div>
                <div class="mt-3">
                    <label class="form-label" for="group-status">Status</label>
                    <select
                        v-model="form.status"
                        id="group-status"
                        :class="['form-select', form.errors.status && 'is-invalid']"
                    >
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
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
                >Close</button>
                <button
                    type="button"
                    @click="save"
                    class="btn btn-sm btn-danger"
                    :disabled="form.processing"
                >{{ form.processing ? 'Saving...' : 'Save' }}</button>
            </div>
        </div>
    </Modal>
</template>
<script setup>
import { BootstrapModal, Laravel } from '@/Helpers';
import { useForm } from '@inertiajs/inertia-vue3';
import { watch } from 'vue';

const props = defineProps({
    identifier: String,
    role: {
        type: Object,
        default: () => ({
            title: "",
            slug: "",
            status: "1"
        })
    }
})

const emit = defineEmits(['close'])

const form = useForm({
    title: props.role?.title,
    slug: props.role?.slug,
    status: props.role?.status
})


watch(props, ({ role }) => {

    form.title = role.title;
    form.slug = role.slug;
    form.status = role.status;

})

function save() {
    props.role?.id ? update() : create();
}

function create() {
    form.post(Laravel.route('superuser.roles.store'), { onSuccess: close })
}

function update() {
    form.put(Laravel.route('superuser.roles.update', { role: props.role?.id }), { onSuccess: close })
}

function close() {
    emit('close')
    BootstrapModal(props.identifier).hide()
}
</script>
