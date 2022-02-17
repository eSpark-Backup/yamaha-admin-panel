<template>
    <PageHeader :breadcrumb="breadcrumb" title="Models">
        <template #actions>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#CreateOrUpdateModelModal"
            >
                <i class="fa fa-fw fa-plus-circle me-1"></i>
                {{ __("Create New") }}
            </button>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.model_created"
        >{{ __("Model successfully created.") }}</Alert>
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.model_updated"
        >{{ __("Model successfully updated.") }}</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.model_deleted"
        >{{ __("Model successfully deleted.") }}</Alert>
    </div>

    <div class="content">
        <Block rounded theme="default" :options="['fullscreen']">
            <template #title>{{ __("List of all models") }}</template>

            <template #content>
                <SearchForm />

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th style="width: 4rem;">ID</th>
                                <th class="d-md-table-cell">{{ __("Name") }}</th>
                                <th
                                    class="d-md-table-cell text-center"
                                    style="width: 5rem;"
                                >{{ __("Status") }}</th>
                                <th class="text-center" style="width: 10rem;">{{ __("Action") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(model, index) in models.data" :key="index">
                                <td class>{{ model.id }}</td>
                                <td class="fw-semibold fs-sm">{{ model.name }}</td>
                                <td class="fw-semibold fs-sm text-center">
                                    <span
                                        v-if="model.status === 1"
                                        class="badge bg-success"
                                    >{{ __("Public") }}</span>
                                    <span
                                        v-else-if="model.status === 0"
                                        class="badge bg-danger"
                                    >{{ __("Private") }}</span>
                                </td>
                                <td class="text-center">
                                    <button
                                        data-bs-toggle="modal"
                                        @click="update(model)"
                                        class="btn btn-sm btn-alt-primary me-2"
                                        data-bs-target="#CreateOrUpdateModelModal"
                                    >
                                        <i class="fa fa-fw fa-eye text-primary"></i>
                                    </button>
                                    <button
                                        data-bs-toggle="modal"
                                        data-bs-target="#TrashModelModal"
                                        class="btn btn-sm btn-alt-danger"
                                        @click="deleteModel(model)"
                                    >
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="models.total === 0">
                                <td colspan="4">
                                    <Alert theme="warning" class="mb-0">{{ __("No models found.") }}</Alert>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <Pagination :paginator="models" />
            </template>
        </Block>
    </div>

    <TrashModel @close="resetModal" :model="trashModel" identifier="TrashModelModal" />

    <CreateOrUpdateModel
        @close="resetModal"
        :model="updateModel"
        identifier="CreateOrUpdateModelModal"
    />
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import TrashModel from './Components/TrashModel.vue';
import CreateOrUpdateModel from './Components/CreateOrUpdateModel.vue';

const breadcrumb = ref([
    { label: "Ecommerce", link: null },
    { label: "Models", link: Laravel.route('superuser.models.index') },
    { label: "List" },
])


const trashModel = ref({})

defineProps({ models: Object })

const updateModel = ref({ name: "" })


function deleteModel(model) {
    trashModel.value = model;
}

function update(model) {
    updateModel.value = model;
}

function resetModal() {
    trashModel.value = {};
    updateModel.value = { title: "" };
}
</script>
