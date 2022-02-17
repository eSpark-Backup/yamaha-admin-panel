<template>
<div class="page-heading bg-white text-center py-3"><h1 class="mb-0 text-uppercase">Quotation list</h1></div>

<div class="content">
   <div class="container">

 
<div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Quotation list</h3>
            </div>
            <div class="block-content block-content-full">
              <div class="row">
               <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                   There is no customer quote history.
                    </p>
                  </div>
                <div class="col-lg-8 space-y-2">
                  <!-- Form Inline - Default Style -->
               <form class="space-y-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="example-hf-email">Quote Number</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="example-hf-email" name="example-hf-email" >
                      </div>
                    </div>
                    <div class="row">
                       
                      <label class="col-sm-4 col-form-label form-label" for="example-select">Estimated status</label>
                      <div class="col-sm-8">
                      <select class="form-select" id="example-select" name="example-select">
                        <option selected="">Open this select menu</option>
                        <option value="1">Quotation requested</option>
                        <option value="2">Estimated answered</option>
                        
                      </select>
                   </div>
                     
                    </div>
                    <div class="row">
                      <label class="col-sm-4 col-form-label" for="example-hf-password">Delivery company name</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" id="example-hf-password" name="example-hf-password">
                      </div>
                    </div>
                     
                      <div class="row">
                       
                      <label class="col-sm-4 col-form-label form-label" for="example-select">Model Name</label>
                      <div class="col-sm-8">
                      <select class="form-select" id="example-select" name="example-select">
                        <option selected="">Open this select menu</option>
                        <option value="1">G30A</option>
                        <option value="2">G30E</option>
                         <option value="3">G31AP</option>
                        <option value="4">G31EP</option>
                        <option value="5">YDRE</option>
                        <option value="6">YDRA</option>
                         <option value="7">DR2A</option>
                        <option value="8">DR2E</option>
                         <option value="8">others</option>
                       
                        
                      </select>
                   </div>
                     
                    </div>
                    <div class="row">
                         <div class="col-sm-4">
                       
                      </div>
                      <div class="col-sm-8">
                          <div class="row">
                             <div class="col-sm-3 mb-2">
                                 <a class="btn rounded-pill btn-danger" href=""> Search</a>
                       

                             </div>
                             <div class="col-sm-9 mb-2">
                          <a class="btn rounded-pill btn-danger" href=""> Clear the condition</a>

                             </div>
                             </div>
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