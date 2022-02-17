<template>
    <Modal :identifier="identifier">
        <div class="block block-rounded block-transparent mb-0">
            <div class="block-header block-header-default">
                <h3 class="block-title">Delete Manufacturer</h3>
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
            <div class="block-content fs-sm">
                <p>{{ __("This action cannot be undone. This will permanently delete the manufacturer and remove all team associations and other data.") }}</p>

                <p>
                    <span>
                        {{ __("Please type menufacturer name to confirm.") }}
                        <b>({{ manufacturer.name }})</b>
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

const props = defineProps({ manufacturer: Object, identifier: String })

const isTextMatched = computed(() => confirm.value === props.manufacturer.name);

function moveToTrash() {
    if (isTextMatched.value === true) {
        form.delete(Laravel.route('superuser.manufacturers.destroy', { manufacturer: props.manufacturer?.id }), {
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
