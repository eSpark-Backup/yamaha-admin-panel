<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                 New consumption tax registration
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
                      <label class="form-label" for="example-select">Consumption tax category</label>
                      <select class="form-select" id="example-select" name="example-select">
                        <option selected="">Open this select menu</option>
                        <option value="1">Option #1</option>
                        <option value="2">Option #2</option>
                        <option value="3">Option #3</option>
                        
                      </select>
                    </div>
                      </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-text-input">Start date  <span class="text-danger">*</span>
                           </label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                           <div id="" class="">Required field.</div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-text-input">End date    <span class="text-danger">*</span>
                           </label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                           <div id="" class="">Required field.</div>
                        </div>
                     </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-number-input">Tax rate %  <span class="text-danger">*</span>
                           </label>
                           <input type="number" class="form-control " id="example-number-input" name="example-number-input">
                           <div id="" class="">Required field.</div>
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