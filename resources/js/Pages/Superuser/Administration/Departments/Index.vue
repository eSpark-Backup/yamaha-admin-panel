<template>
    <PageHeader :breadcrumb="breadcrumb" title="Departments">
        <template #actions>
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#CreateOrUpdateDepartment"
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
            v-if="$page.props.flash.department_created"
        >Department successfully created.</Alert>
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.department_updated"
        >Department successfully updated.</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.department_deleted"
        >Department successfully deleted.</Alert>
    </div>

    <PageContent>
        <template #header>All Departments</template>

        <template #content>
            <SearchForm />

            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th class="d-md-table-cell">Title</th>
                            <th class="text-center">Status</th>
                            <th class="d-md-table-cell">Last Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(department, index) in departments.data" :key="index">
                            <td>{{ department.id }}</td>
                            <td class="text-center">
                                <img
                                    class="img-avatar img-avatar48 overflow-hidden"
                                    :src="department.user.profile_photo_url"
                                    :alt="department.user.name"
                                />
                            </td>
                            <td class="d-sm-table-cell fs-sm">{{ department.title }}</td>
                            <td class="text-center fs-sm">
                                <span v-if="department.status == 0" class="badge bg-danger">Inactive</span>
                                <span v-if="department.status == 1" class="badge bg-success">Active</span>
                            </td>
                            <td
                                class="d-sm-table-cell fs-sm uppercase"
                            >{{ Moment(department.updated_at).format('LLL') }}</td>

                            <td class="text-center fs-sm">
                                <button
                                    data-bs-toggle="modal"
                                    @click="update(department)"
                                    class="btn btn-sm btn-alt-primary me-2"
                                    data-bs-target="#CreateOrUpdateDepartment"
                                >
                                    <i class="fa fa-fw fa-eye text-primary"></i>
                                </button>
                                <button
                                    @click="trash(department)"
                                    data-bs-toggle="modal"
                                    data-bs-target="#TrashDepartmentModal"
                                    class="btn btn-sm btn-alt-danger"
                                >
                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <tr v-if="departments.data.length === 0">
                            <td class="text-center" colspan="6">
                                <Alert theme="warning" class="mb-0">No departments found</Alert>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <Pagination :paginator="departments" />
        </template>
    </PageContent>

    <CreateOrUpdateDepartmentModal
        @close="resetModal"
        :department="updateDepartment"
        identifier="CreateOrUpdateDepartment"
    />

    <TrashDepartmentModal
        @close="resetModal"
        :department="trashDepartment"
        identifier="TrashDepartmentModal"
    />
</template>
<script setup>
import { ref } from 'vue'
import Moment from 'moment'
import { Laravel } from '@/Helpers'
import TrashDepartmentModal from './Components/TrashDepartmentModal.vue'
import CreateOrUpdateDepartmentModal from './Components/CreateOrUpdateDepartmentModal.vue'

defineProps({ departments: Object })

const breadcrumb = ref([
    { label: "Administration", link: null },
    { label: "Miscellaneous", link: null },
    { label: "Departments", link: Laravel.route('superuser.departments.index') },
    { label: "List" }
])

const trashDepartment = ref({})

const updateDepartment = ref({ title: "", status: "1" })

function trash(trash) {
    trashDepartment.value = trash;
}

function update(department) {
    updateDepartment.value = department;
}

function resetModal() {
    trashDepartment.value = {};
    updateDepartment.value = { title: "", status: "1" };
}

</script>
