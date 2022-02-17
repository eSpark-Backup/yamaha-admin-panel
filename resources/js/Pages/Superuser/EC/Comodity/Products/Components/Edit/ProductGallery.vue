<template>
    <Block rounded theme="default">
        <template #prependOptions>
            <button
                data-bs-toggle="modal"
                class="btn btn-sm btn-primary"
                data-bs-target="#CreateOrUpdateMediaModal"
            >
                <i class="si si-picture me-1"></i>
                {{ __("New Image") }}
            </button>
        </template>
        <template #title>{{ __("Photograph") }}</template>
        <template #content>
            <Alert theme="success" v-if="isMediaCreated">{{ __("Product image added.") }}</Alert>
            <Alert theme="danger" v-if="isMediaDeleted">{{ __("Product image deleted.") }}</Alert>

            <div class="row">
                <div
                    class="col-md-6 col-lg-4 col-xl-3 mb-4"
                    :key="index"
                    v-for="(media, index) in product.media"
                >
                    <div class="block block-rounded border h-100 mb-0">
                        <div class="block-content p-1">
                            <div class="options-container">
                                <div class="ratio ratio-16x9">
                                    <img
                                        :src="media.url"
                                        :alt="media.title"
                                        class="img-fluid options-item"
                                    />
                                </div>
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <button
                                            data-bs-toggle="modal"
                                            @click="trashMedia = media"
                                            class="btn btn-sm btn-alt-secondary"
                                            data-bs-target="#TrashProductMediaModal"
                                        >
                                            <i class="fa fa-times text-danger me-1"></i>
                                            {{ __("Delete") }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="mb-1">
                                <span class="h6">{{ media.title || __("Default Title") }}</span>
                            </div>
                            <p
                                class="fs-sm text-muted"
                            >{{ media.caption || __("Default caption...") }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <Alert
                theme="warning"
                v-if="product.media.length === 0"
            >{{ __("Product images not available.") }}</Alert>
        </template>
    </Block>

    <CreateOrUpdateMedia
        :product="product"
        :media="updateMedia"
        @close="onMediaCreateOrUpdate"
        identifier="CreateOrUpdateMediaModal"
    />

    <TrashProductMedia
        :media="trashMedia"
        @close="onMediaDelete"
        identifier="TrashProductMediaModal"
    />
</template>
<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { computed, ref } from 'vue';
import CreateOrUpdateMedia from './CreateOrUpdateMedia.vue'
import TrashProductMedia from './TrashProductMedia.vue';

defineProps({ product: Object })


const trashMedia = ref({})

const updateMedia = ref({})

const isMediaCreated = computed(() => usePage().props.value?.flash?.media_created !== undefined)

const isMediaDeleted = computed(() => usePage().props.value?.flash?.media_deleted !== undefined)

function onMediaDelete() {
    trashMedia.value = {};
}

function onMediaCreateOrUpdate() {
    updateMedia.value = {};
}
</script>
