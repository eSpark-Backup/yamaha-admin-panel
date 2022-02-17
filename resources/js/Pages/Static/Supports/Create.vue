<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
               Inquiry new registration
               </h1>
               <nav class="flex-shrink-0 mt-3 mt-sm-0" aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-alt">
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">EC</a>
                     </li>
                     <li class="breadcrumb-item">
                        <a class="link-fx" href="javascript:void(0)">support</a>
                     </li>
                     <li class="breadcrumb-item" aria-current="page">
                        inquiry
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
                        <label class="form-label" for="example-select">Destination <span class="text-danger">*</span></label>
                        <select class="form-select" id="example-select" name="example-select">
                           
                           <option value="1">Option #1</option>
                           <option value="2">Option #2</option>
                           <option value="3">Option #4</option>
                        </select>
                        <div id="" class="">Required field.</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-select">Inquiry status <span class="text-danger">*</span></label>
                        <select class="form-select" id="example-select" name="example-select">
                           <option selected="">Open this select menu</option>
                           <option value="1">Unanswered</option>
                           <option value="2">Answered</option>
                           <option value="3">Supported</option>
                        </select>
                        <div id="" class="">Required field.</div>
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="mb-4">
                      <label class="form-label" for="example-text-input">Order number
</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-select">Inquiry type <span class="text-danger">*</span></label>
                        <select class="form-select" id="example-select" name="example-select">
                           <option selected="">Open this select menu</option>
                           <option value="1">About the product</option>
                           <option value="2">About your order</option>
                           <option value="3">others</option>
                           <option value="4">About delivery date</option>
                           
                        </select>
                        <div id="" class="">Required field.</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-textarea-input">Inquiry <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                        <div id="" class="">Required field.</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-textarea-input">Corresponding memo / takeover column </label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                       
                     </div>
                  </div>
                 
                  <div class="col-md-6">
                     <div class="mb-4">
                      <label class="form-label" for="example-text-input">Part number

</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label">Sender <span class="text-danger">*</span></label>
                        <div class="space-x-2">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                              <label class="form-check-label" for="example-radios-inline1">Administrator</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                              <label class="form-check-label" for="example-radios-inline2">Member </label>
                           </div>
                        </div>
                        <div id="" class="">Required field.</div>
                     </div>
                  </div>
                   <div class="col-md-12">
                              <button type="button" class="btn btn-outline-info">Proceed to confirmation screen</button>
                           </div>
               </div>
            </form>
         </div>
      </div>
     
   </div>
</template>
<script setup></script>