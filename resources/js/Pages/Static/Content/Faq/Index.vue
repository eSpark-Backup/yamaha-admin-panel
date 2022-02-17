<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                 FAQ list
               </h1>
               <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-alt">
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">EC</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">content</a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page">
                        FAQ
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
      <div class="block block-rounded">
         <div class="block-header block-header-default">
            <h3 class="block-title">All Cases</h3>
         </div>
         <div class="block-content">
            <form action="be_pages_ecom_products.html" method="POST" onsubmit="return false;">
               <div class="mb-4">
                  <div class="input-group"><input type="text" class="form-control form-control-alt" id="one-ecom-products-search" name="one-ecom-products-search" placeholder="Search here..."><span class="input-group-text bg-body border-0"><i class="fa fa-search"></i></span></div>
               </div>
            </form>
            <div class="table-responsive">
               <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                     <tr>
                        <th class="text-center" >Owner</th>
                        <th class="text-center d-md-table-cell">ID</th>
                        <th class="text-center" >FAQ category
          </th>
                        <th class="text-center" >Question
          </th>
                        <th class="text-center" >Non-member
          </th>
                        <th class="text-center" >Member
          </th>
                        <th class="text-center" >Segment
          </th>
                        <th class="text-center" >Publishing Settings
          </th>
                        <th class="text-center" >Publication start date and time</th>
                        <th class="text-center" >Publication end date and time</th>
                        <th class="text-center" >Registration date</th>
                        <th class="text-center" >Update date</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class=" d-sm-table-cell text-center fs-sm">Headquarters</td>
                        <td class=" d-sm-table-cell text-center fs-sm">13</td>
                        <td class=" d-sm-table-cell text-center fs-sm">about the order</td>
                        <td class=" d-sm-table-cell text-center fs-sm">About canceling an order</td>
                        <td class=" d-sm-table-cell text-center fs-sm">Publish</td>
                        <td class=" d-sm-table-cell text-center fs-sm">Publish</td>
                        <td class=" d-sm-table-cell text-center fs-sm">Set</td>
                        <td class=" d-sm-table-cell text-center fs-sm">2021/07/15 18:00</td>
                        <td class=" d-sm-table-cell text-center fs-sm">2021/07/15 18:00</td>
                        <td class=" d-sm-table-cell text-center fs-sm">2021/07/15 18:00</td>
                        <td class=" d-sm-table-cell text-center fs-sm">2021/07/15 18:00</td>
                        <td class=" d-sm-table-cell text-center fs-sm">2021/07/15 18:00</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <nav aria-label="Photos Search Navigation">
               <ul class="pagination pagination-sm justify-content-end mt-2">
                  <li class="page-item"><a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous"> Prev </a></li>
                  <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next"> Next </a></li>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</template>
<script></script>