<template>
    <div class="p-3 w-100 d-lg-none text-center" v-if="false">
        <InertiaLink class="link-fx fw-semibold fs-3 text-dark" href="/">
            <img src="/images/logo.svg" />
        </InertiaLink>
    </div>
    <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
        <div class="w-100">
            <div class="text-center mb-5">
                <p class="mb-3">
                    <img src="/images/logo.svg" style="height: 30px;" />
                </p>
            </div>

            <div class="row g-0 justify-content-center">
                <div class="col-sm-8 col-xl-4">
                    <form class="js-validation-signin" method="POST" @submit.prevent="submit">
                        <div class="mb-4">
                            <input
                                required
                                autofocus
                                type="text"
                                v-model="form.email"
                                placeholder="メールアドレス"
                                :class="form.errors.email && 'is-invalid'"
                                class="form-control form-control-lg form-control-alt py-3"
                            />
                            <div
                                v-if="form.errors.email"
                                class="invalid-feedback animated fadeIn"
                            >{{ form.errors.email }}</div>
                        </div>
                        <div class="mb-4">
                            <input
                                type="password"
                                v-model="form.password"
                                placeholder="パスワード"
                                :class="form.errors.password && 'is-invalid'"
                                class="form-control form-control-lg form-control-alt py-3"
                            />
                            <div
                                v-if="form.errors.password"
                                class="invalid-feedback animated fadeIn"
                            >{{ form.errors.password }}</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <InertiaLink
                                    v-if="canResetPassword"
                                    :href="'/forgot-password'"
                                    class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1"
                                >パスワード再発行</InertiaLink>
                            </div>
                            <div>
                                <button
                                    type="submit"
                                    :disabled="form.processing"
                                    class="btn btn-lg btn-alt-primary"
                                >
                                    <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i>
                                    ログイン
                                </button>
                            </div>
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


    props: {
        canResetPassword: Boolean,
        status: String
    },

    data() {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: false
            })
        }
    },

    methods: {
        submit() {
            this.form
                .transform(data => ({
                    ...data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post('/login', {
                    onFinish: () => this.form.reset('password'),
                })
        }
    }
}
</script>
