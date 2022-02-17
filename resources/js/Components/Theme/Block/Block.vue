<template>
    <div
        v-if="isRemoved === false"
        :class="{
            'block': true,
            'block-themed': isThemed,
            'block-rounded': rounded,
            'block-mode-pinned': isPinned,
            'block-mode-loading': loading,
            'block-mode-hidden': isCollapsed,
            'block-mode-fullscreen': isFullscreen,
        }"
    >
        <div :class="['block-header', blockTheme]">
            <h3 class="block-title">
                <slot name="title">Block Title</slot>
            </h3>
            <div class="block-options">
                <slot name="prependOptions"></slot>

                <template v-for="option in options">
                    <template v-if="option === 'fullscreen' && isCollapsed === false">
                        <BlockOptionFullscreen
                            :fullscreen="isFullscreen"
                            @onClick="state => isFullscreen = state"
                        />
                    </template>
                    <template v-else-if="option === 'pin'">
                        <BlockOptionPin :pinned="isPinned" @onClick="onClickPin" />
                    </template>
                    <template v-else-if="option === 'reload'">
                        <BlockOptionReload :loading="loading" @onClick="state => loading = state" />
                    </template>
                    <template v-else-if="option === 'collapse' && isFullscreen === false">
                        <BlockOptionCollapse
                            :collapsed="isCollapsed"
                            @onClick="state => isCollapsed = state"
                        />
                    </template>
                    <template v-else-if="option === 'close'">
                        <BlockOptionClose :removed="isRemoved" @onClick="onClose" />
                    </template>
                </template>

                <slot name="appendOptions"></slot>
            </div>
        </div>
        <div class="block-content">
            <slot v-if="$slots.content" name="content">
                <p class="mb-4">Sample block content...</p>
            </slot>
            <slot v-else>
                <p class="mb-4">Sample block content...</p>
            </slot>
        </div>

        <div v-if="$slots.footer" class="block-content block-content-full bg-gray-lighter border-top">
            <slot name="footer">
                
            </slot>
        </div>
    </div>
</template>
<script setup>
import { computed, ref } from 'vue';

const props = defineProps({
    theme: String,
    rounded: Boolean,
    options: Array,
    collapsed: Boolean,
    loading: Boolean,
    modal: Boolean
})
const emit = defineEmits(['close']);
const isPinned = ref(false)
const isRemoved = ref(false)
const isCollapsed = ref(props.collapsed ? true : false)
const isFullscreen = ref(false)

const isThemed = computed(() => props.theme !== undefined && props.theme !== 'default')

const blockTheme = computed(() => {

    if (props.theme === 'default') return 'block-header-default';

    if (isThemed.value) return `bg-${props.theme}`

    return
})

function onClickPin(state) {
    isPinned.value = state;
    isFullscreen.value = false;
}

function onClose(state) {
    if (props.modal === undefined) {
        isRemoved.value = state;
    }
    emit('close');
}
</script>
