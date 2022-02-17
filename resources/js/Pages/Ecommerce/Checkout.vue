<template>
  <div class="checkout-sec">
    <div class="row">
      <div class="col-lg-6 pe-sm-5 checkout-left-col">
        <Cart :cart="cart" />
      </div>
      <div class="col-lg-6 checkout-accordian bg-white ps-0">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item border-0">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >Delivery destination information setting</button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Company name
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Zip code
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="example-select">
                        Prefecture
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <select class="form-select" id="example-select" name="example-select">
                        <option selected></option>
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
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Municipality
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Lot name address
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Building name
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Phone number
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Person in charge
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-2">
                      <label class="form-label w-100 big-label" for="val-username">
                        Desired delivery period
                        <span
                          id="val-username-error"
                          class="text-red float-end font-12"
                        >* Required items</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-2"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">From</label>
                      <input type="date" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">To</label>
                      <input type="date" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >Applicant information</button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Email address
                       
                      </label>
                      <input type="text" class="form-control"  value="suzuki_kazuhiro@ympc.co.jp"  disabled/>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                       Full name
                        
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" value="Kazuhiro Suzuki"  disabled/>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="example-select">
                       Post code
                       
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" value="436-0084"  disabled/>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Prefectures
                        
                      </label>
 <input type="text" class="form-control" id="val-username" name="val-username" value="Shizuoka Prefecture"  disabled/>                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                       Municipalities
                       
                      </label>
<input type="text" class="form-control" id="val-username" name="val-username" value="Sakagawa, Kakegawa City"  disabled/>  
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Lot name
                        
                      </label>
<input type="text" class="form-control" id="val-username" name="val-username" value="241-21-2"  disabled/>                     </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                       Building name
                      
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" value="Yamaha Motor Power Products Co., Ltd." disabled />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Department name
                        
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" value="Marketing Management Department LLV Domestic Sales Department" disabled />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-2">
                      <label class="form-label w-100" for="val-username">
                        Telephone number
                       
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" value="0537-27-1983" disabled />
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-2">
                       <label class="form-label w-100" for="val-username">
                       Fax number
                       
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" value="0537-27-0581" disabled />
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >Quote requester information</button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
               <div class="row">
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Name
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                   <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Email address
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
                   <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        Phone number
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* Required items</span>
                      </label>
                      <input type="text" class="form-control" id="val-username" name="val-username" />
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >Transmission matters</button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
               
               <div class="row">
                  <div class="col-xl-6">
                    <div class="mb-4">
                     
                      <textarea rows="4" cols="50">

</textarea>
                    </div>
                  </div>
               </div>
              </div>
            </div>
          </div>
        </div>
        <div class="quote-btn">
          <button type="button" class="btn rounded-pill btn-danger w-100">TO REQUEST A QUOTE</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import Cart from './Checkout/Cart.vue';
const props = defineProps({ cart: Object })
</script>
