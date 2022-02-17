<template>
    <tr>
        <td class="d-sm-table-cell text-center fs-sm">{{ tenant.id }}</td>
        <td class="d-sm-table-cell text-center fs-sm">{{ tenant.code }}</td>
        <td class="d-sm-table-cell fs-sm">{{ tenant.name }}</td>
        <td class="d-sm-table-cell text-center fs-sm">{{ tenant.group?.title || '-' }}</td>
        <td class="d-sm-table-cell text-center fs-sm">{{ tenant.tenant?.name || '-' }}</td>
        <td class="d-sm-table-cell text-center fs-sm">{{ tenant.department?.name || '-' }}</td>
        <td class="d-sm-table-cell text-center fs-sm">{{ tenant.prefecture?.title || '-' }}</td>
        <td class="text-center fs-sm">
            <InertiaLink
                :key="tenant.id"
                class="btn btn-sm btn-alt-primary me-2"
                :href="Laravel.route('superuser.tenants.edit', { tenant: tenant.id })"
            >
                <i class="fa fa-fw fa-eye text-primary"></i>
            </InertiaLink>
            <button
                type="button"
                class="btn btn-sm btn-alt-danger"
                data-bs-toggle="modal"
                data-bs-target="#AdminTrashTenantModal"
                @click="$emit('onTrash', tenant)"
            >
                <i class="fa fa-fw fa-trash text-danger"></i>
            </button>
        </td>
    </tr>
</template>
<script setup>
import { Laravel } from '@/Helpers'

defineProps({ tenant: Object })

defineEmits(['onTrash'])
</script>
