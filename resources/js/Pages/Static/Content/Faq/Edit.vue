<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                 FAQ details
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
                        <label class="form-label" for="example-text-input">ID 
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="5">
                     </div>
                       <div class="col-md-6">
                        <div class="mb-4">
                      <label class="form-label" for="example-select">FAQ category <span class="text-danger">*</span>
                           </label>
                      
                      <select class="form-select" id="example-select" name="example-select">
                        <option selected="">Open this select menu</option>
                        <option value="1">About the order</option>
                        <option value="2">Member registration</option>
                        
                      </select>
                      <div id="" class="">Required fields.</div>
                    </div>
                     </div>
                    
                    
                     <div class="col-md-6">
                        <div class="mb-4">
                      <label class="form-label">Public target <span class="text-danger">*</span></label>
                      <div class="space-x-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                          <label class="form-check-label" for="example-radios-inline1">Non-member</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                          <label class="form-check-label" for="example-radios-inline2">Non-member</label>
                        </div>
                       
                      </div>
                      <div id="" class="">Required field.</div>
                    </div>
                     </div>
                      <div class="col-md-6">
                          <div class="mb-4">
                        <label class="form-label" for="example-text-input">Question <span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                        <div id="" class="">Required field.</div>
                     </div>
                     </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                      <label class="form-label">Publishing Settings <span class="text-danger">*</span></label>
                      <div class="space-x-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                          <label class="form-check-label" for="example-radios-inline1">Not set</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                          <label class="form-check-label" for="example-radios-inline2">Set</label>
                        </div>
                       
                      </div>
                      <div id="" class="">Required field.</div>
                    </div>
                     </div>
                     <div class="col-md-6">
                         <div class="mb-4">
                      <label class="form-label" for="example-textarea-input">Answer <span class="text-danger">*</span></label>
                      <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="2" placeholder=""></textarea>
                      <div id="" class="">Required field.</div>
                    </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label">Tenant access rights to subordinates</label>
                          <p>Tenant access rights granted (13 cases)</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                          <div class="mb-4">
                         <label class="form-label" for="example-ltf-date">Publication start date and time <span class="text-danger">*</span></label>
                         <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                         <div id="" class="">Required field.</div>
                         </div>
                         </div>
                         <div class="col-md-6">
                          <div class="mb-4">
                         <label class="form-label" for="example-ltf-date">Publication end date and time </label>
                         <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                        
                         </div>
                         </div>
                         <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-ltf-date">Registration date</label>
                           <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date" disabled placeholder="2019-10-17 11: 19: 05.173">
                        </div>
                     </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-ltf-date">Update date</label>
                           <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date"  placeholder="2019-10-17 11: 19: 05.173" disabled>
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