<template>
    <Modal identifier="AdminTrashInquiryModal">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">Delete Inquiry</h3>
                <div class="block-options">
                    <button
                        type="button"
                        class="btn-block-option"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    >
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content fs-sm">
                <p>
                    This action cannot be undone. This will permanently delete the
                    <b>{{ inquiry.title }}</b> inquiry and remove all activities and other data.
                </p>

                <p>
                    <span class="d-inline-flex">
                        Please type
                        <b>&nbsp;{{ inquiry.title }}&nbsp;</b> to confirm.
                    </span>
                    <input type="text" v-model="confirmText" class="form-control" />
                </p>
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button
                    type="button"
                    class="btn btn-sm btn-alt-secondary me-1"
                    data-bs-dismiss="modal"
                    ref="closeModal"
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
import { Laravel } from '@/Helpers'
import { computed, ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3';


const form = useForm()

const closeModal = ref()

const confirmText = ref('')

const props = defineProps({ inquiry: Object })

const isTextMatched = computed(() => confirmText.value === props.inquiry.title);


function moveToTrash() {
    if (isTextMatched.value === true) {
        form.delete(Laravel.route('superuser.inquiries.destroy', { inquiry: props.inquiry.id }), {
            onSuccess: () => {
                confirmText.value = "";
                closeModal.value.click();
            }
        })
    }
}
</script>
