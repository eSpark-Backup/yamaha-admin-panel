<template>
    <Modal :identifier="identifier">
        <Block v-bind="block" class="mb-0">
            <template #title>{{ __("Add New Image") }}</template>

            <template #content>
                <div class="mb-4">
                    <label class="form-label" for="media-file">
                        {{ __("Image") }}
                        <span class="text-danger">*</span>
                    </label>
                    <input
                        type="file"
                        id="media-file"
                        accept="image/*"
                        class="form-control"
                        @input="form.media = $event.target.files[0]"
                    />
                </div>
                <div class="mb-4">
                    <label class="form-label" for="image-title">{{ __("Title") }}</label>
                    <input type="text" class="form-control" id="image-title" v-model="form.title" />
                </div>
                <div class="mb-4">
                    <label class="form-label" for="image-caption">{{ __("Caption") }}</label>
                    <textarea
                        rows="3"
                        id="image-caption"
                        class="form-control"
                        v-model="form.caption"
                    ></textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="image-order">{{ __("Order") }}</label>
                    <input type="number" id="image-order" class="form-control" v-model="form.order" />
                </div>

                <div class="row">
                    <div class="col-md-12 text-end border-top py-3 bg-gray-lighter rounded-bottom">
                        <button class="btn btn-sm btn-secondary text-uppercase" @click="upload">
                            <i class="fa fa-fw fa-save"></i>
                            {{ __("Upload") }}
                        </button>
                    </div>
                </div>
            </template>
        </Block>
    </Modal>
</template>
<script setup>
import { reactive, watch } from 'vue';
import { BootstrapModal, Laravel } from '@/Helpers';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    identifier: String,
    product: Object,
    media: Object
})

const emit = defineEmits(['close'])

const form = useForm({
    title: "",
    caption: "",
    order: 0,
    media: ""
})

const block = reactive({
    modal: true,
    rounded: true,
    loading: false,
    theme: 'default',
    options: ['close'],
})


watch(props, ({ media }) => {
    if (media.id) {
        form.title = media.title;
        form.caption = media.caption;
        form.order = media.order;
    }
})


function upload() {
    block.loading = true;
    form.post(Laravel.route('superuser.products.media.store', { product: props.product?.id }), {
        onSuccess: () => {
            form.reset();
            document.getElementById('media-file').value = "";
        },
        onFinish: () => {
            emit('close')
            block.loading = false;
            BootstrapModal(props.identifier).hide();
        }
    })
}

</script>
