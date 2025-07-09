<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/inbox by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:29 GMT -->
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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

  <body>
    <div class="main-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')

      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="page-title">Inbox</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Inbox</li>
                </ul>
              </div>
              <div class="col-auto float-end ms-auto">
                <a href="{{route('compose')}}" class="btn add-btn"
                  ><i class="fa fa-plus"></i> Compose</a
                >
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="email-header">
                    <div class="row">
                      <div class="col top-action-left">
                        <div class="float-start">
                          <div class="btn-group dropdown-action">
                            <button
                              type="button"
                              class="btn btn-white dropdown-toggle"
                              data-bs-toggle="dropdown"
                            >
                              Select <i class="fa fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">All</a>
                              <a class="dropdown-item" href="#">None</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Read</a>
                              <a class="dropdown-item" href="#">Unread</a>
                            </div>
                          </div>
                          <div class="btn-group dropdown-action">
                            <button
                              type="button"
                              class="btn btn-white dropdown-toggle"
                              data-bs-toggle="dropdown"
                            >
                              Actions <i class="fa fa-angle-down"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Reply</a>
                              <a class="dropdown-item" href="#">Forward</a>
                              <a class="dropdown-item" href="#">Archive</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Mark As Read</a>
                              <a class="dropdown-item" href="#"
                                >Mark As Unread</a
                              >
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </div>
                          <div class="btn-group dropdown-action">
                            <button
                              type="button"
                              class="btn btn-white dropdown-toggle"
                              data-bs-toggle="dropdown"
                            >
                              <i class="fa fa-folder"></i>
                              <i class="fa fa-angle-down"></i>
                            </button>
                            <div role="menu" class="dropdown-menu">
                              <a class="dropdown-item" href="#">Social</a>
                              <a class="dropdown-item" href="#">Forums</a>
                              <a class="dropdown-item" href="#">Updates</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Spam</a>
                              <a class="dropdown-item" href="#">Trash</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">New</a>
                            </div>
                          </div>
                          <div class="btn-group dropdown-action">
                            <button
                              type="button"
                              data-bs-toggle="dropdown"
                              class="btn btn-white dropdown-toggle"
                            >
                              <i class="fa fa-tags"></i>
                              <i class="fa fa-angle-down"></i>
                            </button>
                            <div role="menu" class="dropdown-menu">
                              <a class="dropdown-item" href="#">Work</a>
                              <a class="dropdown-item" href="#">Family</a>
                              <a class="dropdown-item" href="#">Social</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Primary</a>
                              <a class="dropdown-item" href="#">Promotions</a>
                              <a class="dropdown-item" href="#">Forums</a>
                            </div>
                          </div>
                        </div>
                        <div class="float-start d-none d-sm-block">
                          <input
                            type="text"
                            placeholder="Search Messages"
                            class="form-control search-message"
                          />
                        </div>
                      </div>
                      <div class="col-auto top-action-right">
                        <div class="text-end">
                          <button
                            type="button"
                            title="Refresh"
                            data-bs-toggle="tooltip"
                            class="btn btn-white d-none d-md-inline-block"
                          >
                            <i class="fa fa-refresh"></i>
                          </button>
                          <div class="btn-group">
                            <a class="btn btn-white"
                              ><i class="fa fa-angle-left"></i
                            ></a>
                            <a class="btn btn-white"
                              ><i class="fa fa-angle-right"></i
                            ></a>
                          </div>
                        </div>
                        <div class="text-end">
                          <span class="text-muted d-none d-md-inline-block"
                            >Showing 10 of 112
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="email-content">
                    <div class="table-responsive">
                      <table class="table table-inbox table-hover">
                        <thead>
                          <tr>
                            <th colspan="6">
                              <input type="checkbox" class="checkbox-all" />
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr
                            class="unread clickable-row"
                            data-href="mail-view"
                          >
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa fa-star starred"></i
                              ></span>
                            </td>
                            <td class="name">John Doe</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td><i class="fa fa-paperclip"></i></td>
                            <td class="mail-date">13:14</td>
                          </tr>
                          <tr
                            class="unread clickable-row"
                            data-href="mail-view"
                          >
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">Envato Account</td>
                            <td class="subject">
                              Important account security update from Envato
                            </td>
                            <td></td>
                            <td class="mail-date">8:42</td>
                          </tr>
                          <tr class="clickable-row" data-href="mail-view">
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">Twitter</td>
                            <td class="subject">
                              HRMS Bootstrap Admin Template
                            </td>
                            <td></td>
                            <td class="mail-date">30 Nov</td>
                          </tr>
                          <tr
                            class="unread clickable-row"
                            data-href="mail-view"
                          >
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">Richard Parker</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td></td>
                            <td class="mail-date">18 Sep</td>
                          </tr>
                          <tr class="clickable-row" data-href="mail-view">
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">John Smith</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td></td>
                            <td class="mail-date">21 Aug</td>
                          </tr>
                          <tr class="clickable-row" data-href="mail-view">
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">me, Robert Smith (3)</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td></td>
                            <td class="mail-date">1 Aug</td>
                          </tr>
                          <tr
                            class="unread clickable-row"
                            data-href="mail-view"
                          >
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">Codecanyon</td>
                            <td class="subject">Welcome To Codecanyon</td>
                            <td></td>
                            <td class="mail-date">Jul 13</td>
                          </tr>
                          <tr class="clickable-row" data-href="mail-view">
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">Richard Miles</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td><i class="fa fa-paperclip"></i></td>
                            <td class="mail-date">May 14</td>
                          </tr>
                          <tr
                            class="unread clickable-row"
                            data-href="mail-view"
                          >
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa-regular fa-star"></i
                              ></span>
                            </td>
                            <td class="name">John Smith</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td></td>
                            <td class="mail-date">11/11/16</td>
                          </tr>
                          <tr class="clickable-row" data-href="mail-view">
                            <td>
                              <input type="checkbox" class="checkmail" />
                            </td>
                            <td>
                              <span class="mail-important"
                                ><i class="fa fa-star starred"></i
                              ></span>
                            </td>
                            <td class="name">Mike Litorus</td>
                            <td class="subject">
                              Lorem ipsum dolor sit amet, consectetuer
                              adipiscing elit
                            </td>
                            <td></td>
                            <td class="mail-date">10/31/16</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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
<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Optional: Cloudflare Rocket Loader -->
<script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="9f1ed2856303af44cac22aee-|49" defer></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/inbox by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:30 GMT -->
</html>
