<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                  Product tag details
               </h1>
               <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-alt">
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">EC</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">Product</a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page">
                        Product Tag
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <div class="content">
      <div class="block block-rounded">
         <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
               <div class="row push">
                   <div class="col-md-6">
                       <div class="mb-4">
                      <label class="form-label" for="example-text-input">ID</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="cart011">
                    </div>
                   </div>
                   
                    <div class="col-md-6">
                       <div class="mb-4">
                      <label class="form-label" for="example-text-input">Product tag code <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="11 11">
                      <div id="" class="">Required field.</div>
                    </div>
                   </div>
                   <div class="col-md-6">
                       <div class="mb-4">
                      <label class="form-label" for="example-text-input">Product tag name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="cart011">
                      <div id="" class="">Required field.</div>
                    </div>
                   </div>
                   <div class="col-md-6">
                       <div class="mb-4">
                      <label class="form-label">Publishing Settings <span class="text-danger">*</span></label>
                      <div class="space-x-2">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                          <label class="form-check-label" for="example-radios-inline1">Set</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                          <label class="form-check-label" for="example-radios-inline2">Not Set</label>
                        </div>
                        
                      </div>
                      <div id="" class="">Required field.</div>
                    </div>
                   </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                       <label class="form-label" for="example-ltf-date">Publication start date and time <span class="text-danger">*</span></label><input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                       <div id="" class="">Required field.</div>
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="mb-4">
                       <label class="form-label" for="example-ltf-date">Publication end date and time</label><input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                     </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-4">
                      <label class="form-label" for="example-text-input">Registration date</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="2019-07-02 13: 51: 35.190">
                    </div>
                  </div>
                   <div class="col-md-6">
                      <div class="mb-4">
                      <label class="form-label" for="example-text-input">Update date</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="2019-07-02 13: 51: 35.190">
                    </div>
                  </div>
                 
                 
                 
               </div>
            </form>
         </div>
      </div>
     
            <div class="block block-rounded">
                 <div class="block-content block-content-full">
                 <div class="col-md-12">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                         <button type="button" class="btn btn-outline-info ms-2">Update</button>
                     </div>
                     </div>
</div>
       
   </div>
</template>
<script setup></script>