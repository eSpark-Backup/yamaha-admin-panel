<template>
    <Block :options="['collapse']" rounded>
        <template #title>{{ __("Filters") }}</template>
        <template #content>
            <form action method="GET">
                <input type="hidden" v-if="hasQueryData" name="download" />
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="border p-3 rounded">
                            <label for>初回登録日</label>
                            <div class="row">
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('From') }}</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="registered_from"
                                        :value="$page.props.query?.registered_from"
                                    />
                                </div>
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('To') }}</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="registered_to"
                                        :value="$page.props.query?.registered_to"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border p-3 rounded">
                            <label for>仕入年月日</label>
                            <div class="row">
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('From') }}</label>
                                    <input
                                        type="date"
                                        name="purchased_from"
                                        class="form-control"
                                        :value="$page.props.query?.purchased_from"
                                    />
                                </div>
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('To') }}</label>
                                    <input
                                        type="date"
                                        name="purchased_to"
                                        class="form-control"
                                        :value="$page.props.query?.purchased_to"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border p-3 rounded">
                            <label for>販売開始日</label>
                            <div class="row">
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('From') }}</label>
                                    <input
                                        type="date"
                                        name="sale_from"
                                        class="form-control"
                                        :value="$page.props.query?.sale_from"
                                    />
                                </div>
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('To') }}</label>
                                    <input
                                        type="date"
                                        name="sale_to"
                                        class="form-control"
                                        :value="$page.props.query?.sale_to"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border p-3 rounded">
                            <label for>公開開始日</label>
                            <div class="row">
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('From') }}</label>
                                    <input
                                        type="date"
                                        name="published_from"
                                        class="form-control"
                                        :value="$page.props.query?.published_from"
                                    />
                                </div>
                                <div class="col">
                                    <label for style="font-size: 10px;">{{ __('To') }}</label>
                                    <input
                                        type="date"
                                        name="published_to"
                                        class="form-control"
                                        :value="$page.props.query?.published_to"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col d-flex justify-content-end">
                        <InertiaLink
                            :href="Laravel.route('superuser.products.csv')"
                            class="btn btn-default me-3"
                            v-if="hasQueryData"
                        >Clear Filters</InertiaLink>
                        <button class="btn btn-secondary">CSVダウンロード</button>
                        <button class="btn btn-primary ms-3" v-if="hasQueryData">Download CSV</button>
                    </div>
                </div>
            </form>
        </template>
    </Block>
</template>
<script setup>
import { Laravel } from '@/Helpers';
import { usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue';


const pageProps = usePage().props.value;
const hasQueryData = computed(() => Object.values(pageProps?.query).length)
</script>
