<template>
    <ul class="nav-main">
        <NavItem :key="index" :link="link" v-for="(link, index) in AdminMenu" />
    </ul>
</template>
<script setup>
import NavItem from './NavItem.vue';
import AdminMenu from '@/Core/Menu/Admin'
import AgentMenu from '@/Core/Menu/Agent'
</script>
