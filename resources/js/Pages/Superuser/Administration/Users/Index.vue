<template>
  <PageHeader :breadcrumb="breadcrumb" title="Users">
    <template #actions>
      <InertiaLink class="btn btn-primary" :href="Laravel.route('superuser.users.create')">
        <i class="fa fa-fw fa-plus-circle me-1"></i> Create
      </InertiaLink>
    </template>
  </PageHeader>

  <div class="content" v-if="$page.props.flash">
    <Alert
      class="mb-0"
      theme="success"
      icon="fa-check-circle"
      v-if="$page.props.flash.user_created"
    >User successfully created.</Alert>

    <Alert
      class="mb-0"
      theme="danger"
      icon="fa-check-circle"
      v-if="$page.props.flash.user_deleted"
    >User successfully deleted.</Alert>
  </div>

  <ContentBlock>
    <template #header>
      <h3 class="block-title">All Users</h3>
    </template>

    <template #content>
      <SearchForm />

      <div class="table-responsive">
        <table class="table table-borderless table-striped table-vcenter">
          <thead>
            <tr>
              <th class="text-center">
                <i class="far fa-user"></i>
              </th>
              <th>Name</th>
              <th class="d-md-table-cell">Email</th>
              <th class="d-md-table-cell">Email Verified At</th>
              <th class="d-md-table-cell">Role</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(user, index) in users.data" :key="index">
              <td class="text-center">
                <img class="img-avatar img-avatar48" :src="user.profile_photo_url" :alt="user.name" />
              </td>
              <td class="fw-semibold fs-sm">
                <InertiaLink href>{{ user.name }}</InertiaLink>
              </td>
              <td class="d-sm-table-cell fs-sm">{{ user.email }}</td>
              <td
                class="d-sm-table-cell fs-sm"
              >{{ user.email_verified_at ? Moment(user.email_verified_at).format('LLL') : '' }}</td>
              <td class="d-sm-table-cell fs-sm uppercase">{{ user.role?.title }}</td>

              <td class="text-center fs-sm">
                <InertiaLink
                  class="btn btn-sm btn-alt-primary me-2"
                  :href="Laravel.route('superuser.users.edit', { user: user.id })"
                >
                  <i class="fa fa-fw fa-eye text-primary"></i>
                </InertiaLink>
                <button
                  data-bs-toggle="modal"
                  @click="deleteUser(user)"
                  data-bs-target="#AdminTrashUserModal"
                  class="btn btn-sm btn-alt-danger"
                >
                  <i class="fa fa-fw fa-trash text-danger"></i>
                </button>
              </td>
            </tr>
            <tr v-if="users.data.length === 0">
              <td class="text-center" colspan="6">
                <Alert theme="warning" class="mb-0">No users found</Alert>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <Pagination :paginator="users" />
    </template>
  </ContentBlock>

  <TrashUserModal identifier="AdminTrashUserModal" :user="trashUser" />
</template>

<script setup>
import { ref } from 'vue';
import Moment from 'moment'
import { Laravel } from '@/Helpers'
import TrashUserModal from './Components/TrashUserModal.vue'

const breadcrumb = ref([
  { label: "Administration", link: null },
  { label: "Users", link: Laravel.route('superuser.users.index') },
  { label: "List" },
])

defineProps({ users: Object })


const trashUser = ref({})


function deleteUser(user) {
  trashUser.value = user;
}

</script>
