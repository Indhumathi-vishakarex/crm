<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/deals-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:08 GMT -->
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
<link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
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
                    <a href="#" class="grid-view btn btn-link"
                      ><i class="las la-redo-alt"></i
                    ></a>
                    <a
                      href="#"
                      class="list-view btn btn-link"
                      id="collapse-header"
                      ><i class="las la-expand-arrows-alt"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-md-12">
              <div class="contact-head">
                <div class="row align-items-center">
                  <div class="col-sm-6">
                    <ul class="contact-breadcrumb">
                      <li>
                        <a href="{{route('deals')}}"
                          ><i class="las la-arrow-left"></i> Deals</a
                        >
                      </li>
                      <li>Tremblay and Rath</li>
                      <li class="before-none">
                        <div class="select-pipeline">
                          <span class="pipe-icon"
                            ><i class="las la-code-branch"></i
                          ></span>
                          <select class="select">
                            <option>Marketing Pipeline</option>
                            <option>Sales Pipeline</option>
                          </select>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-6 text-sm-end">
                    <div class="contact-pagination">
                      <p>1 of 40</p>
                      <ul>
                        <li>
                          <a href="deals-details.html"
                            ><i class="las la-arrow-left"></i
                          ></a>
                        </li>
                        <li>
                          <a href="deals-details.html"
                            ><i class="las la-arrow-right"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact-wrap">
                <div class="contact-profile">
                  <div class="avatar company-avatar">
                    <span class="text-icon">HT</span>
                  </div>
                  <div class="name-user">
                    <h4>
                      Tremblay and Rath
                      <span class="star-icon"
                        ><i class="fa-solid fa-star"></i
                      ></span>
                    </h4>
                    <p><i class="las la-building"></i> Google Inc</p>
                    <p class="mb-0">
                      <i class="las la-map-marker"></i> 22, Ave Street, Newyork,
                      USA
                    </p>
                  </div>
                </div>
                <div class="contacts-action">
                  <span class="badge badge-light"
                    ><i class="las la-lock"></i>Private</span
                  >
                  <div class="dropdown action-drops">
                    <a
                      href="#"
                      class="dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span
                        ><i class="las la-thumbs-up me-2"></i>Won<i
                          class="las la-angle-down ms-2"
                        ></i
                      ></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><span
                          ><i class="las la-thumbs-up me-1"></i>Won</span
                        ></a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><span
                          ><i class="las la-thumbs-down me-1"></i>Loss</span
                        ></a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3">
              <div class="card contact-sidebar">
                <h5>Deal Information</h5>
                <ul class="other-info">
                  <li>
                    <span class="other-title">Date Created</span
                    ><span>10 Jan 2024, 10:00 am</span>
                  </li>
                  <li>
                    <span class="other-title">Probability - Win</span
                    ><span>80%</span>
                  </li>
                  <li>
                    <span class="other-title">Deal Value</span
                    ><span>$25,11,145</span>
                  </li>
                  <li>
                    <span class="other-title">Due Date</span
                    ><span>20 Jan 2024, 10:00 am</span>
                  </li>
                  <li>
                    <span class="other-title">Follow Up</span
                    ><span>20 Jan 2024</span>
                  </li>
                  <li>
                    <span class="other-title">Source</span><span>Google</span>
                  </li>
                </ul>
                <div
                  class="d-flex align-items-center justify-content-between flex-wrap"
                >
                  <h5>Deal Owner</h5>
                </div>
                <ul class="deals-info">
                  <li>
                    <span>
                      <img src="assets/img/avatar/avatar-21.jpg" alt="Image" />
                    </span>
                    <div>
                      <p>Vaughan</p>
                    </div>
                  </li>
                  <li>
                    <span>
                      <img src="assets/img/avatar/avatar-1.jpg" alt="Image" />
                    </span>
                    <div>
                      <p>Jessica</p>
                    </div>
                  </li>
                </ul>
                <h5>Tags</h5>
                <ul class="tag-info">
                  <li>
                    <a href="javascript:void(0);" class="bg-success-light"
                      >Collab</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="bg-warning-light"
                      >Rated</a
                    >
                  </li>
                </ul>
                <div
                  class="d-flex align-items-center justify-content-between flex-wrap"
                >
                  <h5>Priority</h5>
                </div>
                <ul class="priority-info">
                  <li>
                    <div class="dropdown">
                      <a
                        href="#"
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        ><span
                          ><i
                            class="fa-solid fa-circle me-1 text-danger circle"
                          ></i
                          >High</span
                        ><i class="las la-angle-down ms-1"></i
                      ></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0);">
                          <span
                            ><i
                              class="fa-solid fa-circle me-1 text-danger circle"
                            ></i
                            >High</span
                          >
                        </a>
                        <a class="dropdown-item" href="javascript:void(0);">
                          <span
                            ><i
                              class="fa-solid fa-circle me-1 text-success circle"
                            ></i
                            >Low</span
                          >
                        </a>
                      </div>
                    </div>
                  </li>
                </ul>
                <div
                  class="d-flex align-items-center justify-content-between flex-wrap"
                >
                  <h5>Projects</h5>
                </div>
                <ul class="projects-info">
                  <li>
                    <a href="javascript:void(0);" class="badge badge-light"
                      >Devops Design</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="badge badge-light"
                      >Margrate Design</a
                    >
                  </li>
                </ul>
                <div
                  class="d-flex align-items-center justify-content-between flex-wrap"
                >
                  <h5>Contacts</h5>
                  <a
                    href="javascript:void(0);"
                    class="com-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_contact"
                    ><i class="las la-plus-circle me-1"></i>Add New</a
                  >
                </div>
                <ul class="deals-info">
                  <li>
                    <span>
                      <img src="assets/img/avatar/avatar-21.jpg" alt="Image" />
                    </span>
                    <div>
                      <p>Vaughan</p>
                    </div>
                  </li>
                  <li>
                    <span>
                      <img src="assets/img/avatar/avatar-1.jpg" alt="Image" />
                    </span>
                    <div>
                      <p>Jessica</p>
                    </div>
                  </li>
                </ul>
                <ul class="other-info">
                  <li>
                    <span class="other-title">Last Modified</span
                    ><span>10 Jan 2024, 10:00 am</span>
                  </li>
                  <li>
                    <span class="other-title">Modified By</span>
                    <span
                      ><img
                        src="assets/img/avatar/avatar-19.jpg"
                        class="avatar-xs rounded-circle"
                        alt="img"
                      />
                      Darlee Robertson</span
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-9">
              <div class="contact-tab-wrap">
                <h4>Deal Pipeline Status</h4>
                <div class="pipeline-list">
                  <ul>
                    <li>
                      <a href="javascript:void(0);" class="bg-pending"
                        >Qualify To Buy</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="bg-info"
                        >Contact Made</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="bg-warning"
                        >Presentation</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="bg-pink"
                        >Proposal Made</a
                      >
                    </li>
                    <li><a href="javascript:void(0);">Appointment</a></li>
                  </ul>
                </div>
                <ul class="contact-nav nav">
                  <li>
                    <a
                      href="#"
                      data-bs-toggle="tab"
                      data-bs-target="#activities"
                      class="active"
                      ><i class="las la-user-clock"></i>Activities</a
                    >
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#notes"
                      ><i class="las la-file"></i>Notes</a
                    >
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#calls"
                      ><i class="las la-phone-volume"></i>Calls</a
                    >
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#files"
                      ><i class="las la-file"></i>Files</a
                    >
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="tab" data-bs-target="#email"
                      ><i class="las la-envelope"></i>Email</a
                    >
                  </li>
                </ul>
              </div>

              <div class="contact-tab-view">
                <div class="tab-content pt-0">
                  <div class="tab-pane active show" id="activities">
                    <div class="view-header">
                      <h4>Activities</h4>
                      <ul>
                        <li>
                          <div class="form-sort">
                            <i class="las la-sort-amount-up-alt"></i>
                            <select class="select">
                              <option>Sort By Date</option>
                              <option>Ascending</option>
                              <option>Descending</option>
                            </select>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="contact-activity">
                      <div class="badge-day">
                        <i class="fa-regular fa-calendar-check"></i>15 Feb 2024
                      </div>
                      <ul>
                        <li class="activity-wrap">
                          <span class="activity-icon bg-info">
                            <i class="las la-comment-alt"></i>
                          </span>
                          <div class="activity-info">
                            <h6>You sent 1 Message to the contact.</h6>
                            <p>10:25 pm</p>
                          </div>
                        </li>
                        <li class="activity-wrap">
                          <span class="activity-icon bg-success">
                            <i class="las la-phone"></i>
                          </span>
                          <div class="activity-info">
                            <h6>
                              Denwar responded to your appointment schedule
                              question by call at 09:30pm.
                            </h6>
                            <p>09:25 pm</p>
                          </div>
                        </li>
                        <li class="activity-wrap">
                          <span class="activity-icon bg-warning">
                            <i class="las la-file-alt"></i>
                          </span>
                          <div class="activity-info">
                            <h6>Notes added by Antony</h6>
                            <p>
                              Please accept my apologies for the inconvenience
                              caused. It would be much appreciated if it's
                              possible to reschedule to 6:00 PM, or any other
                              day that week.
                            </p>
                            <p>10.00 pm</p>
                          </div>
                        </li>
                      </ul>
                      <div class="badge-day">
                        <i class="fa-regular fa-calendar-check"></i>15 Feb 2024
                      </div>
                      <ul>
                        <li class="activity-wrap">
                          <span class="activity-icon bg-pending">
                            <i class="las la-user-tie"></i>
                          </span>
                          <div class="activity-info">
                            <h6>
                              Meeting With
                              <span class="avatar-xs"
                                ><img
                                  src="assets/img/avatar/avatar-19.jpg"
                                  alt="img"
                              /></span>
                              Abraham
                            </h6>
                            <p>Schedueled on 05:00 pm</p>
                          </div>
                        </li>
                        <li class="activity-wrap">
                          <span class="activity-icon bg-success">
                            <i class="las la-phone"></i>
                          </span>
                          <div class="activity-info">
                            <h6>
                              Drain responded to your appointment schedule
                              question.
                            </h6>
                            <p>09:25 pm</p>
                          </div>
                        </li>
                      </ul>
                      <div class="badge-day">
                        <i class="fa-regular fa-calendar-check"></i>Upcoming
                        Activity
                      </div>
                      <ul>
                        <li class="activity-wrap">
                          <span class="activity-icon bg-pending">
                            <i class="las la-user-tie"></i>
                          </span>
                          <div class="activity-info">
                            <h6>Product Meeting</h6>
                            <p>
                              A product team meeting is a gathering of the
                              cross-functional product team — ideally including
                              team members from product, engineering, marketing,
                              and customer support.
                            </p>
                            <p>25 Jul 2023, 05:00 pm</p>
                            <div class="upcoming-info">
                              <div class="row">
                                <div class="col-sm-4">
                                  <p>Reminder</p>
                                  <div class="dropdown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><i class="las la-clock me-1"></i
                                      >Reminder<i
                                        class="las la-angle-down ms-1"
                                      ></i
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-right"
                                    >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        >Remainder</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        >1 hr</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        >10 hr</a
                                      >
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <p>Task Priority</p>
                                  <div class="dropdown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><i
                                        class="fa-solid fa-circle me-1 text-danger circle"
                                      ></i
                                      >High<i class="las la-angle-down ms-1"></i
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-right"
                                    >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        ><i
                                          class="fa-solid fa-circle me-1 text-danger circle"
                                        ></i
                                        >High</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        ><i
                                          class="fa-solid fa-circle me-1 text-success circle"
                                        ></i
                                        >Low</a
                                      >
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <p>Assigned to</p>
                                  <div class="dropdown">
                                    <a
                                      href="#"
                                      class="dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                      ><img
                                        src="assets/img/avatar/avatar-19.jpg"
                                        alt="img"
                                        class="me-1 avatar-xs" />John<i
                                        class="las la-angle-down ms-1"
                                      ></i
                                    ></a>
                                    <div
                                      class="dropdown-menu dropdown-menu-right"
                                    >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        ><img
                                          src="assets/img/avatar/avatar-19.jpg"
                                          alt="img"
                                          class="me-1 avatar-xs"
                                        />John</a
                                      >
                                      <a
                                        class="dropdown-item"
                                        href="javascript:void(0);"
                                        ><img
                                          src="assets/img/avatar/avatar-19.jpg"
                                          alt="img"
                                          class="me-1 avatar-xs"
                                        />Peter</a
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="notes">
                    <div class="view-header">
                      <h4>Notes</h4>
                      <ul>
                        <li>
                          <div class="form-sort">
                            <i class="las la-sort-amount-up-alt"></i>
                            <select class="select">
                              <option>Sort By Date</option>
                              <option>Ascending</option>
                              <option>Descending</option>
                            </select>
                          </div>
                        </li>
                        <li>
                          <a
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#add_notes"
                            class="com-add"
                            ><i class="las la-plus-circle me-1"></i>Add New</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="notes-activity">
                      <div class="calls-box">
                        <div class="caller-info">
                          <div class="calls-user">
                            <img
                              src="assets/img/avatar/avatar-19.jpg"
                              alt="img"
                            />
                            <div>
                              <h6>Darlee Robertson</h6>
                              <p>15 Sep 2023, 12:10 pm</p>
                            </div>
                          </div>
                          <div class="calls-action">
                            <div class="dropdown action-drop">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="feather-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  ><i class="las la-edit me-1"></i>Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  ><i class="las la-trash me-1"></i>Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <h5>Notes added by Antony</h5>
                        <p>
                          A project review evaluates the success of an
                          initiative and identifies areas for improvement. It
                          can also evaluate a current project to determine
                          whether it's on the right track. Or, it can determine
                          the success of a completed project.
                        </p>
                        <ul>
                          <li>
                            <div class="note-download">
                              <div class="note-info">
                                <span class="note-icon bg-success">
                                  <i class="las la-file-excel"></i>
                                </span>
                                <div>
                                  <h6>Project Specs.xls</h6>
                                  <p>365 KB</p>
                                </div>
                              </div>
                              <a href="javascript:void(0);"
                                ><i class="las la-download"></i
                              ></a>
                            </div>
                          </li>
                          <li>
                            <div class="note-download">
                              <div class="note-info">
                                <span class="note-icon">
                                  <img
                                    src="assets/img/media/media-35.jpg"
                                    alt="img"
                                  />
                                </span>
                                <div>
                                  <h6>090224.jpg</h6>
                                  <p>365 KB</p>
                                </div>
                              </div>
                              <a href="javascript:void(0);"
                                ><i class="las la-download"></i
                              ></a>
                            </div>
                          </li>
                        </ul>
                        <div class="notes-editor">
                          <div class="note-edit-wrap">
                            <div class="summernote">
                              Write a new comment, send your team notification
                              by typing @ followed by their name
                            </div>
                            <div class="text-end note-btns">
                              <a
                                href="javascript:void(0);"
                                class="btn btn-lighter add-cancel"
                                >Cancel</a
                              >
                              <a
                                href="javascript:void(0);"
                                class="btn btn-primary"
                                >Save</a
                              >
                            </div>
                          </div>
                          <div class="text-end">
                            <a href="javascript:void(0);" class="add-comment"
                              ><i class="las la-plus-circle me-1"></i>Add
                              Comment</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="calls-box">
                        <div class="caller-info">
                          <div class="calls-user">
                            <img
                              src="assets/img/avatar/avatar-20.jpg"
                              alt="img"
                            />
                            <div>
                              <h6>Sharon Roy</h6>
                              <p>18 Sep 2023, 09:52 am</p>
                            </div>
                          </div>
                          <div class="calls-action">
                            <div class="dropdown action-drop">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="feather-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  ><i class="las la-edit me-1"></i>Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  ><i class="las la-trash me-1"></i>Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <h5>Notes added by Antony</h5>
                        <p>
                          A project plan typically contains a list of the
                          essential elements of a project, such as stakeholders,
                          scope, timelines, estimated cost and communication
                          methods. The project manager typically lists the
                          information based on the assignment.
                        </p>
                        <ul>
                          <li>
                            <div class="note-download">
                              <div class="note-info">
                                <span class="note-icon bg-success">
                                  <i class="las la-file-excel"></i>
                                </span>
                                <div>
                                  <h6>Andrewpass.txt</h6>
                                  <p>365 KB</p>
                                </div>
                              </div>
                              <a href="javascript:void(0);"
                                ><i class="las la-download"></i
                              ></a>
                            </div>
                          </li>
                        </ul>
                        <div class="reply-box">
                          <p>
                            The best way to get a project done faster is to
                            start sooner. A goal without a timeline is just a
                            dream.The goal you set must be challenging. At the
                            same time, it should be realistic and attainable,
                            not impossible to reach.
                          </p>
                          <p>
                            Commented by
                            <span class="text-primary">Aeron</span> on 15 Sep
                            2023, 11:15 pm
                          </p>
                        </div>
                        <div class="notes-editor">
                          <div class="note-edit-wrap">
                            <div class="summernote">
                              Write a new comment, send your team notification
                              by typing @ followed by their name
                            </div>
                            <div class="text-end note-btns">
                              <a
                                href="javascript:void(0);"
                                class="btn btn-lighter add-cancel"
                                >Cancel</a
                              >
                              <a
                                href="javascript:void(0);"
                                class="btn btn-primary"
                                >Save</a
                              >
                            </div>
                          </div>
                          <div class="text-end">
                            <a href="javascript:void(0);" class="add-comment"
                              ><i class="las la-plus-circle me-1"></i>Add
                              Comment</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="calls-box">
                        <div class="caller-info">
                          <div class="calls-user">
                            <img
                              src="assets/img/avatar/avatar-21.jpg"
                              alt="img"
                            />
                            <div>
                              <h6>Vaughan</h6>
                              <p>20 Sep 2023, 10:26 pm</p>
                            </div>
                          </div>
                          <div class="calls-action">
                            <div class="dropdown action-drop">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="feather-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  ><i class="las la-edit me-1"></i>Edit</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  ><i class="las la-trash me-1"></i>Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>
                          Projects play a crucial role in the success of
                          organizations, and their importance cannot be
                          overstated. Whether it's launching a new product,
                          improving an existing
                        </p>
                        <div class="notes-editor">
                          <div class="note-edit-wrap">
                            <div class="summernote">
                              Write a new comment, send your team notification
                              by typing @ followed by their name
                            </div>
                            <div class="text-end note-btns">
                              <a
                                href="javascript:void(0);"
                                class="btn btn-lighter add-cancel"
                                >Cancel</a
                              >
                              <a
                                href="javascript:void(0);"
                                class="btn btn-primary"
                                >Save</a
                              >
                            </div>
                          </div>
                          <div class="text-end">
                            <a href="javascript:void(0);" class="add-comment"
                              ><i class="las la-plus-circle me-1"></i>Add
                              Comment</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="calls">
                    <div class="view-header">
                      <h4>Calls</h4>
                      <ul>
                        <li>
                          <a
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#create_call"
                            class="com-add"
                            ><i class="las la-plus-circle me-1"></i>Add New</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="calls-activity">
                      <div class="calls-box">
                        <div class="caller-info">
                          <div class="calls-user">
                            <img
                              src="assets/img/avatar/avatar-19.jpg"
                              alt="img"
                            />
                            <p>
                              <span>Darlee Robertson</span> logged a call on 23
                              Jul 2023, 10:00 pm
                            </p>
                          </div>
                          <div class="calls-action">
                            <div class="dropdown call-drop">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                >Busy<i class="las la-angle-down ms-1"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Busy</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >No Answer</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Unavailable</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Wrong Number</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Left Voice Message</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Moving Forward</a
                                >
                              </div>
                            </div>
                            <div class="dropdown">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="feather-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>
                          A project review evaluates the success of an
                          initiative and identifies areas for improvement. It
                          can also evaluate a current project to determine
                          whether it's on the right track. Or, it can determine
                          the success of a completed project.
                        </p>
                      </div>
                      <div class="calls-box">
                        <div class="caller-info">
                          <div class="calls-user">
                            <img
                              src="assets/img/avatar/avatar-20.jpg"
                              alt="img"
                            />
                            <p>
                              <span>Sharon Roy</span> logged a call on 28 Jul
                              2023, 09:00 pm
                            </p>
                          </div>
                          <div class="calls-action">
                            <div class="dropdown call-drop">
                              <a
                                href="#"
                                class="dropdown-toggle bg-light-pending"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                >No Answer<i class="las la-angle-down ms-1"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Busy</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >No Answer</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Unavailable</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Wrong Number</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Left Voice Message</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Moving Forward</a
                                >
                              </div>
                            </div>
                            <div class="dropdown">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="feather-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>
                          A project plan typically contains a list of the
                          essential elements of a project, such as stakeholders,
                          scope, timelines, estimated cost and communication
                          methods. The project manager typically lists the
                          information based on the assignment.
                        </p>
                      </div>
                      <div class="calls-box">
                        <div class="caller-info">
                          <div class="calls-user">
                            <img
                              src="assets/img/avatar/avatar-21.jpg"
                              alt="img"
                            />
                            <p>
                              <span>Vaughan</span> logged a call on 30 Jul 2023,
                              08:00 pm
                            </p>
                          </div>
                          <div class="calls-action">
                            <div class="dropdown call-drop">
                              <a
                                href="#"
                                class="dropdown-toggle bg-light-pending"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                >No Answer<i class="las la-angle-down ms-1"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Busy</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >No Answer</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Unavailable</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Wrong Number</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Left Voice Message</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Moving Forward</a
                                >
                              </div>
                            </div>
                            <div class="dropdown">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                                ><i class="feather-more-vertical"></i
                              ></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Delete</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <p>
                          Projects play a crucial role in the success of
                          organizations, and their importance cannot be
                          overstated. Whether it's launching a new product,
                          improving an existing
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="files">
                    <div class="view-header">
                      <h4>Files</h4>
                    </div>
                    <div class="files-activity">
                      <div class="files-wrap">
                        <div class="row align-items-center">
                          <div class="col-md-8">
                            <div class="file-info">
                              <h4>Manage Documents</h4>
                              <p>
                                Send customizable quotes, proposals and
                                contracts to close deals faster.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 text-md-end">
                            <ul class="file-action">
                              <li>
                                <a
                                  href="#"
                                  class="btn btn-primary"
                                  data-bs-toggle="modal"
                                  data-bs-target="#new_file"
                                  >Create Document</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="files-wrap">
                        <div class="row align-items-center">
                          <div class="col-md-8">
                            <div class="file-info">
                              <h4>Collier-Turner Proposal</h4>
                              <p>
                                Send customizable quotes, proposals and
                                contracts to close deals faster.
                              </p>
                              <div class="file-user">
                                <img
                                  src="assets/img/avatar/avatar-21.jpg"
                                  alt="img"
                                />
                                <div>
                                  <p><span>Owner</span> Vaughan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 text-md-end">
                            <ul class="file-action">
                              <li>
                                <span class="badge badge-soft-pink"
                                  >Proposal</span
                                >
                              </li>
                              <li>
                                <span
                                  class="badge badge-soft-grey priority-badge"
                                  ><i class="fa-solid fa-circle"></i>Low</span
                                >
                              </li>
                              <li>
                                <div class="dropdown action-drop">
                                  <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    ><i class="feather-more-vertical"></i
                                  ></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right"
                                  >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-edit me-1"></i>Edit</a
                                    >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-trash me-1"></i
                                      >Delete</a
                                    >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-download me-1"></i
                                      >Download</a
                                    >
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="files-wrap">
                        <div class="row align-items-center">
                          <div class="col-md-8">
                            <div class="file-info">
                              <h4>Collier-Turner Proposal</h4>
                              <p>
                                Send customizable quotes, proposals and
                                contracts to close deals faster.
                              </p>
                              <div class="file-user">
                                <img
                                  src="assets/img/avatar/avatar-1.jpg"
                                  alt="img"
                                />
                                <div>
                                  <p><span>Owner</span> Jessica</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 text-md-end">
                            <ul class="file-action">
                              <li>
                                <span class="badge badge-soft-info">Quote</span>
                              </li>
                              <li>
                                <span
                                  class="badge badge-soft-success priority-badge"
                                  ><i class="fa-solid fa-circle"></i>Sent</span
                                >
                              </li>
                              <li>
                                <div class="dropdown action-drop">
                                  <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    ><i class="feather-more-vertical"></i
                                  ></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right"
                                  >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-edit me-1"></i>Edit</a
                                    >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-trash me-1"></i
                                      >Delete</a
                                    >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-download me-1"></i
                                      >Download</a
                                    >
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="files-wrap">
                        <div class="row align-items-center">
                          <div class="col-md-8">
                            <div class="file-info">
                              <h4>Collier-Turner Proposal</h4>
                              <p>
                                Send customizable quotes, proposals and
                                contracts to close deals faster.
                              </p>
                              <div class="file-user">
                                <img
                                  src="assets/img/avatar/avatar-22.jpg"
                                  alt="img"
                                />
                                <div>
                                  <p><span>Owner</span> Vaughan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 text-md-end">
                            <ul class="file-action">
                              <li>
                                <span class="badge badge-soft-pink"
                                  >Proposal</span
                                >
                              </li>
                              <li>
                                <span
                                  class="badge badge-soft-grey priority-badge"
                                  ><i class="fa-solid fa-circle"></i>Low</span
                                >
                              </li>
                              <li>
                                <div class="dropdown action-drop">
                                  <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    ><i class="feather-more-vertical"></i
                                  ></a>
                                  <div
                                    class="dropdown-menu dropdown-menu-right"
                                  >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-edit me-1"></i>Edit</a
                                    >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-trash me-1"></i
                                      >Delete</a
                                    >
                                    <a
                                      class="dropdown-item"
                                      href="javascript:void(0);"
                                      ><i class="las la-download me-1"></i
                                      >Download</a
                                    >
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="email">
                    <div class="view-header">
                      <h4>Email</h4>
                      <ul>
                        <li>
                          <a
                            href="javascript:void(0);"
                            class="com-add create-mail"
                            data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            data-bs-custom-class="tooltip-dark"
                            data-bs-original-title="There are no email accounts configured, Please configured your email account in order to Send/ Create EMails"
                            ><i class="las la-plus-circle me-1"></i>Create
                            Email</a
                          >
                        </li>
                      </ul>
                    </div>
                    <div class="files-activity">
                      <div class="files-wrap">
                        <div class="row align-items-center">
                          <div class="col-md-8">
                            <div class="file-info">
                              <h4>Manage Emails</h4>
                              <p>
                                You can send and reply to emails directly via
                                this section.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 text-md-end">
                            <ul class="file-action">
                              <li>
                                <a
                                  href="#"
                                  class="btn btn-primary"
                                  data-bs-toggle="modal"
                                  data-bs-target="#create_email"
                                  >Connect Account</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="files-wrap">
                        <div class="email-header">
                          <div class="row">
                            <div class="col top-action-left">
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
                                  <i class="fa-solid fa-rotate"></i>
                                </button>
                                <div class="btn-group">
                                  <a class="btn btn-white"
                                    ><i class="fa-solid fa-angle-left"></i
                                  ></a>
                                  <a class="btn btn-white"
                                    ><i class="fa-solid fa-angle-right"></i
                                  ></a>
                                </div>
                              </div>
                              <div class="text-end">
                                <span
                                  class="text-muted d-none d-md-inline-block"
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
                                  <th colspan="6" class="ps-2">
                                    <input
                                      type="checkbox"
                                      class="checkbox-all"
                                    />
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
                                  <td><i class="fa-solid fa-paperclip"></i></td>
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
                                    Important account security update from
                                    Envato
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
                                  <td><i class="fa-solid fa-paperclip"></i></td>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-details"
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

          <div
            class="modal custom-modal fade modal-padding"
            id="create_call"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border align-items-center justify-content-between p-0"
                >
                  <h5 class="modal-title">Create Call Log</h5>
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-details"
                  >
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Status <span class="text-danger"> *</span></label
                          >
                          <select class="select">
                            <option>Busy</option>
                            <option>Unavailable</option>
                            <option>No Answer</option>
                            <option>Wrong Number</option>
                            <option>Left Voice Message</option>
                            <option>Moving Forward</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label"
                            >Followup Date
                            <span class="text-danger"> *</span></label
                          >
                          <input
                            class="form-control datetimepicker"
                            type="text"
                          />
                        </div>
                      </div>
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
                      <label class="custom_check check-box mb-0">
                        <input type="checkbox" />
                        <span class="checkmark"></span> Create a Follow up task
                      </label>
                    </div>
                    <div class="col-lg-12 text-end form-wizard-button">
                      <button class="button btn-lights reset-btn" type="reset">
                        Reset
                      </button>
                      <button class="btn btn-primary" type="submit">
                        Save Call
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade modal-padding"
            id="create_email"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border align-items-center justify-content-between p-0"
                >
                  <h5 class="modal-title">Connect Account</h5>
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
                  <div class="input-block mb-3">
                    <label class="col-form-label"
                      >Account type <span class="text-danger"> *</span></label
                    >
                    <select class="select">
                      <option>Gmail</option>
                      <option>Outlook</option>
                      <option>Imap</option>
                    </select>
                  </div>
                  <div class="input-block mb-3">
                    <h5 class="mb-3">Sync emails from</h5>
                    <div class="sync-radio">
                      <div class="radio-item">
                        <input
                          type="radio"
                          class="status-radio"
                          id="test1"
                          name="radio-group"
                          checked
                        />
                        <label for="test1">Now</label>
                      </div>
                      <div class="radio-item">
                        <input
                          type="radio"
                          class="status-radio"
                          id="test2"
                          name="radio-group"
                        />
                        <label for="test2">1 Month Ago</label>
                      </div>
                      <div class="radio-item">
                        <input
                          type="radio"
                          class="status-radio"
                          id="test3"
                          name="radio-group"
                        />
                        <label for="test3">3 Month Ago</label>
                      </div>
                      <div class="radio-item">
                        <input
                          type="radio"
                          class="status-radio"
                          id="test4"
                          name="radio-group"
                        />
                        <label for="test4">6 Month Ago</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 text-end form-wizard-button">
                    <button
                      class="button btn-lights reset-btn"
                      data-bs-dismiss="modal"
                      type="reset"
                    >
                      Reset
                    </button>
                    <button
                      class="btn btn-primary wizard-next-btn"
                      data-bs-target="#success_mail"
                      data-bs-toggle="modal"
                      data-bs-dismiss="modal"
                      type="button"
                    >
                      Connect Account
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="add_contact"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Add New Contact</h5>
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-grid"
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
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >First Name
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Last Name
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Job Title
                                  <span class="text-danger"> *</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Company Name
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>NovaWaveLLC</option>
                                  <option>BlueSky Industries</option>
                                  <option>SilverHawk</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 1<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 2<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label">Fax </label>
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                                  >Date of birth
                                  <span class="text-danger">*</span></label
                                >
                                <input class="form-control" type="text" />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-6 col-md-6">
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
                            <div class="col-lg-6 col-md-6">
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
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Comments<span class="text-danger"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-grid"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-grid"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-grid"
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
                                id="testact"
                                name="radio-group"
                                checked
                              />
                              <label for="testact">Active</label>
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
                              Save Contact
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

          <div class="modal custom-modal fade" id="success_mail" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="success-message text-center">
                    <div class="success-popup-icon">
                      <i class="la la-envelope-open"></i>
                    </div>
                    <h3>Email Connected Successfully!!!</h3>
                    <p>
                      Email Account is configured with “<a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="ddb8a5bcb0adb1b89db8a5bcb0adb1b8f3beb2b0"
                        >[email&#160;protected]</a
                      >”. Now you can access email.
                    </p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a href="deals-details.html" class="btn btn-primary"
                        >Go to email</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="new_file"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Create New File</h5>
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
                  <div class="add-info-fieldset">
                    <div class="add-details-wizard">
                      <ul class="progress-bar-wizard">
                        <li class="active">
                          <span><i class="la la-file"></i></span>
                          <div class="multi-step-info">
                            <h6>Basic Info</h6>
                          </div>
                        </li>
                        <li>
                          <span><i class="la la-plus-circle"></i></span>
                          <div class="multi-step-info">
                            <h6>Add Recipient</h6>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <fieldset id="first-field-file">
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-details"
                      >
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Choose Deal
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Collins</option>
                                  <option>Wisozk</option>
                                  <option>Walter</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Document Type
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>Contract</option>
                                  <option>Proposal</option>
                                  <option>Quote</option>
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
                                  <option>Admin</option>
                                  <option>Jackson Daniel</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Title
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Enter Name"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Locale
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
                                  <option>Select</option>
                                  <option>en</option>
                                  <option>es</option>
                                  <option>ru</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="signature-wrap">
                                <h4>Signature</h4>
                                <ul class="nav sign-item">
                                  <li class="nav-item">
                                    <span
                                      class="mb-0"
                                      data-bs-toggle="tab"
                                      data-bs-target="#nosign"
                                    >
                                      <input
                                        type="radio"
                                        class="status-radio"
                                        id="sign1"
                                        name="email"
                                      />
                                      <label for="sign1"
                                        ><span class="sign-title"
                                          >No Signature</span
                                        >This document does not require a
                                        signature before acceptance.</label
                                      >
                                    </span>
                                  </li>
                                  <li class="nav-item">
                                    <span
                                      class="active mb-0"
                                      data-bs-toggle="tab"
                                      data-bs-target="#use-esign"
                                    >
                                      <input
                                        type="radio"
                                        class="status-radio"
                                        id="sign2"
                                        name="email"
                                        checked
                                      />
                                      <label for="sign2"
                                        ><span class="sign-title"
                                          >Use e-signature</span
                                        >This document require e-signature
                                        before acceptance.</label
                                      >
                                    </span>
                                  </li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane fade" id="nosign"></div>
                                  <div
                                    class="tab-pane show active"
                                    id="use-esign"
                                  >
                                    <div class="input-block mb-0">
                                      <label class="col-form-label"
                                        >Document Signers
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                    </div>
                                    <div class="sign-content">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <div class="input-block mb-3">
                                            <input
                                              class="form-control"
                                              type="text"
                                              placeholder="Enter Name"
                                            />
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div
                                            class="d-flex align-items-center"
                                          >
                                            <div
                                              class="input-block float-none mb-3 me-3"
                                            >
                                              <input
                                                class="form-control"
                                                type="text"
                                                placeholder="Email Address"
                                              />
                                            </div>
                                            <div class="input-btn mb-3">
                                              <a
                                                href="javascript:void(0);"
                                                class="add-sign"
                                                ><i
                                                  class="las la-plus-circle"
                                                ></i
                                              ></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Content
                                  <span class="text-danger"> *</span></label
                                >
                                <textarea
                                  class="form-control"
                                  rows="3"
                                  placeholder="Add Content"
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
                                Next
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </fieldset>
                    <fieldset>
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-details"
                      >
                        <div class="contact-input-set">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="signature-wrap">
                                <h4 class="mb-2">
                                  Send the document to following signers
                                </h4>
                                <p>
                                  In order to send the document to the signers
                                </p>
                                <div class="input-block mb-0">
                                  <label class="col-form-label"
                                    >Recipients (Additional recipients)</label
                                  >
                                </div>
                                <div class="sign-content">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="input-block mb-3">
                                        <input
                                          class="form-control"
                                          type="text"
                                          placeholder="Enter Name"
                                        />
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="d-flex align-items-center">
                                        <div
                                          class="input-block float-none mb-3 me-3"
                                        >
                                          <input
                                            class="form-control"
                                            type="text"
                                            placeholder="Email Address"
                                          />
                                        </div>
                                        <div class="input-btn mb-3">
                                          <a
                                            href="javascript:void(0);"
                                            class="add-sign"
                                            ><i class="las la-plus-circle"></i
                                          ></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Message Subject
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  placeholder="Enter Subject"
                                />
                              </div>
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Message Text
                                  <span class="text-danger"> *</span></label
                                >
                                <textarea
                                  class="form-control"
                                  rows="3"
                                  placeholder="Your document is ready"
                                ></textarea>
                              </div>
                              <button class="btn btn-lighter mb-3">
                                Send Now
                              </button>
                              <div class="send-success">
                                <p>
                                  <i class="las la-check-circle"></i> Document
                                  Sent successfully to the Selected Recipients
                                </p>
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
                                data-bs-dismiss="modal"
                              >
                                Save & Next
                              </button>
                            </div>
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
            class="modal custom-modal fade"
            id="delete_contact"
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
                      <a href="deals-details.html" class="btn btn-primary"
                        >Okay</a
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
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/deals-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:25:08 GMT -->
</html>
