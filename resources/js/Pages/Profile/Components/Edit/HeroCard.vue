<template>
    <div class="bg-image" style="background-image: url('/images/bg/photo10@2x.jpg');">
        <div class="bg-primary-dark-op">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img
                        class="img-avatar img-avatar-thumb"
                        :src="$page.props.user.profile_photo_url"
                        :alt="$page.props.user.name"
                    />
                </div>
                <h1 class="h2 text-white mb-0">Edit Profile</h1>
                <h2 class="h4 fw-normal text-white-75">{{ $page.props.user.name }}</h2>
                <InertiaLink class="btn btn-alt-secondary" href="/profile">
                    <i class="fa fa-fw fa-arrow-left text-danger"></i>
                    {{ __("Back to Profile") }}
                </InertiaLink>
            </div>
        </div>
    </div>
</template>
<script setup>

</script>
