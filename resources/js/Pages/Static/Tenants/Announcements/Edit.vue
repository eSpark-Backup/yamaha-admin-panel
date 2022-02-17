<template>
<div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                 Tenant Notice Details
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
                      <label class="form-label" for="example-ltf-date">Publication start date and time <span class="text-danger">*</span></label>
                      <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                      <div id="" class="">Required field.</div>
                      </div>
                   <div class="col-md-6"><label class="form-label" for="example-ltf-date">Publication end date and time</label><input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date"></div>
                     
                    
                     
                     
                     
                     
                      <div class="col-md-12">
                        <label class="form-label" for="example-text-input">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                        <div id="" class="">Required field.</div>
                     </div>
                   
                     <div class="col-12">
                        <label class="form-label" for="example-textarea-input">Top description <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4"></textarea>
                     <div id="" class="">Required field.</div>
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
<script setup>
</script>