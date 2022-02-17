<template>
 <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                 Tenants Profile
               </h1>
               <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-alt">
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Admin</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Tenants</a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page">
                        Tenants profile
                     </li>
                  </ol>
               </nav>
            </div>
            <div class="mt-2 md:mt-0">
               <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter">Add New</button>
            </div>
         </div>
      </div>
   </div>
   <div class="content">
          <!-- Quick Actions -->
          <div class="row">
            <div class="col-6">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-dark">
                    <i class="fa fa-pencil-alt"></i>
                  </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-muted mb-0">
                    Edit Customer
                  </p>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-2 fw-semibold text-danger">
                    <i class="fa fa-times"></i>
                  </div>
                </div>
                <div class="block-content py-2 bg-body-light">
                  <p class="fw-medium fs-sm text-danger mb-0">
                    Remove Customer
                  </p>
                </div>
              </a>
            </div>
          </div>
          <!-- END Quick Actions -->

          <!-- User Info -->
          <div class="block block-rounded">
            <div class="block-content text-center">
              <div class="py-4">
                <div class="mb-3">
                  <img class="img-avatar" src="assets/media/avatars/avatar13.jpg" alt="">
                </div>
                <h1 class="fs-lg mb-0">
                  <span>Nishioka Nasuka</span>
                </h1>
                <p class="fs-sm fw-medium text-muted">UI Designer</p>
              </div>
            </div>
            <div class="block-content bg-body-light text-center">
              <div class="row items-push text-uppercase">
                <div class="col-6 col-md-3">
                  <div class="fw-semibold text-dark mb-1">Orders</div>
                  <a class="link-fx fs-3 text-primary" href="javascript:void(0)">5</a>
                </div>
                <div class="col-6 col-md-3">
                  <div class="fw-semibold text-dark mb-1">Orders Value</div>
                  <a class="link-fx fs-3 text-primary" href="javascript:void(0)">$3.580,00</a>
                </div>
                <div class="col-6 col-md-3">
                  <div class="fw-semibold text-dark mb-1">Cart</div>
                  <a class="link-fx fs-3 text-primary" href="javascript:void(0)">4</a>
                </div>
                <div class="col-6 col-md-3">
                  <div class="fw-semibold text-dark mb-1">Prefecture</div>
                  <a class="link-fx fs-3 text-primary" href="javascript:void(0)">Hokkaido</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END User Info -->

          <!-- Addresses -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Addresses (2)</h3>
            </div>
            <div class="block-content">
              <div class="row">
                <div class="col-lg-6">
                  <!-- Billing Address -->
                  <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                      <h3 class="block-title">Billing Address</h3>
                    </div>
                    <div class="block-content">
                      <div class="fs-4 mb-1">Nishioka Nasuka</div>
                      <address class="fs-sm">
                        Sunrise Str 620<br>
                        Melbourne<br>
                        Australia, 11-587<br><br>
                        <i class="fa fa-phone"></i> 072-990-5185<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">n-nishioka@hosho.ne.jp</a>
                      </address>
                    </div>
                  </div>
                  <!-- END Billing Address -->
                </div>
                <div class="col-lg-6">
                  <!-- Shipping Address -->
                  <div class="block block-rounded block-bordered">
                    <div class="block-header border-bottom">
                      <h3 class="block-title">Shipping Address</h3>
                    </div>
                    <div class="block-content">
                      <div class="fs-4 mb-1">John Parker</div>
                      <address class="fs-sm">
                        Sunrise Str 620<br>
                        Melbourne<br>
                        Australia, 11-587<br><br>
                        <i class="fa fa-phone"></i> 072-990-5185<br>
                        <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">n-nishioka@hosho.ne.jp</a>
                      </address>
                    </div>
                  </div>
                  <!-- END Shipping Address -->
                </div>
              </div>
            </div>
          </div>
          <!-- END Addresses -->

        <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Log Messages</h3>
            </div>
            <div class="block-content">
              <table class="table table-borderless table-striped table-vcenter fs-sm">
                <tbody>
                  <tr>
                    <td class="fs-base" style="width: 80px;">
                      <span class="badge bg-primary">Order</span>
                    </td>
                    <td style="width: 220px;">
                      <span class="fw-semibold">January 17, 2020 - 18:00</span>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Support</a>
                    </td>
                    <td class="text-success">Order Completed</td>
                  </tr>
                  <tr>
                    <td class="fs-base">
                      <span class="badge bg-primary">Order</span>
                    </td>
                    <td>
                      <span class="fw-semibold">January 17, 2020 - 17:36</span>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Support</a>
                    </td>
                    <td class="text-warning">Preparing Order</td>
                  </tr>
                  <tr>
                    <td class="fs-base">
                      <span class="badge bg-success">Payment</span>
                    </td>
                    <td>
                      <span class="fw-semibold">January 16, 2020 - 18:10</span>
                    </td>
                    <td>
                      <a href="javascript:void(0)">John Parker</a>
                    </td>
                    <td class="text-success">Payment Completed</td>
                  </tr>
                  <tr>
                    <td class="fs-base">
                      <span class="badge bg-danger">Email</span>
                    </td>
                    <td>
                      <span class="fw-semibold">January 16, 2020 - 10:35</span>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Support</a>
                    </td>
                    <td class="text-danger">Missing payment details. Email was sent and awaiting for payment before processing</td>
                  </tr>
                  <tr>
                    <td class="fs-base">
                      <span class="badge bg-primary">Order</span>
                    </td>
                    <td>
                      <span class="fw-semibold">January 15, 2020 - 14:59</span>
                    </td>
                    <td>
                      <a href="javascript:void(0)">Support</a>
                    </td>
                    <td>All products are available</td>
                  </tr>
                  <tr>
                    <td class="fs-base">
                      <span class="badge bg-primary">Order</span>
                    </td>
                    <td>
                      <span class="fw-semibold">January 15, 2020 - 14:29</span>
                    </td>
                    <td>
                      <a href="javascript:void(0)">John Parker</a>
                    </td>
                    <td>Order Submitted</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

         
         <div class="block block-rounded h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Announcements</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-borderless table-striped table-vcenter fs-sm">
                    <tbody>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.965</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Diablo III</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.154</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Control</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.523</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Minecraft</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.423</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Hollow Knight</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.391</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Sekiro: Shadows Die Twice</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.218</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">NBA 2K20</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.995</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Forza Motorsport 7</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.761</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Minecraft</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.860</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.952</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Age of Mythology</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" style="width: 100px;">
                          <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.952</a>
                        </td>
                        <td>
                          <a href="be_pages_ecom_product_edit.html">Age of Empires IV</a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <div class="text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
         

         

    
        </div>
</template>
<script setup>
</script>