<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/leave-settings by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:35 GMT -->
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

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo2.png') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
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
            <div class="row">
              <div class="col-sm-12">
                <h3 class="page-title">Leave Settings</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Leave Settings</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card leave-box" id="leave_annual">
                <div class="card-body">
                  <div class="h3 card-title with-switch">
                    Annual
                    <div class="onoffswitch">
                      <input
                        type="checkbox"
                        name="onoffswitch"
                        class="onoffswitch-checkbox"
                        id="switch_annual"
                        checked
                      />
                      <label class="onoffswitch-label" for="switch_annual">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                  <div class="leave-item">
                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Days</label>
                            <input type="text" class="form-control" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>

                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <label class="d-block col-form-label"
                            >Carry forward</label
                          >
                          <div class="leave-inline-form">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="carry_no"
                                value="option1"
                                disabled
                              />
                              <label class="form-check-label" for="carry_no"
                                >No</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="carry_yes"
                                value="option2"
                                disabled
                              />
                              <label class="form-check-label" for="carry_yes"
                                >Yes</label
                              >
                            </div>
                            <div class="input-group">
                              <span class="input-group-text">Max</span>
                              <input
                                type="text"
                                class="form-control"
                                disabled
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>

                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <label class="d-block col-form-label"
                            >Earned leave</label
                          >
                          <div class="leave-inline-form">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="earned_no"
                                value="option1"
                                disabled
                              />
                              <label class="form-check-label" for="earned_no"
                                >No</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="earned_yes"
                                value="option2"
                                disabled
                              />
                              <label class="form-check-label" for="earned_yes"
                                >Yes</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>
                  </div>

                  <div class="custom-policy">
                    <div class="leave-header">
                      <div class="title">Custom policy</div>
                      <div class="leave-action">
                        <button
                          class="btn btn-sm btn-primary"
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#add_custom_policy"
                        >
                          <i class="fa-solid fa-plus"></i> Add custom policy
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table
                        class="table table-hover table-nowrap leave-table mb-0"
                      >
                        <thead>
                          <tr>
                            <th class="l-name">Name</th>
                            <th class="l-days">Days</th>
                            <th class="l-assignee">Assignee</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>5 Year Service</td>
                            <td>5</td>
                            <td>
                              <a href="#" class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-02.jpg"
                                  alt="User Image"
                              /></a>
                              <a href="#">John Doe</a>
                            </td>
                            <td class="text-end">
                              <div class="dropdown dropdown-action">
                                <a
                                  aria-expanded="false"
                                  data-bs-toggle="dropdown"
                                  class="action-icon dropdown-toggle"
                                  href="#"
                                  ><i class="material-icons">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a
                                    href="#"
                                    class="dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit_custom_policy"
                                    ><i class="fa-solid fa-pencil m-r-5"></i>
                                    Edit</a
                                  >
                                  <a
                                    href="#"
                                    class="dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete_custom_policy"
                                    ><i
                                      class="fa-regular fa-trash-can m-r-5"
                                    ></i>
                                    Delete</a
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
              </div>

              <div class="card leave-box" id="leave_sick">
                <div class="card-body">
                  <div class="h3 card-title with-switch">
                    Sick
                    <div class="onoffswitch">
                      <input
                        type="checkbox"
                        name="onoffswitch"
                        class="onoffswitch-checkbox"
                        id="switch_sick"
                        checked
                      />
                      <label class="onoffswitch-label" for="switch_sick">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                  <div class="leave-item">
                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Days</label>
                            <input type="text" class="form-control" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card leave-box" id="leave_hospitalisation">
                <div class="card-body">
                  <div class="h3 card-title with-switch">
                    Hospitalisation
                    <div class="onoffswitch">
                      <input
                        type="checkbox"
                        name="onoffswitch"
                        class="onoffswitch-checkbox"
                        id="switch_hospitalisation"
                      />
                      <label
                        class="onoffswitch-label"
                        for="switch_hospitalisation"
                      >
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                  <div class="leave-item">
                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Days</label>
                            <input type="text" class="form-control" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>
                  </div>

                  <div class="custom-policy">
                    <div class="leave-header">
                      <div class="title">Custom policy</div>
                      <div class="leave-action">
                        <button
                          class="btn btn-sm btn-primary"
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#add_custom_policy"
                        >
                          <i class="fa-solid fa-plus"></i> Add custom policy
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table
                        class="table table-hover table-nowrap leave-table mb-0"
                      >
                        <thead>
                          <tr>
                            <th class="l-name">Name</th>
                            <th class="l-days">Days</th>
                            <th class="l-assignee">Assignee</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>5 Year Service</td>
                            <td>5</td>
                            <td>
                              <a href="#" class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-02.jpg"
                                  alt="User Image"
                              /></a>
                              <a href="#">John Doe</a>
                            </td>
                            <td class="text-end">
                              <div class="dropdown dropdown-action">
                                <a
                                  aria-expanded="false"
                                  data-bs-toggle="dropdown"
                                  class="action-icon dropdown-toggle"
                                  href="#"
                                  ><i class="material-icons">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a href="#" class="dropdown-item"
                                    ><i class="fa-solid fa-pencil m-r-5"></i>
                                    Edit</a
                                  >
                                  <a href="#" class="dropdown-item"
                                    ><i
                                      class="fa-regular fa-trash-can m-r-5"
                                    ></i>
                                    Delete</a
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
              </div>

              <div class="card leave-box" id="leave_maternity">
                <div class="card-body">
                  <div class="h3 card-title with-switch">
                    Maternity
                    <span class="subtitle">Assigned to female only</span>
                    <div class="onoffswitch">
                      <input
                        type="checkbox"
                        name="onoffswitch"
                        class="onoffswitch-checkbox"
                        id="switch_maternity"
                        checked
                      />
                      <label class="onoffswitch-label" for="switch_maternity">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                  <div class="leave-item">
                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Days</label>
                            <input type="text" class="form-control" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card leave-box" id="leave_paternity">
                <div class="card-body">
                  <div class="h3 card-title with-switch">
                    Paternity
                    <span class="subtitle">Assigned to male only</span>
                    <div class="onoffswitch">
                      <input
                        type="checkbox"
                        name="onoffswitch"
                        class="onoffswitch-checkbox"
                        id="switch_paternity"
                      />
                      <label class="onoffswitch-label" for="switch_paternity">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                  <div class="leave-item">
                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Days</label>
                            <input type="text" class="form-control" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card leave-box mb-0" id="leave_custom01">
                <div class="card-body">
                  <div class="h3 card-title with-switch">
                    LOP
                    <div class="onoffswitch">
                      <input
                        type="checkbox"
                        name="onoffswitch"
                        class="onoffswitch-checkbox"
                        id="switch_custom01"
                        checked
                      />
                      <label class="onoffswitch-label" for="switch_custom01">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                    <button
                      class="btn btn-danger leave-delete-btn"
                      type="button"
                    >
                      Delete
                    </button>
                  </div>
                  <div class="leave-item">
                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Days</label>
                            <input type="text" class="form-control" disabled />
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>

                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <label class="d-block col-form-label"
                            >Carry forward</label
                          >
                          <div class="leave-inline-form">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="carryForward"
                                id="carry_no_01"
                                value="option1"
                                disabled
                              />
                              <label class="form-check-label" for="carry_no_01"
                                >No</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="carryForward"
                                id="carry_yes_01"
                                value="option2"
                                disabled
                              />
                              <label class="form-check-label" for="carry_yes_01"
                                >Yes</label
                              >
                            </div>
                            <div class="input-group">
                              <span class="input-group-text">Max</span>
                              <input
                                type="text"
                                class="form-control"
                                disabled
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>

                    <div class="leave-row">
                      <div class="leave-left">
                        <div class="input-box">
                          <label class="d-block col-form-label"
                            >Earned leave</label
                          >
                          <div class="leave-inline-form">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                                disabled
                              />
                              <label class="form-check-label" for="inlineRadio1"
                                >No</label
                              >
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio2"
                                value="option2"
                                disabled
                              />
                              <label class="form-check-label" for="inlineRadio2"
                                >Yes</label
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="leave-right">
                        <button class="leave-edit-btn">Edit</button>
                      </div>
                    </div>
                  </div>

                  <div class="custom-policy">
                    <div class="leave-header">
                      <div class="title">Custom policy</div>
                      <div class="leave-action">
                        <button
                          class="btn btn-sm btn-primary"
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#add_custom_policy"
                        >
                          <i class="fa-solid fa-plus"></i> Add custom policy
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table
                        class="table table-hover table-nowrap leave-table mb-0"
                      >
                        <thead>
                          <tr>
                            <th class="l-name">Name</th>
                            <th class="l-days">Days</th>
                            <th class="l-assignee">Assignee</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>5 Year Service</td>
                            <td>5</td>
                            <td>
                              <a href="#" class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-02.jpg"
                                  alt="User Image"
                              /></a>
                              <a href="#">John Doe</a>
                            </td>
                            <td class="text-end">
                              <div class="dropdown dropdown-action">
                                <a
                                  aria-expanded="false"
                                  data-bs-toggle="dropdown"
                                  class="action-icon dropdown-toggle"
                                  href="#"
                                  ><i class="material-icons">more_vert</i></a
                                >
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a
                                    href="#"
                                    class="dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit_custom_policy"
                                    ><i class="fa-solid fa-pencil m-r-5"></i>
                                    Edit</a
                                  >
                                  <a
                                    href="#"
                                    class="dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete_custom_policy"
                                    ><i
                                      class="fa-regular fa-trash-can m-r-5"
                                    ></i>
                                    Delete</a
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
              </div>
            </div>
          </div>

          <div
            id="add_custom_policy"
            class="modal custom-modal fade"
            role="dialog"
          >
            <div
              class="modal-dialog modal-dialog-centered modal-lg"
              role="document"
            >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Custom Policy</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Policy Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Days <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                    <div class="input-block mb-3 leave-duallist">
                      <label class="col-form-label">Add employee</label>
                      <div class="row">
                        <div class="col-lg-5 col-sm-5">
                          <select
                            name="customleave_from"
                            id="customleave_select"
                            class="form-control form-select select"
                            size="5"
                            multiple="multiple"
                          >
                            <option value="1">Bernardo Galaviz</option>
                            <option value="2">Jeffrey Warden</option>
                            <option value="2">John Doe</option>
                            <option value="2">John Smith</option>
                            <option value="3">Mike Litorus</option>
                          </select>
                        </div>
                        <div
                          class="multiselect-controls col-lg-2 col-sm-2 d-grid gap-2"
                        >
                          <button
                            type="button"
                            id="customleave_select_rightAll"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-forward"></i>
                          </button>
                          <button
                            type="button"
                            id="customleave_select_rightSelected"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-chevron-right"></i>
                          </button>
                          <button
                            type="button"
                            id="customleave_select_leftSelected"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-chevron-left"></i>
                          </button>
                          <button
                            type="button"
                            id="customleave_select_leftAll"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-backward"></i>
                          </button>
                        </div>
                        <div class="col-lg-5 col-sm-5">
                          <select
                            name="customleave_to"
                            id="customleave_select_to"
                            class="form-control form-select select"
                            size="8"
                            multiple="multiple"
                          ></select>
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

          <div
            id="edit_custom_policy"
            class="modal custom-modal fade"
            role="dialog"
          >
            <div
              class="modal-dialog modal-dialog-centered modal-lg"
              role="document"
            >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Custom Policy</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Policy Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="LOP" />
                    </div>
                    <div class="input-block mb-3">
                      <label class="col-form-label"
                        >Days <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="4" />
                    </div>
                    <div class="input-block mb-3 leave-duallist">
                      <label class="col-form-label">Add employee</label>
                      <div class="row">
                        <div class="col-lg-5 col-sm-5">
                          <select
                            name="edit_customleave_from"
                            id="edit_customleave_select"
                            class="form-control form-select select"
                            size="5"
                            multiple="multiple"
                          >
                            <option value="1">Bernardo Galaviz</option>
                            <option value="2">Jeffrey Warden</option>
                            <option value="2">John Doe</option>
                            <option value="2">John Smith</option>
                            <option value="3">Mike Litorus</option>
                          </select>
                        </div>
                        <div
                          class="multiselect-controls col-lg-2 col-sm-2 d-grid gap-2"
                        >
                          <button
                            type="button"
                            id="edit_customleave_select_rightAll"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-forward"></i>
                          </button>
                          <button
                            type="button"
                            id="edit_customleave_select_rightSelected"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-chevron-right"></i>
                          </button>
                          <button
                            type="button"
                            id="edit_customleave_select_leftSelected"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-chevron-left"></i>
                          </button>
                          <button
                            type="button"
                            id="edit_customleave_select_leftAll"
                            class="btn w-100 btn-white"
                          >
                            <i class="fa fa-backward"></i>
                          </button>
                        </div>
                        <div class="col-lg-5 col-sm-5">
                          <select
                            name="customleave_to"
                            id="edit_customleave_select_to"
                            class="form-control form-select select"
                            size="8"
                            multiple="multiple"
                          ></select>
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

          <div
            class="modal custom-modal fade"
            id="delete_custom_policy"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-header">
                    <h3>Delete Custom Policy</h3>
                    <p>Are you sure want to delete?</p>
                  </div>
                  <div class="modal-btn delete-action">
                    <div class="row">
                      <div class="col-6">
                        <a
                          href="javascript:void(0);"
                          class="btn btn-primary continue-btn"
                          >Delete</a
                        >
                      </div>
                      <div class="col-6">
                        <a
                          href="javascript:void(0);"
                          data-bs-dismiss="modal"
                          class="btn btn-primary cancel-btn"
                          >Cancel</a
                        >
                      </div>
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
   <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/feather.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/multiselect.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/greedynav.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<!-- Optional: Cloudflare Rocket Loader (keep only if using Cloudflare) -->
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="5d759d12304fa4bd77db7a14-|49" defer></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/leave-settings by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:37 GMT -->
</html>
