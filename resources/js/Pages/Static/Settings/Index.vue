<template>
  
   <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-2">
                   Settings
                </h1>
                <h2 class="fs-base lh-base fw-medium text-muted mb-0">
                  Site basic information
                </h2>
               
              </div>
              
            </div>
          </div>
        </div>
      
            
        
        <!-- Page content -->
        <div class="content">
            <div class="alert alert-danger alert-dismissible " role="alert">
                    <p class="mb-0">
                      This is an error message with a <a class="alert-link" href="javascript:void(0)">link</a>!
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            <div class="block block-rounded">
               <div class="block-content block-content-full">
              <div class="row">
               
                <div class="col-lg-12 space-y-2">
                
                 
<div class="row g-4">
                      <div class="col-md-6">
                        <label class="form-label" for="example-ltf-date">Maintenance start date and time</label>
                      <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date" >
                      
                      </div>
                      <div class="col-md-6">
                       <label class="form-label" for="example-ltf-date">Maintenance end date and time</label>
                      <input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date" >
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="example-text-input">Site name </label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="example-text-input">Top title</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input">
                      </div>
                      <div class="col-12">
                          <label class="form-label" for="example-textarea-input">Top description</label>
                        
                       <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" ></textarea>
                      </div>
                     
                     
                      <div class="col-4">
                          <button type="button" class="btn btn-outline-info">Update</button>
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
