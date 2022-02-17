
<template>
<div class="page-heading bg-white text-center py-3"><h1 class="mb-0 text-uppercase">E-mail Address Change</h1></div>

<div class="content">
   <div class="container">

 
<div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">E-mail Address Change</h3>
            </div>
              <div class="block-content block-content-full">
                  <div class="row">
 <div class="col-lg-4">
                     <p class="fs-sm text-muted">
                      Please enter the email address
                     </p>
                      <p class="fs-sm text-muted">
                      you want to change (a PIN code for identity verification will be sent)
                     </p>
                  </div>
                  <div class="col-lg-8 space-y-2">
                       <form class="space-y-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                       <div class="row">
                           <div class="col-sm-12 mb-2">
 <label class="col-form-label" for="example-hf-email">Your current email address</label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" value="suzuki_kazuhiro@ympc.co.jp" disabled>
                       </div>
                       <div class="col-sm-12 mb-2">
 <label class="col-form-label" for="example-hf-email">Email address to change <span id="val-username-error" class="text-red error-font">* Required items</span></label>
                              <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                       </div>
                        <div class="row">
                           <div class="col-sm-4 mt-2">
                              <a class="btn rounded-pill btn-danger w-100" href=""> To The Next</a>
                           </div>
                        </div>
                       </div>
                       </form>
                      
                  </div>
                  </div>
              </div>
            </div>
            </div>
            </div>
</template>

<script></script>