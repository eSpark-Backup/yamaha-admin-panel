<template>
  <header id="page-header">
    <slot>
      <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
          <LayoutModifier action="sidebarToggle" size="sm" variant="dual" class="mr-2 d-lg-none">
            <i class="fa fa-fw fa-bars"></i>
          </LayoutModifier>

          <LayoutModifier
            action="toggleMiniSidebar"
            class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
          >
            <i class="fa fa-fw fa-ellipsis-v"></i>
          </LayoutModifier>

          <!-- Open Search Section (visible on smaller screens) -->
          <LayoutModifier action="headerSearchOn" variant="dual" size="sm" class="d-sm-none">
            <i class="fa fa-fw fa-search"></i>
          </LayoutModifier>
          <!-- END Open Search Section -->
        </div>

        <!-- Right Section -->
        <div class="d-flex align-items-center">
          <!-- User Dropdown -->
          <div class="dropdown d-inline-block ms-2">
            <button
              type="button"
              class="btn btn-sm btn-alt-secondary d-flex align-items-center"
              id="page-header-user-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                class="rounded-circle"
                :src="$page.props.user.profile_photo_url"
                :alt="$page.props.user.name"
                style="width: 21px;"
              />
              <span class="d-none d-sm-inline-block ms-2">{{ $page.props.user.name }}</span>
              <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
            </button>
            <div
              class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
              aria-labelledby="page-header-user-dropdown"
              style
            >
              <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                <img
                  class="img-avatar img-avatar48 img-avatar-thumb"
                  :src="$page.props.user.profile_photo_url"
                  :alt="$page.props.user.name"
                />
                <p class="mt-2 mb-0 fw-medium">{{ $page.props.user.name }}</p>
                <p class="mb-0 text-muted fs-sm fw-medium">{{ $page.props.user.name }}</p>
              </div>
              <div class="p-2">
                <InertiaLink
                  class="dropdown-item d-flex align-items-center justify-content-between"
                  href="/profile"
                >
                  <span class="fs-sm fw-medium">Profile</span>
                </InertiaLink>
                <a
                  class="dropdown-item d-flex align-items-center justify-content-between"
                  href="javascript:void(0)"
                >
                  <span class="fs-sm fw-medium">Settings</span>
                </a>
              </div>
              <div role="separator" class="dropdown-divider m-0"></div>
              <div class="p-2">
                <InertiaLink
                  as="button"
                  method="post"
                  href="/account/lock"
                  class="dropdown-item d-flex align-items-center justify-content-between"
                >
                  <span class="fs-sm fw-medium">Lock Account</span>
                </InertiaLink>
                <InertiaLink
                  as="button"
                  method="post"
                  href="/logout"
                  class="dropdown-item d-flex align-items-center justify-content-between"
                >
                  <span class="fs-sm fw-medium">Log Out</span>
                </InertiaLink>
              </div>
            </div>
          </div>

          <!-- END User Dropdown -->

          <!-- Notifications Dropdown -->
          <div class="dropdown d-inline-block ms-2">
            <button
              type="button"
              class="btn btn-sm btn-alt-secondary"
              id="page-header-notifications-dropdown"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fa fa-fw fa-bell"></i>
              <span class="text-primary">•</span>
            </button>
            <div
              class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
              aria-labelledby="page-header-notifications-dropdown"
            >
              <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                <h5 class="dropdown-header text-uppercase">Notifications</h5>
              </div>
              <ul class="nav-items mb-0">
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-check-circle text-success"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">You have a new follower</div>
                      <span class="fw-medium text-muted">15 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-plus-circle text-primary"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">1 new sale, keep it up</div>
                      <span class="fw-medium text-muted">22 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-times-circle text-danger"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">Update failed, restart server</div>
                      <span class="fw-medium text-muted">26 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-plus-circle text-primary"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">2 new sales, keep it up</div>
                      <span class="fw-medium text-muted">33 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-user-plus text-success"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">You have a new subscriber</div>
                      <span class="fw-medium text-muted">41 min ago</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="text-dark d-flex py-2" href="javascript:void(0)">
                    <div class="flex-shrink-0 me-2 ms-3">
                      <i class="fa fa-fw fa-check-circle text-success"></i>
                    </div>
                    <div class="flex-grow-1 pe-2">
                      <div class="fw-semibold">You have a new follower</div>
                      <span class="fw-medium text-muted">42 min ago</span>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="p-2 border-top text-center">
                <a class="d-inline-block fw-medium" href="javascript:void(0)">
                  <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                </a>
              </div>
            </div>
          </div>
          <!-- END Notifications Dropdown -->

          <div class="d-inline-block ms-2">
            <LanguageSwitcher />
          </div>
        </div>
      </div>
    </slot>
  </header>
  <!-- END Header -->
</template>

<script>
import LayoutModifier from "./LayoutModifier.vue"
export default {
  name: "BaseHeader",
  props: {
    classes: String
  },
  data() {
    return {
      baseSearchTerm: "",
      notifications: [
        {
          href: "javascript:void(0)",
          icon: "fa fa-fw fa-check-circle text-success",
          title: "You have a new follower",
          time: "15 min ago"
        },
        {
          href: "javascript:void(0)",
          icon: "fa fa-fw fa-plus-circle text-primary",
          title: "1 new sale, keep it up",
          time: "22 min ago"
        },
        {
          href: "javascript:void(0)",
          icon: "fa fa-fw fa-times-circle text-danger",
          title: "Update failed, restart server",
          time: "26 min ago"
        },
        {
          href: "javascript:void(0)",
          icon: "fa fa-fw fa-plus-circle text-primary",
          title: "2 new sales, keep it up",
          time: "33 min ago"
        },
        {
          href: "javascript:void(0)",
          icon: "fa fa-fw fa-user-plus text-success",
          title: "You have a new subscriber",
          time: "41 min ago"
        },
        {
          href: "javascript:void(0)",
          icon: "fa fa-fw fa-check-circle text-success",
          title: "You have a new follower",
          time: "42 min ago"
        }
      ]
    };
  },
  methods: {
    onSubmit() {
    },
    eventHeaderSearch(event) {
      // When ESCAPE key is hit close the header search section
      if (event.which === 27) {
        event.preventDefault();
        this.$store.commit("layout/search", { mode: "off" });
      }
    }
  },
  mounted() {
    document.addEventListener("keydown", this.eventHeaderSearch);
  },
  destroyed() {
    document.removeEventListener("keydown", this.eventHeaderSearch);
  },
  components: { LayoutModifier }
}
</script>
