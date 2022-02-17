<template>
    <component
        :is="tag"
        :type="tag === 'button' ? 'button' : false"
        :href="tag === 'a' ? '#' : false"
        :class="classContainer"
        @click.prevent="layout(action)"
    >
        <slot></slot>
    </component>
</template>


<script setup>
import { useStore } from 'vuex'
import { computed } from '@vue/reactivity'

const store = useStore()

const props = defineProps({
    tag: {
        type: String,
        default: 'button',
        description: 'The HTML tag of the component (button, a)'
    },
    size: {
        type: String,
        description: 'Button size (sm, lg)'
    },
    variant: {
        type: String,
        default: 'primary',
        description: 'Button variant (primary, alt-primary, outline-primary, secondary, alt-secondary, outline-secondary, light, alt-light, outline-light, dark, alt-dark, outline-dark, danger, alt-danger, outline-danger, info, alt-info, outline-info, success, alt-success, outline-success, warning, alt-warning, outline-warning, dual)'
    },
    action: {
        type: String,
        description: 'Specify the layout modifier mode to apply on click'
    }
})


const classContainer = computed(() => ({
    [`btn btn-${props.variant}`]: props.tag === 'button' && props.variant,
    [`btn-${props.size}`]: props.tag === 'button' && props.size,
}))

function layout(action) {
    // Set up layout API
    let layoutAPI = {
        sidebarOpen: () => store.commit('layout/sidebar', { mode: 'open' }),
        sidebarClose: () => store.commit('layout/sidebar', { mode: 'close' }),
        sidebarToggle: () => store.commit('layout/sidebar', { mode: 'toggle' }),

        toggleMiniSidebar: () => store.commit('layout/toggleMiniSidebar'),


        searchOn: () => store.commit('layout/search', { mode: 'on' }),
        searchOff: () => store.commit('layout/search', { mode: 'off' }),
        searchToggle: () => store.commit('layout/search', { mode: 'toggle' }),

        headerLoaderOn: () => store.commit('headerLoader', { mode: 'on' }),
        headerLoaderOff: () => store.commit('headerLoader', { mode: 'off' }),
        headerLoaderToggle: () => store.commit('headerLoader', { mode: 'toggle' }),

        pageLoaderOn: () => store.commit('pageLoader', { mode: 'on' }),
        pageLoaderOff: () => store.commit('pageLoader', { mode: 'off' }),
        pageLoaderToggle: () => store.commit('pageLoader', { mode: 'toggle' }),

        pageOverlayOn: () => store.commit('pageOverlay', { mode: 'on' }),
        pageOverlayOff: () => store.commit('pageOverlay', { mode: 'off' }),
        pageOverlayToggle: () => store.commit('pageOverlay', { mode: 'toggle' }),


        toggleDarkMode: () => store.commit('layout/toggleDarkMode'),




    }

    // Call layout API if action is valid
    if (layoutAPI[action]) {
        layoutAPI[action]()
    }
}
</script>
