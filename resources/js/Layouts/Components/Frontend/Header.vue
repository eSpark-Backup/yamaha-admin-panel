<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative" id="nav1">
        <div class="container-fluid">
            <div class="nav-left d-flex align-items-center">
                <button
                    type="button"
                    aria-label="Toggle navigation"
                    @click="toggleNavMenu = !toggleNavMenu"
                    class="navbar-toggler position-relative"
                >
                    <span class="navbar-toggler-icon"></span>
                    <div v-if="toggleNavMenu" class="toggle-menu bg-white">
                        <ul>
                            <li>
                                <a href class="text-black">Top</a>
                            </li>
                            <li>
                                <a href class="text-black">Product List</a>
                            </li>
                            <li>
                                <a href class="text-black">Frequently asked questions</a>
                            </li>
                            <li>
                                <a href class="text-black">Notice List</a>
                            </li>
                            <li>
                                <a href class="text-black">Inquiry</a>
                            </li>
                            <li>
                                <a href class="text-black">User Guide</a>
                            </li>
                        </ul>
                    </div>
                </button>

                <p
                    class="mb-0 ms-1 ms-sm-4 text-black fw-bold d-none d-lg-inline-block"
                >Store: Directly managed by Yamaha</p>
                <InertiaLink class="navbar-brand d-none d-lg-inline-block" href="/">
                    <img src="/images/logo.svg" alt="site-logo" />
                </InertiaLink>
            </div>

            <div class="nav-center d-block d-lg-none">
                <InertiaLink class="navbar-brand" href="/">
                    <img src="/images/logo.svg" alt="site-logo" />
                </InertiaLink>
            </div>

            <div class="nav-right d-flex align-items-center position-relative">
                <p class="m-0 text-grey text-capitalize d-none d-lg-inline-block">
                    Welcome
                    <span class="text-black fw-bold">{{ __('Mr. Masakazu Suzuki') }}</span>
                </p>

                <span @click="toggleUserMenu = !toggleUserMenu" class="ps-2 user-img">
                    <i class="fa far fa-user"></i>
                </span>

                <InertiaLink href="/cart" class="px-3 cart d-lg-inline-block">
                    <i class="fa far fa-cart-plus text-black"></i>
                    <span class="cart-count" v-if="$page.props?.cart?.products_count">{{ $page.props?.cart?.products_count }}</span>
                </InertiaLink>

                <span class="d-lg-inline-block">
                    <i class="fa far fa-search"></i>
                </span>

                <div class="d-inline-block ps-2">
                    <LanguageSwitcher />
                </div>

                <div v-if="toggleUserMenu" class="toggle-menu2 bg-white">
                    <div
                        class="user-name pb-3 mb-2 border-bottom rounded-top d-inline-block d-lg-none"
                    >
                        <p class="mt-2 mb-0 fw-bold text-black">Mr. Masakazu Suzuki</p>
                    </div>
                    <ul>
                        <li>
                            <a href class="text-black">Quotation list</a>
                        </li>
                        <li>
                            <a href class="text-black">Order List</a>
                        </li>
                        <li>
                            <a href class="text-black">member information change</a>
                        </li>
                        <li>
                            <a href class="text-black">Change password</a>
                        </li>
                        <li>
                            <a href class="text-black">E-mail address change</a>
                        </li>
                        <li>
                            <a href class="text-black">Inquiry</a>
                        </li>
                        <li>
                            <InertiaLink
                                as="button"
                                href="/logout"
                                method="post"
                                class="rounded-pill btn-danger text-uppercase border-0 py-2 px-3"
                            >logout</InertiaLink>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div v-if="$page.props.title" class="page-heading bg-white text-center py-3">
        <h1 class="mb-0 text-uppercase">{{ $page.props.title }}</h1>
    </div>
</template>
<script setup>
import { ref } from 'vue';

const toggleNavMenu = ref(false)

const toggleUserMenu = ref(false)
</script>
