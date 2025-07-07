<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/tasks by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:45 GMT -->
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
    <title>Tasks - HRMS admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/ckeditor.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  </head>
  <body>
    <div class="main-wrapper">
     

    
@include('layouts.header')
@include('layouts.sidebar')

 

      <div class="page-wrapper">
        <div class="chat-main-row">
          <div class="chat-main-wrapper">
            <div class="col-lg-7 message-view task-view task-left-sidebar">
              <div class="chat-window">
                <div class="fixed-header">
                  <div class="navbar">
                    <div class="float-start me-auto">
                      <div class="add-task-btn-wrapper">
                        <span class="add-task-btn btn btn-white btn-sm">
                          Add Task
                        </span>
                      </div>
                    </div>
                    <a
                      class="task-chat profile-rightbar float-end"
                      id="task_chat"
                      href="#task_window"
                      ><i class="fa fa fa-comment"></i
                    ></a>
                    <ul class="nav float-end custom-menu">
                      <li class="nav-item dropdown dropdown-action">
                        <a
                          href
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa-solid fa-gear"></i
                        ></a>
                        <div
                          class="dropdown-menu dropdown-menu-end custom-dropdown-menu"
                        >
                          <a class="dropdown-item" href="javascript:void(0)"
                            >Pending Tasks</a
                          >
                          <a class="dropdown-item" href="javascript:void(0)"
                            >Completed Tasks</a
                          >
                          <a class="dropdown-item" href="javascript:void(0)"
                            >All Tasks</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="chat-contents">
                  <div class="chat-content-wrap">
                    <div class="chat-wrap-inner">
                      <div class="chat-box">
                        <div class="task-wrapper">
                          <div class="task-list-container">
                            <div class="task-list-body">
                              <ul id="task-list">
                                <li class="task">
                                  <div class="task-container">
                                    <span class="task-action-btn task-check">
                                      <span
                                        class="action-circle large complete-btn"
                                        title="Mark Complete"
                                      >
                                        <i class="material-icons">check</i>
                                      </span>
                                    </span>
                                    <span
                                      class="task-label"
                                      contenteditable="true"
                                      >Patient appointment booking</span
                                    >
                                    <span
                                      class="task-action-btn task-btn-right"
                                    >
                                      <span
                                        class="action-circle large"
                                        title="Assign"
                                      >
                                        <i class="material-icons">person_add</i>
                                      </span>
                                      <span
                                        class="action-circle large delete-btn"
                                        title="Delete Task"
                                      >
                                        <i class="material-icons">delete</i>
                                      </span>
                                    </span>
                                  </div>
                                </li>
                                <li class="task">
                                  <div class="task-container">
                                    <span class="task-action-btn task-check">
                                      <span
                                        class="action-circle large complete-btn"
                                        title="Mark Complete"
                                      >
                                        <i class="material-icons">check</i>
                                      </span>
                                    </span>
                                    <span
                                      class="task-label"
                                      contenteditable="true"
                                      >Appointment booking with payment
                                      gateway</span
                                    >
                                    <span
                                      class="task-action-btn task-btn-right"
                                    >
                                      <span
                                        class="action-circle large"
                                        title="Assign"
                                      >
                                        <i class="material-icons">person_add</i>
                                      </span>
                                      <span
                                        class="action-circle large delete-btn"
                                        title="Delete Task"
                                      >
                                        <i class="material-icons">delete</i>
                                      </span>
                                    </span>
                                  </div>
                                </li>
                                <li class="completed task">
                                  <div class="task-container">
                                    <span class="task-action-btn task-check">
                                      <span
                                        class="action-circle large complete-btn"
                                        title="Mark Complete"
                                      >
                                        <i class="material-icons">check</i>
                                      </span>
                                    </span>
                                    <span class="task-label"
                                      >Doctor available module</span
                                    >
                                    <span
                                      class="task-action-btn task-btn-right"
                                    >
                                      <span
                                        class="action-circle large"
                                        title="Assign"
                                      >
                                        <i class="material-icons">person_add</i>
                                      </span>
                                      <span
                                        class="action-circle large delete-btn"
                                        title="Delete Task"
                                      >
                                        <i class="material-icons">delete</i>
                                      </span>
                                    </span>
                                  </div>
                                </li>
                                <li class="task">
                                  <div class="task-container">
                                    <span class="task-action-btn task-check">
                                      <span
                                        class="action-circle large complete-btn"
                                        title="Mark Complete"
                                      >
                                        <i class="material-icons">check</i>
                                      </span>
                                    </span>
                                    <span
                                      class="task-label"
                                      contenteditable="true"
                                      >Patient and Doctor video
                                      conferencing</span
                                    >
                                    <span
                                      class="task-action-btn task-btn-right"
                                    >
                                      <span
                                        class="action-circle large"
                                        title="Assign"
                                      >
                                        <i class="material-icons">person_add</i>
                                      </span>
                                      <span
                                        class="action-circle large delete-btn"
                                        title="Delete Task"
                                      >
                                        <i class="material-icons">delete</i>
                                      </span>
                                    </span>
                                  </div>
                                </li>
                                <li class="task">
                                  <div class="task-container">
                                    <span class="task-action-btn task-check">
                                      <span
                                        class="action-circle large complete-btn"
                                        title="Mark Complete"
                                      >
                                        <i class="material-icons">check</i>
                                      </span>
                                    </span>
                                    <span
                                      class="task-label"
                                      contenteditable="true"
                                      >Private chat module</span
                                    >
                                    <span
                                      class="task-action-btn task-btn-right"
                                    >
                                      <span
                                        class="action-circle large"
                                        title="Assign"
                                      >
                                        <i class="material-icons">person_add</i>
                                      </span>
                                      <span
                                        class="action-circle large delete-btn"
                                        title="Delete Task"
                                      >
                                        <i class="material-icons">delete</i>
                                      </span>
                                    </span>
                                  </div>
                                </li>
                                <li class="task">
                                  <div class="task-container">
                                    <span class="task-action-btn task-check">
                                      <span
                                        class="action-circle large complete-btn"
                                        title="Mark Complete"
                                      >
                                        <i class="material-icons">check</i>
                                      </span>
                                    </span>
                                    <span
                                      class="task-label"
                                      contenteditable="true"
                                      >Patient Profile add</span
                                    >
                                    <span
                                      class="task-action-btn task-btn-right"
                                    >
                                      <span
                                        class="action-circle large"
                                        title="Assign"
                                      >
                                        <i class="material-icons">person_add</i>
                                      </span>
                                      <span
                                        class="action-circle large delete-btn"
                                        title="Delete Task"
                                      >
                                        <i class="material-icons">delete</i>
                                      </span>
                                    </span>
                                  </div>
                                </li>
                              </ul>
                            </div>
                            <div class="task-list-footer">
                              <div class="new-task-wrapper">
                                <textarea
                                  id="new-task"
                                  placeholder="Enter new task here. . ."
                                ></textarea>
                                <span class="error-message hidden"
                                  >You need to enter a task first</span
                                >
                                <span class="add-new-task-btn btn" id="add-task"
                                  >Add Task</span
                                >
                                <span class="btn" id="close-task-panel"
                                  >Close</span
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="notification-popup hide">
                          <p>
                            <span class="task"></span>
                            <span class="notification-text"></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col-lg-5 message-view task-chat-view task-right-sidebar"
              id="task_window"
            >
              <div class="chat-window">
                <div class="fixed-header">
                  <div class="navbar">
                    <div class="task-assign">
                      <a
                        class="task-complete-btn"
                        id="task_complete"
                        href="javascript:void(0);"
                      >
                        <i class="material-icons">check</i> Mark Complete
                      </a>
                    </div>
                    <ul class="nav float-end custom-menu">
                      <li class="dropdown dropdown-action">
                        <a
                          href
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="material-icons">more_vert</i></a
                        >
                        <div
                          class="dropdown-menu dropdown-menu-end custom-dropdown-menu"
                        >
                          <a class="dropdown-item" href="javascript:void(0)"
                            >Delete Task</a
                          >
                          <a class="dropdown-item" href="javascript:void(0)"
                            >Settings</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="chat-contents task-chat-contents">
                  <div class="chat-content-wrap">
                    <div class="chat-wrap-inner">
                      <div class="chat-box">
                        <div class="chats">
                          <h4>Hospital Administration Phase 1</h4>
                          <div class="task-header">
                            <div class="assignee-info">
                              <a
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#assignee"
                              >
                                <div class="avatar">
                                  <img
                                    src="assets/img/profiles/avatar-02.jpg"
                                    alt="User Image"
                                  />
                                </div>
                                <div class="assigned-info">
                                  <div class="task-head-title">Assigned To</div>
                                  <div class="task-assignee">John Doe</div>
                                </div>
                              </a>
                              <span class="remove-icon">
                                <i class="fa fa-close"></i>
                              </span>
                            </div>
                            <div class="task-due-date">
                              <a
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#assignee"
                              >
                                <div class="due-icon">
                                  <span>
                                    <i class="material-icons">date_range</i>
                                  </span>
                                </div>
                                <div class="due-info">
                                  <div class="task-head-title">Due Date</div>
                                  <div class="due-date">Mar 26, 2019</div>
                                </div>
                              </a>
                              <span class="remove-icon">
                                <i class="fa fa-close"></i>
                              </span>
                            </div>
                          </div>
                          <hr class="task-line" />
                          <div class="task-desc">
                            <div class="task-desc-icon">
                              <i class="material-icons">subject</i>
                            </div>
                            <div class="task-textarea">
                              <textarea
                                class="form-control"
                                placeholder="Description"
                              ></textarea>
                            </div>
                          </div>
                          <hr class="task-line" />
                          <div class="task-information">
                            <span class="task-info-line"
                              ><a class="task-user" href="#">Lesley Grauer</a>
                              <span class="task-info-subject"
                                >created task</span
                              ></span
                            >
                            <div class="task-time">Jan 20, 2019</div>
                          </div>
                          <div class="task-information">
                            <span class="task-info-line"
                              ><a class="task-user" href="#">Lesley Grauer</a>
                              <span class="task-info-subject"
                                >added to Hospital Administration</span
                              ></span
                            >
                            <div class="task-time">Jan 20, 2019</div>
                          </div>
                          <div class="task-information">
                            <span class="task-info-line"
                              ><a class="task-user" href="#">Lesley Grauer</a>
                              <span class="task-info-subject"
                                >assigned to John Doe</span
                              ></span
                            >
                            <div class="task-time">Jan 20, 2019</div>
                          </div>
                          <hr class="task-line" />
                          <div class="task-information">
                            <span class="task-info-line"
                              ><a class="task-user" href="#">John Doe</a>
                              <span class="task-info-subject"
                                >changed the due date to Sep 28</span
                              >
                            </span>
                            <div class="task-time">9:09pm</div>
                          </div>
                          <div class="task-information">
                            <span class="task-info-line"
                              ><a class="task-user" href="#">John Doe</a>
                              <span class="task-info-subject"
                                >assigned to you</span
                              ></span
                            >
                            <div class="task-time">9:10pm</div>
                          </div>
                          <div class="chat chat-left">
                            <div class="chat-avatar">
                              <a href="profile.html" class="avatar">
                                <img
                                  src="assets/img/profiles/avatar-02.jpg"
                                  alt="User Image"
                                />
                              </a>
                            </div>
                            <div class="chat-body">
                              <div class="chat-bubble">
                                <div class="chat-content">
                                  <span class="task-chat-user">John Doe</span>
                                  <span class="chat-time">8:35 am</span>
                                  <p>I'm just looking around.</p>
                                  <p>
                                    Will you tell me something about yourself?
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="completed-task-msg">
                            <span class="task-success"
                              ><a href="#">John Doe</a> completed this
                              task.</span
                            >
                            <span class="task-time">Today at 9:27am</span>
                          </div>
                          <div class="chat chat-left">
                            <div class="chat-avatar">
                              <a href="profile.html" class="avatar">
                                <img
                                  src="assets/img/profiles/avatar-02.jpg"
                                  alt="User Image"
                                />
                              </a>
                            </div>
                            <div class="chat-body">
                              <div class="chat-bubble">
                                <div class="chat-content">
                                  <span class="task-chat-user">John Doe</span>
                                  <span class="file-attached"
                                    >attached 3 files
                                    <i class="fa-solid fa-paperclip"></i
                                  ></span>
                                  <span class="chat-time"
                                    >Feb 17, 2019 at 4:32am</span
                                  >
                                  <ul class="attach-list">
                                    <li>
                                      <i class="fa fa-file"></i>
                                      <a href="#">project_document.avi</a>
                                    </li>
                                    <li>
                                      <i class="fa fa-file"></i>
                                      <a href="#">video_conferencing.psd</a>
                                    </li>
                                    <li>
                                      <i class="fa fa-file"></i>
                                      <a href="#">landing_page.psd</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="chat chat-left">
                            <div class="chat-avatar">
                              <a href="profile.html" class="avatar">
                                <img
                                  src="assets/img/profiles/avatar-16.jpg"
                                  alt="User Image"
                                />
                              </a>
                            </div>
                            <div class="chat-body">
                              <div class="chat-bubble">
                                <div class="chat-content">
                                  <span class="task-chat-user"
                                    >Jeffery Lalor</span
                                  >
                                  <span class="file-attached"
                                    >attached file
                                    <i class="fa-solid fa-paperclip"></i
                                  ></span>
                                  <span class="chat-time"
                                    >Yesterday at 9:16pm</span
                                  >
                                  <ul class="attach-list">
                                    <li class="pdf-file">
                                      <i class="fa-regular fa-file-pdf"></i>
                                      <a href="#">Document_2016.pdf</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="chat chat-left">
                            <div class="chat-avatar">
                              <a href="profile.html" class="avatar">
                                <img
                                  src="assets/img/profiles/avatar-16.jpg"
                                  alt="User Image"
                                />
                              </a>
                            </div>
                            <div class="chat-body">
                              <div class="chat-bubble">
                                <div class="chat-content">
                                  <span class="task-chat-user"
                                    >Jeffery Lalor</span
                                  >
                                  <span class="file-attached"
                                    >attached file
                                    <i class="fa-solid fa-paperclip"></i
                                  ></span>
                                  <span class="chat-time"
                                    >Today at 12:42pm</span
                                  >
                                  <ul class="attach-list">
                                    <li class="img-file">
                                      <div class="attach-img-download">
                                        <a href="#">avatar-1.jpg</a>
                                      </div>
                                      <div class="task-attach-img">
                                        <img
                                          src="assets/img/user.jpg"
                                          alt="User Image"
                                        />
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="task-information">
                            <span class="task-info-line">
                              <a class="task-user" href="#">John Doe</a>
                              <span class="task-info-subject"
                                >marked task as incomplete</span
                              >
                            </span>
                            <div class="task-time">1:16pm</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="chat-footer">
                  <div class="message-bar">
                    <div class="message-inner">
                      <a class="link attach-icon" href="#"
                        ><img
                          src="assets/img/attachment.png"
                          alt="Attachment Icon"
                      /></a>
                      <div class="message-area">
                        <div class="input-group">
                          <textarea
                            class="form-control"
                            placeholder="Type message..."
                          ></textarea>
                          <button class="btn btn-primary" type="button">
                            <i class="fa-solid fa-paper-plane"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="project-members task-followers">
                    <span class="followers-title">Followers</span>
                    <a
                      class="avatar"
                      href="#"
                      data-bs-toggle="tooltip"
                      title="Jeffery Lalor"
                    >
                      <img
                        src="assets/img/profiles/avatar-16.jpg"
                        alt="User Image"
                      />
                    </a>
                    <a
                      class="avatar"
                      href="#"
                      data-bs-toggle="tooltip"
                      title="Richard Miles"
                    >
                      <img
                        src="assets/img/profiles/avatar-09.jpg"
                        alt="User Image"
                      />
                    </a>
                    <a
                      class="avatar"
                      href="#"
                      data-bs-toggle="tooltip"
                      title="John Smith"
                    >
                      <img
                        src="assets/img/profiles/avatar-10.jpg"
                        alt="User Image"
                      />
                    </a>
                    <a
                      class="avatar"
                      href="#"
                      data-bs-toggle="tooltip"
                      title="Mike Litorus"
                    >
                      <img
                        src="assets/img/profiles/avatar-05.jpg"
                        alt="User Image"
                      />
                    </a>
                    <a
                      href="#"
                      class="followers-add"
                      data-bs-toggle="modal"
                      data-bs-target="#task_followers"
                      ><i class="material-icons">add</i></a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div
              id="create_project"
              class="modal custom-modal fade"
              role="dialog"
            >
              <div
                class="modal-dialog modal-dialog-centered modal-lg"
                role="document"
              >
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
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
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Project Name</label>
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Client</label>
                            <select class="select">
                              <option>Global Technologies</option>
                              <option>Delta Infotech</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Start Date</label>
                            <div class="cal-icon">
                              <input
                                class="form-control datetimepicker"
                                type="text"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">End Date</label>
                            <div class="cal-icon">
                              <input
                                class="form-control datetimepicker"
                                type="text"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Rate</label>
                            <input
                              placeholder="$50"
                              class="form-control"
                              type="text"
                            />
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="input-block mb-3">
                            <label class="col-form-label">&nbsp;</label>
                            <select class="select">
                              <option>Hourly</option>
                              <option>Fixed</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Priority</label>
                            <select class="select">
                              <option>High</option>
                              <option>Medium</option>
                              <option>Low</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label"
                              >Add Project Leader</label
                            >
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Team Leader</label>
                            <div class="project-members">
                              <a
                                class="avatar"
                                href="#"
                                data-bs-toggle="tooltip"
                                title="Jeffery Lalor"
                              >
                                <img
                                  src="assets/img/profiles/avatar-16.jpg"
                                  alt="User Image"
                                />
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Add Team</label>
                            <input class="form-control" type="text" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="input-block mb-3">
                            <label class="col-form-label">Team Members</label>
                            <div class="project-members">
                              <a
                                class="avatar"
                                href="#"
                                data-bs-toggle="tooltip"
                                title="John Doe"
                              >
                                <img
                                  src="assets/img/profiles/avatar-02.jpg"
                                  alt="User Image"
                                />
                              </a>
                              <a
                                class="avatar"
                                href="#"
                                data-bs-toggle="tooltip"
                                title="Richard Miles"
                              >
                                <img
                                  src="assets/img/profiles/avatar-09.jpg"
                                  alt="User Image"
                                />
                              </a>
                              <a
                                class="avatar"
                                href="#"
                                data-bs-toggle="tooltip"
                                title="John Smith"
                              >
                                <img
                                  src="assets/img/profiles/avatar-10.jpg"
                                  alt="User Image"
                                />
                              </a>
                              <a
                                class="avatar"
                                href="#"
                                data-bs-toggle="tooltip"
                                title="Mike Litorus"
                              >
                                <img
                                  src="assets/img/profiles/avatar-05.jpg"
                                  alt="User Image"
                                />
                              </a>
                              <span class="all-team">+2</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="input-block mb-3">
                        <label class="col-form-label">Description</label>
                        <div id="editor"></div>
                      </div>
                      <div class="input-block mb-3">
                        <label class="col-form-label">Upload Files</label>
                        <input class="form-control" type="file" />
                      </div>
                      <div class="submit-section">
                        <button class="btn btn-primary submit-btn">
                          Submit
                        </button>
                      </div>
                    </form>
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
                              <span class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-09.jpg"
                                  alt="User Image"
                              /></span>
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
                              <span class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-10.jpg"
                                  alt="User Image"
                              /></span>
                              <div
                                class="media-body align-self-center text-nowrap"
                              >
                                <div class="user-name">John Smith</div>
                                <span class="designation"
                                  >Android Developer</span
                                >
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="chat-block d-flex">
                              <span class="avatar">
                                <img
                                  src="assets/img/profiles/avatar-16.jpg"
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
                              <span class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-16.jpg"
                                  alt="User Image"
                              /></span>
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
                              <span class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-08.jpg"
                                  alt="User Image"
                              /></span>
                              <div class="media-body media-middle text-nowrap">
                                <div class="user-name">Catherine Manseau</div>
                                <span class="designation"
                                  >Android Developer</span
                                >
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="chat-block d-flex">
                              <span class="avatar"
                                ><img
                                  src="assets/img/profiles/avatar-26.jpg"
                                  alt="User Image"
                              /></span>
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
<script src="{{ asset('assets/js/task.js') }}"></script>
<script src="{{ asset('assets/js/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script 
  src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" 
  data-cf-settings="c723b7e11240b7e0c206294b-|49" 
  defer>
</script>



  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/tasks by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:46 GMT -->
</html>
