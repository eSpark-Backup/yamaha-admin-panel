<template>
	<div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
		<div class="w-100">
			<div class="text-center mb-2">
				<p class="mb-3">
					<img src="/images/logo.svg" style="height: 30px;" />
				</p>
				<h1 class="fw-bold mb-2">Two Factor Challenge</h1>
				<p class="fw-medium text-muted mb-2">
					<template v-if="!recovery">
						Please confirm access to your account by entering the authentication
						code provided by your authenticator application.
					</template>

					<template v-else>
						Please confirm access to your account by entering one of your emergency
						recovery codes.
					</template>
				</p>
			</div>

			<div class="row g-0 justify-content-center">
				<div class="col-sm-8 col-xl-4">
					<form @submit.prevent="submit">
						<div v-if="!recovery">
							<Label for="code" value="Code" />
							<Input
								ref="code"
								id="code"
								type="text"
								inputmode="numeric"
								class=" mt-1 block w-full form-control"
								v-model="form.code"
								autofocus
								autocomplete="one-time-code"
							/>
						</div>

						<div v-else>
							<Label for="recovery_code" value="Recovery Code" />
							<Input
								ref="recovery_code"
								id="recovery_code"
								type="text"
								class="mt-1 block w-full"
								v-model="form.recovery_code"
								autocomplete="one-time-code"
							/>
						</div>

						<div class="row twofactor-btn-row flex items-center justify-content-between mt-4">
							<div class="col-sm-12 ">
							<button
								type="button"
								class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer btn btn-outline-info mr-2"
								@click.prevent="toggleRecovery"
							>
								<template v-if="!recovery">Use a recovery code</template>

								<template v-else>Use an authentication code</template>
							</button>

							<button
								class="tw-btn tw-btn-secondary ml-4 btn btn-info"
								:class="{ 'opacity-25': form.processing }"
								:disabled="form.processing"
							>Log in</button>
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

	data() {
		return {
			recovery: false,
			form: this.$inertia.form({
				code: "",
				recovery_code: "",
			}),
		};
	},

	methods: {
		toggleRecovery() {
			this.recovery ^= true;

			this.$nextTick(() => {
				if (this.recovery) {
					this.$refs.recovery_code.focus();
					this.form.code = "";
				} else {
					this.$refs.code.focus();
					this.form.recovery_code = "";
				}
			});
		},

		submit() {
			this.form.post("/two-factor-challenge");
		},
	},
};
</script>
