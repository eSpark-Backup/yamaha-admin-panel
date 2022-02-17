<template>
    <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
        <div class="w-100">
            <div class="text-center mb-5">
                <p class="mb-3">
                    <img src="/images/logo.svg" style="height: 30px;" />
                </p>
                <h1 class="fw-bold mb-2">Access Secured</h1>
                <p
                    class="fw-medium text-muted mb-5"
                >This is a secure area of the application. Please confirm your password before continuing.</p>
                <img
                    class="img-avatar img-avatar96"
                    :src="$page.props.user.profile_photo_url"
                    :alt="$page.props.user.name"
                />
                <p class="fw-semibold text-center my-2">{{ $page.props.user.email }}</p>
            </div>

            <div class="row g-0 justify-content-center">
                <div class="col-sm-8 col-xl-4">
                    <form
                        class="js-validation-lock"
                        @submit.prevent="submit"
                        method="POST"
                        novalidate="novalidate"
                    >
                        <div class="mb-4">
                            <input
                                type="password"
                                v-model="form.password"
                                placeholder="Password.."
                                :class="form.errors.password && 'is-invalid'"
                                class="form-control form-control-lg form-control-alt py-3"
                            />
                            <div
                                v-if="form.errors.password"
                                class="invalid-feedback animated fadeIn"
                            >{{ form.errors.password }}</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-alt-success">
                                <i class="fa fa-fw fa-lock-open me-1 opacity-50"></i> Unlock
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AuthLayout from '@/Layouts/Variations/Auth.vue'
export default {

    layout: AuthLayout,

    data() {
        return {
            form: this.$inertia.form({
                password: '',
            })
        }
    },

    methods: {
        submit() {
            this.form.post('/user/confirm-password', {
                onFinish: () => this.form.reset(),
            })
        }
    }
}
</script>
