<template>
    <span>
        <span @click="startConfirmingPassword">
            <slot />
        </span>

        <Modal identifier="ConfirmsPassword">
            <div class="modal-header">
                <h5 class="modal-title">{{ __(title) }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                {{ __(content) }}
                <div class="mt-4">
                    <input
                        type="password"
                        :class="['form-control', form.error && 'is-invalid']"
                        placeholder="Password"
                        ref="password"
                        v-model="form.password"
                        @keyup.enter="confirmPassword"
                    />
                    <InputError :message="form.error" class="mt-2" />
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button
                    type="button"
                    class="btn btn-primary"
                    @click="confirmPassword"
                    :disabled="form.processing"
                >{{ __(button) }}</button>
            </div>
        </Modal>

        <DialogModal v-if="false" :show="confirmingPassword" @close="closeModal">
            <template #title>{{ __(title) }}</template>

            <template #content>
                {{ __(content) }}
                <div class="mt-4">
                    <Input
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="Password"
                        ref="password"
                        v-model="form.password"
                        @keyup.enter="confirmPassword"
                    />

                    <InputError :message="form.error" class="mt-2" />
                </div>
            </template>

            <template #footer>
                <button class="tw-btn tw-btn-default" @click="closeModal">{{ __("Cancel") }}</button>

                <button
                    class="ml-2 tw-btn tw-btn-secondary"
                    @click="confirmPassword"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >{{ __(button) }}</button>
            </template>
        </DialogModal>
    </span>
</template>
<script setup>
import { nextTick, reactive, ref } from "vue";


defineProps({
    title: {
        default: "Confirm Password",
    },
    content: {
        default: "For your security, please confirm your password to continue.",
    },
    button: {
        default: "Confirm",
    },
})

const password = ref()

const confirmingPassword = ref(true)


const ConfirmsPasswordModal = ref(null)

const emit = defineEmits(['confirmed'])

const form = reactive({ processing: false, password: "", error: "" })

function startConfirmingPassword() {

    ConfirmsPasswordModal.value = new Bootstrap.Modal(document.getElementById('ConfirmsPassword'));

    axios.get("/user/confirmed-password-status").then(({ data }) => {
        if (data.confirmed) {

            emit("confirmed");

        } else {

            ConfirmsPasswordModal.value.show();

            setTimeout(() => password.value.focus(), 250);
        }
    });
}


function confirmPassword() {
    form.processing = true;
    axios.post("/user/confirm-password", { password: form.password }).then(() => {

        form.error = ""

        form.processing = false;

        closeModal();

        nextTick(() => emit("confirmed"))

    }).catch(({ response }) => {
        form.processing = false;

        form.error = response.data.errors.password[0];

        password.value.focus();
    });
}

function closeModal() {
    form.password = ""
    ConfirmsPasswordModal.value.hide()
}
</script>
