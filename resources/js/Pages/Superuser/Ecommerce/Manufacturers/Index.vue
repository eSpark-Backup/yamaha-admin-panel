<template>
    <PageHeader :breadcrumb="breadcrumb" title="Manufacturers">
        <template #actions>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#CreateOrUpdateManufacturerModal"
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
            v-if="$page.props.flash.manufacturer_created"
        >{{ __("Manufacturer successfully created.") }}</Alert>
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.manufacturer_updated"
        >{{ __("Manufacturer successfully updated.") }}</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.manufacturer_deleted"
        >{{ __("Manufacturer successfully deleted.") }}</Alert>
    </div>

    <div class="content">
        <Block rounded theme="default" :options="['fullscreen']">
            <template #title>{{ __("List of all manufacturers") }}</template>

            <template #content>
                <SearchForm />

                <div class="table-responsive">
                    <table class="table table-borderless table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="d-md-table-cell">{{ __("Name") }}</th>
                                <th>{{ __("Short Name") }}</th>
                                <th class="text-center">{{ __("Status") }}</th>
                                <th class="text-center" style="width: 10rem;">{{ __("Action") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(manufacturer, index) in manufacturers.data" :key="index">
                                <td class>{{ manufacturer.id }}</td>
                                <td class="fw-semibold fs-sm">{{ manufacturer.name }}</td>
                                <td class="d-sm-table-cell fs-sm">{{ manufacturer.short_name }}</td>
                                <td class="fw-semibold fs-sm text-center">
                                    <span
                                        v-if="manufacturer.status === 1"
                                        class="badge bg-success"
                                    >{{ __("Public") }}</span>
                                    <span
                                        v-else-if="manufacturer.status === 0"
                                        class="badge bg-danger"
                                    >{{ __("Private") }}</span>
                                </td>
                                <td class="text-center">
                                    <button
                                        data-bs-toggle="modal"
                                        @click="update(manufacturer)"
                                        class="btn btn-sm btn-alt-primary me-2"
                                        data-bs-target="#CreateOrUpdateManufacturerModal"
                                    >
                                        <i class="fa fa-fw fa-eye text-primary"></i>
                                    </button>
                                    <button
                                        data-bs-toggle="modal"
                                        data-bs-target="#TrashManufacturerModal"
                                        class="btn btn-sm btn-alt-danger"
                                        @click="deleteManufacturer(manufacturer)"
                                    >
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="manufacturers.total === 0">
                                <td colspan="5">
                                    <Alert
                                        theme="warning"
                                        class="mb-0"
                                    >{{ __("No manufacturers found.") }}</Alert>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <Pagination :paginator="manufacturers" />
            </template>
        </Block>
    </div>

    <TrashManufacturer
        @close="resetModal"
        :manufacturer="trashManufacturer"
        identifier="TrashManufacturerModal"
    />

    <CreateOrUpdateManufacturer
        @close="resetModal"
        :manufacturer="updateManufacturer"
        identifier="CreateOrUpdateManufacturerModal"
    />
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import TrashManufacturer from './Components/TrashManufacturer.vue';
import CreateOrUpdateManufacturer from './Components/CreateOrUpdateManufacturer.vue';

const breadcrumb = ref([
    { label: "Ecommerce", link: null },
    { label: "Manufacturers", link: Laravel.route('superuser.manufacturers.index') },
    { label: "List" },
])

const trashManufacturer = ref({})

defineProps({ manufacturers: Object })

const updateManufacturer = ref({ name: "", short_name: "" })


function deleteManufacturer(o) {
    trashManufacturer.value = o;
}

function update(group) {
    updateManufacturer.value = group;
}

function resetModal() {
    trashManufacturer.value = {};
    updateManufacturer.value = { title: "", short_name: "" };
}

</script>
