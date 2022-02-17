<template>
  <nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
      <InertiaLink href="/" class="font-w600 text-dual">
        <span class="smini-visible">
          <img style="height: 20px" src="/images/mini-sidebar-logo.svg" />
        </span>
        <span class="smini-hide font-size-h5 tracking-wider">
          <img style="height: 30px" src="/images/logo-light.svg" />
        </span>
      </InertiaLink>

      <div>
        <LayoutModifier action="toggleDarkMode" class="btn btn-sm btn-alt-secondary">
          <i class="far fa-moon"></i>
        </LayoutModifier>

        <LayoutModifier action="sidebarToggle" class="d-lg-none btn btn-sm btn-alt-secondary ms-1">
          <i class="fa fa-fw fa-times"></i>
        </LayoutModifier>
      </div>
    </div>

    <Simplebar class="js-sidebar-scroll">
      <div class="content-side">
        <slot>
          <Navigation />
        </slot>
      </div>
    </Simplebar>
  </nav>
  <!-- END Sidebar -->
</template>

<script setup>
import LayoutModifier from './LayoutModifier.vue'
import Navigation from './Sidebar/Navigation.vue';


defineProps({ classes: String })
</script>
