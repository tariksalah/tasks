@extends('admin.layouts.master')

@section('content')









<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-lg-12">


      <!--begin::Portlet-->
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Section Separator
            </h3>
          </div>
        </div>

        <!--begin::Form-->
        <form class="kt_form_1">    <!-- kt_form_1   kt-form  -->



                    <!-- sticky head -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                      <div class="row">
                        <div class="col-lg-12">
                          <!--begin::Portlet-->
                          <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                            <div class="kt-portlet__head kt-portlet__head--lg">
                              <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Sticky Portlet <small>try to scroll the page</small></h3>
                              </div>
                              <div class="kt-portlet__head-toolbar">
                                <a href="#" class="btn btn-clean kt-margin-r-10">
                                  <i class="la la-arrow-left"></i>
                                  <span class="kt-hidden-mobile">Back</span>
                                </a>
                                <div class="btn-group">
                                  <button type="button" class="btn btn-brand">
                                    <i class="la la-check"></i>
                                    <span class="kt-hidden-mobile">Save</span>
                                  </button>
                                  <button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                      <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                          <i class="kt-nav__link-icon flaticon2-reload"></i>
                                          <span class="kt-nav__link-text">Save & continue</span>
                                        </a>
                                      </li>
                                      <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                          <i class="kt-nav__link-icon flaticon2-power"></i>
                                          <span class="kt-nav__link-text">Save & exit</span>
                                        </a>
                                      </li>
                                      <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                          <i class="kt-nav__link-icon flaticon2-edit-interface-symbol-of-pencil-tool"></i>
                                          <span class="kt-nav__link-text">Save & edit</span>
                                        </a>
                                      </li>
                                      <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                          <i class="kt-nav__link-icon flaticon2-add-1"></i>
                                          <span class="kt-nav__link-text">Save & add new</span>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--end::Portlet-->
                        </div>
                      </div>
                    </div>
                    <!-- end sticky head -->




          <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">





              <!-- inpust -->
              <div class="form-group">
                <label>Full Name:</label>
                <input type="email" class="form-control" placeholder="Enter full name">
                <span class="form-text text-muted">Please enter your full name</span>
              </div>
              <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
              <div class="form-group">
                <label>Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email">
                <span class="form-text text-muted">We'll never share your email with anyone else</span>
              </div>
              <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
              <div class="form-group">
                <label>Subscription</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2">$</span></div>
                  <input type="text" class="form-control" placeholder="99.9">
                </div>
              </div>
              <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
              <div class="form-group">
                <label>Communication:</label>
                <div class="kt-checkbox-list">
                  <label class="kt-checkbox">
                    <input type="checkbox"> Email
                    <span></span>
                  </label>
                  <label class="kt-checkbox">
                    <input type="checkbox"> SMS
                    <span></span>
                  </label>
                  <label class="kt-checkbox">
                    <input type="checkbox"> Phone
                    <span></span>
                  </label>
                </div>
              </div>
              <!-- inpust -->





              <!-- switches -->
              <div class="form-group row">
                <label class="col-3 col-form-label">Success</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
                <label class="col-3 col-form-label">Warning</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--warning">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label">Info</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--info">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
                <label class="col-3 col-form-label">Danger</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--danger">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label">Primary</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--primary">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
                <label class="col-3 col-form-label">Brand</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--brand">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-3 col-form-label">Dark</label>
                <div class="col-3">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--dark">
                    <label>
                      <input type="checkbox" checked="checked" name="">
                      <span></span>
                    </label>
                  </span>
                </div>
              </div>
              <!-- End switches -->






              <!-- Select2 -->
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Basic Example</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2_1" name="param">
                    <option value="AK">Alaska</option>
                    <option value="HI">Hawaii</option>
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="IN">Indiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="OH">Ohio</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WV">West Virginia</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Nested Example</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2_2" name="param">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV" selected>Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                      <option value="ID">Idaho</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NM">New Mexico</option>
                      <option value="ND">North Dakota</option>
                      <option value="UT">Utah</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="IL">Illinois</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="OK">Oklahoma</option>
                      <option value="SD">South Dakota</option>
                      <option value="TX">Texas</option>
                      <option value="TN">Tennessee</option>
                      <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="IN">Indiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="OH">Ohio</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Placeholder</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2_4" name="param">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                      <option value="ID">Idaho</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NM">New Mexico</option>
                      <option value="ND">North Dakota</option>
                      <option value="UT">Utah</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="IL">Illinois</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="OK">Oklahoma</option>
                      <option value="SD">South Dakota</option>
                      <option value="TX">Texas</option>
                      <option value="TN">Tennessee</option>
                      <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="IN">Indiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="OH">Ohio</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Remote Data</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2_6" name="param">
                    <option></option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Limiting Selections</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2_9" name="param" multiple>
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV" selected>Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                      <option value="ID">Idaho</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NM">New Mexico</option>
                      <option value="ND">North Dakota</option>
                      <option value="UT">Utah</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="IL">Illinois</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="OK">Oklahoma</option>
                      <option value="SD">South Dakota</option>
                      <option value="TX">Texas</option>
                      <option value="TN">Tennessee</option>
                      <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="IN">Indiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="OH">Ohio</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Tagging Support</label>
                <div class=" col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2_11" multiple name="param">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                      <option value="ID">Idaho</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NM">New Mexico</option>
                      <option value="ND">North Dakota</option>
                      <option value="UT">Utah</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="IL">Illinois</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="OK">Oklahoma</option>
                      <option value="SD">South Dakota</option>
                      <option value="TX">Texas</option>
                      <option value="TN">Tennessee</option>
                      <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="IN">Indiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="OH">Ohio</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <!-- end Select2 -->




              <!-- dropZone -->
              <div class="kt-portlet__body">
                <div class="form-group row">
                  <label class="col-form-label col-lg-3 col-sm-12">Single File Upload</label>
                  <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                      <div class="kt-dropzone__msg dz-message needsclick">
                        <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                        <span class="kt-dropzone__msg-desc">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3 col-sm-12">Multiple File Upload</label>
                  <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="kt-dropzone dropzone m-dropzone--primary" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
                      <div class="kt-dropzone__msg dz-message needsclick">
                        <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                        <span class="kt-dropzone__msg-desc">Upload up to 10 files</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-lg-3 col-sm-12">File Type Validation</label>
                  <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="kt-dropzone dropzone m-dropzone--success" action="inc/api/dropzone/upload.php" id="m-dropzone-three">
                      <div class="kt-dropzone__msg dz-message needsclick">
                        <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                        <span class="kt-dropzone__msg-desc">Only image, pdf and psd files are allowed for upload</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End dropZone -->










              <!-- form validation -->
              <div class="form-group form-group-last kt-hide">
                <div class="alert alert-danger" role="alert" id="kt_form_1_msg">
                  <div class="alert-icon"><i class="flaticon-warning"></i></div>
                  <div class="alert-text">
                    Oh snap! Change a few things up and try submitting again.
                  </div>
                  <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"><i class="la la-close"></i></span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Option *</label>
                <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                  <select class="form-control" name="option">
                    <option value="">Select</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  <span class="form-text text-muted">Please select an option.</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Options *</label>
                <div class="col-lg-9 col-md-9 col-sm-12 form-group-sub">
                  <select class="form-control" name="options" multiple size="5">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  <span class="form-text text-muted">Please select at least one or maximum 4 options</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Memo *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <textarea class="form-control" name="memo" placeholder="Enter a menu" rows="8"></textarea>
                  <span class="form-text text-muted">Please enter a menu within text length range 10 and 100.</span>
                </div>
              </div>
              <div class="kt-separator kt-separator--border-dashed kt-separator--space-xl"></div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Checkbox *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="kt-checkbox-inline">
                    <label class="kt-checkbox">
                      <input type="checkbox" name="checkbox"> Tick me
                      <span></span>
                    </label>
                  </div>
                  <span class="form-text text-muted">Please tick the checkbox</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Checkboxes *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="kt-checkbox-list">
                    <label class="kt-checkbox">
                      <input type="checkbox" name="checkboxes"> Option 1
                      <span></span>
                    </label>
                    <label class="kt-checkbox">
                      <input type="checkbox" name="checkboxes"> Option 2
                      <span></span>
                    </label>
                    <label class="kt-checkbox">
                      <input type="checkbox" name="checkboxes"> Option 3
                      <span></span>
                    </label>
                  </div>
                  <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Radios *</label>
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="kt-radio-inline">
                    <label class="kt-radio">
                      <input type="checkbox" name="radio"> Option 1
                      <span></span>
                    </label>
                    <label class="kt-radio">
                      <input type="checkbox" name="radio"> Option 2
                      <span></span>
                    </label>
                    <label class="kt-radio">
                      <input type="radio" name="radio"> Option 3
                      <span></span>
                    </label>
                  </div>
                  <span class="form-text text-muted">Please select an option</span>
                </div>
              </div>
              <!-- end form validation -->









              <!-- datetime and txt area -->
              <div class="kt-form__content">
                <div class="kt-alert m-alert--icon alert alert-danger kt-hidden" role="alert" id="kt_form_1_msg">
                  <div class="kt-alert__icon">
                    <i class="la la-warning"></i>
                  </div>
                  <div class="kt-alert__text">
                    Oh snap! Change a few things up and try submitting again.
                  </div>
                  <div class="kt-alert__close">
                    <button type="button" class="close" data-close="alert" aria-label="Close">
                    </button>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Date Picker *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <div class='input-group'>
                    <input type='text' class="form-control" name="date" placeholder="Select date" id='kt_datepicker' />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="la la-calendar-check-o"></i>
                      </span>
                    </div>
                  </div>
                  <span class="form-text text-muted">Select a date</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Date Time Picker *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <div class='input-group date'>
                    <input type='text' class="form-control" name="datetime" placeholder="Select date & time" id='kt_datetimepicker' />
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="la la-calendar-check-o glyphicon-th"></i></span>
                    </div>
                  </div>
                  <span class="form-text text-muted">Select a date time</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Time Picker *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <div class='input-group date'>
                    <input class="form-control" id='kt_timepicker' placeholder="Select time" name="time" type="text" />
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="la la-clock-o"></i></span>
                    </div>
                  </div>
                  <span class="form-text text-muted">Select time</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Date Range Picker *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <div class='input-group' id='kt_daterangepicker'>
                    <input type='text' class="form-control" readonly name="daterange" placeholder="Select date range" />
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
                    </div>
                  </div>
                  <span class="form-text text-muted">Select a date range</span>
                </div>
              </div>
              <div class="kt-form__seperator kt-form__seperator--dashed kt-form__seperator--space"></div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Switch *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <input data-switch="true" type="checkbox" name="switch" id="test" data-on-color="success" data-off-color="warning">
                  <span class="form-text text-muted"></span>
                </div>
              </div>
              <div class="kt-form__seperator kt-form__seperator--dashed kt-form__seperator--space"></div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Bootstrap Select *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-bootstrap-select" id="kt_bootstrap_select" multiple name="select">
                    <optgroup label="Picnic" data-max-options="2">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </optgroup>
                    <optgroup label="Camping" data-max-options="2">
                      <option>Tent</option>
                      <option>Flashlight</option>
                      <option>Toilet Paper</option>
                    </optgroup>
                  </select>
                  <span class="form-text text-muted">Select at least 2 and maximum 4 options</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Select2 *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <select class="form-control kt-select2" id="kt_select2" name="select2">
                    <option></option>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV">Nevada</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                      <option value="AZ">Arizona</option>
                      <option value="CO">Colorado</option>
                      <option value="ID">Idaho</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NM">New Mexico</option>
                      <option value="ND">North Dakota</option>
                      <option value="UT">Utah</option>
                      <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                      <option value="AL">Alabama</option>
                      <option value="AR">Arkansas</option>
                      <option value="IL">Illinois</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="OK">Oklahoma</option>
                      <option value="SD">South Dakota</option>
                      <option value="TX">Texas</option>
                      <option value="TN">Tennessee</option>
                      <option value="WI">Wisconsin</option>
                    </optgroup>
                    <optgroup label="Eastern Time Zone">
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="IN">Indiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="OH">Ohio</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WV">West Virginia</option>
                    </optgroup>
                  </select>
                  <span class="form-text text-muted">Select an option</span>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Typeahead *</label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                  <div class="kt-typeahead">
                    <input class="form-control" id="kt_typeahead" type="text" name="typeahead" placeholder="States of USA">
                  </div>
                  <span class="form-text text-muted">Please select a state</span>
                </div>
              </div>
              <div class="kt-form__seperator kt-form__seperator--dashed kt-form__seperator--space"></div>
              <div class="form-group row">
                <label class="col-form-label col-lg-3 col-sm-12">Markdown *</label>
                <div class="col-lg-7 col-md-9 col-sm-12">
                  <textarea name="markdown" class="form-control" data-provide="markdown" rows="10"></textarea>
                  <span class="form-text text-muted">Enter some markdown content</span>
                </div>
              </div>
              <!-- End datetime and txt area -->











              <!-- modal -->
              <!-- begin:: Content -->
              <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                <div class="row">
                  <div class="col">
                    <div class="alert alert-light alert-elevate fade show" role="alert">
                      <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                      <div class="alert-text">
                        Metronic extends <code>Bootstrap Modal</code> component with a variety of options to provide uniquely looking Modal component that matches the Metronic's design standards.
                        <br>
                        For more info please visit the plugin's <a class="kt-link kt-font-bold" href="https://getbootstrap.com/docs/4.3/components/modal/" target="_blank">Documentation</a>.
                      </div>
                    </div>
                  </div>
                </div>

                <!--begin::Portlet-->
                <div class="kt-portlet">
                  <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                      <h3 class="kt-portlet__head-title">
                        Modal Demos
                      </h3>
                    </div>
                  </div>

                  <div class="kt-portlet__body">
                    <table class="table table-bordered">
                      <tr>
                        <td style="width: 30%">Basic demo</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_1"> Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Scrollable fixed content</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_1_2"> Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Scrolling long content</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_2"> Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Tooltips and popovers</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_3"> Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Large modal</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_4">Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Small modal</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_5">Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Vertically centered</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_6">Launch Modal</button>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%">Stick to the bottom right</td>
                        <td>
                          <button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_7">Launch Modal</button>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>

                <!--end::Portlet-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_modal_1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="kt-scroll" data-scroll="true" data-height="200">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                        <p>
                          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5>Popover in a modal</h5>
                        <p>This <a href="#" role="button" data-toggle="kt-popover" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
                        <hr>
                        <h5>Tooltips in a modal</h5>
                        <p><a href="#" class="tooltip-test" data-toggle="kt-tooltip" title="Tooltip">This link</a> and <a href="#" data-toggle="kt-tooltip" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="form-control-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->

                <!--begin::Modal-->
                <div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="form-control-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->

                <!-- Modal -->
                <div class="modal fade" id="kt_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--begin::Modal-->
                <div class="modal modal-stick-to-bottom fade" id="kt_modal_7" role="dialog" data-backdrop="false">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Modal-->
              </div>
              <!-- end modal -->






              <!-- alerts -->
              <div class="kt-section">
                <div class="kt-section__info">With Icons</div>
                <div class="kt-section__content">
                  <div class="alert alert-primary" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                    <div class="alert-text">A simple primary alert—check it out!</div>
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                    <div class="alert-text">A simple secondary alert—check it out!</div>
                  </div>
                  <div class="alert alert-success" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                    <div class="alert-text">A simple success alert—check it out!</div>
                  </div>
                  <div class="alert alert-danger" role="alert">
                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                    <div class="alert-text">A simple danger alert—check it out!</div>
                  </div>
                  <div class="alert alert-warning" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                    <div class="alert-text">A simple warning alert—check it out!</div>
                  </div>
                  <div class="alert alert-info" role="alert">
                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                    <div class="alert-text">A simple info alert—check it out!</div>
                  </div>
                  <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                    <div class="alert-text">A simple light alert—check it out!</div>
                  </div>
                  <div class="alert alert-dark" role="alert">
                    <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                    <div class="alert-text">A simple dark alert—check it out!</div>
                  </div>
                </div>
              </div>
              <!-- End Alerts  -->





              <!-- outline badges -->
              <div class="kt-section">
                <span class="kt-section__info">
                  Basic state color badges:
                </span>
                <div class="kt-section__content kt-section__content--solid">
                  <div class="kt-badge kt-badge__pics">
                    <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="John Myer">
                      <img src="./assets/media/users/100_1.jpg" alt="image">
                    </a>
                    <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Alison Brandy">
                      <img src="./assets/media/users/100_10.jpg" alt="image">
                    </a>
                    <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Selina Cranson">
                      <img src="./assets/media/users/100_11.jpg" alt="image">
                    </a>
                    <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Luke Walls">
                      <img src="./assets/media/users/100_2.jpg" alt="image">
                    </a>
                    <a href="#" class="kt-badge__pic" data-toggle="kt-tooltip" data-skin="brand" data-placement="top" title="" data-original-title="Micheal York">
                      <img src="./assets/media/users/100_3.jpg" alt="image">
                    </a>
                    <a href="#" class="kt-badge__pic  kt-badge__pic--last">
                      +3
                    </a>
                  </div>
                </div>
              </div>
              <div class="kt-section">
                <span class="kt-section__info">
                  Basic state color badges:
                </span>
                <div class="kt-section__content kt-section__content--solid">
                  <span class="kt-badge kt-badge--outline kt-badge--dark">3</span>
                  <span class="kt-badge kt-badge--outline kt-badge--info">4</span>
                  <span class="kt-badge kt-badge--outline kt-badge--danger">7</span>
                  <span class="kt-badge kt-badge--outline kt-badge--primary">8</span>
                  <span class="kt-badge kt-badge--outline kt-badge--warning">1</span>
                  <span class="kt-badge kt-badge--outline kt-badge--success">2</span>
                  <span class="kt-badge kt-badge--outline kt-badge--brand">5</span>
                  <div class="kt-separator kt-separator--border-dashed"></div>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--dark">3</span>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--info">4</span>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--danger">7</span>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--primary">8</span>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--warning">1</span>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--success">2</span>
                  <span class="kt-badge kt-badge--outline kt-badge--outline-2x kt-badge--brand">5</span>
                </div>
              </div>
              <!-- end outline badges -->








              <!--nav Dropdown 1-->
              <div class="dropdown">
                <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                  Dropdown example
                </a>
                <div class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">

                  <!--begin::Nav-->
                  <ul class="kt-nav">
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                        <span class="kt-nav__link-text">Activity</span>
                      </a>
                    </li>
                    <li class="kt-nav__item kt-nav__item--active">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-rocket-2"></i>
                        <span class="kt-nav__link-text">Messages</span>
                        <span class="kt-nav__link-badge">
                          <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">new</span>
                        </span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                        <span class="kt-nav__link-text">FAQ</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-link"></i>
                        <span class="kt-nav__link-text">Settings</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                        <span class="kt-nav__link-text">Support</span>
                        <span class="kt-nav__link-badge">
                          <span class="kt-badge kt-badge--success">5</span>
                        </span>
                      </a>
                    </li>
                  </ul>

                  <!--end::Nav-->
                </div>
              </div>
              <!-- End nav Dropdown 1-->

              <!-- nav Dropdown 2 -->
              <div class="dropdown">
                <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                  Dropdown example
                </a>
                <div class="dropdown-menu dropdown-menu-xl">
                  <ul class="kt-nav kt-nav--bold kt-nav--md-space kt-nav--v4" role="tablist">
                    <li class="kt-nav__item">
                      <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                        <span class="kt-nav__link-text">Buying</span>
                      </a>
                    </li>
                    <li class="kt-nav__item active">
                      <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                        <span class="kt-nav__link-text">Product Support</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                        <span class="kt-nav__link-text">Account Management</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                        <span class="kt-nav__link-text">Product Licenses</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a class="kt-nav__link" data-toggle="tab" href="#kt_profile_tab_personal_information" role="tab">
                        <span class="kt-nav__link-text">Downloads</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End nav Dropdown 2  -->










            </div>
          </div>
          <div class="kt-portlet__foot">
            <div class="kt-form__actions">
              <button type="reset" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
          </div>






        </form>

        <!--end::Form-->
      </div>

      <!--end::Portlet-->
    </div>


  </div>
</div>








<!-- lists -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <!--Begin::Section-->
  <div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
      <div class="row row-no-padding row-col-separator-xl">
        <div class="col-md-12 col-lg-12 col-xl-4">

          <!--begin:: Widgets/Stats2-1 -->
          <div class="kt-widget1">
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Member Profit</h3>
                <span class="kt-widget1__desc">Awerage Weekly Profit</span>
              </div>
              <span class="kt-widget1__number kt-font-brand">+$17,800</span>
            </div>
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Orders</h3>
                <span class="kt-widget1__desc">Weekly Customer Orders</span>
              </div>
              <span class="kt-widget1__number kt-font-danger">+1,800</span>
            </div>
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Issue Reports</h3>
                <span class="kt-widget1__desc">System bugs and issues</span>
              </div>
              <span class="kt-widget1__number kt-font-success">-27,49%</span>
            </div>
          </div>

          <!--end:: Widgets/Stats2-1 -->
        </div>
        <div class="col-md-12 col-lg-12 col-xl-4">

          <!--begin:: Widgets/Stats2-2 -->
          <div class="kt-widget1">
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">IPO Margin</h3>
                <span class="kt-widget1__desc">Awerage IPO Margin</span>
              </div>
              <span class="kt-widget1__number kt-font-success">+24%</span>
            </div>
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Payments</h3>
                <span class="kt-widget1__desc">Yearly Expenses</span>
              </div>
              <span class="kt-widget1__number kt-font-info">+$560,800</span>
            </div>
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Logistics</h3>
                <span class="kt-widget1__desc">Overall Regional Logistics</span>
              </div>
              <span class="kt-widget1__number kt-font-warning">-10%</span>
            </div>
          </div>

          <!--end:: Widgets/Stats2-2 -->
        </div>
        <div class="col-md-12 col-lg-12 col-xl-4">

          <!--begin:: Widgets/Stats2-3 -->
          <div class="kt-widget1">
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Orders</h3>
                <span class="kt-widget1__desc">Awerage Weekly Orders</span>
              </div>
              <span class="kt-widget1__number kt-font-success">+15%</span>
            </div>
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Transactions</h3>
                <span class="kt-widget1__desc">Daily Transaction Increase</span>
              </div>
              <span class="kt-widget1__number kt-font-danger">+80%</span>
            </div>
            <div class="kt-widget1__item">
              <div class="kt-widget1__info">
                <h3 class="kt-widget1__title">Revenue</h3>
                <span class="kt-widget1__desc">Overall Revenue Increase</span>
              </div>
              <span class="kt-widget1__number kt-font-primary">+60%</span>
            </div>
          </div>

          <!--end:: Widgets/Stats2-3 -->
        </div>
      </div>
    </div>
  </div>

  <!--End::Section-->

  <!--Begin::Section-->
  <div class="row">
    <div class="col-xl-4">

      <!--begin:: Widgets/Tasks -->
      <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Tasks
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
                  Today
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
                  Week
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
                  Month
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt_widget2_tab1_content">
              <div class="kt-widget2">
                <div class="kt-widget2__item kt-widget2__item--primary">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Metronic Great Again.Lorem Ipsum Amet
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--warning">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Prepare Docs For Metting On Monday
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Sean
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--brand">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Widgets Great Again.Estudiat Communy Elit
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Aziko
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--success">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Metronic Great Again. Lorem Ipsum
                    </a>
                    <a class="kt-widget2__username">
                      By James
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--danger">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--info">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                      </p>
                      <a href="#" class="kt-widget2__username">
                        By Sean
                      </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget2_tab2_content">
              <div class="kt-widget2">
                <div class="kt-widget2__item kt-widget2__item--success">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Metronic Great Again.Lorem Ipsum
                    </a>
                    <a class="kt-widget2__username">
                      By James
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--warning">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Prepare Docs For Metting On Monday
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Sean
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--danger">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--primary">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Metronic Great Again.Lorem Ipsum Amet
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--info">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Sean
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--brand">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Widgets Great Again.Estudiat Communy Elit
                      </p>
                      <a href="#" class="kt-widget2__username">
                        By Aziko
                      </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget2_tab3_content">
              <div class="kt-widget2">
                <div class="kt-widget2__item kt-widget2__item--warning">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Metronic Great Again.Lorem Ipsum
                    </a>
                    <a class="kt-widget2__username">
                      By James
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--danger">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--brand">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Widgets Great Again.Estudiat Communy Elit
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Aziko
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--info">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Sean
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--success">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Completa Financial Report For Emirates Airlines
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="kt-widget2__item kt-widget2__item--primary">
                  <div class="kt-widget2__checkbox">
                    <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                      <input type="checkbox">
                      <span></span>
                    </label>
                  </div>
                  <div class="kt-widget2__info">
                    <a href="#" class="kt-widget2__title">
                      Make Metronic Great Again.Lorem Ipsum Amet
                    </a>
                    <a href="#" class="kt-widget2__username">
                      By Bob
                    </a>
                  </div>
                  <div class="kt-widget2__actions">
                    <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                      <i class="flaticon-more-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                      <ul class="kt-nav">
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                            <span class="kt-nav__link-text">Reports</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-send"></i>
                            <span class="kt-nav__link-text">Messages</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                            <span class="kt-nav__link-text">Charts</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-avatar"></i>
                            <span class="kt-nav__link-text">Members</span>
                          </a>
                        </li>
                        <li class="kt-nav__item">
                          <a href="#" class="kt-nav__link">
                            <i class="kt-nav__link-icon flaticon2-settings"></i>
                            <span class="kt-nav__link-text">Settings</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/Tasks -->
    </div>
    <div class="col-xl-4">

      <!--begin:: Widgets/Notifications-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Notifications
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
                  Latest
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
                  Week
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
                  Month
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
              <div class="kt-notification">
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
                        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New order has been received.
                    </div>
                    <div class="kt-notification__item-time">
                      2 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" id="Combined-Shape" fill="#000000" />
                        <path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" id="Path-85" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New member is registered and pending for approval.
                    </div>
                    <div class="kt-notification__item-time">
                      3 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      Membership application has been added.
                    </div>
                    <div class="kt-notification__item-time">
                      3 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon id="Bound" points="0 0 24 0 24 24 0 24" />
                        <path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                        <path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" id="Combined-Shape" fill="#000000" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New report file has been uploaded.
                    </div>
                    <div class="kt-notification__item-time">
                      5 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="Rectangle-10" x="0" y="0" width="24" height="24" />
                        <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" id="Path-3" fill="#000000" />
                        <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New user feedback received and pending for review.
                    </div>
                    <div class="kt-notification__item-time">
                      8 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000" />
                        <circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      Database sever #2 has been fully restarted.
                    </div>
                    <div class="kt-notification__item-time">
                      23 hrs ago
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
              <div class="kt-notification">
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M9.35321926,16.3736278 L16.3544311,10.3706602 C16.5640654,10.1909158 16.5882961,9.87526197 16.4085517,9.66562759 C16.3922584,9.64662485 16.3745611,9.62887247 16.3556091,9.6125202 L9.35439731,3.57169798 C9.14532254,3.39130299 8.82959492,3.41455255 8.64919993,3.62362732 C8.5708616,3.71442013 8.52776329,3.83034375 8.52776329,3.95026134 L8.52776329,15.9940512 C8.52776329,16.2701936 8.75162092,16.4940512 9.02776329,16.4940512 C9.14714624,16.4940512 9.2625893,16.4513356 9.35321926,16.3736278 Z" id="Path-10-Copy" fill="#000000" transform="translate(12.398118, 9.870355) rotate(-450.000000) translate(-12.398118, -9.870355) " />
                        <rect id="Rectangle-Copy" fill="#000000" opacity="0.3" transform="translate(12.500000, 17.500000) scale(-1, 1) rotate(-270.000000) translate(-12.500000, -17.500000) " x="11" y="11" width="3" height="13" rx="0.5" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New company application has been approved.
                    </div>
                    <div class="kt-notification__item-time">
                      3 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <rect id="Rectangle-62-Copy" fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
                        <rect id="Rectangle-62-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" id="Path-95" fill="#000000" fill-rule="nonzero" />
                        <rect id="Rectangle-62-Copy-4" fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New report has been received.
                    </div>
                    <div class="kt-notification__item-time">
                      23 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
                        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New file has been uploaded and pending for review.
                    </div>
                    <div class="kt-notification__item-time">
                      5 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      Membership application has been added.
                    </div>
                    <div class="kt-notification__item-time">
                      3 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                        <path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                        <path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" id="Combined-Shape" fill="#000000" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New customer is registered.
                    </div>
                    <div class="kt-notification__item-time">
                      3 days ago
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
              <div class="kt-notification">
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3" />
                        <path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" id="Combined-Shape" fill="#000000" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New order has been received.
                    </div>
                    <div class="kt-notification__item-time">
                      2 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                        <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000" />
                        <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000" />
                        <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New customer is registered
                    </div>
                    <div class="kt-notification__item-time">
                      3 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2" />
                        <rect id="Rectangle-116-Copy" fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5" />
                        <rect id="Rectangle-116-Copy-2" fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5" />
                        <path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" id="Combined-Shape" fill="#000000" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      Application has been approved
                    </div>
                    <div class="kt-notification__item-time">
                      3 hrs ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24" />
                        <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
                        <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="#000000" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New customer comment recieved
                    </div>
                    <div class="kt-notification__item-time">
                      2 days ago
                    </div>
                  </div>
                </a>
                <a href="#" class="kt-notification__item">
                  <div class="kt-notification__item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000" />
                        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                      </g>
                    </svg> </div>
                  <div class="kt-notification__item-details">
                    <div class="kt-notification__item-title">
                      New customer is registered
                    </div>
                    <div class="kt-notification__item-time">
                      3 days ago
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/Notifications-->
    </div>
    <div class="col-xl-4">

      <!--begin:: Widgets/Support Tickets -->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Support Tickets
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <div class="dropdown dropdown-inline">
              <button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-more-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                <!--begin::Nav-->
                <ul class="kt-nav">
                  <li class="kt-nav__head">
                    Export Options
                    <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect id="bound" x="0" y="0" width="24" height="24" />
                          <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                          <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                          <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                        </g>
                      </svg> </span>
                  </li>
                  <li class="kt-nav__separator"></li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-drop"></i>
                      <span class="kt-nav__link-text">Activity</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                      <span class="kt-nav__link-text">FAQ</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-link"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-new-email"></i>
                      <span class="kt-nav__link-text">Support</span>
                      <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                      </span>
                    </a>
                  </li>
                  <li class="kt-nav__separator"></li>
                  <li class="kt-nav__foot">
                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                  </li>
                </ul>

                <!--end::Nav-->
              </div>
            </div>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-widget3">
            <div class="kt-widget3__item">
              <div class="kt-widget3__header">
                <div class="kt-widget3__user-img">
                  <img class="kt-widget3__img" src="./assets/media/users/user1.jpg" alt="">
                </div>
                <div class="kt-widget3__info">
                  <a href="#" class="kt-widget3__username">
                    Melania Trump
                  </a><br>
                  <span class="kt-widget3__time">
                    2 day ago
                  </span>
                </div>
                <span class="kt-widget3__status kt-font-info">
                  Pending
                </span>
              </div>
              <div class="kt-widget3__body">
                <p class="kt-widget3__text">
                  Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                </p>
              </div>
            </div>
            <div class="kt-widget3__item">
              <div class="kt-widget3__header">
                <div class="kt-widget3__user-img">
                  <img class="kt-widget3__img" src="./assets/media/users/user4.jpg" alt="">
                </div>
                <div class="kt-widget3__info">
                  <a href="#" class="kt-widget3__username">
                    Lebron King James
                  </a><br>
                  <span class="kt-widget3__time">
                    1 day ago
                  </span>
                </div>
                <span class="kt-widget3__status kt-font-brand">
                  Open
                </span>
              </div>
              <div class="kt-widget3__body">
                <p class="kt-widget3__text">
                  Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
                </p>
              </div>
            </div>
            <div class="kt-widget3__item">
              <div class="kt-widget3__header">
                <div class="kt-widget3__user-img">
                  <img class="kt-widget3__img" src="./assets/media/users/user5.jpg" alt="">
                </div>
                <div class="kt-widget3__info">
                  <a href="#" class="kt-widget3__username">
                    Deb Gibson
                  </a><br>
                  <span class="kt-widget3__time">
                    3 weeks ago
                  </span>
                </div>
                <span class="kt-widget3__status kt-font-success">
                  Closed
                </span>
              </div>
              <div class="kt-widget3__body">
                <p class="kt-widget3__text">
                  Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/Support Tickets -->
    </div>
  </div>

  <!--End::Section-->

  <!--Begin::Section-->
  <div class="row">
    <div class="col-xl-4">

      <!--begin:: Widgets/Download Files-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Download Files
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
              Latest
            </a>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

              <!--begin::Nav-->
              <ul class="kt-nav">
                <li class="kt-nav__head">
                  Export Options
                  <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                      </g>
                    </svg> </span>
                </li>
                <li class="kt-nav__separator"></li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                    <span class="kt-nav__link-text">Activity</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                    <span class="kt-nav__link-text">FAQ</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-link"></i>
                    <span class="kt-nav__link-text">Settings</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                    <span class="kt-nav__link-text">Support</span>
                    <span class="kt-nav__link-badge">
                      <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                    </span>
                  </a>
                </li>
                <li class="kt-nav__separator"></li>
                <li class="kt-nav__foot">
                  <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                  <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                </li>
              </ul>

              <!--end::Nav-->
            </div>
          </div>
        </div>
        <div class="kt-portlet__body">

          <!--begin::k-widget4-->
          <div class="kt-widget4">
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--icon">
                <img src="./assets/media/files/doc.svg" alt="">
              </div>
              <a href="#" class="kt-widget4__title">
                Metronic Documentation
              </a>
              <div class="kt-widget4__tools">
                <a href="#" class="btn btn-clean btn-icon btn-sm">
                  <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                </a>
              </div>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--icon">
                <img src="./assets/media/files/jpg.svg" alt="">
              </div>
              <a href="#" class="kt-widget4__title">
                Project Launch Event
              </a>
              <div class="kt-widget4__tools">
                <a href="#" class="btn btn-clean btn-icon btn-sm">
                  <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                </a>
              </div>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--icon">
                <img src="./assets/media/files/pdf.svg" alt="">
              </div>
              <a href="#" class="kt-widget4__title">
                Full Developer Manual For 4.7
              </a>
              <div class="kt-widget4__tools">
                <a href="#" class="btn btn-clean btn-icon btn-sm">
                  <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                </a>
              </div>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--icon">
                <img src="./assets/media/files/javascript.svg" alt="">
              </div>
              <a href="#" class="kt-widget4__title">
                Make JS Great Again
              </a>
              <div class="kt-widget4__tools">
                <a href="#" class="btn btn-clean btn-icon btn-sm">
                  <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                </a>
              </div>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--icon">
                <img src="./assets/media/files/zip.svg" alt="">
              </div>
              <a href="#" class="kt-widget4__title">
                Download Ziped version OF 5.0
              </a>
              <div class="kt-widget4__tools">
                <a href="#" class="btn btn-clean btn-icon btn-sm">
                  <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                </a>
              </div>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--icon">
                <img src="./assets/media/files/pdf.svg" alt="">
              </div>
              <a href="#" class="kt-widget4__title">
                Finance Report 2016/2017
              </a>
              <div class="kt-widget4__tools">
                <a href="#" class="btn btn-clean btn-icon btn-sm">
                  <i class="flaticon2-download-symbol-of-down-arrow-in-a-rectangle"></i>
                </a>
              </div>
            </div>
          </div>

          <!--end::Widget 9-->
        </div>
      </div>

      <!--end:: Widgets/Download Files-->
    </div>
    <div class="col-xl-4">

      <!--begin:: Widgets/New Users-->
      <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              New Users
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
                  Today
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
                  Month
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt_widget4_tab1_content">
              <div class="kt-widget4">
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_4.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Anna Strong
                    </a>
                    <p class="kt-widget4__text">
                      Visual Designer,Google Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_14.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Milano Esco
                    </a>
                    <p class="kt-widget4__text">
                      Product Designer, Apple Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_11.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Nick Bold
                    </a>
                    <p class="kt-widget4__text">
                      Web Developer, Facebook Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_1.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Wiltor Delton
                    </a>
                    <p class="kt-widget4__text">
                      Project Manager, Amazon Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_5.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Nick Stone
                    </a>
                    <p class="kt-widget4__text">
                      Visual Designer, Github Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget4_tab2_content">
              <div class="kt-widget4">
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_2.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Kristika Bold
                    </a>
                    <p class="kt-widget4__text">
                      Product Designer,Apple Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_13.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Ron Silk
                    </a>
                    <p class="kt-widget4__text">
                      Release Manager, Loop Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-brand">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_9.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Nick Bold
                    </a>
                    <p class="kt-widget4__text">
                      Web Developer, Facebook Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-danger">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_2.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Wiltor Delton
                    </a>
                    <p class="kt-widget4__text">
                      Project Manager, Amazon Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                </div>
                <div class="kt-widget4__item">
                  <div class="kt-widget4__pic kt-widget4__pic--pic">
                    <img src="./assets/media/users/100_8.jpg" alt="">
                  </div>
                  <div class="kt-widget4__info">
                    <a href="#" class="kt-widget4__username">
                      Nick Bold
                    </a>
                    <p class="kt-widget4__text">
                      Web Developer, Facebook Inc
                    </p>
                  </div>
                  <a href="#" class="btn btn-sm btn-label-info">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/New Users-->
    </div>
    <div class="col-xl-4">

      <!--begin:: Widgets/Last Updates-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Latest Updates
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
              Today
            </a>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

              <!--begin::Nav-->
              <ul class="kt-nav">
                <li class="kt-nav__head">
                  Export Options
                  <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect id="bound" x="0" y="0" width="24" height="24" />
                        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                      </g>
                    </svg> </span>
                </li>
                <li class="kt-nav__separator"></li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                    <span class="kt-nav__link-text">Activity</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                    <span class="kt-nav__link-text">FAQ</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-link"></i>
                    <span class="kt-nav__link-text">Settings</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                    <span class="kt-nav__link-text">Support</span>
                    <span class="kt-nav__link-badge">
                      <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                    </span>
                  </a>
                </li>
                <li class="kt-nav__separator"></li>
                <li class="kt-nav__foot">
                  <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                  <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                </li>
              </ul>

              <!--end::Nav-->
            </div>
          </div>
        </div>
        <div class="kt-portlet__body">

          <!--begin::widget 12-->
          <div class="kt-widget4">
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon-pie-chart-1 kt-font-info"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                Metronic v6 has been arrived!
              </a>
              <span class="kt-widget4__number kt-font-info">+500</span>
            </div>
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon-safe-shield-protection  kt-font-success"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                Metronic community meet-up 2019 in Rome.
              </a>
              <span class="kt-widget4__number kt-font-success">+1260</span>
            </div>
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon2-line-chart kt-font-danger"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                Metronic Angular 8 version will be landing soon...
              </a>
              <span class="kt-widget4__number kt-font-danger">+1080</span>
            </div>
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon2-pie-chart-1 kt-font-primary"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                ale! Purchase Metronic at 70% off for limited time
              </a>
              <span class="kt-widget4__number kt-font-primary">70% Off!</span>
            </div>
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon2-rocket kt-font-brand"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                Metronic VueJS version is in progress. Stay tuned!
              </a>
              <span class="kt-widget4__number kt-font-brand">+134</span>
            </div>
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon2-notification kt-font-warning"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                Black Friday! Purchase Metronic at ever lowest 90% off for limited time
              </a>
              <span class="kt-widget4__number kt-font-warning">70% Off!</span>
            </div>
            <div class="kt-widget4__item">
              <span class="kt-widget4__icon">
                <i class="flaticon2-file kt-font-success"></i>
              </span>
              <a href="#" class="kt-widget4__title kt-widget4__title--light">
                Metronic React version is in progress.
              </a>
              <span class="kt-widget4__number kt-font-success">+13%</span>
            </div>
          </div>

          <!--end::Widget 12-->
        </div>
      </div>

      <!--end:: Widgets/Last Updates-->
    </div>
  </div>

  <!--End::Section-->

  <!--Begin::Section-->
  <div class="row">
    <div class="col-xl-8">

      <!--begin:: Widgets/Best Sellers-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Best Sellers
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                  Latest
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                  Month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                  All time
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
              <div class="kt-widget5">
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product27.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Great Logo Designn
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic admin themes.
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Keenthemes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">19,200</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">1046</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product22.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Branding Mockup
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic bootstrap themes.
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Fly themes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">24,583</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">3809</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product15.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Awesome Mobile App
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic admin themes.Lorem Ipsum Amet
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Fly themes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">210,054</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">1103</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget5_tab2_content">
              <div class="kt-widget5">
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Branding Mockup
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic bootstrap themes.
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Fly themes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">24,583</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">3809</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Awesome Mobile App
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic admin themes.Lorem Ipsum Amet
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Fly themes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">210,054</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">1103</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Great Logo Designn
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic admin themes.
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Keenthemes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">19,200</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">1046</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget5_tab3_content">
              <div class="kt-widget5">
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Awesome Mobile App
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic admin themes.Lorem Ipsum Amet
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Fly themes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">210,054</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">1103</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Great Logo Designn
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic admin themes.
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Keenthemes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">19,200</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">1046</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
                <div class="kt-widget5__item">
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__pic">
                      <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
                    </div>
                    <div class="kt-widget5__section">
                      <a href="#" class="kt-widget5__title">
                        Branding Mockup
                      </a>
                      <p class="kt-widget5__desc">
                        Metronic bootstrap themes.
                      </p>
                      <div class="kt-widget5__info">
                        <span>Author:</span>
                        <span class="kt-font-info">Fly themes</span>
                        <span>Released:</span>
                        <span class="kt-font-info">23.08.17</span>
                      </div>
                    </div>
                  </div>
                  <div class="kt-widget5__content">
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">24,583</span>
                      <span class="kt-widget5__sales">sales</span>
                    </div>
                    <div class="kt-widget5__stats">
                      <span class="kt-widget5__number">3809</span>
                      <span class="kt-widget5__votes">votes</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/Best Sellers-->
    </div>
    <div class="col-xl-4">

      <!--begin:: Widgets/Authors Profit-->
      <div class="kt-portlet kt-portlet--bordered-semi kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Authors Profit
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
              All
            </a>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
              <ul class="kt-nav">
                <li class="kt-nav__section kt-nav__section--first">
                  <span class="kt-nav__section-text">Finance</span>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                    <span class="kt-nav__link-text">Statistics</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                    <span class="kt-nav__link-text">Events</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                    <span class="kt-nav__link-text">Reports</span>
                  </a>
                </li>
                <li class="kt-nav__section">
                  <span class="kt-nav__section-text">Customers</span>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                    <span class="kt-nav__link-text">Notifications</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-file-1"></i>
                    <span class="kt-nav__link-text">Files</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-widget4">
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--logo">
                <img src="./assets/media/client-logos/logo5.png" alt="">
              </div>
              <div class="kt-widget4__info">
                <a href="#" class="kt-widget4__title">
                  Trump Themes
                </a>
                <p class="kt-widget4__text">
                  Make Metronic Great Again
                </p>
              </div>
              <span class="kt-widget4__number kt-font-brand">+$2500</span>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--logo">
                <img src="./assets/media/client-logos/logo4.png" alt="">
              </div>
              <div class="kt-widget4__info">
                <a href="#" class="kt-widget4__title">
                  StarBucks
                </a>
                <p class="kt-widget4__text">
                  Good Coffee & Snacks
                </p>
              </div>
              <span class="kt-widget4__number kt-font-brand">-$290</span>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--logo">
                <img src="./assets/media/client-logos/logo3.png" alt="">
              </div>
              <div class="kt-widget4__info">
                <a href="#" class="kt-widget4__title">
                  Phyton
                </a>
                <p class="kt-widget4__text">
                  A Programming Language
                </p>
              </div>
              <span class="kt-widget4__number kt-font-brand">+$17</span>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--logo">
                <img src="./assets/media/client-logos/logo2.png" alt="">
              </div>
              <div class="kt-widget4__info">
                <a href="#" class="kt-widget4__title">
                  GreenMakers
                </a>
                <p class="kt-widget4__text">
                  Make Green Great Again
                </p>
              </div>
              <span class="kt-widget4__number kt-font-brand">-$2.50</span>
            </div>
            <div class="kt-widget4__item">
              <div class="kt-widget4__pic kt-widget4__pic--logo">
                <img src="./assets/media/client-logos/logo1.png" alt="">
              </div>
              <div class="kt-widget4__info">
                <a href="#" class="kt-widget4__title">
                  FlyThemes
                </a>
                <p class="kt-widget4__text">
                  A Let's Fly Fast Again Language
                </p>
              </div>
              <span class="kt-widget4__number kt-font-brand">+$200</span>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/Authors Profit-->
    </div>
  </div>

  <!--End::Section-->

  <!--Begin::Section-->
  <div class="row">
    <div class="col-xl-4">

      <!--begin:: Widgets/Sales States-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Sales Stats
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <div class="dropdown dropdown-inline">
              <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-more-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-widget6">
            <div class="kt-widget6__head">
              <div class="kt-widget6__item">
                <span>Sceduled</span>
                <span>Count</span>
                <span>Amount</span>
              </div>
            </div>
            <div class="kt-widget6__body">
              <div class="kt-widget6__item">
                <span>16/13/17</span>
                <span>67</span>
                <span class="kt-font-success kt-font-bold">$14,740</span>
              </div>
              <div class="kt-widget6__item">
                <span>02/28/17</span>
                <span>120</span>
                <span class="kt-font-brand kt-font-bold">$11,002</span>
              </div>
              <div class="kt-widget6__item">
                <span>03/06/17</span>
                <span>32</span>
                <span class="kt-font-warning kt-font-bold">$10,900</span>
              </div>
              <div class="kt-widget6__item">
                <span>10/21/17</span>
                <span>130</span>
                <span class="kt-font-danger kt-font-bold">$14,740</span>
              </div>
              <div class="kt-widget6__item">
                <span>01/02/17</span>
                <span>5</span>
                <span class="kt-font-info kt-font-bold">$18,540</span>
              </div>
              <div class="kt-widget6__item">
                <span>03/06/17</span>
                <span>32</span>
                <span class="kt-font-danger kt-font-bold">$10,900</span>
              </div>
              <div class="kt-widget6__item">
                <span>12/31/17</span>
                <span>201</span>
                <span class="kt-font-success kt-font-bold">$25,609</span>
              </div>
            </div>
            <div class="kt-widget6__foot">
              <div class="kt-widget6__action kt-align-right">
                <a href="#" class="btn btn-label-brand btn-sm btn-bold">Export...</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/Sales States-->
    </div>
    <div class="col-xl-8">

      <!--begin:: Widgets/User Progress -->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              User Progress
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">
                  Today
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">
                  Week
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt_widget31_tab1_content">
              <div class="kt-widget31">
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic">
                      <img src="./assets/media/users/100_4.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Anna Strong
                      </a>
                      <p class="kt-widget31__text">
                        Visual Designer,Google Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <a href="#" class="kt-widget31__stats">
                        <span>63%</span>
                        <span>London</span>
                      </a>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic">
                      <img src="./assets/media/users/100_14.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Milano Esco
                      </a>
                      <p class="kt-widget31__text">
                        Product Designer, Apple Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <a href="#" class="kt-widget31__stats">
                        <span>33%</span>
                        <span>Paris</span>
                      </a>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic kt-widget4__pic--pic">
                      <img src="./assets/media/users/100_11.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Nick Bold
                      </a>
                      <p class="kt-widget31__text">
                        Web Developer, Facebook Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <a href="#" class="kt-widget31__stats">
                        <span>13%</span>
                        <span>London</span>
                      </a>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic kt-widget4__pic--pic">
                      <img src="./assets/media/users/100_1.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Wiltor Delton
                      </a>
                      <p class="kt-widget31__text">
                        Project Manager, Amazon Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <div class="kt-widget31__stats">
                        <span>93%</span>
                        <span>New York</span>
                      </div>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic">
                      <img src="./assets/media/users/100_6.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Sam Stone
                      </a>
                      <p class="kt-widget31__text">
                        Project Manager, Kilpo Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <div class="kt-widget31__stats">
                        <span>50%</span>
                        <span>New York</span>
                      </div>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="kt_widget31_tab2_content">
              <div class="kt-widget31">
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic kt-widget4__pic--pic">
                      <img src="./assets/media/users/100_11.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Nick Bold
                      </a>
                      <p class="kt-widget31__text">
                        Web Developer, Facebook Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <a href="#" class="kt-widget31__stats">
                        <span>13%</span>
                        <span>London</span>
                      </a>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic kt-widget4__pic--pic">
                      <img src="./assets/media/users/100_1.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Wiltor Delton
                      </a>
                      <p class="kt-widget31__text">
                        Project Manager, Amazon Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <div class="kt-widget31__stats">
                        <span>93%</span>
                        <span>New York</span>
                      </div>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic">
                      <img src="./assets/media/users/100_14.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Milano Esco
                      </a>
                      <p class="kt-widget31__text">
                        Product Designer, Apple Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <a href="#" class="kt-widget31__stats">
                        <span>33%</span>
                        <span>Paris</span>
                      </a>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic">
                      <img src="./assets/media/users/100_6.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Sam Stone
                      </a>
                      <p class="kt-widget31__text">
                        Project Manager, Kilpo Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <div class="kt-widget31__stats">
                        <span>50%</span>
                        <span>New York</span>
                      </div>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
                <div class="kt-widget31__item">
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__pic">
                      <img src="./assets/media/users/100_4.jpg" alt="">
                    </div>
                    <div class="kt-widget31__info">
                      <a href="#" class="kt-widget31__username">
                        Anna Strong
                      </a>
                      <p class="kt-widget31__text">
                        Visual Designer,Google Inc
                      </p>
                    </div>
                  </div>
                  <div class="kt-widget31__content">
                    <div class="kt-widget31__progress">
                      <a href="#" class="kt-widget31__stats">
                        <span>63%</span>
                        <span>London</span>
                      </a>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end:: Widgets/User Progress -->
    </div>
  </div>

  <!--End::Section-->

  <!--Begin::Section-->
  <div class="row">
    <div class="col-xl-8">
      <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
        <div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Exclusive Datatable Plugin
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <div class="dropdown dropdown-inline">
              <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-more-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">

                <!--begin::Nav-->
                <ul class="kt-nav">
                  <li class="kt-nav__head">
                    Export Options
                    <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect id="bound" x="0" y="0" width="24" height="24" />
                          <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                          <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                          <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                        </g>
                      </svg> </span>
                  </li>
                  <li class="kt-nav__separator"></li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-drop"></i>
                      <span class="kt-nav__link-text">Activity</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                      <span class="kt-nav__link-text">FAQ</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-link"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-new-email"></i>
                      <span class="kt-nav__link-text">Support</span>
                      <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                      </span>
                    </a>
                  </li>
                  <li class="kt-nav__separator"></li>
                  <li class="kt-nav__foot">
                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                  </li>
                </ul>

                <!--end::Nav-->
              </div>
            </div>
          </div>
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">

          <!--begin: Datatable -->
          <div class="kt-datatable" id="kt_datatable_latest_orders"></div>

          <!--end: Datatable -->
        </div>
      </div>
    </div>
    <div class="col-xl-4">

      <!--Begin::Portlet-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Recent Activities
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <div class="dropdown dropdown-inline">
              <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flaticon-more-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">

                <!--begin::Nav-->
                <ul class="kt-nav">
                  <li class="kt-nav__head">
                    Export Options
                    <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect id="bound" x="0" y="0" width="24" height="24" />
                          <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                          <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                          <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                        </g>
                      </svg> </span>
                  </li>
                  <li class="kt-nav__separator"></li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-drop"></i>
                      <span class="kt-nav__link-text">Activity</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                      <span class="kt-nav__link-text">FAQ</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-link"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-new-email"></i>
                      <span class="kt-nav__link-text">Support</span>
                      <span class="kt-nav__link-badge">
                        <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                      </span>
                    </a>
                  </li>
                  <li class="kt-nav__separator"></li>
                  <li class="kt-nav__foot">
                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                  </li>
                </ul>

                <!--end::Nav-->
              </div>
            </div>
          </div>
        </div>
        <div class="kt-portlet__body">

          <!--Begin::Timeline 3 -->
          <div class="kt-timeline-v2">
            <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">10:00</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-danger"></i>
                </div>
                <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                  Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                  incididunt ut labore et dolore magna
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">12:45</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-success"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
                  AEOL Meeting With
                </div>
                <div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
                  <a href="#"><img src="./assets/media/users/100_4.jpg" title=""></a>
                  <a href="#"><img src="./assets/media/users/100_13.jpg" title=""></a>
                  <a href="#"><img src="./assets/media/users/100_11.jpg" title=""></a>
                  <a href="#"><img src="./assets/media/users/100_14.jpg" title=""></a>
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">14:00</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-brand"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                  Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">16:00</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-warning"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                  Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                  incididunt ut labore et dolore magna elit enim at minim<br>
                  veniam quis nostrud
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">17:00</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-info"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                  Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">16:00</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-brand"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                  Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                  incididunt ut labore et dolore magna elit enim at minim<br>
                  veniam quis nostrud
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">17:00</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-danger"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                  Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
                </div>
              </div>
              <div class="kt-timeline-v2__item">
                <span class="kt-timeline-v2__item-time">15:30</span>
                <div class="kt-timeline-v2__item-cricle">
                  <i class="fa fa-genderless kt-font-danger"></i>
                </div>
                <div class="kt-timeline-v2__item-text kt-padding-top-5">
                  New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
                </div>
              </div>
            </div>
          </div>

          <!--End::Timeline 3 -->
        </div>
      </div>

      <!--End::Portlet-->
    </div>
  </div>

  <!--End::Section-->

  <!--Begin::Section-->
  <div class="row">
    <div class="col-xl-6 col-lg-12">

      <!--Begin::Portlet-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Recent Notifications
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget3_tab1_content" role="tab">
                  Today
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget3_tab2_content" role="tab">
                  Month
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt_widget3_tab1_content">

              <!--Begin::Timeline 3 -->
              <div class="kt-timeline-v3">
                <div class="kt-timeline-v3__items">
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                    <span class="kt-timeline-v3__item-time">09:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Bob
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--warning">
                    <span class="kt-timeline-v3__item-time">10:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor sit amit
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Sean
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                    <span class="kt-timeline-v3__item-time">11:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor sit amit eiusmdd tempor
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By James
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--success">
                    <span class="kt-timeline-v3__item-time">12:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By James
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
                    <span class="kt-timeline-v3__item-time">14:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor sit amit,consectetur eiusmdd
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Derrick
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                    <span class="kt-timeline-v3__item-time">15:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor sit amit,consectetur
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Iman
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                    <span class="kt-timeline-v3__item-time">17:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem ipsum dolor sit consectetur eiusmdd tempor
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Aziko
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <!--End::Timeline 3 -->
            </div>
            <div class="tab-pane" id="kt_widget3_tab2_content">

              <!--Begin::Timeline 3 -->
              <div class="kt-timeline-v3">
                <div class="kt-timeline-v3__items">
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                    <span class="kt-timeline-v3__item-time kt-font-success">09:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Bob
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--warning">
                    <span class="kt-timeline-v3__item-time kt-font-warning">10:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        There are many variations of passages of Lorem Ipsum available.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Sean
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                    <span class="kt-timeline-v3__item-time kt-font-primary">11:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By James
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--success">
                    <span class="kt-timeline-v3__item-time kt-font-success">12:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By James
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
                    <span class="kt-timeline-v3__item-time kt-font-warning">14:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Latin words, combined with a handful of model sentence structures.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Derrick
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--info">
                    <span class="kt-timeline-v3__item-time kt-font-info">15:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Contrary to popular belief, Lorem Ipsum is not simply random text.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Iman
                        </a>
                      </span>
                    </div>
                  </div>
                  <div class="kt-timeline-v3__item kt-timeline-v3__item--brand">
                    <span class="kt-timeline-v3__item-time kt-font-danger">17:00</span>
                    <div class="kt-timeline-v3__item-desc">
                      <span class="kt-timeline-v3__item-text">
                        Lorem Ipsum is therefore always free from repetition, injected humour.
                      </span><br>
                      <span class="kt-timeline-v3__item-user-name">
                        <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                          By Aziko
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <!--End::Timeline 3 -->
            </div>
          </div>
        </div>
      </div>

      <!--End::Portlet-->
    </div>
    <div class="col-xl-6 col-lg-12">

      <!--begin:: Widgets/Sale Reports-->
      <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              Sales Reports
            </h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
                  Last Month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
                  All Time
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="kt-portlet__body">

          <!--Begin::Tab Content-->
          <div class="tab-content">

            <!--begin::tab 1 content-->
            <div class="tab-pane active" id="kt_widget11_tab1_content">

              <!--begin::Widget 11-->
              <div class="kt-widget11">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <td style="width:1%">#</td>
                        <td style="width:40%">Application</td>
                        <td style="width:14%">Sales</td>
                        <td style="width:15%">Change</td>
                        <td style="width:15%">Status</td>
                        <td style="width:15%" class="kt-align-right">Total</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single">
                            <input type="checkbox"><span></span>
                          </label>
                        </td>
                        <td>
                          <a href="#" class="kt-widget11__title">Loop</a>
                          <span class="kt-widget11__sub">CRM System</span>
                        </td>
                        <td>19,200</td>
                        <td>$63</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
                        <td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                        </td>
                        <td>
                          <a href="#" class="kt-widget11__title">Selto</a>
                          <span class="kt-widget11__sub">Powerful Website Builder</span>
                        </td>
                        <td>24,310</td>
                        <td>$39</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
                        <td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                        </td>
                        <td>
                          <a href="#" class="kt-widget11__title">Jippo</a>
                          <span class="kt-widget11__sub">The Best Selling App</span>
                        </td>
                        <td>9,076</td>
                        <td>$105</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
                        <td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                        </td>
                        <td>
                          <a href="#" class="kt-widget11__title">Verto</a>
                          <span class="kt-widget11__sub">Web Development Tool</span>
                        </td>
                        <td>11,094</td>
                        <td>$16</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
                        <td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="kt-widget11__action kt-align-right">
                  <button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
                </div>
              </div>

              <!--end::Widget 11-->
            </div>

            <!--end::tab 1 content-->

            <!--begin::tab 2 content-->
            <div class="tab-pane" id="kt_widget11_tab2_content">

              <!--begin::Widget 11-->
              <div class="kt-widget11">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <td style="width:1%">#</td>
                        <td style="width:40%">Application</td>
                        <td style="width:14%">Sales</td>
                        <td style="width:15%">Change</td>
                        <td style="width:15%">Status</td>
                        <td style="width:15%" class="kt-align-right">Total</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single">
                            <input type="checkbox"><span></span>
                          </label>
                        </td>
                        <td>
                          <span class="kt-widget11__title">Loop</span>
                          <span class="kt-widget11__sub">CRM System</span>
                        </td>
                        <td>19,200</td>
                        <td>$63</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--danger">pending</span></td>
                        <td class="kt-align-right kt-font-brand  kt-font-bold">$23,740</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                        </td>
                        <td>
                          <span class="kt-widget11__title">Selto</span>
                          <span class="kt-widget11__sub">Powerful Website Builder</span>
                        </td>
                        <td>24,310</td>
                        <td>$39</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--success">new</span></td>
                        <td class="kt-align-right kt-font-success  kt-font-bold">$46,010</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                        </td>
                        <td>
                          <span class="kt-widget11__title">Jippo</span>
                          <span class="kt-widget11__sub">The Best Selling App</span>
                        </td>
                        <td>9,076</td>
                        <td>$105</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--brand">approved</span></td>
                        <td class="kt-align-right kt-font-danger kt-font-bold">$15,800</td>
                      </tr>
                      <tr>
                        <td>
                          <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                        </td>
                        <td>
                          <span class="kt-widget11__title">Verto</span>
                          <span class="kt-widget11__sub">Web Development Tool</span>
                        </td>
                        <td>11,094</td>
                        <td>$16</td>
                        <td><span class="kt-badge kt-badge--inline kt-badge--info">done</span></td>
                        <td class="kt-align-right kt-font-warning kt-font-bold">$8,520</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="kt-widget11__action kt-align-right">
                  <button type="button" class="btn btn-label-success btn-bold btn-sm">Generate Report</button>
                </div>
              </div>

              <!--end::Widget 11-->
            </div>

            <!--end::tab 2 content-->

            <!--begin::tab 3 content-->
            <div class="tab-pane" id="kt_widget11_tab3_content">
            </div>

            <!--end::tab 3 content-->
          </div>

          <!--End::Tab Content-->
        </div>
      </div>

      <!--end:: Widgets/Sale Reports-->
    </div>
  </div>

  <!--End::Section-->
</div>
<!-- End Lists -->











<!-- table -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="alert alert-light alert-elevate" role="alert">
    <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
    <div class="alert-text">
      The Metronic Datatable component can be displayed in modal pop-ups with vertical scrolling.
    </div>
  </div>
  <div class="kt-portlet">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <span class="kt-portlet__head-icon">
          <i class="kt-font-brand flaticon2-line-chart"></i>
        </span>
        <h3 class="kt-portlet__head-title">
          Datatable in Modal
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">
          <a href="#" class="btn btn-clean btn-icon-sm">
            <i class="la la-long-arrow-left"></i>
            Back
          </a>
          &nbsp;
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon2-plus"></i> Add New
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="kt-nav">
                <li class="kt-nav__section kt-nav__section--first">
                  <span class="kt-nav__section-text">Choose an action:</span>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                    <span class="kt-nav__link-text">Reservations</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                    <span class="kt-nav__link-text">Appointments</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
                    <span class="kt-nav__link-text">Reminders</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-contract"></i>
                    <span class="kt-nav__link-text">Announcements</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
                    <span class="kt-nav__link-text">Orders</span>
                  </a>
                </li>
                <li class="kt-nav__separator kt-nav__separator--fit">
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
                    <span class="kt-nav__link-text">Projects</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-chat-1"></i>
                    <span class="kt-nav__link-text">User Feedbacks</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="kt-portlet__body">
      <div class="kt-section">
        <h3 class="kt-section__title">Local KTDatatable Example</h3>
        <div class="kt-section__info">
          Display KTDatatable example in modal pop-up with local data.
        </div>
        <button type="button" class="btn btn-brand" data-toggle="modal" data-target="#kt_modal_KTDatatable_local">Launch Modal</button>
      </div>
      <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
    </div>
  </div>

  <!-- remote datatable modal -->
  <div id="kt_modal_KTDatatable_remote" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content" style="min-height: 590px;">
        <div class="modal-header">
          <h5 class="modal-title">
            Datatable
            <small>remote data source</small>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!--begin: Search Form -->
          <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
              <div class="col-xl-8 order-2 order-xl-1">
                <div class="row align-items-center">
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-input-icon kt-input-icon--left">
                      <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                      <span class="kt-input-icon__icon kt-input-icon__icon--left">
                        <span><i class="la la-search"></i></span>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">
                      <div class="kt-form__label">
                        <label>Status:</label>
                      </div>
                      <div class="kt-form__control">
                        <select class="form-control bootstrap-select" id="kt_form_status">
                          <option value="">All</option>
                          <option value="1">Pending</option>
                          <option value="2">Delivered</option>
                          <option value="3">Canceled</option>
                          <option value="4">Success</option>
                          <option value="5">Info</option>
                          <option value="6">Danger</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">
                      <div class="kt-form__label">
                        <label>Type:</label>
                      </div>
                      <div class="kt-form__control">
                        <select class="form-control bootstrap-select" id="kt_form_type">
                          <option value="">All</option>
                          <option value="1">Online</option>
                          <option value="2">Retail</option>
                          <option value="3">Direct</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                <a href="#" class="btn btn-default kt-hidden">
                  <i class="la la-cart-plus"></i> New Order
                </a>
                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
              </div>
            </div>
          </div>

          <!--end: Search Form -->
        </div>
        <div class="modal-body modal-body-fit">

          <!--begin: Datatable -->
          <div id="modal_datatable_ajax_source"></div>

          <!--end: Datatable -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-clean btn-bold btn-upper btn-font-sm" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default btn-bold btn-upper btn-font-sm">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!-- local datatable modal -->
  <div id="kt_modal_KTDatatable_local" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content" style="min-height: 590px;">
        <div class="modal-header">
          <h5 class="modal-title">
            Datatable
            <small>local data source</small>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!--begin: Search Form -->
          <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
              <div class="col-xl-8 order-2 order-xl-1">
                <div class="row align-items-center">
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-input-icon kt-input-icon--left">
                      <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                      <span class="kt-input-icon__icon kt-input-icon__icon--left">
                        <span><i class="la la-search"></i></span>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">
                      <div class="kt-form__label">
                        <label>Status:</label>
                      </div>
                      <div class="kt-form__control">
                        <select class="form-control bootstrap-select" id="kt_form_status">
                          <option value="">All</option>
                          <option value="1">Pending</option>
                          <option value="2">Delivered</option>
                          <option value="3">Canceled</option>
                          <option value="4">Success</option>
                          <option value="5">Info</option>
                          <option value="6">Danger</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                    <div class="kt-form__group kt-form__group--inline">
                      <div class="kt-form__label">
                        <label>Type:</label>
                      </div>
                      <div class="kt-form__control">
                        <select class="form-control bootstrap-select" id="kt_form_type">
                          <option value="">All</option>
                          <option value="1">Online</option>
                          <option value="2">Retail</option>
                          <option value="3">Direct</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                <a href="#" class="btn btn-default kt-hidden">
                  <i class="la la-cart-plus"></i> New Order
                </a>
                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
              </div>
            </div>
          </div>

          <!--end: Search Form -->
        </div>
        <div class="modal-body modal-body-fit">

          <!--begin: Datatable -->
          <div id="modal_datatable_local_source"></div>

          <!--end: Datatable -->
        </div>
        <div class="modal-footer kt-hidden">
          <button type="button" class="btn btn-clean btn-bold btn-upper btn-font-md" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default btn-bold btn-upper btn-font-md">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <span class="kt-portlet__head-icon">
          <i class="kt-font-brand flaticon2-line-chart"></i>
        </span>
        <h3 class="kt-portlet__head-title">
          Sub Datatable
          <small>for the selected row is loaded from remote data source</small>
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">
          <a href="#" class="btn btn-clean btn-icon-sm">
            <i class="la la-long-arrow-left"></i>
            Back
          </a>
          &nbsp;
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="flaticon2-plus"></i> Add New
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="kt-nav">
                <li class="kt-nav__section kt-nav__section--first">
                  <span class="kt-nav__section-text">Choose an action:</span>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                    <span class="kt-nav__link-text">Reservations</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                    <span class="kt-nav__link-text">Appointments</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
                    <span class="kt-nav__link-text">Reminders</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-contract"></i>
                    <span class="kt-nav__link-text">Announcements</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
                    <span class="kt-nav__link-text">Orders</span>
                  </a>
                </li>
                <li class="kt-nav__separator kt-nav__separator--fit">
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
                    <span class="kt-nav__link-text">Projects</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-chat-1"></i>
                    <span class="kt-nav__link-text">User Feedbacks</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="kt-portlet__body">

      <!--begin: Search Form -->
      <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
        <div class="row align-items-center">
          <div class="col-xl-8 order-2 order-xl-1">
            <div class="row align-items-center">
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-input-icon kt-input-icon--left">
                  <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                  <span class="kt-input-icon__icon kt-input-icon__icon--left">
                    <span><i class="la la-search"></i></span>
                  </span>
                </div>
              </div>
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-form__group kt-form__group--inline">
                  <div class="kt-form__label">
                    <label>Status:</label>
                  </div>
                  <div class="kt-form__control">
                    <select class="form-control bootstrap-select" id="kt_form_status">
                      <option value="">All</option>
                      <option value="1">Pending</option>
                      <option value="2">Delivered</option>
                      <option value="3">Canceled</option>
                      <option value="4">Success</option>
                      <option value="5">Info</option>
                      <option value="6">Danger</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-form__group kt-form__group--inline">
                  <div class="kt-form__label">
                    <label>Type:</label>
                  </div>
                  <div class="kt-form__control">
                    <select class="form-control bootstrap-select" id="kt_form_type">
                      <option value="">All</option>
                      <option value="1">Online</option>
                      <option value="2">Retail</option>
                      <option value="3">Direct</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
            <a href="#" class="btn btn-default kt-hidden">
              <i class="la la-cart-plus"></i> New Order
            </a>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
          </div>
        </div>
      </div>

      <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

      <!--begin: Datatable -->
      <div id="sub_datatable_ajax_source"></div>

      <!--end: Datatable -->
    </div>
  </div>
</div>
<!-- End table -->












<!-- form columns -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-lg-12">

      <!--begin::Portlet-->
      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              3 Columns Form Layout
            </h3>
          </div>
        </div>

        <!--begin::Form-->
        <form class="kt-form kt-form--label-right">
          <div class="kt-portlet__body">
            <div class="form-group row">
              <div class="col-lg-4">
                <label>Full Name:</label>
                <input type="email" class="form-control" placeholder="Enter full name">
                <span class="form-text text-muted">Please enter your full name</span>
              </div>
              <div class="col-lg-4">
                <label class="">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email">
                <span class="form-text text-muted">Please enter your email</span>
              </div>
              <div class="col-lg-4">
                <label>Username:</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <span class="form-text text-muted">Please enter your username</span>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-4">
                <label class="">Contact:</label>
                <input type="email" class="form-control" placeholder="Enter contact number">
                <span class="form-text text-muted">Please enter your contact</span>
              </div>
              <div class="col-lg-4">
                <label class="">Fax:</label>
                <div class="kt-input-icon kt-input-icon--right">
                  <input type="text" class="form-control" placeholder="Fax number">
                  <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-info-circle"></i></span></span>
                </div>
                <span class="form-text text-muted">Please enter fax</span>
              </div>
              <div class="col-lg-4">
                <label>Address:</label>
                <div class="kt-input-icon kt-input-icon--right">
                  <input type="text" class="form-control" placeholder="Enter your address">
                  <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                </div>
                <span class="form-text text-muted">Please enter your address</span>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-4">
                <label class="">Postcode:</label>
                <div class="kt-input-icon kt-input-icon--right">
                  <input type="text" class="form-control" placeholder="Enter your postcode">
                  <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
                </div>
                <span class="form-text text-muted">Please enter your postcode</span>
              </div>
              <div class="col-lg-4">
                <label class="">User Group:</label>
                <div class="kt-radio-inline">
                  <label class="kt-radio kt-radio--solid">
                    <input type="radio" name="example_2" checked value="2"> Sales Person
                    <span></span>
                  </label>
                  <label class="kt-radio kt-radio--solid">
                    <input type="radio" name="example_2" value="2"> Customer
                    <span></span>
                  </label>
                </div>
                <span class="form-text text-muted">Please select user group</span>
              </div>
            </div>
          </div>
          <div class="kt-portlet__foot">
            <div class="kt-form__actions">
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                  <button type="reset" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </form>

        <!--end::Form-->
      </div>

      <!--end::Portlet-->


    </div>
  </div>
</div>
<!-- End form columns -->










@endsection
