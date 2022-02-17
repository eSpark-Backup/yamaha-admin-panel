<template>
  <footer id="page-footer" class="bg-body-light">
    <div class="content py-3">
      <div class="row fs-sm">
        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
          <!-- Developer Credits -->
        </div>
        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
          <a class="fw-semibold" href target="_blank">{{ $store.getters.appName }}</a> ©
          <span
            data-toggle="year-copy"
            class="js-year-copy-enabled"
          >{{ $store.getters.appCopyright }}</span>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'BaseFooter',
  props: {
    classes: String
  }
}
</script>
<a class="font-w600" href target="_blank">{{ $store.getters.appName }}</a>
              &copy; {{ $store.getters.appCopyright }}
