<template>
    <Modal :identifier="identifier">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ __("Delete Tag") }}</h3>
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
                <p>{{ __("This action cannot be undone. This will permanently delete the tag and remove all team associations and other data.") }}</p>

                <p>
                    <span>
                        {{ __("Please type tag name to confirm.") }}
                        <b>({{ tag.name }})</b>
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
                >{{ __("Close") }}</button>
                <button
                    type="button"
                    @click="moveToTrash"
                    class="btn btn-sm btn-danger"
                    :disabled="!isTextMatched || form.processing"
                >{{ __(form.processing ? 'Processing...' : 'Delete') }}</button>
            </div>
        </div>
    </Modal>
</template>
<script setup>
import { computed, ref } from 'vue'
import { BootstrapModal, Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3'

const form = useForm()

const confirm = ref('')

const emit = defineEmits(['close'])

const props = defineProps({ tag: Object, identifier: String })

const isTextMatched = computed(() => confirm.value === props.tag.name);

function moveToTrash() {
    if (isTextMatched.value === true) {
        form.delete(Laravel.route('superuser.tags.destroy', { tag: props.tag?.id }), {
            onSuccess: () => close()
        })
    }
}

function close() {
    emit('close')
    confirm.value = ""
    BootstrapModal(props.identifier).hide()
}
</script>
