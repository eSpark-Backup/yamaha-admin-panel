<template>
    <PageHeader :title="inquiry.title" :breadcrumb="breadcrumb">
        <template #actions>
            <InertiaLink :href="Laravel.route('superuser.inquiries.index')" class="btn btn-primary">
                <i class="fa fa-fw fa-list"></i>
                {{ __("View All") }}
            </InertiaLink>
            <InertiaLink
                class="btn btn-success ms-2"
                :href="Laravel.route('superuser.inquiries.create')"
            >
                <i class="fa fa-fw fa-plus-circle"></i>
                {{ __("Create New") }}
            </InertiaLink>

            <InertiaLink
                class="btn btn-warning ms-2"
                :href="Laravel.route('superuser.inquiries.edit', { inquiry: inquiry.id })"
            >
                <i class="fa fa-fw fa-edit"></i>
                {{ __("Update") }}
            </InertiaLink>
        </template>
    </PageHeader>

    <div class="content" v-if="$page.props.flash">
        <Alert
            class="mb-0"
            theme="success"
            icon="fa-check-circle"
            v-if="$page.props.flash.inquiry_created"
        >{{ __("Inquiry successfully logged.") }}</Alert>
    </div>

    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ __("Destination") }}</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-12 space-y-5">
                        <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                            <div class="mb-4">
                                <label
                                    class="form-label"
                                    for="example-text-input"
                                >{{ __("Member name") }}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="example-text-input"
                                    name="example-text-input"
                                    disabled
                                    placeholder="Masaki Hattori"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    class="form-label"
                                    for="example-text-input"
                                >{{ __("email address") }}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="example-text-input"
                                    name="example-text-input"
                                    disabled
                                    placeholder="masa.green-field@wh.commufa.jp"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    class="form-label"
                                    for="example-text-input"
                                >{{ __("Affiliated tenant") }}</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="example-text-input"
                                    name="example-text-input"
                                    disabled
                                    placeholder="(Yes) Green Field"
                                />
                            </div>
                        </form>
                        <!-- END Form Labels on top - Default Style -->
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ __("Inquiry information") }}</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-12 space-y-5">
                        <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label
                                            class="form-label"
                                            for="example-text-input"
                                        >{{ __("Inquiry ID") }}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="example-text-input"
                                            name="example-text-input"
                                            disabled
                                            placeholder="Masaki Hattori"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label
                                            class="form-label"
                                            for="example-text-input"
                                        >{{ __("Inquiry status") }}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="example-text-input"
                                            name="example-text-input"
                                            disabled
                                            placeholder="Answered"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="example-select">
                                            {{ __("Inquiry type") }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select
                                            class="form-select"
                                            id="example-select"
                                            name="example-select"
                                        >
                                            <option selected>Open this select menu</option>
                                            <option value="1">{{ __("About the product") }}</option>
                                            <option value="2">{{ __("About your order") }}</option>
                                        </select>
                                        <div id class>Required field.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label
                                            class="form-label"
                                            for="example-text-input"
                                        >{{ __("order number") }}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="example-text-input"
                                            name="example-text-input"
                                            disabled
                                            placeholder="234234"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label
                                            class="form-label"
                                            for="example-text-input"
                                        >{{ __("part number") }}</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="example-text-input"
                                            name="example-text-input"
                                            disabled
                                            placeholder="234234"
                                        />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label
                                            class="form-label"
                                            for="example-text-input"
                                        >{{ __("Corresponding memo / takeover column") }}</label>
                                        <textarea
                                            class="form-control"
                                            id="example-textarea-input"
                                            name="example-textarea-input"
                                            rows="1"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Form Labels on top - Default Style -->
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <button type="button" class="btn btn-outline-info">{{ __("Update") }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{ __("Inquiry details") }}</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <tbody class="fs-sm">
                            <tr>
                                <td>
                                    <p class="fs-sm fw-medium text-muted mb-0">{{ __("Member") }}</p>
                                </td>
                                <td>
                                    <p
                                        class="fs-sm fw-medium text-muted mb-0"
                                    >{{ __("Masaki Hattori") }}</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <p
                                        class="fs-sm fw-medium text-muted mb-0"
                                    >2021-12-10 13: 20: 39.462</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="fs-sm fw-medium text-muted mb-0">{{ __("Member") }}</p>
                                </td>
                                <td>
                                    <p
                                        class="fs-sm fw-medium text-muted mb-0"
                                    >{{ __("Masaki Hattori") }}</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <p
                                        class="fs-sm fw-medium text-muted mb-0"
                                    >2021-12-10 13: 20: 39.462</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-4">
                            <label class="form-label" for="example-text-input">
                                {{ __("Reply content") }}
                                <span class="text-danger">*</span>
                            </label>
                            <textarea
                                class="form-control"
                                id="example-textarea-input"
                                name="example-textarea-input"
                                rows="3"
                                placeholder
                            ></textarea>
                            <div id class>Required field.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="example-select">
                                Inquiry status
                                <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="example-select" name="example-select">
                                <option selected></option>
                                <option value="1">{{ __("Answered") }}</option>
                                <option value="2">{{ __("Unanswered") }}</option>
                                <option value="3">{{ __("Supported") }}</option>
                            </select>
                            <div id class>Required field.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label">
                                {{ __("Sender") }}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="space-x-2">
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        id="example-radios-inline1"
                                        name="example-radios-inline"
                                        value="option1"
                                        checked
                                    />
                                    <label
                                        class="form-check-label"
                                        for="example-radios-inline1"
                                    >{{ __("Administrator") }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        id="example-radios-inline2"
                                        name="example-radios-inline"
                                        value="option2"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="example-radios-inline2"
                                    >{{ __("Member") }}</label>
                                </div>
                            </div>
                            <div id class>Required field.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button
                            type="button"
                            class="btn btn-outline-info mt-2"
                        >{{ __("Status Update") }}</button>
                        <button
                            type="button"
                            class="btn btn-outline-info ms-3 mt-2"
                        >{{ __("Register") }}</button>
                        <button
                            type="button"
                            class="btn btn-outline-info ms-3 mt-2"
                        >{{ __("Registration/Transmission") }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers'
defineProps({ inquiry: Object })
const breadcrumb = ref([
    { label: "Support", link: null },
    { label: "Inquiries", link: Laravel.route('superuser.inquiries.index') },
    { label: "Show" }
])

</script>
