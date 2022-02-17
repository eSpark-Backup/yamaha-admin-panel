<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                  New media registration
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
                        <label class="form-label" for="example-text-input">Key
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                     </div>
                     <div class="col-md-6">
                        <label class="form-label" for="example-text-input">title
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                     </div>
                     <div class="col-md-6">
                        <label class="form-label" for="example-text-input">Alternate text
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                     </div>
                     <div class="col-md-6">
                       <div class="mb-4"><label for="one-profile-edit-avatar" class="form-label">Media upload <span class="text-danger">*</span></label><input id="one-profile-edit-avatar" type="file" class="form-control" accept="image/*">
                         <div id="" class="">Required field.</div>
                       </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label">Tenant access rights to subordinates</label>
                           <div class="space-y-2">
                              <div class="form-check form-switch">
                                 <input class="form-check-input" type="checkbox" value="" id="example-switch-default1" name="example-switch-default1" checked="">
                                 <label class="form-check-label" for="example-switch-default1">Grant</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button type="button" class="btn btn-outline-info ms-2">Proceed to confirmation screen</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>
<script setup></script>