<template>
    <PageHeader :breadcrumb="breadcrumb" title="Roles"></PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.role_updated"
        >Role successfully updated.</Alert>
    </div>

    <PageContent>
        <template #header>All Roles</template>

        <template #content>
            <SearchForm />

            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th style="width: 5rem;">ID</th>
                            <th class="d-md-table-cell">Title</th>
                            <th class="d-md-table-cell">Slug</th>
                            <th class="d-md-table-cell">Status</th>
                            <th class="text-center" style="width: 10rem;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(role, index) in roles.data" :key="index">
                            <td>{{ role.id }}</td>
                            <td class="d-sm-table-cell fs-sm">{{ role.title }}</td>
                            <td class="d-sm-table-cell fs-sm">
                                <span class="badge bg-secondary">{{ role.slug }}</span>
                            </td>
                            <td class="d-sm-table-cell fs-sm">
                                <span v-if="role.status == 0" class="badge bg-danger">Inactive</span>
                                <span v-if="role.status == 1" class="badge bg-success">Active</span>
                            </td>

                            <td class="text-center fs-sm">
                                <button
                                    data-bs-toggle="modal"
                                    @click="update(role)"
                                    class="btn btn-sm btn-alt-primary me-2"
                                    data-bs-target="#CreateOrUpdateRole"
                                >
                                    <i class="fa fa-fw fa-eye text-primary"></i>
                                </button>
                            </td>
                        </tr>
                        <tr v-if="roles.data.length === 0">
                            <td class="text-center" colspan="6">
                                <Alert theme="warning" class="mb-0">No roles found</Alert>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <Pagination :paginator="roles" />
        </template>
    </PageContent>

    <CreateOrUpdateRole @close="resetModal" :role="updateRole" identifier="CreateOrUpdateRole" />
</template>
<script setup>
import { ref } from 'vue'
import { Laravel } from '@/Helpers'
import CreateOrUpdateRole from './Components/CreateOrUpdateRole.vue'

defineProps({ roles: Object })

const breadcrumb = ref([
    { label: "Administration", link: null },
    { label: "Miscellaneous", link: null },
    { label: "Roles", link: Laravel.route('superuser.roles.index') },
    { label: "List" }
])


const updateRole = ref({ title: "", slug: "", status: "1" })


function update(role) {
    updateRole.value = role;
}

function resetModal() {
    updateRole.value = { title: "", slug: "", status: "1" };
}

</script>
