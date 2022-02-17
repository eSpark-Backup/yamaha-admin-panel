<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                  Media details
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
                           <label class="form-label" for="example-text-input">ID
                           </label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="34">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-text-input">Key
                           </label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-text-input">Title
                           </label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-text-input">Alternate text
                           </label>
                           <input type="text" class="form-control" id="example-text-input" name="example-text-input">
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
                           <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date" disabled placeholder="2019-10-17 11: 19: 05.173">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label" for="example-text-input">Current File
                           </label><br>
                           <a>https://assets.ympc-llv.com/undefined</a>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4">
                           <label class="form-label">Tenant access rights to subordinates</label>
                           <p>Tenant access rights granted (13 cases)</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mb-4"><label for="one-profile-edit-avatar" class="form-label">New file (valid after update is complete)</label><input id="one-profile-edit-avatar" type="file" class="form-control" accept="image/*"></div>
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