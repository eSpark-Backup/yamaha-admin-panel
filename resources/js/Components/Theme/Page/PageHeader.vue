<template>
    <div class="bg-body-light">
        <div class="content content-full">
            <div
                class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2"
            >
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-2">{{ __(title) }}</h1>
                    <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li
                                :key="index"
                                class="breadcrumb-item"
                                v-for="({ link, label }, index) in breadcrumb"
                            >
                                <a
                                    class="link-fx"
                                    v-if="link === null || link === false"
                                    href="javascript:void(0)"
                                >{{ __(label) }}</a>
                                <template v-else-if="link === undefined">{{ __(label) }}</template>
                                <InertiaLink
                                    :href="link"
                                    class="link-fx"
                                    v-else-if="link !== null"
                                >{{ __(label) }}</InertiaLink>
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="mt-2 md:mt-0" v-if="$slots.actions">
                    <slot name="actions" />
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
defineProps({ title: String, breadcrumb: Array })
</script>
