<template>
    <Modal :identifier="identifier">
        <Block v-bind="block" class="mb-0">
            <template #title>{{ __("Delete Image") }}</template>
            <template #content>
                <div class="pb-3">
                    <div class="ratio ratio-16x9">
                        <img :src="media.url" :alt="media.title" />
                    </div>
                </div>
                <p>{{ __("This action cannot be undone. This will permanently delete the image from database and storage. Are you sure?") }}</p>
            </template>
            <template #footer>
                <div class="text-end">
                    <button
                        @click="close"
                        data-bs-dismiss="modal"
                        class="btn btn-sm btn-alt-secondary me-1"
                    >{{ __("Close") }}</button>
                    <button class="btn btn-sm btn-danger" @click="moveToTrash">{{ __("Delete") }}</button>
                </div>
            </template>
        </Block>
    </Modal>
</template>
<script setup>
import { reactive } from 'vue';
import { BootstrapModal, Laravel } from '@/Helpers';
import { useForm } from '@inertiajs/inertia-vue3';


const props = defineProps({ identifier: String, media: Object })

const emit = defineEmits(['close'])

const form = useForm({
    // redirect_back: true
});

const block = reactive({
    loading: false,
    rounded: true,
    theme: "default",
    options: ['close']
})


function close() {
    emit('close');
}

function moveToTrash() {
    block.loading = true;
    form.delete(Laravel.route('superuser.products.media.destroy', { media: props.media?.id }), {
        onSuccess: () => {
            BootstrapModal(props.identifier).hide();
            close();
        },
        onFinish: () => {
            block.loading = false;
        }
    })
}
</script>
