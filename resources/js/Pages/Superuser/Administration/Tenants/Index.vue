<template>
    <PageHeader :breadcrumb="breadcrumb" title="Tenants">
        <template #actions>
            <InertiaLink class="btn btn-primary" :href="Laravel.route('superuser.tenants.create')">
                <i class="fa fa-fw fa-plus-circle me-1"></i> Create
            </InertiaLink>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.tenant_created"
        >Tenant successfully created.</Alert>

        <Alert
            class="mb-0"
            theme="danger"
            icon="fa-check-circle"
            v-if="$page.props.flash.tenant_deleted"
        >Tenant successfully deleted.</Alert>
    </div>

    <ContentBlock>
        <template #header>All Tenants</template>

        <template #content>
            <SearchForm />

            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center d-md-table-cell">Code</th>
                            <th class>Name</th>
                            <th class="text-center">Group</th>
                            <th class="text-center">Tenant</th>
                            <th class="text-center">Department</th>
                            <th class="text-center">Prefecture</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <TenantRow
                            :key="tenant.id"
                            :tenant="tenant"
                            @onTrash="deleteTenant"
                            v-for="tenant in tenants.data"
                        />
                        <tr v-if="tenants.data.length === 0">
                            <td class="d-sm-table-cell text-center fs-sm" colspan="8">
                                <Alert theme="warning" class="mb-0">Tenants not available.</Alert>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <Pagination :paginator="tenants" />
        </template>
    </ContentBlock>

    <TrashTenantModal identifier="AdminTrashTenantModal" :tenant="trashTenant" />
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import TenantRow from './Components/TenantRow.vue'
import TrashTenantModal from './Components/TrashTenantModal.vue'


const breadcrumb = ref([
    { label: "Administration", link: null },
    { label: "Tenants", link: Laravel.route('superuser.tenants.index') },
    { label: "List" },
])

defineProps({ tenants: Object })

const trashTenant = ref({})

function deleteTenant(tenant) {
    trashTenant.value = tenant;
}
</script>
