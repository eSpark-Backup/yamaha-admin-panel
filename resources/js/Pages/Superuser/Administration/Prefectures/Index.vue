<template>
    <PageHeader :breadcrumb="breadcrumb" title="Prefectures">
        <template #actions>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#CreateOrUpdatePrefecture"
            >
                <i class="fa fa-fw fa-plus-circle me-1"></i> Create
            </button>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.prefecture_created"
        >Prefecture successfully created.</Alert>
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.prefecture_updated"
        >Prefecture successfully updated.</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.prefecture_deleted"
        >Prefecture successfully deleted.</Alert>
    </div>

    <PageContent>
        <template #header>All Prefectures</template>

        <template #content>
            <SearchForm />

            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th style="width: 5rem;">ID</th>
                            <th class="d-md-table-cell">Title</th>
                            <th class="text-center" style="width: 10rem;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(prefecture, index) in prefectures.data" :key="index">
                            <td>{{ prefecture.id }}</td>
                            <td class="d-sm-table-cell fs-sm">{{ prefecture.title }}</td>

                            <td class="text-center fs-sm">
                                <button
                                    data-bs-toggle="modal"
                                    @click="update(prefecture)"
                                    class="btn btn-sm btn-alt-primary me-2"
                                    data-bs-target="#CreateOrUpdatePrefecture"
                                >
                                    <i class="fa fa-fw fa-eye text-primary"></i>
                                </button>
                                <button
                                    @click="trash(prefecture)"
                                    data-bs-toggle="modal"
                                    data-bs-target="#TrashPrefecture"
                                    class="btn btn-sm btn-alt-danger"
                                >
                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr v-if="prefectures.data.length === 0">
                            <td class="text-center" colspan="6">
                                <Alert theme="warning" class="mb-0">No prefectures found</Alert>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <Pagination :paginator="prefectures" />
        </template>
    </PageContent>

    <CreateOrUpdatePrefecture
        @close="resetModal"
        :prefecture="updatePrefecture"
        identifier="CreateOrUpdatePrefecture"
    />

    <TrashPrefecture
        @close="resetModal"
        :prefecture="trashPrefecture"
        identifier="TrashPrefecture"
    />
</template>
<script setup>
import { ref } from 'vue'
import { Laravel } from '@/Helpers'
import TrashPrefecture from './Components/TrashPrefecture.vue'
import CreateOrUpdatePrefecture from './Components/CreateOrUpdatePrefecture.vue'

defineProps({ prefectures: Object })

const breadcrumb = ref([
    { label: "Administration", link: null },
    { label: "Miscellaneous", link: null },
    { label: "Prefectures", link: Laravel.route('superuser.prefectures.index') },
    { label: "List" }
])

const trashPrefecture = ref({})

const updatePrefecture = ref({ title: "", status: "1" })

function trash(trash) {
    trashPrefecture.value = trash;
}

function update(prefecture) {
    updatePrefecture.value = prefecture;
}

function resetModal() {
    trashPrefecture.value = {};
    updatePrefecture.value = { title: "", status: "1" };
}

</script>
