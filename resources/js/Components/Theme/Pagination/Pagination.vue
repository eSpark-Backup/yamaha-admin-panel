<template>
    <template v-if="hasPages()">
        <div class="d-flex justify-content-between py-3 d-md-none">
            <InertiaLink
                v-if="paginator.prev_page_url"
                :href="paginator.prev_page_url"
                class="btn btn-primary"
            >Prev</InertiaLink>
            <button v-else disabled class="btn btn-primary">Prev</button>

            <div class="dropdown dropup pagination-dropdown">
                <button
                    type="button"
                    class="btn btn-secondary dropdown-toggle"
                    id="dropdown-content-rich-primary"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >Page {{ paginator.current_page }}&nbsp;&nbsp;</button>
                <div
                    class="dropdown-menu fs-sm"
                    aria-labelledby="dropdown-content-rich-primary"
                    style
                >
                    <template v-for="(link, index) in paginator.links" :key="index">
                        <template v-if="isDotsLink(link)">
                            <!-- "Three Dots" Separator -->
                            <div class="dropdown-divider"></div>
                        </template>

                        <template v-if="isPageLink(link, index)">
                            <a
                                v-if="link.active"
                                href="javascript:void(0)"
                                class="dropdown-item text-muted fs-sm active"
                            >Page {{ link.label }}</a>

                            <InertiaLink
                                v-else
                                :href="link.url"
                                class="dropdown-item text-muted fs-sm"
                                :aria-label="`Go to page ${link.label}`"
                            >Page {{ link.label }}</InertiaLink>
                        </template>
                    </template>
                </div>
            </div>

            <InertiaLink
                v-if="paginator.next_page_url"
                :href="paginator.next_page_url"
                class="btn btn-primary"
            >Next</InertiaLink>
            <button v-else disabled class="btn btn-primary">Next</button>
        </div>

        <nav aria-label="Pagination" class="d-none d-md-block">
            <ul
                :class="['pagination pagination-sm  mt-2', center ? 'justify-content-center' : 'justify-content-end']"
            >
                <template v-for="(link, index) in paginator.links" :key="index">
                    <template v-if="isDotsLink(link)">
                        <!-- "Three Dots" Separator -->
                        <li class="page-item" aria-disabled="true">
                            <span class="page-link">{{ link.label }}</span>
                        </li>
                    </template>

                    <template v-if="isPageLink(link, index)">
                        <li aria-current="page" class="page-item active" v-if="link.active">
                            <span class="page-link">{{ link.label }}</span>
                        </li>
                        <li v-else class="page-item">
                            <InertiaLink
                                :href="link.url"
                                class="page-link"
                                :aria-label="`Go to page ${link.label}`"
                            >{{ link.label }}</InertiaLink>
                        </li>
                    </template>

                    <template v-if="isFirstLink(index)">
                        <li class="page-item" v-if="link.url">
                            <InertiaLink rel="prev" :href="link.url" class="page-link">Prev</InertiaLink>
                        </li>

                        <li v-else aria-disabled="true" aria-label="Previous" class="page-item">
                            <span class="page-link">Prev</span>
                        </li>
                    </template>

                    <template v-if="isLastLink(index)">
                        <li class="page-item" v-if="link.url">
                            <InertiaLink rel="next" :href="link.url" class="page-link">Next</InertiaLink>
                        </li>

                        <li v-else aria-disabled="true" aria-label="Next" class="page-item">
                            <span class="page-link">Next</span>
                        </li>
                    </template>
                </template>
            </ul>
        </nav>
    </template>
</template>

<script setup>
const props = defineProps({ paginator: Object, center: Boolean })

function hasPages() {
    return (
        (props.paginator.prev_page_url || props.paginator.next_page_url) &&
        props.paginator.last_page > 1
    );
}

function isDotsLink(link) {
    return link.label === "...";
}
function isFirstLink(index) {
    return index === 0;
}
function isLastLink(index) {
    return props.paginator.links.length === index + 1;
}
function isPageLink(link, index) {
    return !isFirstLink(index) && !isLastLink(index) && !isDotsLink(link);
}
</script>
