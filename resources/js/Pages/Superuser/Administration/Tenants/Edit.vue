<template>
    <PageHeader :title="tenant.name" :breadcrumb="breadcrumb">
        <template #actions>
            <InertiaLink
                class="btn btn-primary me-1"
                :href="Laravel.route('superuser.tenants.index')"
            >
                <i class="fa fa-fw fa-list me-1"></i> View All
            </InertiaLink>
            <InertiaLink class="btn btn-info" :href="Laravel.route('superuser.tenants.create')">
                <i class="fa fa-fw fa-plus-circle me-1"></i> Create New
            </InertiaLink>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.tenant_updated"
        >Tenant successfully updated.</Alert>
    </div>

    <PageContent>
        <template #header>Tenant Registration Form</template>

        <template #content>
            <form method="post" @submit.prevent="onSubmit">
                <div class="row">
                    <div class="col-lg-12 space-y-2">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-name">
                                    Name
                                    <span class="text-danger">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="tenant-name"
                                    v-model="form.name"
                                    :class="['form-control', form.errors.name && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.name"
                                    class="invalid-feedback"
                                >{{ form.errors.name }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-code">
                                    Code
                                    <span class="text-danger">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="tenant-code"
                                    v-model="form.code"
                                    :class="['form-control', form.errors.code && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.code"
                                    class="invalid-feedback"
                                >{{ form.errors.code }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-address">Address</label>
                                <input
                                    type="text"
                                    id="tenant-address"
                                    v-model="form.address"
                                    :class="['form-control', form.errors.address && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.address"
                                    class="invalid-feedback"
                                >{{ form.errors.address }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-city">City</label>
                                <input
                                    type="text"
                                    id="tenant-city"
                                    v-model="form.city"
                                    :class="['form-control', form.errors.city && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.city"
                                    class="invalid-feedback"
                                >{{ form.errors.city }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-prefecture">Prefecture</label>
                                <select
                                    :class="['form-select', form.errors.prefecture_id && 'is-invalid']"
                                    id="tenant-prefecture"
                                    v-model="form.prefecture_id"
                                >
                                    <option
                                        :value="form.prefecture_id == null ? null : ''"
                                    >Select Prefecture</option>
                                    <option
                                        :value="id"
                                        :key="index"
                                        v-for="({ id, title }, index) in prefectures"
                                    >{{ title }}</option>
                                </select>
                                <div
                                    v-if="form.errors.prefecture_id"
                                    class="invalid-feedback"
                                >{{ form.errors.prefecture_id }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-zip">Zip</label>
                                <input
                                    type="text"
                                    id="tenant-zip"
                                    v-model="form.zip"
                                    :class="['form-control', form.errors.zip && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.zip"
                                    class="invalid-feedback"
                                >{{ form.errors.zip }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-phone">Phone</label>
                                <input
                                    type="text"
                                    id="tenant-phone"
                                    v-model="form.phone"
                                    :class="['form-control', form.errors.phone && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.phone"
                                    class="invalid-feedback"
                                >{{ form.errors.phone }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-fax">Fax</label>
                                <input
                                    type="text"
                                    id="tenant-fax"
                                    v-model="form.fax"
                                    :class="['form-control', form.errors.fax && 'is-invalid']"
                                />
                                <div
                                    v-if="form.errors.fax"
                                    class="invalid-feedback"
                                >{{ form.errors.fax }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-group">Group</label>
                                <select
                                    :class="['form-select', form.errors.group_id && 'is-invalid']"
                                    id="tenant-group"
                                    v-model="form.group_id"
                                >
                                    <option :value="form.group_id == null ? null : ''">Select Group</option>
                                    <option
                                        :key="index"
                                        :value="group.id"
                                        v-for="(group, index) in groups"
                                    >{{ group.title }}</option>
                                </select>
                                <div
                                    v-if="form.errors.group_id"
                                    class="invalid-feedback"
                                >{{ form.errors.group_id }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-department">Department</label>
                                <select
                                    :class="['form-select', form.errors.department && 'is-invalid']"
                                    id="tenant-department"
                                    v-model="form.department_id"
                                >
                                    <option
                                        :value="form.department_id == null ? null : ''"
                                    >Select Department</option>
                                    <option
                                        :key="index"
                                        :value="department.id"
                                        v-for="(department, index) in departments"
                                    >{{ department.title }}</option>
                                </select>
                                <div
                                    v-if="form.errors.department_id"
                                    class="invalid-feedback"
                                >{{ form.errors.department_id }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-parent">Tenant</label>
                                <select
                                    :class="['form-select', form.errors.tenant_id && 'is-invalid']"
                                    id="tenant-parent"
                                    v-model="form.tenant_id"
                                >
                                    <option :value="form.tenant_id == null ? null : ''">Root</option>
                                    <option
                                        :key="index"
                                        :value="tenant.id"
                                        v-for="(tenant, index) in tenants"
                                    >{{ tenant.name }}</option>
                                </select>
                                <div
                                    v-if="form.errors.tenant_id"
                                    class="invalid-feedback"
                                >{{ form.errors.tenant_id }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-established">
                                    Established At
                                    <span class="text-danger">*</span>
                                </label>
                                <input
                                    type="datetime-local"
                                    :class="['form-control', form.errors.established_at && 'is-invalid']"
                                    id="tenant-established"
                                    v-model="form.established_at"
                                />
                                <div
                                    v-if="form.errors.established_at"
                                    class="invalid-feedback"
                                >{{ form.errors.established_at }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-description">Description</label>
                                <textarea
                                    rows="4"
                                    :class="['form-control', form.errors.description && 'is-invalid']"
                                    id="tenant-description"
                                    v-model="form.description"
                                ></textarea>
                                <div
                                    v-if="form.errors.description"
                                    class="invalid-feedback"
                                >{{ form.errors.description }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-business_hours">Business Hours</label>
                                <textarea
                                    rows="4"
                                    id="tenant-business_hours"
                                    v-model="form.business_hours"
                                    :class="['form-control', form.errors.business_hours && 'is-invalid']"
                                ></textarea>
                                <div
                                    v-if="form.errors.business_hours"
                                    class="invalid-feedback"
                                >{{ form.errors.business_hours }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-holidays">Regular Holidays</label>
                                <textarea
                                    rows="4"
                                    id="tenant-holidays"
                                    name="form.regular_holidays"
                                    :class="['form-control', form.errors.regular_holidays && 'is-invalid']"
                                ></textarea>
                                <div
                                    v-if="form.errors.regular_holidays"
                                    class="invalid-feedback"
                                >{{ form.errors.regular_holidays }}</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tenant-access">Access</label>
                                <textarea
                                    rows="4"
                                    id="tenant-access"
                                    v-model="form.access"
                                    :class="['form-control', form.errors.access && 'is-invalid']"
                                ></textarea>
                                <div
                                    v-if="form.errors.access"
                                    class="invalid-feedback"
                                >{{ form.errors.access }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12 text-end border-top py-3 bg-gray-lighter rounded-bottom">
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="btn btn-secondary text-uppercase"
                        >
                            <i class="fa fa-fw fa-save"></i>
                            {{ form.processing ? 'Saving...' : 'Save Tenant' }}
                        </button>
                    </div>
                </div>
            </form>
        </template>
    </PageContent>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({ tenant: Object, prefectures: Array, tenants: Array, departments: Array, groups: Array })

const breadcrumb = ref([
    { label: 'Administration', link: null },
    { label: 'Tenants', link: Laravel.route('superuser.tenants.index') },
    { label: 'Update', link: undefined },

])


const form = useForm({
    id: props.tenant.id,
    name: props.tenant.name,
    code: props.tenant.code,
    address: props.tenant.address,
    city: props.tenant.city,
    prefecture_id: props.tenant.prefecture_id,
    zip: props.tenant.zip,
    phone: props.tenant.phone,
    fax: props.tenant.fax,
    group_id: props.tenant.group_id,
    department_id: props.tenant.department_id,
    tenant_id: props.tenant.tenant_id,
    established_at: props.tenant.established_at,
    description: props.tenant.description,
    business_hours: props.tenant.business_hours,
    regular_holidays: props.tenant.regular_holidays,
    access: props.tenant.access
})


function onSubmit() {

    form.patch(Laravel.route('superuser.tenants.update', { tenant: props.tenant.id }))
}

</script>
