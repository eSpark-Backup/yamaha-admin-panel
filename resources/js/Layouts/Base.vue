<template>
    <div id="page-container" :class="classContainer">
        <!-- Page Loader -->
        <div id="page-loader" :class="{ 'show': isPageLoaderEnabled }"></div>

        <!-- Sidebar -->
        <Sidebar v-if="isSidebarEnabled" :class="layoutClasses.sidebar">
            <slot name="sidebar"></slot>
        </Sidebar>

        <!-- Header -->
        <Header v-if="isHeaderEnabled" :class="layoutClasses.header">
            <slot name="header"></slot>
        </Header>

        <!-- Main Container -->
        <div id="main-container">
            <slot name="content"></slot>
        </div>

        <Footer v-if="isFooterEnabled" :class="layoutClasses.footer || 'bg-body-light'">
            <slot name="footer"></slot>
        </Footer>
    </div>
</template>
<script setup>
import { useStore } from 'vuex';
import { computed } from '@vue/reactivity';
import Header from '@/Layouts/Components/Base/Header.vue'
import Footer from '@/Layouts/Components/Base/Footer.vue'
import Sidebar from '@/Layouts/Components/Base/Sidebar.vue'

defineProps({ layoutClasses: Object })

const store = useStore()

const isHeaderEnabled = computed(() => store.getters['layout/isHeaderEnabled'])
const isFooterEnabled = computed(() => store.getters['layout/isFooterEnabled'])
const isSidebarEnabled = computed(() => store.getters['layout/isSidebarEnabled'])
const isPageLoaderEnabled = computed(() => store.getters['layout/isPageLoaderEnabled'])

const classContainer = computed(() => ({

    // Sidebar classes
    'sidebar-o': store.getters['layout/isSidebarOpenOnDesktop'],
    'sidebar-o-xs': store.getters['layout/isSidebarOpenOnMobile'],
    'sidebar-mini': store.getters['layout/isMiniSidebarEnabled'],

    // Side overlay classes.
    'side-overlay-o': store.getters['layout/isSideOverlayEnabled'],

    // Page overlay classes
    'enable-page-overlay': store.getters['layout/isPageOverlayEnabled'],

    'page-header-dark dark-mode': store.getters['layout/isDarkModeEnabled'],

    // Container default classes
    'side-trans-enabled side-scroll sidebar-dark page-header-fixed': true
}))
</script>
