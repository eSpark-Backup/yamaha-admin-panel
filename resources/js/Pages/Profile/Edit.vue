<template>
    <HeroCard />

    <div class="content content-boxed">
        <UserProfile :user="$page.props.user" />

        <ChangePassword />

        <TwoFactorAuthentication />

        <BrowserSessions />

        <BillingInformation />
    </div>
</template>

<script setup>
import HeroCard from './Components/Edit/HeroCard.vue'
import UserProfile from './Components/Edit/UserProfile.vue'
import ChangePassword from './Components/Edit/ChangePassword.vue'
import BrowserSessions from './Components/Edit/BrowserSessions.vue'
import BillingInformation from './Components/Edit/BillingInformation.vue'
import TwoFactorAuthentication from './Components/Edit/TwoFactorAuthentication.vue'
</script>
