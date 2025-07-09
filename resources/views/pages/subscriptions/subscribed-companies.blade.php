<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/subscribed-companies by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:16 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template" />
<title>CRM - Winngoopages</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
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
              <div class="col">
                <h3 class="page-title">Subscribed Companies</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Subscriptions</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3">
              <div class="stats-info">
                <h6>Joining</h6>
                <h4>12 <span>This Month</span></h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stats-info">
                <h6>Renewal</h6>
                <h4>3 <span>This Month</span></h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stats-info">
                <h6>Renewal</h6>
                <h4>0 <span>Next Month</span></h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="stats-info">
                <h6>Total Companies</h6>
                <h4>312</h4>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-hover custom-table datatable mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Client</th>
                      <th>Plan</th>
                      <th>Users</th>
                      <th>Plan Duration</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Amount</th>
                      <th>Plan Status</th>
                      <th>Update Plan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-19.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}">Global Technologies</a>
                        </h2>
                      </td>
                      <td>Free Trial</td>
                      <td>30</td>
                      <td>6 Months</td>
                      <td>15 Feb 2019</td>
                      <td>14 Jul 2019</td>
                      <td>$200</td>
                      <td>
                        <span class="badge bg-inverse-success">Active</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_1"
                            class="check"
                          />
                          <label for="company_status_1" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-29.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}">Delta Infotech</a>
                        </h2>
                      </td>
                      <td>Premium</td>
                      <td>50</td>
                      <td>1 Year</td>
                      <td>15 Feb 2019</td>
                      <td>14 Feb 2020</td>
                      <td>$200</td>
                      <td>
                        <span class="badge bg-inverse-danger">Expired</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_2"
                            class="check"
                            checked
                          />
                          <label for="company_status_2" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-07.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}">Cream Inc</a>
                        </h2>
                      </td>
                      <td>Professional</td>
                      <td>10</td>
                      <td>1 Month</td>
                      <td>15 Feb 2019</td>
                      <td>14 Feb 2020</td>
                      <td>Free</td>
                      <td>
                        <span class="badge bg-inverse-success">Active</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_3"
                            class="check"
                            checked
                          />
                          <label for="company_status_3" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-06.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}">Wellware Company</a>
                        </h2>
                      </td>
                      <td>Enterprise</td>
                      <td>10</td>
                      <td>1 Month</td>
                      <td>15 Feb 2019</td>
                      <td>14 Feb 2020</td>
                      <td>Free</td>
                      <td>
                        <span class="badge bg-inverse-success">Active</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_4"
                            class="check"
                            checked
                          />
                          <label for="company_status_4" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-14.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}">Mustang Technologies</a>
                        </h2>
                      </td>
                      <td>Free Trial</td>
                      <td>10</td>
                      <td>1 Year</td>
                      <td>15 Feb 2019</td>
                      <td>14 Feb 2020</td>
                      <td>Free</td>
                      <td>
                        <span class="badge bg-inverse-success">Active</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_5"
                            class="check"
                            checked
                          />
                          <label for="company_status_5" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-18.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}"
                            >International Software Inc</a
                          >
                        </h2>
                      </td>
                      <td>Enterprise</td>
                      <td>10</td>
                      <td>1 Month</td>
                      <td>15 Feb 2019</td>
                      <td>14 Feb 2020</td>
                      <td>Free</td>
                      <td>
                        <span class="badge bg-inverse-success">Active</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_6"
                            class="check"
                            checked
                          />
                          <label for="company_status_6" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>
                        <h2 class="table-avatar">
                          <a href="{{route('client-profile')}}" class="avatar"
                            ><img
                              src="assets/img/profiles/avatar-28.jpg"
                              alt="User Image"
                          /></a>
                          <a href="{{route('client-profile')}}">Mercury Software Inc</a>
                        </h2>
                      </td>
                      <td>Professional</td>
                      <td>10</td>
                      <td>1 Year</td>
                      <td>15 Feb 2019</td>
                      <td>14 Feb 2020</td>
                      <td>Free</td>
                      <td>
                        <span class="badge bg-inverse-success">Active</span>
                      </td>
                      <td>
                        <a
                          class="btn btn-primary btn-sm"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#upgrade_plan"
                          >Change Plan</a
                        >
                      </td>
                      <td>
                        <div class="status-toggle">
                          <input
                            type="checkbox"
                            id="company_status_7"
                            class="check"
                            checked
                          />
                          <label for="company_status_7" class="checktoggle"
                            >checkbox</label
                          >
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="upgrade_plan" role="dialog">
            <div class="modal-dialog modal-md modal-dialog-centered">
              <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                  <i class="fa fa-close"></i>
                </button>
                <div class="modal-body">
                  <h5 class="modal-title text-center mb-3">Upgrade Plan</h5>
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Plan Name</label>
                          <input
                            type="text"
                            placeholder="Free Trial"
                            class="form-control"
                            value="Free Trial"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Amount</label>
                          <input
                            type="text"
                            class="form-control"
                            value="$500"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Plan Type</label>
                          <select class="select">
                            <option>Monthly</option>
                            <option>Yearly</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">No of Users</label>
                          <select class="select">
                            <option>5 Users</option>
                            <option>50 Users</option>
                            <option>Unlimited</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">No of Projects</label>
                          <select class="select">
                            <option>5 Projects</option>
                            <option>50 Projects</option>
                            <option>Unlimited</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >No of Storage Space</label
                          >
                          <select class="select">
                            <option>5 GB</option>
                            <option>100 GB</option>
                            <option>500 GB</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Plan Description</label>
                      <textarea
                        class="form-control"
                        rows="4"
                        cols="30"
                      ></textarea>
                    </div>
                    <div class="input-block mb-3">
                      <label class="d-block col-form-label">Status</label>
                      <div class="status-toggle">
                        <input
                          type="checkbox"
                          id="upgrade_plan_status"
                          class="check"
                        />
                        <label for="upgrade_plan_status" class="checktoggle"
                          >checkbox</label
                        >
                      </div>
                    </div>
                    <div class="m-t-20 text-center">
                      <button class="btn btn-primary submit-btn">Save</button>
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
        aria-controls="theme-settings-offcanvas"
        ><i class="las la-cog"></i
      ></span>
    </div>
    <div
      class="offcanvas offcanvas-end border-0"
      tabindex="-1"
      id="theme-settings-offcanvas"
    >
      <div class="sidebar-headerset">
        <div class="sidebar-headersets">
          <h2>Customizer</h2>
          <h3>Customize your overview Page layout</h3>
        </div>
        <div class="sidebar-headerclose">
          <a data-bs-dismiss="offcanvas" aria-label="Close"
            ><img src="assets/img/close.png" alt="Close Icon"
          /></a>
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
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="customizer-layout01"
                  >
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
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="customizer-layout02"
                  >
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
                    class="form-check-input"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="customizer-layout03"
                  >
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
                      value="orange"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-orange"
                    >
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
                      value="light"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-light"
                    >
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
                      value="dark"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-dark"
                    >
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
                      value="blue"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-blue"
                    >
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
                      value="maroon"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-maroon"
                    >
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
                      value="purple"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-mode-purple"
                    >
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
                      value="fluid"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="layout-width-fluid"
                    >
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
                      value="boxed"
                    />
                    <label
                      class="form-check-label avatar-md w-100 px-2"
                      for="layout-width-boxed"
                    >
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
                role="group"
              >
                <input
                  type="radio"
                  class="btn-check"
                  name="data-layout-position"
                  id="layout-position-fixed"
                  value="fixed"
                />
                <label class="btn btn-light w-sm" for="layout-position-fixed"
                  >Fixed</label
                >
                <input
                  type="radio"
                  class="btn-check"
                  name="data-layout-position"
                  id="layout-position-scrollable"
                  value="scrollable"
                />
                <label
                  class="btn btn-light w-sm ms-0"
                  for="layout-position-scrollable"
                  >Scrollable</label
                >
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
                    value="light"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="topbar-color-light"
                  >
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
                    value="dark"
                  />
                  <label
                    class="form-check-label avatar-md w-100"
                    for="topbar-color-dark"
                  >
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
                      value="lg"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-size-default"
                    >
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
                      value="md"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-size-compact"
                    >
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
                      value="sm-hover"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-size-small-hover"
                    >
                      <img
                        src="assets/img/small-hover.png"
                        alt="Layout Image"
                      />
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
                      value="default"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-view-default"
                    >
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
                      value="detached"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-view-detached"
                    >
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
                    data-bs-target="#collapseBgGradient.show"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-light"
                      value="light"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-color-light"
                    >
                      <span class="bg-light bg-sidebarcolor"></span>
                    </label>
                  </div>
                  <h5 class="fs-13 text-center mt-2">Light</h5>
                </div>
                <div class="col-4">
                  <div
                    class="form-check sidebar-setting card-radio p-0"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseBgGradient.show"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="data-sidebar"
                      id="sidebar-color-dark"
                      value="dark"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-color-dark"
                    >
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
                      value="gradient"
                    />
                    <label
                      class="form-check-label avatar-md w-100"
                      for="sidebar-color-gradient"
                    >
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
                    aria-expanded="false"
                  >
                    <span class="d-flex gap-1 h-100">
                      <span class="flex-shrink-0">
                        <span
                          class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"
                        >
                          <span
                            class="d-block p-1 px-2 bg-soft-light rounded mb-2"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
                          <span
                            class="d-block p-1 px-2 pb-0 bg-soft-light"
                          ></span>
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
              id="reset-layout"
            >
              Reset
            </button>
          </div>
          <div class="col-6">
            <a
              href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150"
              target="_blank"
              class="btn btn-primary w-100 bor-rad-50"
              >Buy Now</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Core JS Libraries -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<!-- Custom Layout and Theme Scripts -->
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Optional: Cloudflare Rocket Loader -->
<script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="752d5f30fdb089185c703da2-|49" defer></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/subscribed-companies by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:16 GMT -->
</html>
