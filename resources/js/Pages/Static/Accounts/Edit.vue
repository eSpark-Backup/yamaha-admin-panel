<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                  Administrator account details
               </h1>
            </div>
         </div>
      </div>
   </div>
   <div class="content">
      <div class="block block-rounded">
         <div class="block-content block-content-full">
            <div class="row">
               <div class="col-lg-12 space-y-2">
                  <div class="row g-4">
                     <div class="col-md-6">
                        <label class="form-label" for="example-text-input">Login ID <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="choi_byeongim@ympc.co.jp">
                        <div id="" class="">Required field.</div>
                     </div>
                     <div class="col-md-6">
                        <label class="form-label" for="example-text-input">Full Name <span class="text-danger">*</span></label>
                        <div class="row">
                           <div class="col-6">
                              <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="崔">
                           </div>
                           <div class="col-6"><input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="秉姙"></div>
                        </div>
                        <div id="" class="">Required field.</div>
                     </div>
                     <div class="col-md-6">
                        <label class="form-label" for="example-select">Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="example-select" name="example-select">
                           <option selected="">Open this select menu</option>
                           <option value="1" selected>Active</option>
                           <option value="2">Authentication invalid</option>
                           <option value="2">Lockout</option>
                        </select>
                        <div id="" class="">Required field.</div>
                     </div>
                     <div class="col-md-6">
                        <label class="form-label" for="example-select"> Language setting <span class="text-danger">*</span></label>
                        <select class="form-select" id="example-select" name="example-select">
                           <option selected="">Open this select menu</option>
                           <option value="1" selected>Japanese</option>
                        </select>
                        <div id="" class="">Required field.</div>
                     </div>
                     <div class="col-md-6">
                        <label class="form-label" for="example-text-input">Tenant access right </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                     </div>
                     <div class="col-md-12">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                        <button type="button" class="btn btn-outline-info ms-2">Update</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script setup></script>