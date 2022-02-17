<template>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ __("Change Password") }}</h3>
        </div>
        <div class="block-content">
            <form method="POST" @submit.prevent="updatePassword">
                <div class="row push">
                    <div class="col-lg-4">
                        <p
                            class="fs-sm text-muted"
                        >{{ __("Changing your sign in password is an easy way to keep your account secure.") }}</p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <label
                                class="form-label"
                                for="one-profile-edit-password"
                            >{{ __("Current Password") }}</label>
                            <input
                                type="password"
                                class="form-control"
                                :class="form.errors.current_password && 'is-invalid'"
                                ref="current_password"
                                id="one-profile-edit-password"
                                name="one-profile-edit-password"
                                v-model="form.current_password"
                                autocomplete="current-password"
                            />
                            <div
                                class="invalid-feedback animated fadeIn"
                                v-if="form.errors.current_password"
                            >{{ form.errors.current_password }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <label
                                    class="form-label"
                                    for="one-profile-edit-password-new"
                                >{{ __("New Password") }}</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    :class="form.errors.password && 'is-invalid'"
                                    id="one-profile-edit-password-new"
                                    name="one-profile-edit-password-new"
                                    v-model="form.password"
                                    ref="password"
                                    autocomplete="new-password"
                                />
                                <div
                                    class="invalid-feedback animated fadeIn"
                                    v-if="form.errors.password"
                                >{{ form.errors.password }}</div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <label
                                    class="form-label"
                                    for="one-profile-edit-password-new-confirm"
                                >{{ __("Confirm New Password") }}</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="one-profile-edit-password-new-confirm"
                                    name="one-profile-edit-password-new-confirm"
                                    v-model="form.password_confirmation"
                                    autocomplete="new-password"
                                />
                            </div>
                        </div>
                        <div class="mb-4">
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="btn btn-alt-primary"
                            >{{ __(form.processing ? 'Updating...' : 'Update') }}</button>
                        </div>

                        <div
                            v-if="success"
                            class="alert alert-success d-flex align-items-center alert-dismissible"
                            role="alert"
                        >
                            <div class="flex-shrink-0">
                                <i class="fa fa-fw fa-check-circle"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <p class="mb-0">{{ __("Password saved successfully!") }}</p>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3';


const password = ref()
const success = ref(false)
const current_password = ref()


const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});


function updatePassword() {

    success.value = false;

    form.put('/user/password', {
        errorBag: 'updatePassword',
        preserveScroll: true,
        onSuccess: () => { form.reset(); success.value = true; },
        onError: () => {

            success.value = false;

            if (form.errors.password) {
                form.reset('password', 'password_confirmation')
                password.value.focus()
            }

            if (form.errors.current_password) {
                form.reset('current_password')
                current_password.value.focus()
            }
        }
    })
}
</script>
