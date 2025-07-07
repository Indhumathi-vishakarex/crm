<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/deals by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:59 GMT -->
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
    <title>Deals - HRMS admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />

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
              <div class="col-md-4">
                <h3 class="page-title">Deals</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="admin-dashboard.html">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Deals</li>
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
                    data-bs-target="#add_deals"
                    ><i class="la la-plus-circle"></i> Add Deals</a
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
                  <label class="focus-label">Deal Name</label>
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
                <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                    <input
                      class="form-control floating datetimepicker"
                      type="text"
                    />
                  </div>
                  <label class="focus-label">Expected Closed Date</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                  <select class="select floating">
                    <option>--Select--</option>
                    <option>Conversation</option>
                    <option>Pipeline</option>
                    <option>Won</option>
                    <option>Lost</option>
                    <option>Follow Up</option>
                  </select>
                  <label class="focus-label">Stage</label>
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
                  <a href="{{route('deals')}}" class="list-view btn btn-link active"
                    ><i class="las la-list"></i
                  ></a>
                  <a href="{{route('deals-kanban')}}" class="grid-view btn btn-link"
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
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table
                  class="table table-striped custom-table datatable contact-table"
                >
                  <thead>
                    <tr>
                      <th class="no-sort"></th>
                      <th>Deal Name</th>
                      <th>Stage</th>
                      <th>Deal Value</th>
                      <th>Tags</th>
                      <th>Expected Closed Date</th>
                      <th>Owner</th>
                      <th>Probability</th>
                      <th>Status</th>
                      <th class="no-sort text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star filled"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Collins</a
                          >
                        </h2>
                      </td>
                      <td>Conversation</td>
                      <td>$04,51,000</td>
                      <td>
                        <span class="badge badge-soft-info">Promotion</span>
                      </td>
                      <td>10 Feb 2024</td>
                      <td>Hendry</td>
                      <td>85%</td>
                      <td>
                        <span class="badge badge-soft-info">Open</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Konopelski</a
                          >
                        </h2>
                      </td>
                      <td>Pipeline</td>
                      <td>$03,12,500</td>
                      <td>
                        <span class="badge badge-soft-warning">Rated</span>
                      </td>
                      <td>24 Feb 2024</td>
                      <td>Guillory</td>
                      <td>15%</td>
                      <td>
                        <span class="badge badge-soft-danger">Lost</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star filled"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Adams</a
                          >
                        </h2>
                      </td>
                      <td>Won</td>
                      <td>$04,14,400</td>
                      <td>
                        <span class="badge badge-soft-info">Promotion</span>
                      </td>
                      <td>5 Mar 2024</td>
                      <td>Jami</td>
                      <td>95%</td>
                      <td>
                        <span class="badge badge-soft-success">Won</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star filled"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Schumm</a
                          >
                        </h2>
                      </td>
                      <td>Lost</td>
                      <td>$09,14,400</td>
                      <td>
                        <span class="badge badge-soft-warning">Rated</span>
                      </td>
                      <td>17 Mar 2024</td>
                      <td>Theresa</td>
                      <td>47%</td>
                      <td>
                        <span class="badge badge-soft-success">Won</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Wisozk</a
                          >
                        </h2>
                      </td>
                      <td>Follow Up</td>
                      <td>$11,14,400</td>
                      <td>
                        <span class="badge badge-soft-danger">Rejected</span>
                      </td>
                      <td>08 Apr 2024</td>
                      <td>Espinosa</td>
                      <td>98%</td>
                      <td>
                        <span class="badge badge-soft-success">Won</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Heller</a
                          >
                        </h2>
                      </td>
                      <td>Pipeline</td>
                      <td>$16,11,400</td>
                      <td>
                        <span class="badge badge-soft-warning">Rated</span>
                      </td>
                      <td>20 Apr 2024</td>
                      <td>Martin</td>
                      <td>14%</td>
                      <td>
                        <span class="badge badge-soft-success">Won</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Gutkowski</a
                          >
                        </h2>
                      </td>
                      <td>Pipeline</td>
                      <td>$78,11,800</td>
                      <td>
                        <span class="badge badge-soft-danger">Rejected</span>
                      </td>
                      <td>12 May 2024</td>
                      <td>Newell</td>
                      <td>78%</td>
                      <td>
                        <span class="badge badge-soft-info">Open</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star filled"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Walter</a
                          >
                        </h2>
                      </td>
                      <td>Pipeline</td>
                      <td>$09,05,947</td>
                      <td>
                        <span class="badge badge-soft-danger">Rejected</span>
                      </td>
                      <td>26 May 2024</td>
                      <td>Janet</td>
                      <td>47%</td>
                      <td>
                        <span class="badge badge-soft-danger">Lost</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Hansen</a
                          >
                        </h2>
                      </td>
                      <td>Schedule</td>
                      <td>$04,51,000</td>
                      <td>
                        <span class="badge badge-soft-danger me-2">Collab</span>
                        <span class="badge badge-soft-purple">Calls</span>
                      </td>
                      <td>13 June 2024</td>
                      <td>Craig</td>
                      <td>25%</td>
                      <td>
                        <span class="badge badge-soft-success">Won</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="set-star star-select">
                          <i class="fa fa-star"></i>
                        </div>
                      </td>
                      <td>
                        <h2>
                          <a href="deals-details.html" class="profile-split"
                            >Leuschke</a
                          >
                        </h2>
                      </td>
                      <td>Conversation</td>
                      <td>$72,14,078</td>
                      <td>
                        <span class="badge badge-soft-purple">Calls</span>
                      </td>
                      <td>28 June 2024</td>
                      <td>Daniel</td>
                      <td>69%</td>
                      <td>
                        <span class="badge badge-soft-success">Won</span>
                      </td>
                      <td class="text-end">
                        <div class="dropdown dropdown-action">
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
                              data-bs-target="#edit_deals"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_deals"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="deals-details.html"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="add_deals"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Add New Deals</h5>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals"
                  >
                    <div class="contact-input-set">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Deal Name
                              <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-6 pipeline-add-col">
                          <div class="input-block mb-3">
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <label class="col-form-label"
                                >Pipeline
                                <span class="text-danger">*</span></label
                              >
                              <a href="#" class="add-new add-pipeline-btn"
                                ><i class="la la-plus-circle me-2"></i>Add
                                New</a
                              >
                            </div>
                            <select class="select">
                              <option>Select</option>
                              <option>Sales</option>
                              <option>Marketing</option>
                              <option>Calls</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Status <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Select</option>
                              <option>Open</option>
                              <option>Lost</option>
                              <option>Won</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Deal Value<span class="text-danger">
                                *</span
                              ></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
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
                        <div class="col-lg-3 col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Period <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Period Value
                              <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-block tag-with-img mb-3">
                            <label class="col-form-label"
                              >Contact <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="James"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Project <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox2"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="Divine dran"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Due Date
                              <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Expected Closing Date
                              <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-block tag-with-img mb-3">
                            <label class="col-form-label"
                              >Assignee
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox3"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="James"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Tags <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox4"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="Promotion, Rated"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Followup Date
                              <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Source <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Select</option>
                              <option>Barry Cuda</option>
                              <option>Tressa Wexler</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Priority
                              <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Select</option>
                              <option>Highy</option>
                              <option>Low</option>
                              <option>Medium</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Description
                              <span class="text-danger">*</span></label
                            >
                            <textarea class="form-control" rows="5"></textarea>
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
                            Save Deal
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="edit_deals"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Edit Deals</h5>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals"
                  >
                    <div class="contact-input-set">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Deal Name
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              value="Adams"
                            />
                          </div>
                        </div>
                        <div class="col-md-6 pipeline-add-col">
                          <div class="input-block mb-3">
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <label class="col-form-label"
                                >Pipeline
                                <span class="text-danger">*</span></label
                              >
                              <a href="#" class="add-new add-pipeline-btn"
                                ><i class="la la-plus-circle me-2"></i>Add
                                New</a
                              >
                            </div>
                            <select class="select">
                              <option>Sales</option>
                              <option>Marketing</option>
                              <option>Calls</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Status <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Open</option>
                              <option>Lost</option>
                              <option>Won</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Deal Value<span class="text-danger">
                                *</span
                              ></label
                            >
                            <input class="form-control" type="text" value="5" />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
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
                        <div class="col-lg-3 col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Period <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" value />
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Period Value
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              value="10"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-block tag-with-img mb-3">
                            <label class="col-form-label"
                              >Contact <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox5"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="James"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Project <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox6"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="Divine dran"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Due Date
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              value="5 Mar 2024"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Expected Closing Date
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              value="10 Mar 2024"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="input-block tag-with-img mb-3">
                            <label class="col-form-label"
                              >Assignee
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox7"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="James"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Tags <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox8"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="Promotion, Rated"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Followup Date
                              <span class="text-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              value="5 Mar 2024"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Source <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Barry Cuda</option>
                              <option>Tressa Wexler</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Priority
                              <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Highy</option>
                              <option>Low</option>
                              <option>Medium</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Description
                              <span class="text-danger">*</span></label
                            >
                            <textarea class="form-control" rows="5"></textarea>
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
                            Submit
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="delete_deals" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="success-message text-center">
                    <div class="success-popup-icon bg-danger">
                      <i class="la la-trash-restore"></i>
                    </div>
                    <h3>Are you sure, You want to delete</h3>
                    <p>Deal ”Collins” from your Account</p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a
                        href="#"
                        class="button btn-lights"
                        data-bs-dismiss="modal"
                        >Not Now</a
                      >
                      <a href="deals.html" class="btn btn-primary">Okay</a>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals"
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

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/deals by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:01 GMT -->
</html>
