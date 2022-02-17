<template>
    <Modal :identifier="identifier">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">Delete User</h3>
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
            <div class="block-content fs-sm">
                <p>
                    This action cannot be undone. This will permanently delete the
                    <b>{{ user.name }}</b> user and remove all associations and other data.
                </p>

                <p>
                    <span class="d-inline-flex">
                        Please type
                        <b>&nbsp;&nbsp;{{ user.name }}&nbsp;&nbsp;</b> to confirm.
                    </span>
                    <input type="text" v-model="confirm" class="form-control" />
                </p>
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
                    @click="moveToTrash"
                    class="btn btn-sm btn-danger"
                    :disabled="!isTextMatched || form.processing"
                >{{ form.processing ? 'Deleting...' : 'Delete' }}</button>
            </div>
        </div>
    </Modal>
</template>
<script setup>
import { computed, ref } from 'vue';
import { BootstrapModal, Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';


const form = useForm()

const confirm = ref('')

const emit = defineEmits(['close'])

const props = defineProps({ user: Object, identifier: String })

const isTextMatched = computed(() => confirm.value === props.user.name);


function moveToTrash() {
    if (isTextMatched.value === true) {
        form.delete(Laravel.route('superuser.users.destroy', { user: props.user.id }), { onSuccess: () => close() })
    }
}

function close() {
    emit('close')
    confirm.value = "";
    BootstrapModal(props.identifier).hide();
}
</script>
