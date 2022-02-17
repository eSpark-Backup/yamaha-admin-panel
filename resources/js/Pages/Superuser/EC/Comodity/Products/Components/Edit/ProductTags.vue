<template>
    <Block rounded theme="default" :loading="isLoading" :options="['collapse']">
        <template #title>{{ __("Product Tags") }}</template>
        <template #content>
            <div v-if="tags.length" class="mb-3">
                <span
                    @click="toggle(tag)"
                    :class="{
                        'badge rounded-pill cursor-pointer me-2 d-inline-flex align-items-center': true,
                        'bg-dark': !attachedTags.includes(tag.id),
                        'bg-primary': attachedTags.includes(tag.id),
                    }"
                    v-for="(tag, index) in tags"
                >
                    <i class="si si-minus me-1" v-if="attachedTags.includes(tag.id)"></i>
                    <i v-else class="si si-tag me-1"></i>
                    {{ tag.name }}
                </span>
            </div>

            <Alert v-else theme="warning">Product Tags are not available.</Alert>
        </template>
    </Block>
</template>
<script setup>
import { computed, ref } from 'vue';
import { Laravel } from '@/Helpers'

const props = defineProps({ product: Object, tags: Array })

const isLoading = ref(false);


const attachedTags = computed(() => props.product.tags.map(({ id }) => id))


function toggle(tag) {
    isLoading.value = true;
    axios.post(Laravel.route('api.products.tags', { product: props.product.id }), { tag: tag.id }).then(({ data }) => {
        isLoading.value = false;

        if (data.attached.includes(tag.id)) {
            props.product.tags.push(tag)
        } else {
            props.product.tags = props.product.tags.filter(({ id }) => id !== tag.id);
        }
    })
}
</script>
