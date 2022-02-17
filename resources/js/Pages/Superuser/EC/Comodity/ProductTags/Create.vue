<template>
    <PageHeader :breadcrumb="breadcrumb" title="Tags" />

    <div class="content">
        <Block rounded>
            <template #title>{{ __("Tag Form") }}</template>
            <template #content>
                <div>
                    <label class="form-label" for="tag-name">{{ __("Title") }}</label>
                    <input
                        type="text"
                        id="tag-name"
                        v-model="form.name"
                        :class="['form-control', form.errors.name && 'is-invalid']"
                    />
                    <div v-if="form.errors.name" class="invalid-feedback">{{ form.errors.name }}</div>
                </div>

                <div class="mt-3">
                    <label class="form-label" for="tag-code">{{ __("Code") }}</label>
                    <input
                        type="text"
                        id="tag-code"
                        v-model="form.code"
                        :class="['form-control', form.errors.code && 'is-invalid']"
                    />
                    <div v-if="form.errors.code" class="invalid-feedback">{{ form.errors.code }}</div>
                </div>

                <div class="mt-3 mb-4">
                    <label class="form-label" for="tag-name">{{ __("Order") }}</label>
                    <input
                        type="text"
                        id="tag-name"
                        v-model="form.order"
                        :class="['form-control', form.errors.order && 'is-invalid']"
                    />
                    <div v-if="form.errors.order" class="invalid-feedback">{{ form.errors.order }}</div>
                </div>
            </template>
            <template #footer>
                <div class="d-flex justify-content-end">
                    <button
                        type="button"
                        @click="save"
                        class="btn btn-secondary"
                        :disabled="form.processing"
                    >{{ __(form.processing ? 'Processing...' : 'Save') }}</button>
                </div>
            </template>
        </Block>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';

const breadcrumb = ref([
    { label: "EC", link: null },
    { label: "Comodity", link: null },
    { label: "Tags", link: Laravel.route('superuser.tags.index') },
    { label: "Create" },
])

const form = useForm({
    name: "",
    code: "",
    order: "1",
})


function save() {
    form.post(Laravel.route('superuser.tags.store'))
}


</script>
