<template>
<div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                  List of tenants
                </h1>
                <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">ADMIN</a>
                  </li>
                   <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Tenant setting</a>
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                   Tenant Notice
                  </li>
                </ol>
              </nav>
              </div>
              <div class="mt-2 md:mt-0">
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter">New Registration</button>
              </div>
              
            </div>
          </div>
        </div>
         <!-- Page content -->
        <div class="content">
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">All Cases</h3>
              
            </div>
            <div class="block-content">
              <!-- Search Form -->
              <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
                <div class="mb-4">
                  <div class="input-group">
                    <input type="text" class="form-control form-control-alt" id="one-ecom-products-search" name="one-ecom-products-search" placeholder="Search all users..">
                    <span class="input-group-text bg-body border-0">
                      <i class="fa fa-search"></i>
                    </span>
                  </div>
                </div>
              </form>
              <!-- END Search Form -->

              <!-- All Products Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                     
                      <th class="text-center" >ID</th>
                      <th class="text-center d-md-table-cell">Tenant code</th>
                      <th class="text-center" >Tenant name</th>
                      <th class="text-center" >Dealer group</th>
                       <th class="text-center" >Disabled settings</th>
                        <th class="text-center" >Publishing settings</th>
                         <th class="text-center" >Open date and time</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                     
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted">35</a></td>
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted"> 13</a></td>
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted">Green field</a></td>
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted"> </a></td>
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted"> Don't set</a></td>
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted">Establish</a></td>
                      <td class=" d-sm-table-cell text-center fs-sm"> <a href="" class="text-muted"> 2020/09/07 18:00</a></td>
                     
                    </tr>
                  
                  </tbody>
                </table>
              </div>
              <!-- END All Products Table -->

              <!-- Pagination -->
              <nav aria-label="Photos Search Navigation">
                <ul class="pagination pagination-sm justify-content-end mt-2">
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                      Prev
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                      Next
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- END Pagination -->
            </div>
          </div>
            </div>
        </template>
<script setup>
</script>