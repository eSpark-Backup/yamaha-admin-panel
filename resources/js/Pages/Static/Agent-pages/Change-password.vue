<template>
<div class="page-heading bg-white text-center py-3"><h1 class="mb-0 text-uppercase">Change Password</h1></div>

<div class="content">
   <div class="container">

 
<div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Change Password</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
               <div class="col-lg-5">
                    <p class="fs-sm text-muted">
                   Please enter your current password and new password.
                    </p>
                  </div>
                <div class="col-lg-7 space-y-2">
                  <!-- Form Inline - Default Style -->
               <form class="space-y-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                    <div class="row w-100 gx-0">
                      <label class="col-form-label ps-0" for="example-hf-email">Current password <span id="val-username-error" class="text-red  error-font">* Required items</span></label>
                     
                        <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                      
                    </div>
                    <div class="row w-100 gx-0">
                      <label class="col-form-label ps-0" for="example-hf-password">New password <span id="val-username-error" class="text-red  error-font">* Required items</span></label>
                     
                        <input type="password" class="form-control" id="example-hf-password" name="example-hf-password">
                      
                    </div>
                     <div class="row w-100 gx-0">
                      <label class="col-form-label ps-0" for="example-hf-password">New password confirmation <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                      
                        <input type="password" class="form-control" id="example-hf-password" name="example-hf-password">
                     
                    </div>
                   
                    <div class="row">
                        
                      <div class="col-sm-4 mt-2">
                          
                            
                                 <a class="btn rounded-pill btn-danger w-100" href=""> Change</a>
                       

                            
                           
                           
                      </div>
                      
                    </div>
                  </form>
                  <!-- END Form Inline - Default Style -->

                
                </div>
              </div>
            </div>
          </div>
</div>
  </div>
</template>
<script></script>