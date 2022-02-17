<template>
    <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
        <div class="w-100">
            <div class="text-center mb-5">
                <p class="mb-3">
                    <img src="/images/logo.svg" style="height: 30px;" />
                </p>
                <h1 class="fw-bold mb-2">Verify Email Address</h1>
                <p
                    class="fw-medium text-muted"
                >Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
            </div>

            <div class="row g-0 justify-content-center">
                <div class="col-sm-8 col-xl-4">
                    <form method="POST" @submit.prevent="submit">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="btn btn-lg btn-alt-primary"
                            >
                                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Resend Verification Email
                            </button>

                            <InertiaLink :href="'/logout'" method="post" type="button">Log Out</InertiaLink>
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
        status: String
    },

    data() {
        return {
            form: this.$inertia.form()
        }
    },

    methods: {
        submit() {
            this.form.post('/email/verification-notification')
        },
    },

    computed: {
        verificationLinkSent() {
            return this.status === 'verification-link-sent';
        }
    }
}
</script>
