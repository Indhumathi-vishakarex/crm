<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/activities by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:21:26 GMT -->
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
    <title>Activities - HRMS admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
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
                <h3 class="page-title">Activities</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Activities</li>
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
                    data-bs-target="#add_activity"
                    ><i class="la la-plus-circle"></i>Add Activity</a
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
                  <label class="focus-label">Activity</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus">
                  <input type="email" class="form-control floating" />
                  <label class="focus-label">Owner</label>
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
                  <label class="focus-label">Due Date</label>
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
                  <label class="focus-label">Created at</label>
                </div>
              </div>
              <div class="col-xl-2">
                <div class="input-block mb-3 form-focus select-focus">
                  <select class="select floating">
                    <option>--Select--</option>
                    <option>Meeting</option>
                    <option>Calls</option>
                    <option>Email</option>
                    <option>Task</option>
                  </select>
                  <label class="focus-label">Activity Type</label>
                </div>
              </div>
              <div class="col-xl-2">
                <a href="#" class="btn btn-success w-100"> Search </a>
              </div>
            </div>
          </div>
          <hr />

          <div class="filter-section activity-filter-head">
            <div class="all-activity-head">
              <h5>All Activity</h5>
              <ul class="activity-list">
                <li>
                  <a href="javascript:void(0);"><i class="la la-phone"></i></a>
                </li>
                <li>
                  <a href="javascript:void(0);"
                    ><i class="la la-envelope"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0);"><i class="la la-tasks"></i></a>
                </li>
                <li>
                  <a href="javascript:void(0);"
                    ><i class="la la-user-tie"></i
                  ></a>
                </li>
              </ul>
            </div>
            <ul>
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
                      <th>Title</th>
                      <th>Activity Type</th>
                      <th>Due Date</th>
                      <th>Owner</th>
                      <th>Created At</th>
                      <th class="no-sort text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>We scheduled a meeting for next week</td>
                      <td>
                        <span class="badge activity-badge badge-bg-violet"
                          ><i class="la la-user-tie"></i>Meeting</span
                        >
                      </td>
                      <td>10 Feb 2024, 09:00 am</td>
                      <td>Hendry</td>
                      <td>08 Feb 2024, 10:00 am</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Had conversation with Fred regarding task</td>
                      <td>
                        <span class="badge activity-badge badge-bg-success"
                          ><i class="la la-phone"></i>Calls</span
                        >
                      </td>
                      <td>24 Feb 2024, 12:20 pm</td>
                      <td>Monty Beer</td>
                      <td>21 Feb 2024, 09:00 am</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Analysing latest time estimation for new project</td>
                      <td>
                        <span class="badge activity-badge badge-bg-warning"
                          ><i class="la la-envelope"></i>Email</span
                        >
                      </td>
                      <td>05 Mar 2024, 10:00 am</td>
                      <td>Bradtke</td>
                      <td>03 Mar 2024, 11:00 am</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Store and manage contact data</td>
                      <td>
                        <span class="badge activity-badge badge-bg-info"
                          ><i class="la la-tasks"></i>Task</span
                        >
                      </td>
                      <td>17 Mar 2024, 02:00 pm</td>
                      <td>Swaniawski</td>
                      <td>15 Mar 2024, 12:00 pm</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Call John and discuss about project</td>
                      <td>
                        <span class="badge activity-badge badge-bg-success"
                          ><i class="la la-phone"></i>Calls</span
                        >
                      </td>
                      <td>20 Apr 2024, 03:15 pm</td>
                      <td>Itzel</td>
                      <td>18 Apr 2024, 01:15 pm</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Will have a meeting before project start</td>
                      <td>
                        <span class="badge activity-badge badge-bg-violet"
                          ><i class="la la-user-tie"></i>Meeting</span
                        >
                      </td>
                      <td>08 Apr 2024, 11:00 am</td>
                      <td>Sally</td>
                      <td>05 Apr 2024, 03:20 pm</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Built landing pages</td>
                      <td>
                        <span class="badge activity-badge badge-bg-warning"
                          ><i class="la la-envelope"></i>Email</span
                        >
                      </td>
                      <td>12 May 2024, 08:30 am</td>
                      <td>Danny</td>
                      <td>10 May 2024, 11:30 am</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Regarding latest updates in project</td>
                      <td>
                        <span class="badge activity-badge badge-bg-violet"
                          ><i class="la la-user-tie"></i>Meeting</span
                        >
                      </td>
                      <td>26 May 2024, 04:10 pm</td>
                      <td>Lynch</td>
                      <td>23 May 2024, 05:00 pm</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Attach final proposal for upcoming project</td>
                      <td>
                        <span class="badge activity-badge badge-bg-info"
                          ><i class="la la-tasks"></i>Task</span
                        >
                      </td>
                      <td>13 June 2024, 10:30 am</td>
                      <td>Merwin</td>
                      <td>11 June 2024, 04:00 pm</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
                              ><i class="fa-regular fa-eye"></i> Preview</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Discussed budget proposal with Edwin</td>
                      <td>
                        <span class="badge activity-badge badge-bg-success"
                          ><i class="la la-phone"></i>Calls</span
                        >
                      </td>
                      <td>28 June 2024, 05:40 pm</td>
                      <td>Andrew</td>
                      <td>26 June 2024, 08:50 am</td>
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
                              data-bs-target="#edit_activity"
                              ><i class="fa-solid fa-pencil m-r-5"></i> Edit</a
                            >
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#delete_activity"
                              ><i class="fa-regular fa-trash-can m-r-5"></i>
                              Delete</a
                            >
                            <a class="dropdown-item" href="{{route('contact-details')}}"
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
            id="add_activity"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Add New Activity</h5>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/activities"
                  >
                    <div class="contact-input-set">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Title <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3 activity-date-picker">
                            <label class="col-form-label"
                              >Due Date
                              <span class="text-danger">*</span></label
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
                          <div class="activity-date-picker input-block mb-3">
                            <label class="col-form-label"
                              >Time <span class="text-danger">*</span></label
                            >
                            <div class="cal-icon time-icon">
                              <input
                                type="text"
                                class="form-control timepicker"
                              />
                              <span class="cus-icon"
                                ><i class="feather-clock"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="activity-date-picker input-block mb-3">
                            <label class="col-form-label"
                              >Reminder
                              <span class="text-danger">*</span></label
                            >
                            <div class="cal-icon reminder">
                              <input type="text" class="form-control" />
                              <span class="cus-icon"
                                ><i class="feather-clock"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-end">
                          <div
                            class="input-block mb-3 d-flex align-items-center"
                          >
                            <div class="w-100">
                              <select class="select">
                                <option>Minutes</option>
                                <option>Hours</option>
                              </select>
                            </div>
                            <span class="use-before">Before Use</span>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Owner <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Select</option>
                              <option>Monty Beer</option>
                              <option>Itzel</option>
                              <option>Andrew</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block tag-with-img mb-3">
                            <label class="col-form-label"
                              >Guests <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox4"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="Darlee Robertson"
                            />
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
                        <div class="col-md-12 deals-add-col">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="input-block mb-3">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <label class="col-form-label"
                                    >Deals
                                    <span class="text-danger">*</span></label
                                  >
                                  <a href="#" class="add-new add-new-deal"
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
                          </div>
                        </div>
                        <div class="col-md-12 contact-add-col">
                          <div class="input-block mb-3">
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <label class="col-form-label"
                                >Contacts
                                <span class="text-danger">*</span></label
                              >
                              <a href="#" class="add-new add-new-contact"
                                ><i class="la la-plus-circle me-2"></i>Add
                                New</a
                              >
                            </div>
                            <select class="select">
                              <option>Select</option>
                              <option>Darlee Robertson</option>
                              <option>Sharon Roy</option>
                              <option>Vaughan</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12 company-add-col">
                          <div class="input-block mb-3">
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <label class="col-form-label"
                                >Company
                                <span class="text-danger">*</span></label
                              >
                              <a href="#" class="add-new add-new-company"
                                ><i class="la la-plus-circle me-2"></i>Add
                                New</a
                              >
                            </div>
                            <select class="select">
                              <option>Select</option>
                              <option>NovaWaveLLC</option>
                              <option>SilverHawk</option>
                              <option>SummitPeak</option>
                            </select>
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
                            Save Activity
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
            id="edit_activity"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Edit Activity</h5>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/activities"
                  >
                    <div class="contact-input-set">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Title <span class="text-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              value="We scheduled a meeting for next week"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block mb-3 activity-date-picker">
                            <label class="col-form-label"
                              >Due Date
                              <span class="text-danger">*</span></label
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
                          <div class="activity-date-picker input-block mb-3">
                            <label class="col-form-label"
                              >Time <span class="text-danger">*</span></label
                            >
                            <div class="cal-icon time-icon">
                              <input
                                type="text"
                                class="form-control timepicker"
                              />
                              <span class="cus-icon"
                                ><i class="feather-clock"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="activity-date-picker input-block mb-3">
                            <label class="col-form-label"
                              >Reminder
                              <span class="text-danger">*</span></label
                            >
                            <div class="cal-icon reminder">
                              <input type="text" class="form-control" />
                              <span class="cus-icon"
                                ><i class="feather-clock"></i
                              ></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-end">
                          <div
                            class="input-block mb-3 d-flex align-items-center"
                          >
                            <div class="w-100">
                              <select class="select">
                                <option>Minutes</option>
                                <option>Hours</option>
                              </select>
                            </div>
                            <span class="use-before">Before Use</span>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Owner <span class="text-danger">*</span></label
                            >
                            <select class="select">
                              <option>Monty Beer</option>
                              <option>Itzel</option>
                              <option>Andrew</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-block tag-with-img mb-3">
                            <label class="col-form-label"
                              >Guests <span class="text-danger">*</span></label
                            >
                            <input
                              class="input-tags form-control"
                              id="inputBox3"
                              type="text"
                              data-role="tagsinput"
                              name="Label"
                              value="Darlee Robertson"
                            />
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
                        <div class="col-md-12 deals-add-col">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="input-block mb-3">
                                <div
                                  class="d-flex justify-content-between align-items-center"
                                >
                                  <label class="col-form-label"
                                    >Deals
                                    <span class="text-danger">*</span></label
                                  >
                                  <a href="#" class="add-new add-new-deal"
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
                          </div>
                        </div>
                        <div class="col-md-12 contact-add-col">
                          <div class="input-block mb-3">
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <label class="col-form-label"
                                >Contacts
                                <span class="text-danger">*</span></label
                              >
                              <a href="#" class="add-new add-new-contact"
                                ><i class="la la-plus-circle me-2"></i>Add
                                New</a
                              >
                            </div>
                            <select class="select">
                              <option>Darlee Robertson</option>
                              <option>Sharon Roy</option>
                              <option>Vaughan</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12 company-add-col">
                          <div class="input-block mb-3">
                            <div
                              class="d-flex justify-content-between align-items-center"
                            >
                              <label class="col-form-label"
                                >Company
                                <span class="text-danger">*</span></label
                              >
                              <a href="#" class="add-new add-new-company"
                                ><i class="la la-plus-circle me-2"></i>Add
                                New</a
                              >
                            </div>
                            <select class="select">
                              <option>NovaWaveLLC</option>
                              <option>SilverHawk</option>
                              <option>SummitPeak</option>
                            </select>
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
                            Save Activity
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
            class="modal custom-modal fade"
            id="delete_activity"
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
                    <p>Selected Activity from your Account</p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a
                        href="#"
                        class="button btn-lights"
                        data-bs-dismiss="modal"
                        >Not Now</a
                      >
                      {{-- <a href="" class="btn btn-primary">Okay</a> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="delete_stage" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="success-message text-center">
                    <div class="success-popup-icon bg-danger">
                      <i class="la la-trash-restore"></i>
                    </div>
                    <h3>Are you sure, You want to delete</h3>
                    <p>Stage ”Inpipeline” from your Account</p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a
                        href="#"
                        class="button btn-lights"
                        data-bs-dismiss="modal"
                        >Not Now</a
                      >
                      <a href="{{route('activities')}}" class="btn btn-primary">Okay</a>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/activities"
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

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/activities by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:21:42 GMT -->
</html>
