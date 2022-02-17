<template>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ __("User Profile") }}</h3>
        </div>
        <div class="block-content">
            <form
                @submit.prevent="updateProfileInformation"
                method="POST"
                enctype="multipart/form-data"
            >
                <div class="row push">
                    <div class="col-lg-4">
                        <p
                            class="fs-sm text-muted"
                        >{{ __("Your account’s vital info. Your username will be publicly visible.") }}</p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="mb-4">
                            <label
                                class="form-label"
                                for="one-profile-edit-username"
                            >{{ __("Username") }}</label>
                            <input
                                type="text"
                                class="form-control"
                                :value="user.email"
                                readonly
                                disabled
                            />
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="one-profile-edit-name">{{ __("Name") }}</label>
                            <input
                                type="text"
                                class="form-control"
                                id="one-profile-edit-name"
                                name="one-profile-edit-name"
                                :placeholder="__('Enter your name..')"
                                v-model="form.name"
                            />
                        </div>
                        <div class="mb-4">
                            <label
                                class="form-label"
                                for="one-profile-edit-email"
                            >{{ __("Email Address") }}</label>
                            <input
                                type="email"
                                class="form-control"
                                id="one-profile-edit-email"
                                name="one-profile-edit-email"
                                :placeholder="__('Enter your email..')"
                                v-model="form.email"
                            />
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Your Avatar</label>
                            <div class="mb-4 d-flex align-items-center">
                                <img
                                    v-if="!photoPreview"
                                    :alt="user.name"
                                    class="img-avatar"
                                    :src="user.profile_photo_url"
                                />

                                <span
                                    v-else
                                    class="img-avatar"
                                    :style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'"
                                ></span>
                                <button
                                    v-if="hasProfilePhotoUrl"
                                    type="button"
                                    class="btn btn-danger"
                                    @click.prevent="deletePhoto"
                                >{{ __("Remove Photo") }}</button>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="one-profile-edit-avatar"
                                    class="form-label"
                                >{{ __("Choose a new avatar") }}</label>
                                <input
                                    id="one-profile-edit-avatar"
                                    type="file"
                                    class="form-control"
                                    ref="photo"
                                    accept="image/*"
                                    @change="updatePhotoPreview"
                                    @input="form.photo = $event.target.files[0]"
                                />
                            </div>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="btn btn-alt-primary">{{ __("Update") }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup>
import { computed, ref } from 'vue';
import { useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({ user: Object })

const form = useForm({
    _method: 'PUT',
    name: props.user.name,
    email: props.user.email,
    photo: null,
})

const photo = ref()
const success = ref(false)
const photoPreview = ref(null)

const hasProfilePhotoUrl = computed(() => props.user.profile_photo_path)

function updateProfileInformation() {
    if (photo.value) {
        form.photo = photo.value.files[0]
    }
    success.value = false;
    form.post('/user/profile-information', {
        errorBag: 'updateProfileInformation',
        preserveScroll: true,
        onSuccess: () => {
            clearPhotoFileInput();
            success.value = true;
        },
    });
}



function updatePhotoPreview() {
    const selectedPhoto = photo.value.files[0];

    if (!selectedPhoto) return;
    const reader = new FileReader();
    reader.onload = (e) => {
        photoPreview.value = e.target.result;
    };
    reader.readAsDataURL(selectedPhoto);
}


function deletePhoto() {
    success.value = false;
    useForm().delete('/api/user/profile-photo', {
        preserveScroll: true,
        onSuccess: () => {
            photoPreview.value = null;
            success.value = true;
            clearPhotoFileInput();
        },
    });
}


function clearPhotoFileInput() {
    if (photo.value?.value) {
        photo.value.value = null;
    }
}

</script>
