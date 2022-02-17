<template>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ __("Browser Sessions") }}</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-lg-4">
                    <p
                        class="fs-sm text-muted"
                    >{{ __("Manage and log out your active sessions on other browsers and devices.") }}</p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="push">
                        <p
                            class="fs-sm text-muted"
                        >{{ __("If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.") }}</p>

                        <!-- Other Browser Sessions -->
                        <div class="mt-3" v-if="sessions.length > 0">
                            <div
                                :key="index"
                                class="d-flex items-center mb-4"
                                v-for="(session, index) in sessions"
                            >
                                <div>
                                    <svg
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        v-if="session.agent.is_desktop"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="height: 3rem;width: 3rem;"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        />
                                    </svg>

                                    <svg
                                        v-else
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="height: 1.5rem;width: 1.5rem;"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                        />
                                    </svg>
                                </div>

                                <div class="ms-3">
                                    <div
                                        class="text-sm text-gray-600"
                                    >{{ session.agent.platform }} - {{ session.agent.browser }}</div>

                                    <div>
                                        <div class="text-xs text-gray-500">
                                            {{ session.ip_address }},
                                            <span
                                                v-html="`This Device`"
                                                v-if="session.is_current_device"
                                                class="text-green-500 font-semibold"
                                            />
                                            <span
                                                v-else
                                                v-html="`Last active ${session.last_active}`"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button
                                    class="btn btn-dark"
                                    data-bs-toggle="modal"
                                    data-bs-target="#LogoutOtherBrowserSessions"
                                >{{ __("Log Out Other Browser Sessions") }}</button>
                            </div>
                        </div>
                        <div class="mt-5" v-else>
                            <span class="font-semibold text-gray-700">{{ __("Processing...") }}</span>
                        </div>

                        <Modal identifier="LogoutOtherBrowserSessions">
                            <div class="modal-header">
                                <h5 class="modal-title">{{ __("Log Out Other Browser Sessions") }}</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>

                            <div class="modal-body">
                                <p>{{ __("Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.") }}</p>
                                <div class="mt-4">
                                    <input
                                        type="password"
                                        :class="['form-control', errors.password && 'is-invalid']"
                                        placeholder="Password"
                                        ref="password"
                                        v-model="form.password"
                                        @keyup.enter="confirmPassword"
                                    />
                                    <InputError :message="errors.password" class="mt-2" />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                    ref="closeModal"
                                >{{ __("Close") }}</button>
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    @click="logoutOtherBrowserSessions"
                                >{{ __("Log Out Other Browser Sessions") }}</button>
                            </div>
                        </Modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onBeforeMount, reactive } from "vue";


const errors = ref({});
const closeModal = ref()
const sessions = ref([]);
const password = ref(null);
const form = reactive({ password: "", error: "" });
const isOtherBrowserSessionsRemoved = ref(false);


onBeforeMount(syncSessions);

function syncSessions() {
    axios
        .get("/api/user/other-browser-sessions")
        .then(({ data }) => (sessions.value = data));
}

function logoutOtherBrowserSessions() {
    isOtherBrowserSessionsRemoved.value = false;
    axios
        .delete("/api/user/other-browser-sessions", {
            data: { password: form.password },
        })
        .then(({ data }) => {
            syncSessions();

            closeModal.value.click();

            isOtherBrowserSessionsRemoved.value = true;
        })
        .catch(({ response }) => {
            for (let i in response.data.errors) {
                errors.value[i] = response.data.errors[i][0];
            }
        });
}
</script>
