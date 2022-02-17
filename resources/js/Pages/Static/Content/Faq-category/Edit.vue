<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                 FAQ category details
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
                          <div class="mb-4">
                      <label class="form-label" for="example-text-input">ID</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="11">
                    </div>
                      </div>
                      <div class="col-md-6">
                          <div class="mb-4">
                        <label class="form-label" for="example-text-input">Category name <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                         <div id="" class="">Required field.</div>
                     </div>
                     </div>
                      <div class="col-md-6">
                          <div class="mb-4">
                        <label class="form-label" for="example-text-input">Label <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                         <div id="" class="">Required field.</div>
                     </div>
                     </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label">Tenant access rights to subordinates</label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input"  >
                              
                              <p>Tenant access rights granted (13 cases)</p>
                           
                        </div>
                     </div>
                      <div class="col-md-6">
                          <div class="mb-4">
                      <label class="form-label" for="example-text-input">Registration date</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="2018-07-09 13: 19: 39.120">
                    </div>
                      </div>
                       <div class="col-md-6">
                          <div class="mb-4">
                      <label class="form-label" for="example-text-input">Update date
</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="2018-07-09 13: 19: 39.120">
                    </div>
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