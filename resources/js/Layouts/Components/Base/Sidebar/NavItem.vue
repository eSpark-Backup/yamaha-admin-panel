<template>
    <li :class="LIST_CLASSES">
        <span v-if="IS_HEADING">{{ __(link.name) }}</span>

        <a
            v-else-if="HAS_CHILD"
            href="javascript:void(0);"
            @click="IS_ACTIVE = !IS_ACTIVE"
            class="nav-main-link nav-main-link-submenu"
        >
            <span class="nav-main-link-name">{{ __(link.name) }}</span>
        </a>

        <InertiaLink
            :href="link.to"
            @click="onActive"
            :class="[IS_ACTIVE && 'active', 'nav-main-link']"
            v-else
        >
            <span class="nav-main-link-name">{{ __(link.name) }}</span>
        </InertiaLink>

        <ul v-show="HAS_CHILD && IS_ACTIVE" class="nav-main-submenu">
            <NavItem
                :key="index"
                :link="childLink"
                @active="onActive"
                v-for="(childLink, index) in CHILDREN"
            />
        </ul>
    </li>
</template>
<script setup>
import { onMounted } from 'vue';
import NavItem from './NavItem.vue';
import { Inertia } from '@inertiajs/inertia';
import { computed, ref } from '@vue/reactivity';

const IS_ACTIVE = ref(false)

const emit = defineEmits(['active'])

const props = defineProps({ link: Object })

const IS_HEADING = computed(() => props.link.heading);

const LIST_CLASSES = computed(() => ({
    'open': IS_ACTIVE.value,
    'nav-main-item': !props.link.heading,
    'nav-main-heading': props.link.heading,
}));


const CHILDREN = computed(() => props.link.children ? props.link.children : [])

const HAS_CHILD = computed(() => props.link.children && props.link.children.length)

onMounted(() => {
    if (props.link.to && Inertia.page.url.startsWith(props.link.to)) {
        emit('active')
        IS_ACTIVE.value = true;
    }
})


function onActive() {
    IS_ACTIVE.value = true;
    emit('active')
}
</script>
