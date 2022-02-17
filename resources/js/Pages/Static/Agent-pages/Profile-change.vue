<template>
<div class="page-heading bg-white text-center py-3"><h1 class="mb-0 text-uppercase">Member information change</h1></div>
   <div class="content">
      <div class="container">
         <div class="block block-rounded">
            <div class="block-header block-header-default">
               <h3 class="block-title">Profile Change</h3>
            </div>
            <div class="block-content block-content-full">
               <div class="row">
                  <div class="col-lg-4">
                     <p class="fs-sm text-muted">
                        Please enter each item.
                     </p>
                  </div>
                  <div class="col-lg-8 space-y-2">
                     <!-- Form Inline - Default Style -->
                     <form class="space-y-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                        <div class="row">
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Login ID</label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" value="suzuki_kazuhiro@ympc.co.jp" disabled>
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Email Address</label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" value="suzuki_kazuhiro@ympc.co.jp" disabled >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Name <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Zip code <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label form-label" for="example-select">Prefecture <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <select class="form-select" id="example-select" name="example-select">
                                 <option selected="">Open this select menu</option>
                                 <option value="1">Option #1</option>
                                 <option value="2">Option #2</option>
                                 <option value="3">Option #3</option>
                                 <option value="4">Option #4</option>
                                 <option value="5">Option #5</option>
                                 <option value="6">Option #6</option>
                                 <option value="7">Option #7</option>
                                 <option value="8">Option #8</option>
                                 <option value="9">Option #9</option>
                                 <option value="10">Option #10</option>
                              </select>
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Municipality <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Lot Name Address <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Building Name</label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Department Name</label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Phone Number <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                           <div class="col-sm-6 mb-2">
                              <label class="col-form-label" for="example-hf-email">Fax Number</label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-4 mb-2">
                              <a class="btn rounded-pill btn-danger w-100" href=""> Confirmation</a>
                           </div>
                        </div>
                     </form>
                     <!-- END Form Inline - Default Style -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script></script>