<template>
    <teleport to="body">
        <div
            tabindex="-1"
            :id="identifier"
            aria-hidden="true"
            :class="[effect, 'modal']"
            :aria-labelledby="identifier"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <slot></slot>
                </div>
            </div>
        </div>
    </teleport>
</template>
<script setup>
defineProps({ identifier: String, effect: { type: String, default: "fade" } })
</script>
