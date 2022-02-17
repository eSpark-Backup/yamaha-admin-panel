<template>
   <PageHeader :breadcrumb="breadcrumb" title="New User">
      <template #actions>
         <InertiaLink class="btn btn-primary" :href="Laravel.route('superuser.users.index')">
            <i class="fa fa-fw fa-list me-1"></i> View All
         </InertiaLink>
      </template>
   </PageHeader>

   <PageContent>
      <template #header>
         <h3 class="block-title">All Users</h3>
      </template>

      <template #content>
         <div class="col-lg-12 space-y-2">
            <form @submit.prevent="onFormSubmit">
               <div class="row g-4">
                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">Role</label>
                     <select
                        v-model="form.role_id"
                        :class="['form-select', form.errors.address && 'is-invalid']"
                     >
                        <option value>Select Role</option>
                        <option
                           :key="index"
                           :value="role.id"
                           v-for="(role, index) in roles"
                        >{{ role.title }}</option>
                     </select>
                     <div
                        v-if="form.errors.role_id"
                        class="invalid-feedback"
                     >{{ form.errors.role_id }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">Tenant</label>
                     <select
                        v-model="form.tenant_id"
                        :class="['form-select', form.errors.tenant_id && 'is-invalid']"
                     >
                        <option value>Select Tenant</option>
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
                     <label class="form-label" for="example-select">Language setting</label>
                     <select
                        :class="['form-select', form.errors.language && 'is-invalid']"
                        v-model="form.language"
                     >
                        <option value>Select Language</option>
                        <option value="english">English</option>
                        <option value="japanese">Japanese</option>
                     </select>
                     <div
                        v-if="form.errors.language"
                        class="invalid-feedback"
                     >{{ form.errors.language }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">
                        Full Name
                        <span class="text-danger">*</span>
                     </label>
                     <input
                        type="text"
                        :class="['form-control', form.errors.name && 'is-invalid']"
                        v-model="form.name"
                     />
                     <div v-if="form.errors.name" class="invalid-feedback">{{ form.errors.name }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label">Sex</label>
                     <div class="space-x-2">
                        <div class="form-check form-check-inline">
                           <input
                              class="form-check-input"
                              type="radio"
                              id="male"
                              name="gender"
                              value="male"
                              v-model="form.gender"
                           />
                           <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input
                              class="form-check-input"
                              type="radio"
                              id="female"
                              name="gender"
                              value="female"
                              v-model="form.gender"
                           />
                           <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input
                              class="form-check-input"
                              type="radio"
                              id="do_not_select"
                              name="gender"
                              value="other"
                              v-model="form.gender"
                           />
                           <label class="form-check-label" for="do_not_select">Do not select</label>
                        </div>
                     </div>
                     <div
                        v-if="form.errors.gender"
                        class="invalid-feedback"
                     >{{ form.errors.gender }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-ltf-date">Birthday</label>
                     <input
                        type="date"
                        :class="['form-control', form.errors.date_of_birth && 'is-invalid']"
                        v-model="form.date_of_birth"
                     />
                     <div
                        v-if="form.errors.date_of_birth"
                        class="invalid-feedback"
                     >{{ form.errors.date_of_birth }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-email-input">
                        Email Address
                        <span class="text-danger">*</span>
                     </label>
                     <input
                        type="email"
                        :class="['form-control', form.errors.email && 'is-invalid']"
                        v-model="form.email"
                     />
                     <div v-if="form.errors.email" class="invalid-feedback">{{ form.errors.email }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">Telephone Number</label>
                     <input
                        type="tel"
                        v-model="form.phone"
                        :class="['form-control', form.errors.phone && 'is-invalid']"
                     />
                     <div v-if="form.errors.phone" class="invalid-feedback">{{ form.errors.phone }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">Fax Number</label>
                     <input
                        type="text"
                        :class="['form-control', form.errors.fax && 'is-invalid']"
                        v-model="form.fax"
                     />
                     <div v-if="form.errors.fax" class="invalid-feedback">{{ form.errors.fax }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">Post Code</label>
                     <input
                        type="text"
                        :class="['form-control', form.errors.zip && 'is-invalid']"
                        v-model="form.zip"
                     />
                     <div v-if="form.errors.zip" class="invalid-feedback">{{ form.errors.zip }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">Address</label>
                     <input
                        type="text"
                        v-model="form.address"
                        :class="['form-control', form.errors.address && 'is-invalid']"
                     />
                     <div
                        v-if="form.errors.address"
                        class="invalid-feedback"
                     >{{ form.errors.address }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-text-input">City</label>
                     <input
                        type="text"
                        v-model="form.city"
                        :class="['form-control', form.errors.city && 'is-invalid']"
                     />
                     <div v-if="form.errors.city" class="invalid-feedback">{{ form.errors.city }}</div>
                  </div>

                  <div class="col-md-6">
                     <label class="form-label" for="example-select">Prefectures</label>
                     <select
                        id="example-select"
                        v-model="form.prefecture_id"
                        :class="['form-select', form.errors.prefecture_id && 'is-invalid']"
                     >
                        <option value>Select Prefecture</option>
                        <option
                           :key="index"
                           :value="prefecture.id"
                           v-for="(prefecture, index) in prefectures"
                        >{{ prefecture.title }}</option>
                     </select>
                     <div
                        v-if="form.errors.prefecture_id"
                        class="invalid-feedback"
                     >{{ form.errors.prefecture_id }}</div>
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
                        {{ form.processing ? 'Saving...' : 'Save User' }}
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </template>
   </PageContent>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
import { useForm } from '@inertiajs/inertia-vue3';


defineProps({ roles: Array, prefectures: Array, tenants: Array })

const breadcrumb = ref([
   { label: "Administration", link: null },
   { label: "Users", link: Laravel.route('superuser.users.index') },
   { label: "Create" },
])


const form = useForm({
   role_id: "2",
   tenant_id: "",
   prefecture_id: "",
   name: "",
   email: "",
   gender: "other",
   date_of_birth: "",
   phone: "",
   fax: "",
   address: "",
   city: "",
   zip: '',
   language: "english"
})


function onFormSubmit() {
   form.post(Laravel.route('superuser.users.store'));
}


</script>
