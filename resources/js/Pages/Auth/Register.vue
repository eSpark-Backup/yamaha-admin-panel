<template>
	<div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
		<div class="w-100" v-if="false">
			<div class="text-center mb-5">
				<p class="mb-3">
					<img src="/images/logo.svg" style="height: 30px;" />
				</p>
				<h1 class="fw-bold mb-2">Create Account</h1>
				<p class="fw-medium text-muted">Get your access today in one easy step</p>
			</div>

			<div class="row g-0 justify-content-center">
				<div class="col-sm-8 col-xl-4">
					<form
						class="js-validation-signup"
						@submit.prevent="submit"
						method="POST"
						novalidate="novalidate"
					>
						<div class="mb-4">
							<input
								type="text"
								:class="form.errors.name && 'is-invalid'"
								class="form-control form-control-lg form-control-alt py-3"
								placeholder="Username"
								v-model="form.name"
								required
								autofocus
							/>
							<div v-if="form.errors.name" class="invalid-feedback animated fadeIn">{{ form.errors.name }}</div>
						</div>
						<div class="mb-4">
							<input
								required
								type="email"
								placeholder="Email"
								v-model="form.email"
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
								:class="form.errors.password && 'is-invalid'"
								class="form-control form-control-lg form-control-alt py-3"
								v-model="form.password"
								placeholder="Password"
							/>
							<div
								v-if="form.errors.password"
								class="invalid-feedback animated fadeIn"
							>{{ form.errors.password }}</div>
						</div>
						<div class="mb-4">
							<input
								type="password"
								:class="form.errors.password_confirmation && 'is-invalid'"
								class="form-control form-control-lg form-control-alt py-3"
								v-model="form.password_confirmation"
								placeholder="Confirm Password"
							/>
							<div
								v-if="form.errors.password"
								class="invalid-feedback animated fadeIn"
							>{{ form.errors.password }}</div>
						</div>
						<div class="mb-4">
							<div class="d-md-flex align-items-md-center justify-content-md-between">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value id="signup-terms" />
									<label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
								</div>
								<div class="py-2 pl-2">
									<a class="fs-sm fw-medium" href="javascript:void(0)">View Terms</a>
								</div>
							</div>
						</div>

						<div class="d-flex justify-content-between align-items-center mb-4">
							<div>
								<InertiaLink
									:href="'/login'"
									class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1"
								>Already registered?</InertiaLink>
							</div>
							<div>
								<button type="submit" :disabled="form.processing" class="btn btn-lg btn-alt-primary">
									<i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
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

	data() {
		return {
			form: this.$inertia.form({
				name: "",
				email: "",
				password: "",
				password_confirmation: "",
				terms: false,
			}),
		};
	},

	methods: {
		submit() {
			this.form.post("/register", {
				onFinish: () => this.form.reset("password", "password_confirmation"),
			});
		},
	},
};
</script>
