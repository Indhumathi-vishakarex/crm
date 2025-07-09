<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none">
<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/user-asset-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:24:52 GMT -->
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Smarthr - Bootstrap Admin Template" />
  <meta
    name="keywords"
    content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
  <meta
    name="author"
    content="Dreamstechnologies - Bootstrap Admin Template" />
  <title>Employee Profile - HRMS admin template</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />

  <!-- UI Plugins -->
  <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />

  <!-- Custom Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>

<body>
  <div class="main-wrapper">


    @include('layouts.header')
    @include('layouts.sidebar')

    <div class="page-wrapper">
      <div class="content container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-sm-12">
              <h3 class="page-title">Profile</h3>
              <ul class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin-dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card mb-0">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="profile-view">
                  <div class="profile-img-wrap">
                    <div class="profile-img">
                      <a href="#"><img alt src="assets/img/profiles/avatar-02.jpg" /></a>
                    </div>
                  </div>
                  <div class="profile-basic">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="profile-info-left">
                          <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                          <h6 class="text-muted">UI/UX Design Team</h6>
                          <small class="text-muted">Web Designer</small>
                          <div class="staff-id">Employee ID : FT-0001</div>
                          <div class="small doj text-muted">
                            Date of Join : 1st Jan 2013
                          </div>
                          <div class="staff-msg">
                            <a class="btn btn-custom" href="{{route('chat')}}">Send Message</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-7">
                        <ul class="personal-info">
                          <li>
                            <div class="title">Phone:</div>
                            <div class="text"><a href>9876543210</a></div>
                          </li>
                          <li>
                            <div class="title">Email:</div>
                            <div class="text">
                              <a href><span
                                  class="__cf_email__"
                                  data-cfemail="375d585f5953585277524f565a475b521954585a">[email&#160;protected]</span></a>
                            </div>
                          </li>
                          <li>
                            <div class="title">Birthday:</div>
                            <div class="text">24th July</div>
                          </li>
                          <li>
                            <div class="title">Address:</div>
                            <div class="text">
                              1861 Bayonne Ave, Manchester Township, NJ, 08759
                            </div>
                          </li>
                          <li>
                            <div class="title">Gender:</div>
                            <div class="text">Male</div>
                          </li>
                          <li>
                            <div class="title">Reports to:</div>
                            <div class="text">
                              <div class="avatar-box">
                                <div class="avatar avatar-xs">
                                  <img
                                    src="assets/img/profiles/avatar-16.jpg"
                                    alt />
                                </div>
                              </div>
                              <a href="{{route('profile')}}"> Jeffery Lalor </a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="pro-edit">
                    <a
                      data-bs-target="#profile_info"
                      data-bs-toggle="modal"
                      class="edit-icon"
                      href="#"><i class="fa fa-pencil"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card tab-box">
          <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
              <ul class="nav nav-tabs nav-tabs-bottom">
                <li class="nav-item">
                  <a href="{{ route('profile') }}#emp_profile" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('profile') }}#emp_projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                  
                  <a href="{{ route('profile') }}#bank_statutory" class="nav-link">
                    Bank & Statutory
                    <small class="text-danger">(Admin Only)</small>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('profile') }}#emp_assets" class="nav-link active">Assets</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="assign-head">
          <div class="assign-content">
            <img src="assets/img/keyboard.png" alt="img" />
            <h6>Dell Keyboard</h6>
          </div>
          <div class="assign-content">
            <a
              href="#"
              class="btn btn-assign"
              data-bs-toggle="modal"
              data-bs-target="#raise-issue"><i class="fas fa-hand-paper"></i> Raise Issue
            </a>
          </div>
        </div>
        <div class="card asset-box">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-7">
                <h5>Asset Info</h5>
                <div class="asset-info">
                  <div class="asset-info-det">
                    <h6>Wired Keyboard</h6>
                    <p>SE5214 - 2022 2022 2022</p>
                    <ul>
                      <li>Type <span>Keybaord</span></li>
                      <li>Serial Number <span>3647952145678</span></li>
                      <li>Brand <span>Dell</span></li>
                    </ul>
                  </div>
                </div>
                <div class="assets-image">
                  <h5>Asset Images</h5>
                  <ul>
                    <li>
                      <img src="assets/img/img1.jpg" alt="img" />
                    </li>
                    <li>
                      <img src="assets/img/img2.jpg" alt="img" />
                    </li>
                    <li>
                      <img src="assets/img/img3.jpg" alt="img" />
                    </li>
                    <li>
                      <img src="assets/img/img4.jpg" alt="img" />
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="asset-history">
                  <h5>Asset Images</h5>
                  <ul>
                    <li>
                      <div class="aset-img">
                        <img src="assets/img/icons/icon-01.svg" alt="img" />
                      </div>
                      <div class="asset-inf">
                        <h6>Vendor</h6>
                        <p>Compusoft Systems Ltd.,</p>
                      </div>
                    </li>
                    <li>
                      <div class="aset-img">
                        <img src="assets/img/icons/icon-03.svg" alt="img" />
                      </div>
                      <div class="asset-inf">
                        <h6>Category</h6>
                        <p>Computer</p>
                      </div>
                    </li>
                    <li>
                      <div class="aset-img">
                        <img src="assets/img/icons/icon-04.svg" alt="img" />
                      </div>
                      <div class="asset-inf">
                        <h6>Cost</h6>
                        <p>₹ 1,200</p>
                      </div>
                    </li>
                    <li>
                      <div class="aset-img">
                        <img src="assets/img/icons/icon-05.svg" alt="img" />
                      </div>
                      <div class="asset-inf">
                        <h6>Location</h6>
                        <p>123 Street, Vivekanandhar Road, Coimbatore - 32</p>
                      </div>
                    </li>
                    <li>
                      <div class="aset-img">
                        <img src="assets/img/icons/icon-02.svg" alt="img" />
                      </div>
                      <div class="asset-inf">
                        <h6>Warranty</h6>
                        <p>From 11-12-2022 - To 11-12-2022</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="profile_info" class="modal custom-modal fade" role="dialog">
          <div
            class="modal-dialog modal-dialog-centered modal-lg"
            role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Profile Information</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="profile-img-wrap edit-img">
                        <img
                          class="inline-block"
                          src="assets/img/profiles/avatar-02.jpg"
                          alt="user" />
                        <div class="fileupload btn">
                          <span class="btn-text">edit</span>
                          <input class="upload" type="file" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">First Name</label>
                            <input
                              type="text"
                              class="form-control"
                              value="John" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Last Name</label>
                            <input
                              type="text"
                              class="form-control"
                              value="Doe" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Birth Date</label>
                            <div class="cal-icon">
                              <input
                                class="form-control datetimepicker"
                                type="text"
                                value="05/06/1985" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Gender</label>
                            <select class="select form-control">
                              <option value="male selected">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          value="4487 Snowbird Lane" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">State</label>
                        <input
                          type="text"
                          class="form-control"
                          value="New York" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Country</label>
                        <input
                          type="text"
                          class="form-control"
                          value="United States" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Pin Code</label>
                        <input
                          type="text"
                          class="form-control"
                          value="10523" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Phone Number</label>
                        <input
                          type="text"
                          class="form-control"
                          value="631-889-3206" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Department
                          <span class="text-danger">*</span></label>
                        <select class="select">
                          <option>Select Department</option>
                          <option>Web Development</option>
                          <option>IT Management</option>
                          <option>Marketing</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Designation
                          <span class="text-danger">*</span></label>
                        <select class="select">
                          <option>Select Designation</option>
                          <option>Web Designer</option>
                          <option>Web Developer</option>
                          <option>Android Developer</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Reports To
                          <span class="text-danger">*</span></label>
                        <select class="select">
                          <option>-</option>
                          <option>Wilmer Deluna</option>
                          <option>Lesley Grauer</option>
                          <option>Jeffery Lalor</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div id="raise-issue" class="modal custom-modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Raise Issue</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-block mb-3">
                        <label class="col-form-label">Description</label>
                        <textarea rows="4" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="submit-section mt-0">
                    <button class="btn btn-primary submit-btn w-100">
                      Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="settings-icon">
    <span
      data-bs-toggle="offcanvas"
      data-bs-target="#theme-settings-offcanvas"
      aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span>
  </div>
  <div
    class="offcanvas offcanvas-end border-0"
    tabindex="-1"
    id="theme-settings-offcanvas">
    <div class="sidebar-headerset">
      <div class="sidebar-headersets">
        <h2>Customizer</h2>
        <h3>Customize your overview Page layout</h3>
      </div>
      <div class="sidebar-headerclose">
        <a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="Close Icon" /></a>
      </div>
    </div>
    <div class="offcanvas-body p-0">
      <div data-simplebar class="h-100">
        <div class="settings-mains">
          <div class="layout-head">
            <h5>Layout</h5>
            <h6>Choose your layout</h6>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  id="customizer-layout01"
                  name="data-layout"
                  type="radio"
                  value="vertical"
                  class="form-check-input" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="customizer-layout01">
                  <img src="assets/img/vertical.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Vertical</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  id="customizer-layout02"
                  name="data-layout"
                  type="radio"
                  value="horizontal"
                  class="form-check-input" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="customizer-layout02">
                  <img src="assets/img/horizontal.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Horizontal</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  id="customizer-layout03"
                  name="data-layout"
                  type="radio"
                  value="twocolumn"
                  class="form-check-input" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="customizer-layout03">
                  <img src="assets/img/two-col.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Two Column</h5>
            </div>
          </div>
          <div class="layout-head pt-3">
            <h5>Color Scheme</h5>
            <h6>Choose Light or Dark Scheme.</h6>
          </div>
          <div class="colorscheme-cardradio">
            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-orange"
                    value="orange" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-orange">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Orange</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-light"
                    value="light" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-light">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio dark p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-dark"
                    value="dark" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-dark">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio blue p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-blue"
                    value="blue" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-blue">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Blue</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio maroon p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-maroon"
                    value="maroon" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-maroon">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Maroon</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio purple p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-mode"
                    id="layout-mode-purple"
                    value="purple" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-mode-purple">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Purple</h5>
              </div>
            </div>
          </div>
          <div id="layout-width">
            <div class="layout-head pt-3">
              <h5>Layout Width</h5>
              <h6>Choose Fluid or Boxed layout.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-width"
                    id="layout-width-fluid"
                    value="fluid" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="layout-width-fluid">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Fluid</h5>
              </div>
              <div class="col-4">
                <div class="form-check card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-width"
                    id="layout-width-boxed"
                    value="boxed" />
                  <label
                    class="form-check-label avatar-md w-100 px-2"
                    for="layout-width-boxed">
                    <img src="assets/img/boxed.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Boxed</h5>
              </div>
            </div>
          </div>
          <div id="layout-position">
            <div class="layout-head pt-3">
              <h5>Layout Position</h5>
              <h6>Choose Fixed or Scrollable Layout Position.</h6>
            </div>
            <div
              class="btn-group bor-rad-50 overflow-hidden radio"
              role="group">
              <input
                type="radio"
                class="btn-check"
                name="data-layout-position"
                id="layout-position-fixed"
                value="fixed" />
              <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
              <input
                type="radio"
                class="btn-check"
                name="data-layout-position"
                id="layout-position-scrollable"
                value="scrollable" />
              <label
                class="btn btn-light w-sm ms-0"
                for="layout-position-scrollable">Scrollable</label>
            </div>
          </div>
          <div class="layout-head pt-3">
            <h5>Topbar Color</h5>
            <h6>Choose Light or Dark Topbar Color.</h6>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  class="form-check-input"
                  type="radio"
                  name="data-topbar"
                  id="topbar-color-light"
                  value="light" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="topbar-color-light">
                  <img src="assets/img/vertical.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Light</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input
                  class="form-check-input"
                  type="radio"
                  name="data-topbar"
                  id="topbar-color-dark"
                  value="dark" />
                <label
                  class="form-check-label avatar-md w-100"
                  for="topbar-color-dark">
                  <img src="assets/img/dark.png" alt="Layout Image" />
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Dark</h5>
            </div>
          </div>
          <div id="sidebar-size">
            <div class="layout-head pt-3">
              <h5>Sidebar Size</h5>
              <h6>Choose a size of Sidebar.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-size"
                    id="sidebar-size-default"
                    value="lg" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-size-default">
                    <img src="assets/img/vertical.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-size"
                    id="sidebar-size-compact"
                    value="md" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-size-compact">
                    <img src="assets/img/compact.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Compact</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar-size"
                    id="sidebar-size-small-hover"
                    value="sm-hover" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-size-small-hover">
                    <img
                      src="assets/img/small-hover.png"
                      alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
              </div>
            </div>
          </div>
          <div id="sidebar-view">
            <div class="layout-head pt-3">
              <h5>Sidebar View</h5>
              <h6>Choose Default or Detached Sidebar view.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-style"
                    id="sidebar-view-default"
                    value="default" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-view-default">
                    <img src="assets/img/compact.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Default</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-layout-style"
                    id="sidebar-view-detached"
                    value="detached" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-view-detached">
                    <img src="assets/img/detached.png" alt="Layout Image" />
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Detached</h5>
              </div>
            </div>
          </div>
          <div id="sidebar-color">
            <div class="layout-head pt-3">
              <h5>Sidebar Color</h5>
              <h6>Choose a color of Sidebar.</h6>
            </div>
            <div class="row">
              <div class="col-4">
                <div
                  class="form-check sidebar-setting card-radio p-0"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient.show">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar"
                    id="sidebar-color-light"
                    value="light" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-color-light">
                    <span class="bg-light bg-sidebarcolor"></span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Light</h5>
              </div>
              <div class="col-4">
                <div
                  class="form-check sidebar-setting card-radio p-0"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient.show">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar"
                    id="sidebar-color-dark"
                    value="dark" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-color-dark">
                    <span class="bg-darks bg-sidebarcolor"></span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Dark</h5>
              </div>
              <div class="col-4">
                <div class="form-check sidebar-setting card-radio p-0">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="data-sidebar"
                    id="sidebar-color-gradient"
                    value="gradient" />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="sidebar-color-gradient">
                    <span class="bg-gradients bg-sidebarcolor"></span>
                  </label>
                </div>
                <h5 class="fs-13 text-center mt-2">Gradient</h5>
              </div>
              <div class="col-4 d-none">
                <button
                  class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseBgGradient"
                  aria-expanded="false">
                  <span class="d-flex gap-1 h-100">
                    <span class="flex-shrink-0">
                      <span
                        class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                        <span
                          class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                        <span
                          class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                        <span
                          class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                        <span
                          class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                      </span>
                    </span>
                    <span class="flex-grow-1">
                      <span class="d-flex h-100 flex-column">
                        <span class="bg-light d-block p-1"></span>
                        <span class="bg-light d-block p-1 mt-auto"></span>
                      </span>
                    </span>
                  </span>
                </button>
                <h5 class="fs-13 text-center mt-2">Gradient</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
      <div class="row">
        <div class="col-6">
          <button
            type="button"
            class="btn btn-light w-100 bor-rad-50"
            id="reset-layout">
            Reset
          </button>
        </div>
        <div class="col-6">
          <a
            href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150"
            target="_blank"
            class="btn btn-primary w-100 bor-rad-50">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Cloudflare Email Decode -->
  <script data-cfasync="false" src="{{ asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>

  <!-- jQuery & Bootstrap -->
  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/select2.min.js') }}"></script>
  <script src="{{ asset('assets/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

  <!-- UI & Theme -->
  <script src="{{ asset('assets/js/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/layout.js') }}"></script>
  <script src="{{ asset('assets/js/theme-settings.js') }}"></script>
  <script src="{{ asset('assets/js/greedynav.js') }}"></script>
  <script src="{{ asset('assets/js/app.js') }}"></script>

  <!-- Cloudflare Rocket Loader -->
  <script src="{{ asset('../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="798090201b2a93ab9fd2641c-|49" defer></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/user-asset-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:24:56 GMT -->

</html>