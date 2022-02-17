<template>
   <div class="bg-body-light">
      <div class="content content-full">
         <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
            <div class="flex-grow-1">
               <h1 class="h3 fw-bold mb-2">
                  Product Details
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
                        Product list
                     </li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
   <div class="content">
      <div class="row">
    <div class="col-6 col-lg-4">
      <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_orders.html">
        <div class="block-content block-content-full">
          <div class="fs-2 fw-semibold text-dark">250</div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-muted mb-0">
            Pending
          </p>
        </div>
      </a>
    </div>
    <div class="col-6 col-lg-4">
      <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
        <div class="block-content block-content-full">
          <div class="fs-2 fw-semibold text-dark">29</div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-muted mb-0">
            Available
          </p>
        </div>
      </a>
    </div>
    <div class="col-lg-4">
      <a class="block block-rounded block-link-shadow text-center" href="be_pages_ecom_product_edit.html">
        <div class="block-content block-content-full">
          <div class="fs-2 fw-semibold text-danger">
            <i class="fa fa-times"></i>
          </div>
        </div>
        <div class="block-content py-2 bg-body-light">
          <p class="fw-medium fs-sm text-danger mb-0">
            Remove Product
          </p>
        </div>
      </a>
    </div>
  </div>
      <div class="block block-rounded">
         <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
               <div class="row push">
                   <div class="col-md-6">
                       <div class="mb-4">
                      <label class="form-label" for="example-text-input">Product ID</label>
                      <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="e86805a6-bbab-45ad-b36f-fd0836b13cc2">
                    </div>
                   </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-select">Manufacturer name </label>
                        <select class="form-select" id="example-select" name="example-select">
                           <option>Open this select menu</option>
                           <option value="1" selected="">Yamaha</option>
                           <option value="2">Hitachi</option>
                           <option value="3">Option #3</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-select">Model name</label>
                        <select class="form-select" id="example-select" name="example-select">
                           <option>Open this select menu</option>
                           <option value="1">G30A</option>
                           <option value="2">G30E</option>
                           <option value="3" selected="">others</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-textarea-input">Item description (up to 50 characters)</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="1" placeholder="YTF2A （エンジン車）　ユーティリティ車両　※デモ車売却"></textarea>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label" for="example-textarea-input">Internal memo</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="YTF2A （エンジン車）　※固定資産（ストロボカラー）　2014年10月31日取得　取得価格：￥528,800／現在簿価：１円　

＊制御用バッテリー交換"></textarea>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-4">
                        <label class="form-label">Registration division</label>
                        <div class="space-x-2">
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                              <label class="form-check-label" for="example-radios-inline1">Temporary registration</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                              <label class="form-check-label" for="example-radios-inline2">Main registration</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="block block-rounded">
               <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-home" role="tab" aria-controls="btabs-animated-fade-home" aria-selected="false">Tag</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link active" id="btabs-animated-fade-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-profile" role="tab" aria-controls="btabs-animated-fade-profile" aria-selected="true">status</button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-settings-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-settings" role="tab" aria-controls="btabs-animated-fade-settings" aria-selected="false">
                     Purchase information
                     </button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-orderer-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-orderer" role="tab" aria-controls="btabs-animated-fade-orderer" aria-selected="false">
                     Storage location (shipping source)
                     </button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-specification-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-specification" role="tab" aria-controls="btabs-animated-fade-specification" aria-selected="false">
                     specification
                     </button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-photo-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-photo" role="tab" aria-controls="btabs-animated-fade-photo" aria-selected="false">
                     Photo
                     </button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-price-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-price" role="tab" aria-controls="btabs-animated-fade-price" aria-selected="false">
                     Price information
                     </button>
                  </li>
                  <li class="nav-item">
                     <button class="nav-link" id="btabs-animated-fade-quotation-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-quotation" role="tab" aria-controls="btabs-animated-fade-quotation" aria-selected="false">
                     Quotation information
                     </button>
                  </li>
               </ul>
               <div class="block-content tab-content overflow-hidden pb-3">
                  <div class="tab-pane fade" id="btabs-animated-fade-home" role="tabpanel" aria-labelledby="btabs-animated-fade-home-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-12">
                              <div class="mb-4">
                                 <label class="form-label">Inline Checkboxes</label>
                                 <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1" checked="">
                                       <label class="form-check-label" for="example-checkbox-inline1">E / G</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline2" name="example-checkbox-inline2">
                                       <label class="form-check-label" for="example-checkbox-inline2">Lead battery</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">lithium</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">Capacity 4-5 people</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">Capacity 2 people</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">Capacity 1 person</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">popular</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3"> 100,000 yen or less</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">300,000 yen or less</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">500,000 yen or less</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline3" name="example-checkbox-inline3">
                                       <label class="form-check-label" for="example-checkbox-inline3">700,000 yen or less</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade active show" id="btabs-animated-fade-profile" role="tabpanel" aria-labelledby="btabs-animated-fade-profile-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-ltf-date">Sales start date and time</label><input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-ltf-date">Publication start date and time</label><input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label">Sales suspension setting</label>
                                 <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                                       <label class="form-check-label" for="example-radios-inline1">Not Set</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                       <label class="form-check-label" for="example-radios-inline2">Set</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-ltf-date">End date and time of sale / publication</label><input type="datetime-local" class="form-control" id="example-ltf-date" name="example-ltf-date">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label">Display as a recommendation</label>
                                 <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                                       <label class="form-check-label" for="example-radios-inline1">Do not show</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                       <label class="form-check-label" for="example-radios-inline2">Indicate</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <button type="button" class="btn btn-outline-info">Proceed to confirmation screen</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-settings" role="tabpanel" aria-labelledby="btabs-animated-fade-settings-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Quantity </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">0</option>
                                    <option value="2">1</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-ltf-date">Purchase date </label><input type="date" class="form-control" id="example-ltf-date" name="example-ltf-date">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Supplier customer name</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Purchasing source prefecture </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                    <option value="6">Option #6</option>
                                    <option value="7">Option #7</option>
                                    <option value="8">Option #8</option>
                                    <option value="9">Option #9</option>
                                    <option value="10">Option #10</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">The purchase amount</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Supplier introduction distributor </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">Treasure quotient</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                    <option value="6">Option #6</option>
                                    <option value="7">Option #7</option>
                                    <option value="8">Option #8</option>
                                    <option value="9">Option #9</option>
                                    <option value="10">Option #10</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <button type="button" class="btn btn-outline-info">Proceed to confirmation screen</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-orderer" role="tabpanel" aria-labelledby="btabs-animated-fade-orderer-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Storage (shipping) location</label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">Yamaha</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-specification" role="tabpanel" aria-labelledby="btabs-animated-fade-specification-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Made date</label>
                                 <input type="date" class="form-control" id="example-date-input" name="example-date-input" placeholder="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Headquarters shipping year</label>
                                 <input type="date" class="form-control" id="example-date-input" name="example-date-input" placeholder="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Model (uppercase letters, hyphens, half-width characters only)</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Unit (English uppercase number hyphen half-width only)</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Genre </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">Passenger electromagnetic</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Power  </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">E / G</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Capacity</label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">E / G</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Color</label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">White</option>
                                    <option value="2">Red</option>
                                    <option value="3">Option #3</option>
                                    <option value="4">Option #4</option>
                                    <option value="5">Option #5</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Window shield specifications</label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">1 Sheet</option>
                                    <option value="2">Split</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Bag support </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">Foldable</option>
                                    <option value="2">Fixed type</option>
                                    <option value="3">option3</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-textarea-input">ROM specifications</label>
                                 <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-textarea-input">ОP included</label>
                                 <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-select">Manufacturer maintenance
                                 </label>
                                 <select class="form-select" id="example-select" name="example-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">None</option>
                                    <option value="2">Yes</option>
                                    <option value="3">option3</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-textarea-input">Repair location</label>
                                 <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="1" placeholder="Textarea content.."></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-textarea-input">Remarks</label>
                                 <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <button type="button" class="btn btn-outline-info">Proceed to confirmation screen</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-photo" role="tabpanel" aria-labelledby="btabs-animated-fade-photo-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-md-4">
                              <div class="mb-4"><label for="one-profile-edit-avatar" class="form-label">Choose a new photo</label><input id="one-profile-edit-avatar" type="file" class="form-control" accept="image/*"></div>
                           </div>
                           <div class="col-md-4">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Caption</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Text Input">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="mb-4">
                                 <label class="form-label">Display</label>
                                 <div class="space-x-2">
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1" checked="">
                                       <label class="form-check-label" for="example-radios-inline1">Not Set</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                       <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                                       <label class="form-check-label" for="example-radios-inline2">Set</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <button type="button" class="btn btn-outline-info">Proceed to confirmation screen</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade" id="btabs-animated-fade-price" role="tabpanel" aria-labelledby="btabs-animated-fade-price-tab">
                     <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row push">
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Partition amount </label>
                                 <input type="number" class="form-control" id="example-number-input" name="example-number-input" placeholder="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Cost</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="0">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-4">
                                 <label class="form-label" for="example-text-input">Gross profit</label>
                                 <input type="text" class="form-control" id="example-text-input" name="example-text-input" disabled placeholder="">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <button type="button" class="btn btn-outline-info">Proceed to confirmation screen</button>
                           </div>
                        </div>
                     </form>
                  </div>
                   <div class="tab-pane fade" id="btabs-animated-fade-quotation" role="tabpanel" aria-labelledby="btabs-animated-fade-quotation-tab">
                     <div class="table-responsive">
               <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                     <tr>
                        <th class="text-center" >Quote number</th>
                        <th class="text-center d-md-table-cell">Status</th>
                        <th class="text-center" >Quotation request distributor</th>
                        <th class="text-center" >Estimated date</th>
                        <th class="text-center" >Delivery date</th>
                       

                     </tr>
                  </thead>
                  <tbody>
                      </tbody>
                      </table>
                      </div>
                  </div>
               </div>
            </div>
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