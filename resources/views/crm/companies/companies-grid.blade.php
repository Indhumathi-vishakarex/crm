<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/companies-grid by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:08 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta
      name="keywords"
      content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects"
    />
    <meta
      name="author"
      content="Dreamstechnologies - Bootstrap Admin Template"
    />
    <title>CRM - Winngoopages</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

   
  </head>
  <body>
    <div class="main-wrapper">
      
 @include('layouts.header')
@include('layouts.sidebar')


      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-md-4">
                <h3 class="page-title">Companies</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Companies</li>
                </ul>
              </div>
              <div class="col-md-8 float-end ms-auto">
                <div class="d-flex title-head">
                  <div class="view-icons">
                    <a href="javascript:void(0);" class="grid-view btn btn-link"
                      ><i class="las la-redo-alt"></i
                    ></a>
                    <a
                      href="javascript:void(0);"
                      class="list-view btn btn-link"
                      id="collapse-header"
                      ><i class="las la-expand-arrows-alt"></i
                    ></a>
                    <a
                      href="javascript:void(0);"
                      class="list-view btn btn-link"
                      id="filter_search"
                      ><i class="las la-filter"></i
                    ></a>
                  </div>
                  <div class="form-sort">
                    <a
                      href="javascript:void(0);"
                      class="list-view btn btn-link"
                      data-bs-toggle="modal"
                      data-bs-target="#export"
                      ><i class="las la-file-export"></i>Export</a
                    >
                  </div>
                  <a
                    href="#"
                    class="btn add-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#add_company"
                    ><i class="la la-plus-circle"></i> Add Companies</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="filter-filelds" id="filter_inputs">
            <div class="row filter-row">
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating" />
                  <label class="focus-label">Company Name</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating" />
                  <label class="focus-label">Email</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating" />
                  <label class="focus-label">Phone Number</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus focused">
                  <input
                    type="text"
                    class="form-control date-range bookingrange"
                  />
                  <label class="focus-label">From - To Date</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                  <select class="select floating">
                    <option>--Select--</option>
                    <option>Germany</option>
                    <option>USA</option>
                    <option>Canada</option>
                    <option>India</option>
                    <option>China</option>
                  </select>
                  <label class="focus-label">Location</label>
                </div>
              </div>
              <div class="col-xl-2">
                <a href="#" class="btn btn-success w-100"> Search </a>
              </div>
            </div>
          </div>
          <hr />

          <div class="filter-section">
            <ul>
              <li>
                <div class="view-icons">
                  <a href="{{route('companies')}}" class="list-view btn btn-link"
                    ><i class="las la-list"></i
                  ></a>
                  <a
                    href="{{route('companies-grid')}}"
                    class="grid-view btn btn-link active"
                    ><i class="las la-th"></i
                  ></a>
                </div>
              </li>
              <li>
                <div class="form-sort">
                  <i class="las la-sort-alpha-up-alt"></i>
                  <select class="select">
                    <option>Sort By Alphabet</option>
                    <option>Ascending</option>
                    <option>Descending</option>
                    <option>Recently Viewed</option>
                    <option>Recently Added</option>
                  </select>
                </div>
              </li>
              <li>
                <div class="form-sorts dropdown">
                  <a
                    href="javascript:void(0);"
                    class="dropdown-toggle"
                    id="table-filter"
                    ><i class="las la-filter me-2"></i>Filter</a
                  >
                  <div class="filter-dropdown-menu">
                    <div class="filter-set-view">
                      <div class="filter-set-head">
                        <h4>Filter</h4>
                      </div>
                      <div class="accordion" id="accordionExample">
                        <div class="filter-set-content">
                          <div class="filter-set-content-head">
                            <a
                              href="#"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne"
                              >Rating<i class="las la-angle-right"></i
                            ></a>
                          </div>
                          <div
                            class="filter-set-contents accordion-collapse collapse show"
                            id="collapseOne"
                            data-bs-parent="#accordionExample"
                          >
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="rating">
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <span>5.0</span>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="rating">
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star"></i>
                                  <span>4.0</span>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="rating">
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <span>3.0</span>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="rating">
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <span>2.0</span>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="rating">
                                  <i class="fa fa-star filled"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <span>1.0</span>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="filter-set-content">
                          <div class="filter-set-content-head">
                            <a
                              href="#"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo"
                              aria-expanded="false"
                              aria-controls="collapseTwo"
                              >Owner<i class="las la-angle-right"></i
                            ></a>
                          </div>
                          <div
                            class="filter-set-contents accordion-collapse collapse"
                            id="collapseTwo"
                            data-bs-parent="#accordionExample"
                          >
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Hendry</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Guillory</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Jami</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Theresa</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Espinosa</h5>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="filter-set-content">
                          <div class="filter-set-content-head">
                            <a
                              href="#"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseThree"
                              aria-expanded="false"
                              aria-controls="collapseThree"
                              >Tags<i class="las la-angle-right"></i
                            ></a>
                          </div>
                          <div
                            class="filter-set-contents accordion-collapse collapse"
                            id="collapseThree"
                            data-bs-parent="#accordionExample"
                          >
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Promotion</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Rated</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Rejected</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Collab</h5>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                </div>
                                <div class="collapse-inside-text">
                                  <h5>Calls</h5>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-reset-btns">
                        <a href="#" class="btn btn-light">Reset</a>
                        <a href="#" class="btn btn-primary">Filter</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="search-set">
                  <div class="search-input">
                    <a href="#" class="btn btn-searchset"
                      ><i class="las la-search"></i
                    ></a>
                    <div class="dataTables_filter">
                      <label>
                        <input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder="Search"
                      /></label>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="row mt-4">
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-01.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">NovaWaveLLC</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>5.0
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="087a676a6d7a7c7b6766486d70696578646d266b6765"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 12445-47878</span
                    >
                    <span><i class="la la-map-marker"></i>United States</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-info">Promotion</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-19.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-20.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-21.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-22.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-23.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+16</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-02.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">BlueSky Industries</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.0
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="8bf8e3eaf9e4e5cbeef3eae6fbe7eea5e8e4e6"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 19026-83921</span
                    >
                    <span><i class="la la-map-marker"></i>Germany</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-warning">Rated</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-24.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-25.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-26.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-27.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-28.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+10</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-03.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">SilverHawk</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.2
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="daacbbafbdb2bbb49abfa2bbb7aab6bff4b9b5b7"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 17240-61041</span
                    >
                    <span><i class="la la-map-marker"></i>Canada</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-info">Promotion</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-1.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-2.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-3.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-4.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-5.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+8</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-04.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">SummitPeak</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.5
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="254f4056564c464465405d44485549400b464a48"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 16027-49102</span
                    >
                    <span><i class="la la-map-marker"></i>India</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-warning">Rated</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-6.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-7.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-8.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-9.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-10.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+5</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-05.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">RiverStone V entur</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>3.9
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="0a696b7865664a6f726b677a666f24696567"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 18454-01578</span
                    >
                    <span><i class="la la-map-marker"></i>China</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-info">Promotion</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-21.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-22.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-19.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-18.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-17.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+10</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-06.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">Bright Bridge Grp</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.7
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="781c190f16381d00191508141d561b1715"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 13816-03649</span
                    >
                    <span><i class="la la-map-marker"></i>Japan</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-danger">Rejected</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-11.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-12.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-13.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-14.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-15.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+6</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-07.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">CoastalStar Co.</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.8
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="473526242f222b07223f262a372b226924282a"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 18914-51047</span
                    >
                    <span><i class="la la-map-marker"></i>Indonesia</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-warning">Rated</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-16.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-17.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-18.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-19.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-20.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+15</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-08.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">HarborView</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.2
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="c6aca9a8a3aaaaa386a3bea7abb6aaa3e8a5a9ab"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 18314-01527</span
                    >
                    <span><i class="la la-map-marker"></i>Cuba</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-danger">Rejected</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-5.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-8.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-10.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-11.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-12.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+5</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-09.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">Golden Gate Ltd</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>3.5
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="046e6b6a6168686144617c65697468612a676b69"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 18314-01527</span
                    >
                    <span><i class="la la-map-marker"></i>Cuba</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-info">Promotion</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-16.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-17.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-21.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-19.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-23.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+10</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
              <div class="contact-grid">
                <div class="grid-head">
                  <div class="users-profile">
                    <a href="{{route('company-details')}}" class="company-icon">
                      <img
                        src="assets/img/icons/company-icon-10.svg"
                        alt="Img"
                      />
                    </a>
                    <h5 class="name-user">
                      <a href="{{route('company-details')}}">Redwood Inc</a>
                      <span class="set-star mt-1">
                        <i class="fa fa-star filled me-2"></i>4.4
                      </span>
                    </h5>
                  </div>
                  <div class="dropdown">
                    <a
                      href="#"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><i class="material-icons">more_vert</i></a
                    >
                    <div class="dropdown-menu dropdown-menu-right">
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_company"
                        ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_company"
                        ><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a
                      >
                      <a class="dropdown-item" href="{{route('company-details')}}"
                        ><i class="fa-regular fa-eye"></i> Preview</a
                      >
                      <a
                        class="dropdown-item"
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#add_notes"
                        ><i class="la la-file-prescription"></i> Notes</a
                      >
                    </div>
                  </div>
                </div>
                <div class="grid-body">
                  <div class="address-info">
                    <span
                      ><i class="la la-envelope-open"></i
                      ><a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="81ebeeefe4edede4c1e4f9e0ecf1ede4afe2eeec"
                        >[email&#160;protected]</a
                      ></span
                    >
                    <span
                      ><i class="la la-phone-volume"></i>+1 18314-01527</span
                    >
                    <span><i class="la la-map-marker"></i>Cuba</span>
                  </div>
                  <div class="grid-badges">
                    <span class="badge badge-soft-danger">Rejected</span>
                  </div>
                </div>
                <div class="grid-footer d-flex justify-content-between">
                  <ul class="social-links d-flex align-items-center">
                    <li>
                      <a href="#"><i class="la la-envelope"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-phone-volume"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="lab la-facebook-messenger"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-skype"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                  </ul>
                  <div class="users-group">
                    <ul>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-23.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-24.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-25.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-26.jpg" alt="Img"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="assets/img/avatar/avatar-27.jpg" alt="Img"
                        /></a>
                      </li>
                      <li><a href="#" class="total-group-member">+15</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="load-more-btn text-center">
                <a href="#" class="btn btn-primary"
                  >Load More Companies<i class="spinner-border"></i
                ></a>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="add_company"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Add New Company</h5>
                  <button
                    type="button"
                    class="btn-close position-static"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                  <div class="add-details-wizard">
                    <ul id="progressbar" class="progress-bar-wizard">
                      <li class="active">
                        <span><i class="la la-user-tie"></i></span>
                        <div class="multi-step-info">
                          <h6>Basic Info</h6>
                        </div>
                      </li>
                      <li>
                        <span><i class="la la-map-marker"></i></span>
                        <div class="multi-step-info">
                          <h6>Address</h6>
                        </div>
                      </li>
                      <li>
                        <div class="multi-step-icon">
                          <span><i class="la la-icons"></i></span>
                        </div>
                        <div class="multi-step-info">
                          <h6>Social Profiles</h6>
                        </div>
                      </li>
                      <li>
                        <div class="multi-step-icon">
                          <span><i class="la la-images"></i></span>
                        </div>
                        <div class="multi-step-info">
                          <h6>Access</h6>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="add-info-fieldset">
                    <fieldset id="first-field">
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="form-upload-profile">
                          <h6 class>Profile Image <span> *</span></h6>
                          <div class="profile-pic-upload">
                            <div class="profile-pic">
                              <span
                                ><img
                                  src="assets/img/icons/profile-upload-img.svg"
                                  alt="Img"
                              /></span>
                            </div>
                            <div class="employee-field">
                              <div class="mb-0">
                                <div class="image-upload mb-0">
                                  <input type="file" />
                                  <div class="image-uploads">
                                    <h4>Upload</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="img-reset-btn">
                                <a href="#">Reset</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Company Name
                                  <span class="text-danger">*</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <label class="col-form-label"
                                    >Email
                                    <span class="text-danger"> *</span></label
                                  >
                                  <div
                                    class="status-toggle small-toggle-btn d-flex align-items-center"
                                  >
                                    <span class="me-2 label-text">Option</span>
                                    <input
                                      type="checkbox"
                                      id="user2"
                                      class="check"
                                      checked
                                    />
                                    <label
                                      for="user2"
                                      class="checktoggle"
                                    ></label>
                                  </div>
                                </div>
                                <input class="form-control" type="email" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 1<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 2
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Fax
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Website</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Reviews
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Lowest</option>
                                  <option>Highest</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Owner
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Hendry</option>
                                  <option>Guillory</option>
                                  <option>Jami</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Tags
                                  <span class="text-danger">*</span></label
                                >
                                <input
                                  class="input-tags form-control"
                                  id="inputBox2"
                                  type="text"
                                  data-role="tagsinput"
                                  name="Label"
                                  value="Promotion, Rated"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <label class="col-form-label"
                                    >Deals
                                    <span class="text-danger">*</span></label
                                  >
                                  <a href="#" class="add-new"
                                    ><i class="la la-plus-circle me-2"></i>Add
                                    New</a
                                  >
                                </div>
                                <select class="select">
                                  <option>Select</option>
                                  <option>Collins</option>
                                  <option>Konopelski</option>
                                  <option>Adams</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Industry
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Barry Cuda</option>
                                  <option>Tressa Wexler</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Source
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Barry Cuda</option>
                                  <option>Tressa Wexler</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Contact
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Email</option>
                                  <option>Call</option>
                                  <option>Skype</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Currency
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>$</option>
                                  <option>€</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Language
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>English</option>
                                  <option>French</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >About Company<span class="text-danger"
                                    >*</span
                                  ></label
                                >
                                <textarea
                                  class="form-control"
                                  rows="5"
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-lg-12 text-end form-wizard-button">
                              <button
                                class="button btn-lights reset-btn"
                                type="reset"
                              >
                                Reset
                              </button>
                              <button
                                class="btn btn-primary wizard-next-btn"
                                type="button"
                              >
                                Save & Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Street Address<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >City
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >State / Province
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Country
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Germany</option>
                                  <option>USA</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Zipcode
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12 text-end form-wizard-button">
                              <button
                                class="button btn-lights reset-btn"
                                type="reset"
                              >
                                Reset
                              </button>
                              <button
                                class="btn btn-primary wizard-next-btn"
                                type="button"
                              >
                                Save & Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Facebook</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Twitter</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Linkedin</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Skype</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Whatsapp</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Instagram</label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <a href="#" class="add-new"
                                  ><i class="la la-plus-circle me-2"></i>Add
                                  New</a
                                >
                              </div>
                            </div>
                            <div class="col-lg-12 text-end form-wizard-button">
                              <button
                                class="button btn-lights reset-btn"
                                type="reset"
                              >
                                Reset
                              </button>
                              <button
                                class="btn btn-primary wizard-next-btn"
                                type="button"
                              >
                                Save & Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="contact-input-set">
                          <div class="input-blocks add-products">
                            <label class="mb-3">Visibility</label>
                            <div class="access-info-tab">
                              <ul
                                class="nav nav-pills"
                                id="pills-tab1"
                                role="tablist"
                              >
                                <li class="nav-item" role="presentation">
                                  <span
                                    class="custom_radio mb-0"
                                    id="pills-public-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-public"
                                    role="tab"
                                    aria-controls="pills-public"
                                    aria-selected="true"
                                  >
                                    <input
                                      type="radio"
                                      class="form-control"
                                      name="public"
                                      checked
                                    />
                                    <span class="checkmark"></span> Public</span
                                  >
                                </li>
                                <li class="nav-item" role="presentation">
                                  <span
                                    class="custom_radio mb-0"
                                    id="pills-private-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-private"
                                    role="tab"
                                    aria-controls="pills-private"
                                    aria-selected="false"
                                  >
                                    <input
                                      type="radio"
                                      class="form-control"
                                      name="private"
                                    />
                                    <span class="checkmark"></span>
                                    Private</span
                                  >
                                </li>
                                <li class="nav-item" role="presentation">
                                  <span
                                    class="custom_radio mb-0 active"
                                    id="pills-select-people-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-select-people"
                                    role="tab"
                                    aria-controls="pills-select-people"
                                    aria-selected="false"
                                  >
                                    <input
                                      type="radio"
                                      class="form-control"
                                      name="select-people"
                                    />
                                    <span class="checkmark"></span> Select
                                    People</span
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-content" id="pills-tabContent">
                            <div
                              class="tab-pane fade"
                              id="pills-public"
                              role="tabpanel"
                              aria-labelledby="pills-public-tab"
                            ></div>
                            <div
                              class="tab-pane fade"
                              id="pills-private"
                              role="tabpanel"
                              aria-labelledby="pills-private-tab"
                            ></div>
                            <div
                              class="tab-pane fade show active"
                              id="pills-select-people"
                              role="tabpanel"
                              aria-labelledby="pills-select-people-tab"
                            >
                              <div class="people-select-tab">
                                <h3>Select People</h3>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-19.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Darlee Robertson</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-20.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Sharon Roy</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-21.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Vaughan</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-1.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Jessica</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-confirm-btn">
                                  <a href="#" class="btn danger-btn">Confirm</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="mb-3">Status</h5>
                          <div class="status-radio-btns d-flex mb-3">
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test1"
                                name="radio-group"
                                checked
                              />
                              <label for="test1">Active</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test2"
                                name="radio-group"
                              />
                              <label for="test2">Private</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test3"
                                name="radio-group"
                              />
                              <label for="test3">Inactive</label>
                            </div>
                          </div>
                          <div class="col-lg-12 text-end form-wizard-button">
                            <button
                              class="button btn-lights reset-btn"
                              type="reset"
                            >
                              Reset
                            </button>
                            <button
                              class="btn btn-primary"
                              type="button"
                              data-bs-toggle="modal"
                              data-bs-target="#success_msg"
                            >
                              Save & Next
                            </button>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="edit_company"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Edit Company</h5>
                  <button
                    type="button"
                    class="btn-close position-static"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                  <div class="add-details-wizard">
                    <ul id="progressbar2" class="progress-bar-wizard">
                      <li class="active">
                        <span><i class="la la-user-tie"></i></span>
                        <div class="multi-step-info">
                          <h6>Basic Info</h6>
                        </div>
                      </li>
                      <li>
                        <span><i class="la la-map-marker"></i></span>
                        <div class="multi-step-info">
                          <h6>Address</h6>
                        </div>
                      </li>
                      <li>
                        <div class="multi-step-icon">
                          <span><i class="la la-icons"></i></span>
                        </div>
                        <div class="multi-step-info">
                          <h6>Social Profiles</h6>
                        </div>
                      </li>
                      <li>
                        <div class="multi-step-icon">
                          <span><i class="la la-images"></i></span>
                        </div>
                        <div class="multi-step-info">
                          <h6>Access</h6>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="add-info-fieldset">
                    <fieldset id="edit-first-field">
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="form-upload-profile">
                          <h6 class>Profile Image <span> *</span></h6>
                          <div class="profile-pic-upload">
                            <div class="profile-pic">
                              <span
                                ><img
                                  src="assets/img/icons/company-icon-01.svg"
                                  alt="Img"
                              /></span>
                            </div>
                            <div class="employee-field">
                              <div class="mb-0">
                                <div class="image-upload mb-0">
                                  <input type="file" />
                                  <div class="image-uploads">
                                    <h4>Upload</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="img-reset-btn">
                                <a href="#">Reset</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Company Name
                                  <span class="text-danger">*</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="NovaWaveLLC"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <label class="col-form-label"
                                    >Email
                                    <span class="text-danger"> *</span></label
                                  >
                                  <div
                                    class="status-toggle small-toggle-btn d-flex align-items-center"
                                  >
                                    <span class="me-2 label-text">Option</span>
                                    <input
                                      type="checkbox"
                                      id="user3"
                                      class="check"
                                      checked
                                    />
                                    <label
                                      for="user3"
                                      class="checktoggle"
                                    ></label>
                                  </div>
                                </div>
                                <input
                                  class="form-control"
                                  type="email"
                                  value="Robertson@example.com"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 1<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="+1 875455453"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 2
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="+1 895455450"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Fax
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Website</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Admin Website"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Reviews
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Lowest</option>
                                  <option>Highest</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Owner
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Hendry</option>
                                  <option>Guillory</option>
                                  <option>Jami</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Tags
                                  <span class="text-danger">*</span></label
                                >
                                <input
                                  class="input-tags form-control"
                                  id="inputBox"
                                  type="text"
                                  data-role="tagsinput"
                                  name="Label"
                                  value="Promotion, Rated"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <label class="col-form-label"
                                    >Deals
                                    <span class="text-danger">*</span></label
                                  >
                                  <a href="#" class="add-new"
                                    ><i class="la la-plus-circle me-2"></i>Add
                                    New</a
                                  >
                                </div>
                                <select class="select">
                                  <option>Collins</option>
                                  <option>Konopelski</option>
                                  <option>Adams</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Industry
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Barry Cuda</option>
                                  <option>Tressa Wexler</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Source
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Barry Cuda</option>
                                  <option>Tressa Wexler</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Contact
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Email</option>
                                  <option>Call</option>
                                  <option>Skype</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Currency
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>$</option>
                                  <option>€</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Language
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>English</option>
                                  <option>French</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >About Company<span class="text-danger"
                                    >*</span
                                  ></label
                                >
                                <textarea
                                  class="form-control"
                                  rows="5"
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-lg-12 text-end form-wizard-button">
                              <button
                                class="button btn-lights reset-btn"
                                type="reset"
                              >
                                Reset
                              </button>
                              <button
                                class="btn btn-primary wizard-next-btn"
                                type="button"
                              >
                                Save & Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Street Address<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="38 Simpson Stree"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >City
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Rock Island"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >State / Province
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="USA"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Country
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Germany</option>
                                  <option>USA</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Zipcode
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="65"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12 text-end form-wizard-button">
                              <button
                                class="button btn-lights reset-btn"
                                type="reset"
                              >
                                Reset
                              </button>
                              <button
                                class="btn btn-primary wizard-next-btn"
                                type="button"
                              >
                                Save & Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Facebook</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Twitter</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Linkedin</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Skype</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Whatsapp</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Instagram</label>
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee_Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <a href="#" class="add-new"
                                  ><i class="la la-plus-circle me-2"></i>Add
                                  New</a
                                >
                              </div>
                            </div>
                            <div class="col-lg-12 text-end form-wizard-button">
                              <button
                                class="button btn-lights reset-btn"
                                type="reset"
                              >
                                Reset
                              </button>
                              <button
                                class="btn btn-primary wizard-next-btn"
                                type="button"
                              >
                                Save & Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                      >
                        <div class="contact-input-set">
                          <div class="input-blocks add-products">
                            <label class="mb-3">Visibility</label>
                            <div class="access-info-tab">
                              <ul
                                class="nav nav-pills"
                                id="pills-tab2"
                                role="tablist"
                              >
                                <li class="nav-item" role="presentation">
                                  <span
                                    class="custom_radio mb-0"
                                    id="pills-public-tab2"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-public2"
                                    role="tab"
                                    aria-controls="pills-public2"
                                    aria-selected="true"
                                  >
                                    <input
                                      type="radio"
                                      class="form-control"
                                      name="public"
                                      checked
                                    />
                                    <span class="checkmark"></span> Public</span
                                  >
                                </li>
                                <li class="nav-item" role="presentation">
                                  <span
                                    class="custom_radio mb-0"
                                    id="pills-private-tab2"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-private2"
                                    role="tab"
                                    aria-controls="pills-private2"
                                    aria-selected="false"
                                  >
                                    <input
                                      type="radio"
                                      class="form-control"
                                      name="private"
                                    />
                                    <span class="checkmark"></span>
                                    Private</span
                                  >
                                </li>
                                <li class="nav-item" role="presentation">
                                  <span
                                    class="custom_radio mb-0 active"
                                    id="pills-select-people-tab2"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-select-people2"
                                    role="tab"
                                    aria-controls="pills-select-people2"
                                    aria-selected="false"
                                  >
                                    <input
                                      type="radio"
                                      class="form-control"
                                      name="select-people"
                                    />
                                    <span class="checkmark"></span> Select
                                    People</span
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-content" id="pills-tabContent2">
                            <div
                              class="tab-pane fade"
                              id="pills-public2"
                              role="tabpanel"
                              aria-labelledby="pills-public-tab2"
                            ></div>
                            <div
                              class="tab-pane fade"
                              id="pills-private2"
                              role="tabpanel"
                              aria-labelledby="pills-private-tab2"
                            ></div>
                            <div
                              class="tab-pane fade show active"
                              id="pills-select-people2"
                              role="tabpanel"
                              aria-labelledby="pills-select-people-tab2"
                            >
                              <div class="people-select-tab">
                                <h3>Select People</h3>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-19.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Darlee Robertson</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-20.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Sharon Roy</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-21.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Vaughan</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-people-checkbox">
                                  <label class="custom_check">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    <span class="people-profile">
                                      <img
                                        src="assets/img/avatar/avatar-1.jpg"
                                        alt="Img"
                                      />
                                      <a href="#">Jessica</a>
                                    </span>
                                  </label>
                                </div>
                                <div class="select-confirm-btn">
                                  <a href="#" class="btn danger-btn">Confirm</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <h5 class="mb-3">Status</h5>
                          <div class="status-radio-btns d-flex mb-3">
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test4"
                                name="radio-group"
                                checked
                              />
                              <label for="test4">Active</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test5"
                                name="radio-group"
                              />
                              <label for="test5">Private</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test6"
                                name="radio-group"
                              />
                              <label for="test6">Inactive</label>
                            </div>
                          </div>
                          <div class="col-lg-12 text-end form-wizard-button">
                            <button
                              class="button btn-lights reset-btn"
                              type="reset"
                            >
                              Reset
                            </button>
                            <button class="btn btn-primary" type="submit">
                              Submit
                            </button>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade modal-padding"
            id="add_notes"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border align-items-center justify-content-between p-0"
                >
                  <h5 class="modal-title">Add Note</h5>
                  <button
                    type="button"
                    class="btn-close position-static"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                  <form
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/company-details"
                  >
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Title <span class="text-danger"> *</span></label
                      >
                      <input class="form-control" type="text" />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Note <span class="text-danger"> *</span></label
                      >
                      <textarea
                        class="form-control"
                        rows="4"
                        placeholder="Add text"
                      ></textarea>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Attachment <span class="text-danger"> *</span></label
                      >
                      <div class="drag-upload">
                        <input type="file" />
                        <div class="img-upload">
                          <i class="las la-file-import"></i>
                          <p>Drag & Drop your files</p>
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label">Uploaded Files</label>
                      <div class="upload-file">
                        <h6>Projectneonals teyys.xls</h6>
                        <p>4.25 MB</p>
                        <div class="progress">
                          <div
                            class="progress-bar bg-success"
                            role="progressbar"
                            style="width: 25%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                        <p>45%</p>
                      </div>
                      <div class="upload-file upload-list">
                        <div>
                          <h6>Projectneonals teyys.xls</h6>
                          <p>4.25 MB</p>
                        </div>
                        <a href="javascript:void(0);" class="text-danger"
                          ><i class="las la-trash"></i
                        ></a>
                      </div>
                    </div>
                    <div class="col-lg-12 text-end form-wizard-button">
                      <button class="button btn-lights reset-btn" type="reset">
                        Reset
                      </button>
                      <button class="btn btn-primary" type="submit">
                        Save Notes
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="success_msg" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="success-message text-center">
                    <div class="success-popup-icon">
                      <i class="la la-building"></i>
                    </div>
                    <h3>Company Created Successfully!!!</h3>
                    <p>View the details of Company</p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a
                        href="#"
                        class="button btn-lights"
                        data-bs-dismiss="modal"
                        >Close</a
                      >
                      <a href="{{route('company-details')}}" class="btn btn-primary"
                        >View Details</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade"
            id="delete_company"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="success-message text-center">
                    <div class="success-popup-icon bg-danger">
                      <i class="la la-trash-restore"></i>
                    </div>
                    <h3>Are you sure, You want to delete</h3>
                    <p>Company ”NovaWaveLLC” from your Account</p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a
                        href="#"
                        class="button btn-lights"
                        data-bs-dismiss="modal"
                        >Not Now</a
                      >
                      <a href="{{route('companies-grid')}}" class="btn btn-primary"
                        >Okay</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade modal-padding"
            id="export"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Export</h5>
                  <button
                    type="button"
                    class="btn-close position-static"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body p-0">
                  <form
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"
                  >
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-block mb-3">
                          <h5 class="mb-3">Export</h5>
                          <div class="status-radio-btns d-flex">
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="pdf"
                                name="export-type"
                                checked
                              />
                              <label for="pdf">Person</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="excel"
                                name="export-type"
                              />
                              <label for="excel">Organization</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <h4 class="mb-3">Filters</h4>
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Fields <span class="text-danger">*</span></label
                          >
                          <select class="select">
                            <option>All Fields</option>
                            <option>contact</option>
                            <option>Company</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >From Date <span class="text-danger">*</span></label
                          >
                          <div class="cal-icon">
                            <input
                              class="form-control floating datetimepicker"
                              type="text"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >To Date <span class="text-danger">*</span></label
                          >
                          <div class="cal-icon">
                            <input
                              class="form-control floating datetimepicker"
                              type="text"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 text-end form-wizard-button">
                        <button
                          class="button btn-lights reset-btn"
                          type="reset"
                          data-bs-dismiss="modal"
                        >
                          Reset
                        </button>
                        <button class="btn btn-primary" type="submit">
                          Export Now
                        </button>
                      </div>
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
   <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script defer src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="71819090465c74bb64c00438-|49"></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/companies-grid by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:08 GMT -->
</html>
