<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                  EC order details
               </h1>
               <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-alt">
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">EC</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Orders received</a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page">
                        Order list
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <div class="content">
      <div class="row">
         <div class="col-12">
            <div class="block block-rounded">
               <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-home" role="tab" aria-controls="btabs-animated-fade-home" aria-selected="false">Order information</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link active" id="btabs-animated-fade-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-profile" role="tab" aria-controls="btabs-animated-fade-profile" aria-selected="true">Order details</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-settings" role="tab" aria-controls="btabs-animated-fade-settings" aria-selected="false">
                     Shipping delivery information
                     </button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-orderer-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-orderer" role="tab" aria-controls="btabs-animated-fade-orderer" aria-selected="false">
                     Orderer information
                     </button>
                  </li>
               </ul>
               <div class="block-content tab-content overflow-hidden">
                  <div class="tab-pane fade" id="btabs-animated-fade-home" role="tabpanel" aria-labelledby="btabs-animated-fade-home-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Order number</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="21120210473585736">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Order status <span class="text-danger">*</span></label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1"> ordered</option>
                                    <option value="2"> cancel</option>
                                 </select>
                                 <div id="" class="">Required field.</div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Order date</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="2021/12/2 19:47:36">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Orderer (special agent)</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="Directly managed by Yamaha">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Order amount (total partition price + shipping fee) * Discount / consumption tax is not included.</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="¥ 270,000">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Billed amount (order amount-discount) * Consumption tax is not included.
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="¥ 0
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">(Inside shipping fee)
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="¥ 0
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Discount amount
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="¥ 0
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Profit (total gross profit-discount)
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="¥ 0
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-date-input">Sales date * Estimated shipping date (latest)
                                 </label>
                                 <input type="date" class="form-control" id="example-date-input" name="example-date-input"  placeholder="2021/12/24
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Transmission matters
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="this is just and test of communicated field.
                                    asdfasdfasdf
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Communication from YMPC
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="This is a convey msg from ympc.
                                    ">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="mb-4">
                                 <label class="form-label" for="example-textarea-input">Remarks</label>
                                 <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="remarks content.."></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <button type="button" class="btn btn-outline-info">Update</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade active show" id="btabs-animated-fade-profile" role="tabpanel" aria-labelledby="btabs-animated-fade-profile-tab">
                     <div class="table-responsive">
                        <table class="table table-borderless table-striped table-vcenter">
                           <thead>
                              <tr>
                                 <th class="text-center" >Manufacturer</th>
                                 <th class="text-center d-md-table-cell">Model</th>
                                 <th class="text-center" >Unit</th>
                                 <th class="text-center" >Selling price</th>
                                 <th class="text-center" >Gross profit</th>
                                 <th class="text-center" >Quote number</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class=" text-center fw-semibold fs-sm">
                                    <a href="" class="text-muted">Yamaha</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">G30E</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">JY3-MCU</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">¥ 70,000</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">¥ 70,000
                                    </a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">211202193600000073
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-settings" role="tabpanel" aria-labelledby="btabs-animated-fade-settings-tab">
                     <div class="table-responsive">
                        <table class="table table-borderless table-striped table-vcenter">
                           <thead>
                              <tr>
                                 <th class="text-center" >Manufacturer</th>
                                 <th class="text-center d-md-table-cell">Model</th>
                                 <th class="text-center" >Unit</th>
                                 <th class="text-center" >Estimated shipping date</th>
                                 <th class="text-center" >ship date</th>
                                 <th class="text-center" >Delivery Date</th>
                                 <th class="text-center" >Delivery Date</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class=" text-center fw-semibold fs-sm">
                                    <a href="" class="text-muted">Yamaha</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">G30E</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">JY3-MCU</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">2021/12/15</a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">
                                    </a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">2021/12/15
                                    </a>
                                 </td>
                                 <td class=" d-sm-table-cell text-center fs-sm">
                                    <a href="" class="text-muted">
                                    </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-orderer" role="tabpanel" aria-labelledby="btabs-animated-fade-orderer-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-md-6">
                               <div class="mb-4">
                              <label class="form-label" for="example-text-input">Full Name </label>
                              <div class="row">
                                 <div class="col-6">
                                    <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="崔">
                                 </div>
                                 <div class="col-6"><input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="秉姙"></div>
                              </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Email address
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="suzuki_masakazu@ympc.co.jp
                                    ">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Telephone number
                                 </label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="0537212672
                                    ">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script setup></script>