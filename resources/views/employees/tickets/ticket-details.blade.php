<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/ticket-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:02 GMT -->
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
    <title>Tickets - HRMS admin template</title>

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />

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
                <h3 class="page-title mb-0">Ticket Detail</h3>
              </div>
            </div>
          </div>

          <hr />
          <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="ticket-detail-head">
                <div class="row">
                  <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                      <span class="ticket-detail-icon"
                        ><i class="la la-stop-circle"></i
                      ></span>
                      <div class="detail-info">
                        <h6>Status</h6>
                        <span class="badge badge-soft-warning"
                          >In Progress</span
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                      <span class="ticket-detail-icon bg-danger-lights"
                        ><i class="la la-user"></i
                      ></span>
                      <div class="detail-info info-two">
                        <h6>Created By</h6>
                        <span>John Doe</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                      <span class="ticket-detail-icon bg-warning-lights"
                        ><i class="la la-calendar"></i
                      ></span>
                      <div class="detail-info info-two">
                        <h6>Created Date</h6>
                        <span>08 Feb 2024</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-3 col-md-6">
                    <div class="ticket-head-card">
                      <span class="ticket-detail-icon bg-purple-lights"
                        ><i class="la la-info-circle"></i
                      ></span>
                      <div class="detail-info">
                        <h6>Priority</h6>
                        <span class="badge badge-soft-danger">High</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ticket-purpose">
                <h4>Laptop Issue</h4>
                <p>
                  For the past week, my laptop has been experiencing
                  intermittent freezing issues. The freezes occur randomly,
                  approximately 3-4 times a day, and last about 30-60 seconds
                  each time. During these freezes, the cursor becomes
                  unresponsive, and I am unable to click on anything or use
                  keyboard shortcuts. The issue usually resolves itself, but it
                  significantly disrupts my work.
                </p>
                <ul>
                  <li>
                    I first noticed the problem on February 1, 2024, while using
                    Google Meet for a video conference. Since then, the issue
                    has occurred during various tasks, including browsing with
                    Chrome, using Microsoft Office applications, and even when
                    the laptop is idle.
                  </li>
                  <li>
                    Error messages: No specific error messages have appeared,
                    but the Task Manager (when accessible) shows a spike in CPU
                    usage to 100% during these freezes.
                  </li>
                </ul>
              </div>
              <div class="attached-files-info">
                <div class="row">
                  <div class="col-xxl-6">
                    <div class="attached-files">
                      <ul>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-file-pdf"></i
                            ></span>
                            <p>file0702202413.pdf</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-file-pdf"></i
                            ></span>
                            <p>file0702202414.pdf</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-file-alt"></i
                            ></span>
                            <p>file0702202418.doc</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-file-alt"></i
                            ></span>
                            <p>file0702202419.doc</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-file-alt"></i
                            ></span>
                            <p>file0702202420.doc</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xxl-6">
                    <div class="attached-files media-attached-files">
                      <ul>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-image"></i
                            ></span>
                            <p>Image0702202411.jpg</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-image"></i
                            ></span>
                            <p>Image0702202412.jpg</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-file-video"></i
                            ></span>
                            <p>Video0702202415.mp4</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-image"></i
                            ></span>
                            <p>Image0702202420.png</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <span class="file-icon"
                              ><i class="la la-image"></i
                            ></span>
                            <p>Image0702202421.png</p>
                          </div>
                          <div class="file-download">
                            <a href="#"
                              ><i class="la la-download"></i>Download</a
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 theiaStickySidebar">
              <div class="ticket-chat">
                <div class="ticket-chat-head">
                  <h4>Ticket Chat</h4>
                  <div class="chat-post-box">
                    <form
                      action="https://smarthr.dreamstechnologies.com/laravel/template/public/ticket-details"
                    >
                      <textarea class="form-control" rows="4">Post</textarea>
                      <div
                        class="files-attached d-flex justify-content-between align-items-center"
                      >
                        <div class="post-files">
                          <a href="javascript:void(0);"
                            ><i class="la la-image"></i
                          ></a>
                          <a href="javascript:void(0);"
                            ><i class="la la-file-video"></i
                          ></a>
                        </div>
                        <button type="submit">Sent</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="ticket-chat-body">
                  <ul class="created-tickets-info">
                    <li>
                      <div class="ticket-created-user">
                        <span class="avatar"
                          ><img
                            src="assets/img/avatar/avatar-27.jpg"
                            alt="User Image"
                        /></span>
                        <div class="user-name">
                          <h5><span>John Doe</span> posted a status</h5>
                          <span>5 hours ago</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="ticket-created-info">
                        <h6>Impact on Work</h6>
                        <p>
                          This issue disrupts meetings, delays task completion,
                          and affects my overall productivity.
                        </p>
                        <a href="#" class="comment-text"
                          ><i class="la la-comments me-2"></i>Comments (2)</a
                        >
                      </div>
                    </li>
                    <li>
                      <div class="ticket-created-user">
                        <span class="avatar"
                          ><img
                            src="assets/img/avatar/avatar-1.jpg"
                            alt="User Image"
                        /></span>
                        <div class="user-name">
                          <h5><span>Rebecca Velazquez</span></h5>
                          <span>2 hours ago</span>
                        </div>
                      </div>
                      <p class="details-text">
                        Check the System and Application logs in the Event
                        Viewer for warnings or errors that coincide with the
                        times the freezes occur.
                      </p>
                    </li>
                    <li>
                      <div class="ticket-created-user">
                        <span class="avatar"
                          ><img
                            src="assets/img/avatar/avatar-28.jpg"
                            alt="User Image"
                        /></span>
                        <div class="user-name">
                          <h5><span>Rahul Daviz</span></h5>
                          <span>3 hours ago</span>
                        </div>
                      </div>
                      <p class="details-text">
                        Confirm that basic troubleshooting steps have been
                        correctly executed (restarts, updates, antivirus scans).
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="ticket-chat-footer">
                  <form
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/ticket-details"
                  >
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <input type="text" class="form-control" />
                      <button type="submit">
                        <i class="la la-arrow-right"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
            <div
              class="modal-dialog modal-dialog-centered modal-lg"
              role="document"
            >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Ticket</h5>
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
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Ticket Subject</label>
                          <input
                            class="form-control"
                            type="text"
                            value="Laptop Issue"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Ticket Id</label>
                          <input
                            class="form-control"
                            type="text"
                            readonly
                            value="TKT-0001"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Assign Staff</label>
                          <select class="select">
                            <option>-</option>
                            <option selected>Mike Litorus</option>
                            <option>John Smith</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Client</label>
                          <select class="select">
                            <option>-</option>
                            <option>Delta Infotech</option>
                            <option selected>International Software Inc</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Priority</label>
                          <select class="select">
                            <option>High</option>
                            <option selected>Medium</option>
                            <option>Low</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">CC</label>
                          <input class="form-control" type="text" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Assign</label>
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Ticket Assignee</label>
                          <div class="project-members">
                            <a
                              title="John Smith"
                              data-bs-toggle="tooltip"
                              href="#"
                            >
                              <img
                                src="assets/img/profiles/avatar-10.jpg"
                                alt="User Image"
                              />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Add Followers</label>
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Ticket Followers</label>
                          <div class="project-members">
                            <a
                              title="Richard Miles"
                              data-bs-toggle="tooltip"
                              href="#"
                              class="avatar"
                            >
                              <img
                                src="assets/img/profiles/avatar-09.jpg"
                                alt="User Image"
                              />
                            </a>
                            <a
                              title="John Smith"
                              data-bs-toggle="tooltip"
                              href="#"
                              class="avatar"
                            >
                              <img
                                src="assets/img/profiles/avatar-10.jpg"
                                alt="User Image"
                              />
                            </a>
                            <a
                              title="Mike Litorus"
                              data-bs-toggle="tooltip"
                              href="#"
                              class="avatar"
                            >
                              <img
                                src="assets/img/profiles/avatar-05.jpg"
                                alt="User Image"
                              />
                            </a>
                            <a
                              title="Wilmer Deluna"
                              data-bs-toggle="tooltip"
                              href="#"
                              class="avatar"
                            >
                              <img
                                src="assets/img/profiles/avatar-11.jpg"
                                alt="User Image"
                              />
                            </a>
                            <span class="all-team">+2</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-block mb-3">
                          <label class="col-form-label">Description</label>
                          <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="input-block mb-3">
                          <label class="col-form-label">Upload Files</label>
                          <input class="form-control" type="file" />
                        </div>
                      </div>
                    </div>
                    <div class="submit-section">
                      <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal custom-modal fade" id="delete_ticket" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-header">
                    <h3>Delete Ticket</h3>
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

          <div id="assignee" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Assign to this task</h5>
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
                  <div class="input-group m-b-30">
                    <input
                      placeholder="Search to add"
                      class="form-control search-input"
                      type="text"
                    />
                    <button class="btn btn-primary">Search</button>
                  </div>
                  <div>
                    <ul class="chat-user-list">
                      <li>
                        <a href="#">
                          <div class="chat-block d-flex">
                            <span class="avatar">
                              <img
                                src="assets/img/profiles/avatar-09.jpg"
                                alt="User Image"
                              />
                            </span>
                            <div
                              class="media-body align-self-center text-nowrap"
                            >
                              <div class="user-name">Richard Miles</div>
                              <span class="designation">Web Developer</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="chat-block d-flex">
                            <span class="avatar">
                              <img
                                src="assets/img/profiles/avatar-10.jpg"
                                alt="User Image"
                              />
                            </span>
                            <div
                              class="media-body align-self-center text-nowrap"
                            >
                              <div class="user-name">John Smith</div>
                              <span class="designation">Android Developer</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="chat-block d-flex">
                            <span class="avatar">
                              <img
                                src="assets/img/profiles/avatar-10.jpg"
                                alt="User Image"
                              />
                            </span>
                            <div
                              class="media-body align-self-center text-nowrap"
                            >
                              <div class="user-name">Jeffery Lalor</div>
                              <span class="designation">Team Leader</span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Assign</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            id="task_followers"
            class="modal custom-modal fade"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add followers to this task</h5>
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
                  <div class="input-group m-b-30">
                    <input
                      placeholder="Search to add"
                      class="form-control search-input"
                      type="text"
                    />
                    <button class="btn btn-primary">Search</button>
                  </div>
                  <div>
                    <ul class="chat-user-list">
                      <li>
                        <a href="#">
                          <div class="chat-block d-flex">
                            <span class="avatar">
                              <img
                                src="assets/img/profiles/avatar-10.jpg"
                                alt="User Image"
                              />
                            </span>
                            <div class="media-body media-middle text-nowrap">
                              <div class="user-name">Jeffery Lalor</div>
                              <span class="designation">Team Leader</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="chat-block d-flex">
                            <span class="avatar">
                              <img
                                src="assets/img/profiles/avatar-08.jpg"
                                alt="User Image"
                              />
                            </span>
                            <div class="media-body media-middle text-nowrap">
                              <div class="user-name">Catherine Manseau</div>
                              <span class="designation">Android Developer</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="chat-block d-flex">
                            <span class="avatar">
                              <img
                                src="assets/img/profiles/avatar-11.jpg"
                                alt="User Image"
                              />
                            </span>
                            <div class="media-body media-middle text-nowrap">
                              <div class="user-name">Wilmer Deluna</div>
                              <span class="designation">Team Leader</span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="submit-section">
                    <button class="btn btn-primary submit-btn">
                      Add to Follow
                    </button>
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

<script src="{{ asset('assets/js/feather.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/greedynav.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

{{-- Cloudflare Rocket Loader (leave as-is if needed) --}}
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="f4ad98691815a65bb261a5a3-|49" defer></script>

  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/ticket-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:04 GMT -->
</html>
