<template>
  <div class="bg-body-light">
    <div class="content content-full">
      <div
        class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2"
      >
        <div class="flex-grow-1">
          <h1 class="h3 fw-bold mb-2">Inquiry details</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Destination</h3>
      </div>
      <div class="block-content block-content-full">
        <div class="row">
          <div class="col-lg-12 space-y-5">
            <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
              <div class="mb-4">
                <label class="form-label" for="example-text-input">Member name</label>
                <input
                  type="text"
                  class="form-control"
                  id="example-text-input"
                  name="example-text-input"
                  disabled
                  placeholder="Masaki Hattori"
                />
              </div>
              <div class="mb-4">
                <label class="form-label" for="example-text-input">email address</label>
                <input
                  type="text"
                  class="form-control"
                  id="example-text-input"
                  name="example-text-input"
                  disabled
                  placeholder="masa.green-field@wh.commufa.jp"
                />
              </div>
              <div class="mb-4">
                <label class="form-label" for="example-text-input">Affiliated tenant</label>
                <input
                  type="text"
                  class="form-control"
                  id="example-text-input"
                  name="example-text-input"
                  disabled
                  placeholder="(Yes) Green Field"
                />
              </div>
            </form>
            <!-- END Form Labels on top - Default Style -->
          </div>
        </div>
      </div>
    </div>
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Inquiry information</h3>
      </div>
      <div class="block-content block-content-full">
        <div class="row">
          <div class="col-lg-12 space-y-5">
            <form action="be_forms_layouts.html" method="POST" onsubmit="return false;">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-4">
                    <label class="form-label" for="example-text-input">Inquiry ID</label>
                    <input
                      type="text"
                      class="form-control"
                      id="example-text-input"
                      name="example-text-input"
                      disabled
                      placeholder="Masaki Hattori"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <label class="form-label" for="example-text-input">Inquiry status</label>
                    <input
                      type="text"
                      class="form-control"
                      id="example-text-input"
                      name="example-text-input"
                      disabled
                      placeholder="Answered"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <label class="form-label" for="example-select">
                      Inquiry type
                      <span class="text-danger">*</span>
                    </label>
                    <select class="form-select" id="example-select" name="example-select">
                      <option selected>Open this select menu</option>
                      <option value="1">About the product</option>
                      <option value="2">About your order</option>
                      <option value="3">Option #3</option>
                      <option value="4">Option #4</option>
                      <option value="5">Option #5</option>
                    </select>
                    <div id class>Required field.</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <label class="form-label" for="example-text-input">order number</label>
                    <input
                      type="text"
                      class="form-control"
                      id="example-text-input"
                      name="example-text-input"
                      disabled
                      placeholder="234234"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <label class="form-label" for="example-text-input">part number</label>
                    <input
                      type="text"
                      class="form-control"
                      id="example-text-input"
                      name="example-text-input"
                      disabled
                      placeholder="234234"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <label
                      class="form-label"
                      for="example-text-input"
                    >Corresponding memo / takeover column</label>
                    <textarea
                      class="form-control"
                      id="example-textarea-input"
                      name="example-textarea-input"
                      rows="1"
                      placeholder="sdfg"
                    ></textarea>
                  </div>
                </div>
              </div>
            </form>
            <!-- END Form Labels on top - Default Style -->
          </div>
          <div class="col-sm-6 col-xl-4">
            <button type="button" class="btn btn-outline-info">Update</button>
          </div>
        </div>
      </div>
    </div>
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Inquiry details</h3>
      </div>
      <div class="block-content block-content-full">
        <div class="table-responsive">
          <table class="table table-hover table-vcenter">
            <tbody class="fs-sm">
              <tr>
                <td>
                  <p class="fs-sm fw-medium text-muted mb-0">Member</p>
                </td>
                <td>
                  <p class="fs-sm fw-medium text-muted mb-0">Masaki Hattori</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <p class="fs-sm fw-medium text-muted mb-0">2021-12-10 13: 20: 39.462</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="fs-sm fw-medium text-muted mb-0">Member</p>
                </td>
                <td>
                  <p class="fs-sm fw-medium text-muted mb-0">Masaki Hattori</p>
                </td>
                <td class="d-none d-xl-table-cell">
                  <p class="fs-sm fw-medium text-muted mb-0">2021-12-10 13: 20: 39.462</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="mb-4">
              <label class="form-label" for="example-text-input">
                Reply content
                <span class="text-danger">*</span>
              </label>
              <textarea
                class="form-control"
                id="example-textarea-input"
                name="example-textarea-input"
                rows="3"
                placeholder
              ></textarea>
              <div id class>Required field.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-4">
              <label class="form-label" for="example-select">
                Inquiry status
                <span class="text-danger">*</span>
              </label>
              <select class="form-select" id="example-select" name="example-select">
                <option selected>Open this select menu</option>
                <option value="1">Answered</option>
                <option value="2">Unanswered</option>
                <option value="3">Supported</option>
              </select>
              <div id class>Required field.</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-4">
              <label class="form-label">
                Sender
                <span class="text-danger">*</span>
              </label>
              <div class="space-x-2">
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    id="example-radios-inline1"
                    name="example-radios-inline"
                    value="option1"
                    checked
                  />
                  <label class="form-check-label" for="example-radios-inline1">Administrato</label>
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    id="example-radios-inline2"
                    name="example-radios-inline"
                    value="option2"
                  />
                  <label class="form-check-label" for="example-radios-inline2">Member</label>
                </div>
              </div>
              <div id class>Required field.</div>
            </div>
          </div>
          <div class="col-12">
            <button type="button" class="btn btn-outline-info mt-2">Status Update</button>
            <button type="button" class="btn btn-outline-info ms-3 mt-2">Register</button>
            <button type="button" class="btn btn-outline-info ms-3 mt-2">Registration/Transmission</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>


</script>
