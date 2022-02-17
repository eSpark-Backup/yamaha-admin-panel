<template>
    <PageHeader :breadcrumb="breadcrumb" title="Groups">
        <template #actions>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#CreateOrUpdateGroupModal"
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
            v-if="$page.props.flash.group_created"
        >Group successfully created.</Alert>
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.group_updated"
        >Group successfully updated.</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.group_deleted"
        >Group successfully deleted.</Alert>
    </div>

    <PageContent>
        <template #header>All Groups</template>

        <template #content>
            <SearchForm />

            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th class="d-md-table-cell">Title</th>
                            <th class="text-center">Status</th>
                            <th class="d-md-table-cell">Last Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(group, index) in groups.data" :key="index">
                            <td>{{ group.id }}</td>
                            <td class="d-sm-table-cell fs-sm">{{ group.title }}</td>
                            <td class="text-center fs-sm">
                                <span v-if="group.status == 0" class="badge bg-danger">Inactive</span>
                                <span v-if="group.status == 1" class="badge bg-success">Active</span>
                            </td>
                            <td
                                class="d-sm-table-cell fs-sm uppercase"
                            >{{ Moment(group.updated_at).format('LLL') }}</td>

                            <td class="text-center fs-sm">
                                <button
                                    data-bs-toggle="modal"
                                    @click="update(group)"
                                    class="btn btn-sm btn-alt-primary me-2"
                                    data-bs-target="#CreateOrUpdateGroupModal"
                                >
                                    <i class="fa fa-fw fa-eye text-primary"></i>
                                </button>
                                <button
                                    @click="trash(group)"
                                    data-bs-toggle="modal"
                                    data-bs-target="#TrashGroupModal"
                                    class="btn btn-sm btn-alt-danger"
                                >
                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr v-if="groups.data.length === 0">
                            <td class="text-center" colspan="6">
                                <Alert theme="warning" class="mb-0">No groups found</Alert>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <Pagination :paginator="groups" />
        </template>
    </PageContent>

    <CreateOrUpdateGroup
        @close="resetModal"
        :group="updateGroup"
        identifier="CreateOrUpdateGroupModal"
    />

    <TrashGroup @close="resetModal" :group="trashGroup" identifier="TrashGroupModal" />
</template>
<script setup>
import { ref } from 'vue'
import Moment from 'moment'
import { Laravel } from '@/Helpers'
import TrashGroup from './Components/TrashGroup.vue'
import CreateOrUpdateGroup from './Components/CreateOrUpdateGroup.vue'

defineProps({ groups: Object })

const breadcrumb = ref([
    { label: "Administration", link: null },
    { label: "Miscellaneous", link: null },
    { label: "Groups", link: Laravel.route('superuser.groups.index') },
    { label: "List" }
])

const trashGroup = ref({})

const updateGroup = ref({ title: "", status: "1" })

function trash(trash) {
    trashGroup.value = trash;
}

function update(group) {
    updateGroup.value = group;
}

function resetModal() {
    trashGroup.value = {};
    updateGroup.value = { title: "", status: "1" };
}

</script>
