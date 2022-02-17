<template>
   <div class="banner-sec">
      <img src="/images/bg/banner-img.png" alt="banner-img" style="width:100%" />
   </div>
   <div class="card-sec">
      <div class="container">
         <div class="row notice-row">
            <div class="col-md-6 text-center pb-3 pb-md-0">
               <h5>RECOMMENDATION</h5>
            </div>
            <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
               <h5 class="pe-2">NOTICE</h5>
               <img src="/images/bg/notice.png" alt="notice-img" />
            </div>
         </div>
         <div class="row mb-4" v-if="products.total > 0">
            <Product v-for="(product, key) in products.data" v-bind="{ key, product }" />
         </div>
         <Alert theme="warning" v-else>No products found.</Alert>
         <Pagination :paginator="products" center />
      </div>
   </div>
</template>
<script setup>
import Product from './Index/Product.vue';
defineProps({ products: Object })
</script>
