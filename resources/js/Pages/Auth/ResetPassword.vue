<template>
    <form @submit.prevent="submit">
        <div>
            <Label for="email" value="Email" />
            <Input
                id="email"
                type="email"
                class="mt-1 block w-full bg-gray-200 text-gray-500"
                v-model="form.email"
                readonly
                required
                autofocus
            />
            <div
                v-if="form.errors.password"
                class="invalid-feedback animated fadeIn"
            >{{ form.errors.password }}</div>
        </div>

        <div class="mt-4">
            <Label for="password" value="Password" />
            <Input
                id="password"
                type="password"
                class="mt-1 block w-full"
                v-model="form.password"
                required
                autocomplete="new-password"
            />
            <div
                v-if="form.errors.password"
                class="invalid-feedback animated fadeIn"
            >{{ form.errors.password }}</div>
        </div>

        <div class="mt-4">
            <Label for="password_confirmation" value="Confirm Password" />
            <Input
                id="password_confirmation"
                type="password"
                class="mt-1 block w-full"
                v-model="form.password_confirmation"
                required
                autocomplete="new-password"
            />
            <div
                v-if="form.errors.password"
                class="invalid-feedback animated fadeIn"
            >{{ form.errors.password }}</div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button
                class="tw-btn tw-btn-secondary"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >Reset Password</button>
        </div>
    </form>
</template>

<script>

export default {

    props: {
        email: String,
        token: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                token: this.token,
                email: this.email,
                password: '',
                password_confirmation: '',
            })
        }
    },

    methods: {
        submit() {
            this.form.post('/reset-password', {
                onFinish: () => this.form.reset('password', 'password_confirmation'),
            })
        }
    }
}
</script>
