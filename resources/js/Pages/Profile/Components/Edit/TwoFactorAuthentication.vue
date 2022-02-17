<template>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Two Factor Authentication</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-lg-4">
                    <p
                        class="fs-sm text-muted"
                    >{{ __("Add additional security to your account using two factor authentication.") }}</p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="push">
                        <h3
                            class="text-lg font-medium text-gray-900"
                            v-if="twoFactorEnabled"
                        >{{ __("You have enabled two factor authentication.") }}</h3>
                        <h3
                            class="text-lg font-medium text-gray-900"
                            v-else
                        >{{ __("You have not enabled two factor authentication.") }}</h3>
                        <div class="mt-3 max-w-xl text-sm text-gray-600">
                            <p>{{ __("When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone's Google Authenticator application.") }}</p>
                        </div>
                        <div v-if="twoFactorEnabled">
                            <div v-if="qrCode">
                                <div class="mt-4 max-w-xl text-sm text-gray-600">
                                    <p
                                        class="font-semibold"
                                    >{{ __("Two factor authentication is now enabled. Scan the following QR code using your phone's authenticator application.") }}</p>
                                </div>
                                <div class="mt-4" v-html="qrCode"></div>
                            </div>
                            <div v-if="recoveryCodes.length > 0">
                                <div class="mt-4 max-w-xl text-sm text-gray-600">
                                    <p
                                        class="font-semibold"
                                    >{{ __("Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.") }}</p>
                                </div>
                                <div class="bg-gray-lighter mt-4 px-4 py-4 rounded-3">
                                    <div v-for="code in recoveryCodes" :key="code">{{ code }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div v-if="!twoFactorEnabled">
                                <ConfirmsPassword @confirmed="enableTwoFactorAuthentication">
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        :disabled="enabling"
                                    >{{ __("Enable") }}</button>
                                </ConfirmsPassword>
                            </div>
                            <div v-else>
                                <ConfirmsPassword @confirmed="regenerateRecoveryCodes">
                                    <button
                                        class="btn btn-primary me-3"
                                        v-if="recoveryCodes.length > 0"
                                    >{{ __("Regenerate Recovery Codes") }}</button>
                                </ConfirmsPassword>
                                <ConfirmsPassword @confirmed="showRecoveryCodes">
                                    <button
                                        class="btn btn-secondary me-3 mt-2"
                                        v-if="recoveryCodes.length === 0"
                                    >{{ __("Show Recovery Codes") }}</button>
                                </ConfirmsPassword>
                                <ConfirmsPassword @confirmed="disableTwoFactorAuthentication">
                                    <button
                                        class="btn btn-danger mt-2"
                                        :disabled="disabling"
                                    >{{ __("Disable") }}</button>
                                </ConfirmsPassword>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { computed, ref } from 'vue'
import ConfirmsPassword from './ConfirmsPassword.vue'
import { useForm, usePage } from '@inertiajs/inertia-vue3'

const qrCode = ref(null)
const enabling = ref(false)
const disabling = ref(false)
const recoveryCodes = ref([])

const twoFactorEnabled = computed(() => !enabling.value && usePage().props.value.user.two_factor_enabled)


function enableTwoFactorAuthentication() {
    enabling.value = true

    useForm({}).post('/user/two-factor-authentication', {
        preserveScroll: true,
        onSuccess: () => Promise.all([
            showQrCode(),
            showRecoveryCodes(),
        ]),
        onFinish: () => (enabling.value = false),
    })
}

function showQrCode() {
    return axios.get('/user/two-factor-qr-code')
        .then(({ data }) => {
            qrCode.value = data.svg
        })
}


function showRecoveryCodes() {
    return axios.get('/user/two-factor-recovery-codes')
        .then(({ data }) => {
            recoveryCodes.value = data
        })
}


function regenerateRecoveryCodes() {
    axios.post('/user/two-factor-recovery-codes')
        .then(showRecoveryCodes)
}


function disableTwoFactorAuthentication() {
    disabling.value = true
    useForm().delete('/user/two-factor-authentication', {
        preserveScroll: true,
        onSuccess: () => (disabling.value = false),
    })
}

</script>
