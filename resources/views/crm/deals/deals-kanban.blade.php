<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/deals-kanban by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:08 GMT -->
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
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

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
                <h3 class="page-title">Deals</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
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
                  <a href="{{route('deals')}}" class="list-view btn btn-link"
                    ><i class="las la-list"></i
                  ></a>
                  <a
                    href="{{route('deals-kanban')}}"
                    class="grid-view btn btn-link active"
                    ><i class="las la-th"></i
                  ></a>
                </div>
              </li>
              <li>
                <div class="form-sort">
                  <i class="las la-sort-amount-up-alt"></i>
                  <select class="select">
                    <option>Marketing Pipeline</option>
                    <option>Sales Pipeline</option>
                    <option>Calls Pipeline</option>
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
              <div class="kanban-wrapper">
                <div class="kanban-list-items">
                  <div class="kanban-list-head">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="kanban-title-head dot-success">
                        <h5>Qualify To Buy</h5>
                        <span>45 Leads - $15,44,540</span>
                      </div>
                      <div class="kanban-action-btns d-flex align-items-center">
                        <a href="#" class="plus-btn"
                          ><i class="la la-plus"></i
                        ></a>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <ul class="kanban-drag-wrap">
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-purple"></span>
                          <div class="kanban-card-title">
                            <span>HT</span>
                            <h6>Howell, Tremblay and Rath</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $03,50,000
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="187c796a747d7d77587d60797568747d367b7775"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 12445-47878
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Newyork, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-19.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Darlee Robertson</a
                              >
                            </div>
                            <span class="badge badge-soft-info">85%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 10 Jan 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-warning"></span>
                          <div class="kanban-card-title">
                            <span>RJ</span>
                            <h6>Robert, John and Carlos</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $02,10,000
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="b6c5ded3c4d9d8f6d3ced7dbc6dad398d5d9db"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 12445-47878
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Exeter, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-20.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Darlee Robertson</a
                              >
                            </div>
                            <span class="badge badge-soft-info">15%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 12 Jan 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-success"></span>
                          <div class="kanban-card-title">
                            <span>WS</span>
                            <h6>Wendy, Star and David</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $04,22,000
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="7701160237120f161a071b125914181a"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 12445-47878
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Phoenix, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-21.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Darlee Robertson</a
                              >
                            </div>
                            <span class="badge badge-soft-info">95%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 14 Jan 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="kanban-list-items">
                  <div class="kanban-list-head">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="kanban-title-head dot-info">
                        <h5>Contact Made</h5>
                        <span>30 Leads - $19,94,938</span>
                      </div>
                      <div class="kanban-action-btns d-flex align-items-center">
                        <a href="#" class="plus-btn"
                          ><i class="la la-plus"></i
                        ></a>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <ul class="kanban-drag-wrap">
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-success"></span>
                          <div class="kanban-card-title">
                            <span>BR</span>
                            <h6>Byron, Roman and Bailey</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $02,45,000
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="91fbf4e2e2f8f2f0a0a2d1f4e9f0fce1fdf4bff2fefc"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 89351-90346
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Chester, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-1.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Jessica</a
                              >
                            </div>
                            <span class="badge badge-soft-info">47%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 06 Feb 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-purple"></span>
                          <div class="kanban-card-title">
                            <span>CH</span>
                            <h6>Robert, John and Carlos</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $01,17,000
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="bedddfccd1d2cad6d18dfedbc6dfd3ced2db90ddd1d3"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 78982-09163
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Charlotte, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-16.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Carol Thomas</a
                              >
                            </div>
                            <span class="badge badge-soft-info">98%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 15 Feb 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-danger"></span>
                          <div class="kanban-card-title">
                            <span>IC</span>
                            <h6>Irene, Charles and Wilston</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $02,12,000
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="630702140d0e0611000b0223061b020e130f064d000c0e"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 27691-89246
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Bristol, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-22.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Dawn Mercha</a
                              >
                            </div>
                            <span class="badge badge-soft-info">78%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 25 Jan 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="kanban-list-items">
                  <div class="kanban-list-head">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="kanban-title-head dot-warning">
                        <h5>Presentation</h5>
                        <span>25 Leads - $10,36.390</span>
                      </div>
                      <div class="kanban-action-btns d-flex align-items-center">
                        <a href="#" class="plus-btn"
                          ><i class="la la-plus"></i
                        ></a>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <ul class="kanban-drag-wrap">
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-warning"></span>
                          <div class="kanban-card-title">
                            <span>HT</span>
                            <h6>Jody, Powell and Cecil</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $01,84,043
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="225043414a474e62475a434f524e470c414d4f"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 17839-93617
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Baltimore, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-23.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Rachel Hampton</a
                              >
                            </div>
                            <span class="badge badge-soft-info">25%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 18 Mar 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-success"></span>
                          <div class="kanban-card-title">
                            <span>BL</span>
                            <h6>Bonnie, Linda and Mullin</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $09,35,189
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="a7cdc8c9c2cbcbc2e7c2dfc6cad7cbc289c4c8ca"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 16739-47193
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Coventry, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-24.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Jonelle Curtiss</a
                              >
                            </div>
                            <span class="badge badge-soft-info">70%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 15 Feb 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-purple"></span>
                          <div class="kanban-card-title">
                            <span>CJ</span>
                            <h6>
                              Carlos, Jones and <br />
                              Jim
                            </h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $04,27,940
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="a3c9cccdc2d7cbc2cde3c6dbc2ced3cfc68dc0ccce"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 18390-37153
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Seattle
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-25.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Jonathan</a
                              >
                            </div>
                            <span class="badge badge-soft-info">45%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 30 Jan 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="kanban-list-items">
                  <div class="kanban-list-head">
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="kanban-title-head dot-purple">
                        <h5>Proposal Made</h5>
                        <span>50 Leads - $18,83,013</span>
                      </div>
                      <div class="kanban-action-btns d-flex align-items-center">
                        <a href="#" class="plus-btn"
                          ><i class="la la-plus"></i
                        ></a>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <ul class="kanban-drag-wrap">
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-danger"></span>
                          <div class="kanban-card-title">
                            <span>FJ</span>
                            <h6>Freda,Jennfier and Thompson</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $04,17,593
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="4c3f25282229350c29342d213c2029622f2321"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 11739-38135
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              London, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-17.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Sidney Franks</a
                              >
                            </div>
                            <span class="badge badge-soft-info">59%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span><i class="la la-calendar"></i>11 Apr 2024</span>
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-purple"></span>
                          <div class="kanban-card-title">
                            <span>BF</span>
                            <h6>Bruce, Faulkner and Lela</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $08,81,389
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="e486968b8b8fa4819c8589948881ca878b89"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 19302-91043
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Detroit, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-26.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Brook</a
                              >
                            </div>
                            <span class="badge badge-soft-info">72%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 17 Apr 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="kanban-card">
                        <div class="kanban-card-head">
                          <span class="bar-design bg-warning"></span>
                          <div class="kanban-card-title">
                            <span>LP</span>
                            <h6>Lawrence, Patrick and Vandorn</h6>
                          </div>
                        </div>
                        <div class="kanban-card-body">
                          <ul>
                            <li>
                              <i class="la la-dollar-sign"></i>
                              $09,27,193
                            </li>
                            <li>
                              <i class="la la-envelope"></i>
                              <a
                                href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="bcd1d5dfd7d9c5fcd9c4ddd1ccd0d992dfd3d1"
                                >[email&#160;protected]</a
                              >
                            </li>
                            <li>
                              <i class="la la-phone"></i>
                              +1 17280-92016
                            </li>
                            <li>
                              <i class="la la-map-marker-alt"></i>
                              Manchester, United States
                            </li>
                          </ul>
                          <div
                            class="d-flex justify-content-between align-items-center"
                          >
                            <div class="card-user-info">
                              <a href="{{route('deals-details')}}" class="avatar"
                                ><img
                                  src="assets/img/avatar/avatar-15.jpg"
                                  alt="Img"
                              /></a>
                              <a href="{{route('deals-details')}}" class="user-name"
                                >Mickey</a
                              >
                            </div>
                            <span class="badge badge-soft-info">20%</span>
                          </div>
                        </div>
                        <div
                          class="kanban-card-footer d-flex align-items-center justify-content-between"
                        >
                          <span
                            ><i class="la la-calendar"></i> 10 Feb 2024</span
                          >
                          <ul class="icons-social">
                            <li>
                              <a href="#"><i class="la la-phone-volume"></i></a>
                            </li>
                            <li>
                              <a href="#"
                                ><i class="lab la-facebook-messenger"></i
                              ></a>
                            </li>
                            <li>
                              <a href="#"><i class="la la-swatchbook"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-kanban"
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-kanban"
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
                      <a href="deals-kanban.html" class="btn btn-primary"
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-kanban"
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
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/deals-kanban by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:08 GMT -->
</html>
