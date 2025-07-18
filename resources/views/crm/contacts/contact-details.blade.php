<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
>
  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/contact-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:24:47 GMT -->
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
    <title>Contacts - HRMS admin template</title>

    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.png"
    />
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />

<!-- UI Plugins -->
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />

<!-- Custom Style -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

  
  </head>
  <body>
    <div class="main-wrapper">

      @include('layouts.header')
      @include('layouts.sidebar')
      {{-- <div class="header">
        <div class="header-left">
          <a href="{{route('admin-dashboard')}}" class="logo">
            <img src="assets/img/logo.svg" alt="Logo" />
          </a>
          <a href="{{route('admin-dashboard')}}" class="logo collapse-logo">
            <img src="assets/img/collapse-logo.svg" alt="Logo" />
          </a>
          <a href="{{route('admin-dashboard')}}" class="logo2">
            <img src="assets/img/logo2.png" width="40" height="40" alt="Logo" />
          </a>
        </div>

        <a id="toggle_btn" href="javascript:void(0);">
          <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </a>

        <div class="page-title-box">
          <h3>Winngoo CRM</h3>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar"
          ><i class="fa-solid fa-bars"></i
        ></a>

        <ul class="nav user-menu">
          <li class="nav-item">
            <div class="top-nav-search">
              <a href="javascript:void(0);" class="responsive-search">
                <i class="fa-solid fa-magnifying-glass"></i>
              </a>
              <form
                action="https://smarthr.dreamstechnologies.com/laravel/template/public/search"
              >
                <input
                  class="form-control"
                  type="text"
                  placeholder="Search here"
                />
                <button class="btn" type="submit">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </form>
            </div>
          </li>

          <li class="nav-item dropdown has-arrow flag-nav">
            <a
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              href="#"
              role="button"
            >
              <img src="assets/img/flags/us.png" alt="Flag" height="20" />
              <span>English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/us.png" alt="Flag" height="16" />
                English
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/fr.png" alt="Flag" height="16" />
                French
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/es.png" alt="Flag" height="16" />
                Spanish
              </a>
              <a href="javascript:void(0);" class="dropdown-item">
                <img src="assets/img/flags/de.png" alt="Flag" height="16" />
                German
              </a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <i class="fa-regular fa-bell"></i>
              <span class="badge rounded-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="chat-block d-flex">
                        <span class="avatar flex-shrink-0">
                          <img
                            src="assets/img/profiles/avatar-02.jpg"
                            alt="User Image"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">John Doe</span> added new
                            task
                            <span class="noti-title"
                              >Patient appointment booking</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="chat-block d-flex">
                        <span class="avatar flex-shrink-0">
                          <img
                            src="assets/img/profiles/avatar-03.jpg"
                            alt="User Image"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Tarah Shropshire</span>
                            changed the task name
                            <span class="noti-title"
                              >Appointment booking with payment gateway</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="chat-block d-flex">
                        <span class="avatar flex-shrink-0">
                          <img
                            src="assets/img/profiles/avatar-06.jpg"
                            alt="User Image"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Misty Tison</span> added
                            <span class="noti-title">Domenic Houston</span> and
                            <span class="noti-title">Claire Mapes</span> to
                            project
                            <span class="noti-title"
                              >Doctor available module</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="chat-block d-flex">
                        <span class="avatar flex-shrink-0">
                          <img
                            src="assets/img/profiles/avatar-17.jpg"
                            alt="User Image"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Rolland Webber</span>
                            completed task
                            <span class="noti-title"
                              >Patient and Doctor video conferencing</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="chat-block d-flex">
                        <span class="avatar flex-shrink-0">
                          <img
                            src="assets/img/profiles/avatar-13.jpg"
                            alt="User Image"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Bernardo Galaviz</span>
                            added new task
                            <span class="noti-title">Private chat module</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities.html">View all Notifications</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <i class="fa-regular fa-comment"></i
              ><span class="badge rounded-pill">8</span>
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Messages</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="chat.html">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img
                              src="assets/img/profiles/avatar-09.jpg"
                              alt="User Image"
                            />
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">Richard Miles </span>
                          <span class="message-time">12:28 AM</span>
                          <div class="clearfix"></div>
                          <span class="message-content"
                            >Lorem ipsum dolor sit amet, consectetur
                            adipiscing</span
                          >
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat.html">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img
                              src="assets/img/profiles/avatar-02.jpg"
                              alt="User Image"
                            />
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">John Doe</span>
                          <span class="message-time">6 Mar</span>
                          <div class="clearfix"></div>
                          <span class="message-content"
                            >Lorem ipsum dolor sit amet, consectetur
                            adipiscing</span
                          >
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat.html">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img
                              src="assets/img/profiles/avatar-03.jpg"
                              alt="User Image"
                            />
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author"> Tarah Shropshire </span>
                          <span class="message-time">5 Mar</span>
                          <div class="clearfix"></div>
                          <span class="message-content"
                            >Lorem ipsum dolor sit amet, consectetur
                            adipiscing</span
                          >
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat.html">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img
                              src="assets/img/profiles/avatar-05.jpg"
                              alt="User Image"
                            />
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">Mike Litorus</span>
                          <span class="message-time">3 Mar</span>
                          <div class="clearfix"></div>
                          <span class="message-content"
                            >Lorem ipsum dolor sit amet, consectetur
                            adipiscing</span
                          >
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="chat.html">
                      <div class="list-item">
                        <div class="list-left">
                          <span class="avatar">
                            <img
                              src="assets/img/profiles/avatar-08.jpg"
                              alt="User Image"
                            />
                          </span>
                        </div>
                        <div class="list-body">
                          <span class="message-author">
                            Catherine Manseau
                          </span>
                          <span class="message-time">27 Feb</span>
                          <div class="clearfix"></div>
                          <span class="message-content"
                            >Lorem ipsum dolor sit amet, consectetur
                            adipiscing</span
                          >
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="chat.html">View all Messages</a>
              </div>
            </div>
          </li>

          <li class="nav-item dropdown has-arrow main-drop">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <span class="user-img"
                ><img src="assets/img/avatar/avatar-27.jpg" alt="User Image" />
                <span class="status online"></span
              ></span>
              <span>Admin</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profile.html">My Profile</a>
              <a class="dropdown-item" href="settings.html">Settings</a>
              <a class="dropdown-item" href="index.html">Logout</a>
            </div>
          </li>
        </ul>

        <div class="dropdown mobile-user-menu">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa-solid fa-ellipsis-vertical"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="index.html">Logout</a>
          </div>
        </div>
      </div> --}}

      {{-- <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <nav class="greedys sidebar-horizantal">
              <ul class="list-inline-item list-unstyled links">
                <li class="menu-title">
                  <span>Main</span>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-dashcube"></i> <span> Dashboard</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="{{route('admin-dashboard')}}">Admin Dashboard</a>
                    </li>
                    <li>
                      <a class href="employee-dashboard.html"
                        >Employee Dashboard</a
                      >
                    </li>
                    <li>
                      <a class href="deals-dashboard.html">Deals Dashboard</a>
                    </li>
                    <li>
                      <a class href="leads-dashboard.html">Leads Dashboard</a>
                    </li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-cube"></i> <span> Apps</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="chat.html">Chat</a></li>
                    <li class="submenu">
                      <a href="#"
                        ><span> Calls</span> <span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li><a class href="voice-call.html">Voice Call</a></li>
                        <li><a class href="video-call.html">Video Call</a></li>
                        <li>
                          <a class href="outgoing-call.html">Outgoing Call</a>
                        </li>
                        <li>
                          <a class href="incoming-call.html">Incoming Call</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class href="events.html">Calendar</a></li>
                    <li><a class href="contacts.html">Contacts</a></li>
                    <li><a class href="inbox.html">Email</a></li>
                    <li><a class href="file-manager.html">File Manager</a></li>
                  </ul>
                </li>
                <li class="menu-title">
                  <span>Employees</span>
                </li>
                <li class="submenu">
                  <a href="#" class="noti-dot"
                    ><i class="la la-user"></i> <span> Employees</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="employees.html">All Employees</a></li>
                    <li><a class href="holidays.html">Holidays</a></li>
                    <li>
                      <a class href="leaves.html"
                        >Leaves (Admin)
                        <span class="badge rounded-pill bg-primary float-end"
                          >1</span
                        ></a
                      >
                    </li>
                    <li>
                      <a class href="leaves-employee.html">Leaves (Employee)</a>
                    </li>
                    <li>
                      <a class href="leave-settings.html">Leave Settings</a>
                    </li>
                    <li>
                      <a class href="attendance.html">Attendance (Admin)</a>
                    </li>
                    <li>
                      <a class href="attendance-employee.html"
                        >Attendance (Employee)</a
                      >
                    </li>
                    <li><a class href="departments.html">Departments</a></li>
                    <li><a class href="designations.html">Designations</a></li>
                    <li><a class href="timesheet.html">Timesheet</a></li>
                    <li>
                      <a class href="shift-scheduling.html">Shift & Schedule</a>
                    </li>
                    <li><a class href="overtime.html">Overtime</a></li>
                  </ul>
                </li>
                <li>
                  <a class href="clients.html"
                    ><i class="la la-users"></i> <span>Clients</span></a
                  >
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-rocket"></i> <span> Projects</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="projects.html">Projects</a></li>
                    <li><a class href="tasks.html">Tasks</a></li>
                    <li><a class href="task-board.html">Task Board</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-ticket"></i> <span>Crm</span
                    ><span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li class="active subdrop">
                      <a href="contact-list.html"> Contacts</a>
                    </li>
                    <li class>
                      <a href="companies.html">Companies</a>
                    </li>
                    <li class>
                      <a href="deals.html"> Deals</a>
                    </li>
                    <li class>
                      <a href="leads.html"> Leads </a>
                    </li>
                    <li class>
                      <a href="pipeline.html">Pipeline </a>
                    </li>
                    <li class>
                      <a href="analytics.html">Analytics</a>
                    </li>
                    <li class>
                      <a href="activities.html"> Activities </a>
                    </li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-ticket"></i> <span>Tickets</span
                    ><span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="tickets.html">Tickets</a></li>
                    <li>
                      <a class href="ticket-details.html">Tickets Detail</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-title">
                  <span>HR</span>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-files-o"></i> <span> Sales </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="estimates.html">Estimates</a></li>
                    <li><a class href="invoices.html">Invoices</a></li>
                    <li><a class href="payments.html">Payments</a></li>
                    <li><a class href="expenses.html">Expenses</a></li>
                    <li>
                      <a class href="provident-fund.html">Provident Fund</a>
                    </li>
                    <li><a class href="taxes.html">Taxes</a></li>
                  </ul>
                </li>
              </ul>
              <button class="viewmoremenu">More Menu</button>
              <ul class="hidden-links hidden">
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-files-o"></i> <span> Accounting </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="categories.html">Categories</a></li>
                    <li><a class href="budgets.html">Budgets</a></li>
                    <li>
                      <a class href="budget-expenses.html">Budget Expenses</a>
                    </li>
                    <li>
                      <a class href="budget-revenues.html">Budget Revenues</a>
                    </li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-money"></i> <span> Payroll </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="salary.html"> Employee Salary </a></li>
                    <li><a class href="salary-view.html"> Payslip </a></li>
                    <li>
                      <a class href="payroll-items.html"> Payroll Items </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class href="policies.html"
                    ><i class="la la-file-pdf-o"></i> <span>Policies</span></a
                  >
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-pie-chart"></i> <span> Reports </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="expense-reports.html"> Expense Report </a>
                    </li>
                    <li>
                      <a class href="invoice-reports.html"> Invoice Report </a>
                    </li>
                    <li>
                      <a class href="payments-reports.html">
                        Payments Report
                      </a>
                    </li>
                    <li>
                      <a class href="project-reports.html"> Project Report </a>
                    </li>
                    <li><a class href="task-reports.html"> Task Report </a></li>
                    <li><a class href="user-reports.html"> User Report </a></li>
                    <li>
                      <a class href="employee-reports.html">
                        Employee Report
                      </a>
                    </li>
                    <li>
                      <a class href="payslip-reports.html"> Payslip Report </a>
                    </li>
                    <li>
                      <a class href="attendance-reports.html">
                        Attendance Report
                      </a>
                    </li>
                    <li>
                      <a class href="leave-reports.html"> Leave Report </a>
                    </li>
                    <li>
                      <a class href="daily-reports.html"> Daily Report </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-title">
                  <span>Performance</span>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-graduation-cap"></i>
                    <span> Performance </span> <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="performance-indicator.html">
                        Performance Indicator
                      </a>
                    </li>
                    <li>
                      <a class href="performance.html"> Performance Review </a>
                    </li>
                    <li>
                      <a class href="performance-appraisal.html">
                        Performance Appraisal
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-crosshairs"></i> <span> Goals </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="goal-tracking.html"> Goal List </a></li>
                    <li><a class href="goal-type.html"> Goal Type </a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-edit"></i> <span> Training </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="training.html"> Training List </a></li>
                    <li><a class href="trainers.html"> Trainers</a></li>
                    <li>
                      <a class href="training-type.html"> Training Type </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class href="promotion.html"
                    ><i class="la la-bullhorn"></i> <span>Promotion</span></a
                  >
                </li>
                <li>
                  <a class href="resignation.html"
                    ><i class="la la-external-link-square"></i>
                    <span>Resignation</span></a
                  >
                </li>
                <li>
                  <a class href="termination.html"
                    ><i class="la la-times-circle"></i>
                    <span>Termination</span></a
                  >
                </li>
                <li class="menu-title">
                  <span>Administration</span>
                </li>
                <li>
                  <a class href="assets1.html"
                    ><i class="la la-object-ungroup"></i> <span>Assets</span></a
                  >
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-briefcase"></i> <span> Jobs </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="user-dashboard.html"> User Dasboard </a>
                    </li>
                    <li>
                      <a class href="jobs-dashboard.html"> Jobs Dasboard </a>
                    </li>
                    <li><a class href="jobs.html"> Manage Jobs </a></li>
                    <li>
                      <a class href="manage-resumes.html"> Manage Resumes </a>
                    </li>
                    <li>
                      <a class href="shortlist-candidates.html">
                        Shortlist Candidates
                      </a>
                    </li>
                    <li>
                      <a class href="interview-questions.html">
                        Interview Questions
                      </a>
                    </li>
                    <li>
                      <a class href="offer_approvals.html"> Offer Approvals </a>
                    </li>
                    <li>
                      <a class href="experiance-level.html">
                        Experience Level
                      </a>
                    </li>
                    <li>
                      <a class href="candidates.html"> Candidates List </a>
                    </li>
                    <li>
                      <a class href="schedule-timing.html"> Schedule timing </a>
                    </li>
                    <li>
                      <a class href="apptitude-result.html">
                        Aptitude Results
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class href="knowledgebase.html"
                    ><i class="la la-question"></i>
                    <span>Knowledgebase</span></a
                  >
                </li>
                <li>
                  <a class href="activities.html"
                    ><i class="la la-bell"></i> <span>Activities</span></a
                  >
                </li>
                <li>
                  <a class href="users.html"
                    ><i class="la la-user-plus"></i> <span>Users</span></a
                  >
                </li>
                <li>
                  <a class href="settings.html"
                    ><i class="la la-cog"></i> <span>Settings</span></a
                  >
                </li>
                <li class="menu-title">
                  <span>Pages</span>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-user"></i> <span> Profile </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="profile.html"> Employee Profile </a></li>
                    <li>
                      <a class href="client-profile.html"> Client Profile </a>
                    </li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-key"></i> <span> Authentication </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="index.html"> Login </a></li>
                    <li><a class href="register.html"> Register </a></li>
                    <li>
                      <a class href="forgot-password.html"> Forgot Password </a>
                    </li>
                    <li><a class href="otp.html"> OTP </a></li>
                    <li><a class href="lock-screen.html"> Lock Screen </a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-exclamation-triangle"></i>
                    <span> Error Pages </span> <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="error-404.html">404 Error </a></li>
                    <li><a class href="error-500.html">500 Error </a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-hand-o-up"></i>
                    <span> Subscriptions </span> <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="subscriptions.html">
                        Subscriptions (Admin)
                      </a>
                    </li>
                    <li>
                      <a class href="subscriptions-company.html">
                        Subscriptions (Company)
                      </a>
                    </li>
                    <li>
                      <a class href="subscribed-companies.html">
                        Subscribed Companies</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-columns"></i> <span> Pages </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="search.html"> Search </a></li>
                    <li><a class href="faq.html"> FAQ </a></li>
                    <li><a class href="terms.html"> Terms </a></li>
                    <li>
                      <a class href="privacy-policy.html"> Privacy Policy </a>
                    </li>
                    <li><a class href="blank-page.html"> Blank Page </a></li>
                    <li><a class href="coming-soon.html"> Coming Soon </a></li>
                    <li>
                      <a class href="under-maintenance.html">
                        Under Maintanance
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-title">
                  <span>UI Interface</span>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="fa-brands fa-get-pocket"></i>
                    <span>Base UI</span> <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="ui-alerts.html">Alerts</a></li>
                    <li><a class href="ui-accordion.html">Accordion</a></li>
                    <li><a class href="ui-avatar.html">Avatar</a></li>
                    <li><a class href="ui-badges.html">Badges</a></li>
                    <li><a class href="ui-borders.html">Border</a></li>
                    <li><a class href="ui-buttons.html">Buttons</a></li>
                    <li>
                      <a class href="ui-buttons-group.html">Button Group</a>
                    </li>
                    <li><a class href="ui-breadcrumb.html">Breadcrumb</a></li>
                    <li><a class href="ui-cards.html">Card</a></li>
                    <li><a class href="ui-carousel.html">Carousel</a></li>
                    <li><a class href="ui-colors.html">Colors</a></li>
                    <li><a class href="ui-dropdowns.html">Dropdowns</a></li>
                    <li><a class href="ui-grid.html">Grid</a></li>
                    <li><a class href="ui-images.html">Images</a></li>
                    <li><a class href="ui-lightbox.html">Lightbox</a></li>
                    <li><a class href="ui-media.html">Media</a></li>
                    <li><a class href="ui-modals.html">Modals</a></li>
                    <li><a class href="ui-offcanvas.html">Offcanvas</a></li>
                    <li><a class href="ui-pagination.html">Pagination</a></li>
                    <li><a class href="ui-popovers.html">Popovers</a></li>
                    <li><a class href="ui-progress.html">Progress</a></li>
                    <li>
                      <a class href="ui-placeholders.html">Placeholders</a>
                    </li>
                    <li>
                      <a class href="ui-rangeslider.html">Range Slider</a>
                    </li>
                    <li><a class href="ui-spinner.html">Spinner</a></li>
                    <li>
                      <a class href="ui-sweetalerts.html">Sweet Alerts</a>
                    </li>
                    <li><a class href="ui-nav-tabs.html">Tabs</a></li>
                    <li><a class href="ui-toasts.html">Toasts</a></li>
                    <li><a class href="ui-tooltips.html">Tooltips</a></li>
                    <li><a class href="ui-typography.html">Typography</a></li>
                    <li><a class href="ui-video.html">Video</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-dropbox"></i> <span> Advanced UI </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="ui-ribbon.html">Ribbon</a></li>
                    <li><a class href="ui-clipboard.html">Clipboard</a></li>
                    <li><a class href="ui-drag-drop.html">Drag & Drop</a></li>
                    <li>
                      <a class href="ui-rangeslider.html">Range Slider</a>
                    </li>
                    <li><a class href="ui-rating.html">Rating</a></li>
                    <li><a class href="ui-text-editor.html">Text Editor</a></li>
                    <li><a class href="ui-counter.html">Counter</a></li>
                    <li><a class href="ui-scrollbar.html">Scrollbar</a></li>
                    <li><a class href="ui-stickynote.html">Sticky Note</a></li>
                    <li><a class href="ui-timeline.html">Timeline</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-chart-bar"></i> <span> Charts </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="chart-apex.html">Apex Charts</a></li>
                    <li><a class href="chart-js.html">Chart Js</a></li>
                    <li><a class href="chart-morris.html">Morris Charts</a></li>
                    <li><a class href="chart-flot.html">Flot Charts</a></li>
                    <li><a class href="chart-peity.html">Peity Charts</a></li>
                    <li><a class href="chart-c3.html">C3 Charts</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-icons"></i> <span> Icons </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="icon-fontawesome.html"
                        >Fontawesome Icons</a
                      >
                    </li>
                    <li><a class href="icon-feather.html">Feather Icons</a></li>
                    <li><a class href="icon-ionic.html">Ionic Icons</a></li>
                    <li>
                      <a class href="icon-material.html">Material Icons</a>
                    </li>
                    <li><a class href="icon-pe7.html">Pe7 Icons</a></li>
                    <li>
                      <a class href="icon-simpleline.html">Simpleline Icons</a>
                    </li>
                    <li><a class href="icon-themify.html">Themify Icons</a></li>
                    <li><a class href="icon-weather.html">Weather Icons</a></li>
                    <li><a class href="icon-typicon.html">Typicon Icons</a></li>
                    <li><a class href="icon-flag.html">Flag Icons</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-object-group"></i> <span> Forms </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li>
                      <a class href="form-basic-inputs.html">Basic Inputs </a>
                    </li>
                    <li>
                      <a class href="form-input-groups.html">Input Groups </a>
                    </li>
                    <li>
                      <a class href="form-horizontal.html">Horizontal Form </a>
                    </li>
                    <li>
                      <a class href="form-vertical.html"> Vertical Form </a>
                    </li>
                    <li><a class href="form-mask.html"> Form Mask </a></li>
                    <li>
                      <a class href="form-validation.html"> Form Validation </a>
                    </li>
                    <li><a class href="form-select2.html">Form Select2 </a></li>
                    <li>
                      <a class href="form-fileupload.html">File Upload </a>
                    </li>
                    <li>
                      <a class href="horizontal-timeline.html"
                        >Horizontal Timeline</a
                      >
                    </li>
                    <li><a class href="form-wizard.html">Form Wizard</a></li>
                  </ul>
                </li>
                <li class="submenu">
                  <a href="#"
                    ><i class="la la-table"></i> <span> Tables </span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li><a class href="tables-basic.html">Basic Tables </a></li>
                    <li><a class href="data-tables.html">Data Table </a></li>
                  </ul>
                </li>
                <li class="menu-title">
                  <span>Extras</span>
                </li>
                <li>
                  <a href="#"
                    ><i class="la la-file-text"></i>
                    <span>Documentation</span></a
                  >
                </li>
                <li>
                  <a href="javascript:void(0);"
                    ><i class="la la-info"></i> <span>Change Log</span>
                    <span class="badge badge-primary ms-auto">v1.7.0</span></a
                  >
                </li>
                <li class="submenu">
                  <a href="javascript:void(0);"
                    ><i class="la la-share-alt"></i> <span>Multi Level</span>
                    <span class="menu-arrow"></span
                  ></a>
                  <ul>
                    <li class="submenu">
                      <a href="javascript:void(0);">
                        <span>Level 1</span> <span class="menu-arrow"></span
                      ></a>
                      <ul>
                        <li>
                          <a href="javascript:void(0);"><span>Level 2</span></a>
                        </li>
                        <li class="submenu">
                          <a href="javascript:void(0);">
                            <span> Level 2</span>
                            <span class="menu-arrow"></span
                          ></a>
                          <ul>
                            <li><a href="javascript:void(0);">Level 3</a></li>
                            <li><a href="javascript:void(0);">Level 3</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="javascript:void(0);">
                            <span>Level 2</span></a
                          >
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="javascript:void(0);"> <span>Level 1</span></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
            <ul class="sidebar-vertical">
              <li class="menu-title">
                <span>Main</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-dashcube"></i> <span> Dashboard</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="{{route('admin-dashboard')}}" class="active"
                      >Admin Dashboard</a
                    >
                  </li>
                  <li>
                    <a class href="employee-dashboard.html"
                      >Employee Dashboard</a
                    >
                  </li>
                  <li>
                    <a class href="deals-dashboard.html">Deals Dashboard</a>
                  </li>
                  <li>
                    <a class href="leads-dashboard.html">Leads Dashboard</a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-cube"></i> <span> Apps</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="chat.html">Chat</a></li>
                  <li class="submenu">
                    <a href="#"
                      ><span> Calls</span> <span class="menu-arrow"></span
                    ></a>
                    <ul>
                      <li><a class href="voice-call.html">Voice Call</a></li>
                      <li><a class href="video-call.html">Video Call</a></li>
                      <li>
                        <a class href="outgoing-call.html">Outgoing Call</a>
                      </li>
                      <li>
                        <a class href="incoming-call.html">Incoming Call</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class href="events.html">Calendar</a></li>
                  <li><a class href="contacts.html">Contacts</a></li>
                  <li><a class href="inbox.html">Email</a></li>
                  <li><a class href="file-manager.html">File Manager</a></li>
                </ul>
              </li>
              <li class="menu-title">
                <span>Employees</span>
              </li>
              <li class="submenu">
                <a href="#" class="noti-dot"
                  ><i class="la la-user"></i> <span> Employees</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="employees.html">All Employees</a></li>
                  <li><a class href="holidays.html">Holidays</a></li>
                  <li>
                    <a class href="leaves.html"
                      >Leaves (Admin)
                      <span class="badge rounded-pill bg-primary float-end"
                        >1</span
                      ></a
                    >
                  </li>
                  <li>
                    <a class href="leaves-employee.html">Leaves (Employee)</a>
                  </li>
                  <li>
                    <a class href="leave-settings.html">Leave Settings</a>
                  </li>
                  <li>
                    <a class href="attendance.html">Attendance (Admin)</a>
                  </li>
                  <li>
                    <a class href="attendance-employee.html"
                      >Attendance (Employee)</a
                    >
                  </li>
                  <li><a class href="departments.html">Departments</a></li>
                  <li><a class href="designations.html">Designations</a></li>
                  <li><a class href="timesheet.html">Timesheet</a></li>
                  <li>
                    <a class href="shift-scheduling.html">Shift & Schedule</a>
                  </li>
                  <li><a class href="overtime.html">Overtime</a></li>
                </ul>
              </li>
              <li class>
                <a href="clients.html"
                  ><i class="la la-users"></i> <span>Clients</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-rocket"></i> <span> Projects</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="projects.html">Projects</a></li>
                  <li><a class href="tasks.html">Tasks</a></li>
                  <li><a class href="task-board.html">Task Board</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-ticket"></i> <span>Tickets</span
                  ><span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="tickets.html">Tickets</a></li>
                  <li>
                    <a class href="ticket-details.html">Tickets Detail</a>
                  </li>
                </ul>
              </li>
              <li class="menu-title">
                <span>CRM</span>
                <small class="newly-added-features">New</small>
              </li>
              <li class="active">
                <a href="contact-list.html"
                  ><i class="la la-user-shield"></i> <span> Contacts </span></a
                >
              </li>
              <li class>
                <a href="companies.html"
                  ><i class="la la-building"></i> <span> Companies </span></a
                >
              </li>
              <li class>
                <a href="deals.html"
                  ><i class="la la-cubes"></i> <span> Deals </span></a
                >
              </li>
              <li class>
                <a href="leads.html"
                  ><i class="la la-chart-area"></i> <span> Leads </span></a
                >
              </li>
              <li class>
                <a href="pipeline.html"
                  ><i class="la la-exchange-alt"></i> <span> Pipeline </span></a
                >
              </li>
              <li class>
                <a href="analytics.html"
                  ><i class="la la-dice"></i> <span> Analytics </span></a
                >
              </li>
              <li class>
                <a href="activities.html"
                  ><i class="la la-directions"></i> <span> Activities </span></a
                >
              </li>
              <li class="menu-title">
                <span>HR</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-files-o"></i> <span> Sales </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="estimates.html">Estimates</a></li>
                  <li><a class href="invoices.html">Invoices</a></li>
                  <li><a class href="payments.html">Payments</a></li>
                  <li><a class href="expenses.html">Expenses</a></li>
                  <li>
                    <a class href="provident-fund.html">Provident Fund</a>
                  </li>
                  <li><a class href="taxes.html">Taxes</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-file-alt"></i> <span> Accounting </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="categories.html">Categories</a></li>
                  <li><a class href="budgets.html">Budgets</a></li>
                  <li>
                    <a class href="budget-expenses.html">Budget Expenses</a>
                  </li>
                  <li>
                    <a class href="budget-revenues.html">Budget Revenues</a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-money-bill-wave"></i> <span> Payroll </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="salary.html"> Employee Salary </a></li>
                  <li><a class href="salary-view.html"> Payslip </a></li>
                  <li>
                    <a class href="payroll-items.html"> Payroll Items </a>
                  </li>
                </ul>
              </li>
              <li class>
                <a href="policies.html"
                  ><i class="la la-file-pdf"></i> <span>Policies</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-chart-pie"></i> <span> Reports </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="expense-reports.html"> Expense Report </a>
                  </li>
                  <li>
                    <a class href="invoice-reports.html"> Invoice Report </a>
                  </li>
                  <li>
                    <a class href="payments-reports.html"> Payments Report </a>
                  </li>
                  <li>
                    <a class href="project-reports.html"> Project Report </a>
                  </li>
                  <li><a class href="task-reports.html"> Task Report </a></li>
                  <li><a class href="user-reports.html"> User Report </a></li>
                  <li>
                    <a class href="employee-reports.html"> Employee Report </a>
                  </li>
                  <li>
                    <a class href="payslip-reports.html"> Payslip Report </a>
                  </li>
                  <li>
                    <a class href="attendance-reports.html">
                      Attendance Report
                    </a>
                  </li>
                  <li><a class href="leave-reports.html"> Leave Report </a></li>
                  <li><a class href="daily-reports.html"> Daily Report </a></li>
                </ul>
              </li>
              <li class="menu-title">
                <span>Performance</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-laptop-medical"></i>
                  <span> Performance </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="performance-indicator.html">
                      Performance Indicator
                    </a>
                  </li>
                  <li>
                    <a class href="performance.html"> Performance Review </a>
                  </li>
                  <li>
                    <a class href="performance-appraisal.html">
                      Performance Appraisal
                    </a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-crosshairs"></i> <span> Goals </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="goal-tracking.html"> Goal List </a></li>
                  <li><a class href="goal-type.html"> Goal Type </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-edit"></i> <span> Training </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="training.html"> Training List </a></li>
                  <li><a class href="trainers.html"> Trainers</a></li>
                  <li>
                    <a class href="training-type.html"> Training Type </a>
                  </li>
                </ul>
              </li>
              <li class>
                <a href="promotion.html"
                  ><i class="la la-bullhorn"></i> <span>Promotion</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-external-link-square"></i>
                  <span>Resignation</span><span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="resignation.html"> Resignation </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-user-times"></i> <span>Termination</span
                  ><span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="termination.html"> Termination </a></li>
                </ul>
              </li>
              <li class="menu-title">
                <span>Administration</span>
              </li>
              <li class>
                <a href="assets1.html"
                  ><i class="la la-object-ungroup"></i> <span>Assets</span></a
                >
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-briefcase"></i> <span> Jobs </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="user-dashboard.html"> User Dasboard </a>
                  </li>
                  <li>
                    <a class href="jobs-dashboard.html"> Jobs Dasboard </a>
                  </li>
                  <li><a class href="jobs.html"> Manage Jobs </a></li>
                  <li>
                    <a class href="manage-resumes.html"> Manage Resumes </a>
                  </li>
                  <li>
                    <a class href="shortlist-candidates.html">
                      Shortlist Candidates
                    </a>
                  </li>
                  <li>
                    <a class href="interview-questions.html">
                      Interview Questions
                    </a>
                  </li>
                  <li>
                    <a class href="offer_approvals.html"> Offer Approvals </a>
                  </li>
                  <li>
                    <a class href="experiance-level.html"> Experience Level </a>
                  </li>
                  <li><a class href="candidates.html"> Candidates List </a></li>
                  <li>
                    <a class href="schedule-timing.html"> Schedule timing </a>
                  </li>
                  <li>
                    <a class href="apptitude-result.html"> Aptitude Results </a>
                  </li>
                </ul>
              </li>
              <li class>
                <a href="knowledgebase.html"
                  ><i class="la la-question"></i> <span>Knowledgebase</span></a
                >
              </li>
              <li class>
                <a href="users.html"
                  ><i class="la la-users-cog"></i> <span>Users</span></a
                >
              </li>
              <li>
                <a class href="settings.html"
                  ><i class="la la-cog"></i> <span>Settings</span></a
                >
              </li>
              <li class="menu-title">
                <span>Pages</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-user-tag"></i> <span> Profile </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="profile.html"> Employee Profile </a></li>
                  <li>
                    <a class href="client-profile.html"> Client Profile </a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-key"></i> <span> Authentication </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="index.html"> Login </a></li>
                  <li><a class href="register.html"> Register </a></li>
                  <li>
                    <a class href="forgot-password.html"> Forgot Password </a>
                  </li>
                  <li><a class href="otp.html"> OTP </a></li>
                  <li><a class href="lock-screen.html"> Lock Screen </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-exclamation-triangle"></i>
                  <span> Error Pages </span> <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="error-404.html">404 Error </a></li>
                  <li><a class href="error-500.html">500 Error </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-history"></i> <span> Subscriptions </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="subscriptions.html">
                      Subscriptions (Admin)
                    </a>
                  </li>
                  <li>
                    <a class href="subscriptions-company.html">
                      Subscriptions (Company)
                    </a>
                  </li>
                  <li>
                    <a class href="subscribed-companies.html">
                      Subscribed Companies</a
                    >
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-columns"></i> <span> Pages </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="search.html"> Search </a></li>
                  <li><a class href="faq.html"> FAQ </a></li>
                  <li><a class href="terms.html"> Terms </a></li>
                  <li>
                    <a class href="privacy-policy.html"> Privacy Policy </a>
                  </li>
                  <li><a class href="blank-page.html"> Blank Page </a></li>
                  <li><a class href="coming-soon.html"> Coming Soon </a></li>
                  <li>
                    <a class href="under-maintenance.html">
                      Under Maintanance
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-title">
                <span>UI Interface</span>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="lab la-uikit"></i> <span> Base UI </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="ui-alerts.html">Alerts</a></li>
                  <li><a class href="ui-accordion.html">Accordion</a></li>
                  <li><a class href="ui-avatar.html">Avatar</a></li>
                  <li><a class href="ui-badges.html">Badges</a></li>
                  <li><a class href="ui-borders.html">Border</a></li>
                  <li><a class href="ui-buttons.html">Buttons</a></li>
                  <li>
                    <a class href="ui-buttons-group.html">Button Group</a>
                  </li>
                  <li><a class href="ui-breadcrumb.html">Breadcrumb</a></li>
                  <li><a class href="ui-cards.html">Card</a></li>
                  <li><a class href="ui-carousel.html">Carousel</a></li>
                  <li><a class href="ui-colors.html">Colors</a></li>
                  <li><a class href="ui-dropdowns.html">Dropdowns</a></li>
                  <li><a class href="ui-grid.html">Grid</a></li>
                  <li><a class href="ui-images.html">Images</a></li>
                  <li><a class href="ui-lightbox.html">Lightbox</a></li>
                  <li><a class href="ui-media.html">Media</a></li>
                  <li><a class href="ui-modals.html">Modals</a></li>
                  <li><a class href="ui-notification.html">Notification</a></li>
                  <li><a class href="ui-offcanvas.html">Offcanvas</a></li>
                  <li><a class href="ui-pagination.html">Pagination</a></li>
                  <li><a class href="ui-popovers.html">Popovers</a></li>
                  <li><a class href="ui-progress.html">Progress</a></li>
                  <li><a class href="ui-placeholders.html">Placeholders</a></li>
                  <li><a class href="ui-rangeslider.html">Range Slider</a></li>
                  <li><a class href="ui-spinner.html">Spinner</a></li>
                  <li><a class href="ui-sweetalerts.html">Sweet Alerts</a></li>
                  <li><a class href="ui-nav-tabs.html">Tabs</a></li>
                  <li><a class href="ui-toasts.html">Toasts</a></li>
                  <li><a class href="ui-tooltips.html">Tooltips</a></li>
                  <li><a class href="ui-typography.html">Typography</a></li>
                  <li><a class href="ui-video.html">Video</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-eject"></i> <span> Advanced UI </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="ui-ribbon.html">Ribbon</a></li>
                  <li><a class href="ui-clipboard.html">Clipboard</a></li>
                  <li><a class href="ui-drag-drop.html">Drag & Drop</a></li>
                  <li><a class href="ui-rangeslider.html">Range Slider</a></li>
                  <li><a class href="ui-rating.html">Rating</a></li>
                  <li><a class href="ui-text-editor.html">Text Editor</a></li>
                  <li><a class href="ui-counter.html">Counter</a></li>
                  <li><a class href="ui-scrollbar.html">Scrollbar</a></li>
                  <li><a class href="ui-stickynote.html">Sticky Note</a></li>
                  <li><a class href="ui-timeline.html">Timeline</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-chart-line"></i> <span> Charts </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="chart-apex.html">Apex Charts</a></li>
                  <li><a class href="chart-js.html">Chart Js</a></li>
                  <li><a class href="chart-morris.html">Morris Charts</a></li>
                  <li><a class href="chart-flot.html">Flot Charts</a></li>
                  <li><a class href="chart-peity.html">Peity Charts</a></li>
                  <li><a class href="chart-c3.html">C3 Charts</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-icons"></i> <span> Icons </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="icon-fontawesome.html">Fontawesome Icons</a>
                  </li>
                  <li><a class href="icon-feather.html">Feather Icons</a></li>
                  <li><a class href="icon-ionic.html">Ionic Icons</a></li>
                  <li><a class href="icon-material.html">Material Icons</a></li>
                  <li><a class href="icon-pe7.html">Pe7 Icons</a></li>
                  <li>
                    <a class href="icon-simpleline.html">Simpleline Icons</a>
                  </li>
                  <li><a class href="icon-themify.html">Themify Icons</a></li>
                  <li><a class href="icon-weather.html">Weather Icons</a></li>
                  <li><a class href="icon-typicon.html">Typicon Icons</a></li>
                  <li><a class href="icon-flag.html">Flag Icons</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-wpforms"></i> <span> Forms </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li>
                    <a class href="form-basic-inputs.html">Basic Inputs </a>
                  </li>
                  <li>
                    <a class href="form-input-groups.html">Input Groups </a>
                  </li>
                  <li>
                    <a class href="form-horizontal.html">Horizontal Form </a>
                  </li>
                  <li>
                    <a class href="form-vertical.html"> Vertical Form </a>
                  </li>
                  <li><a class href="form-mask.html"> Form Mask </a></li>
                  <li>
                    <a class href="form-validation.html"> Form Validation </a>
                  </li>
                  <li><a class href="form-select2.html">Form Select2 </a></li>
                  <li><a class href="form-fileupload.html">File Upload </a></li>
                  <li>
                    <a class href="horizontal-timeline.html"
                      >Horizontal Timeline</a
                    >
                  </li>
                  <li><a class href="form-wizard.html">Form Wizard</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="la la-table"></i> <span> Tables </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a class href="tables-basic.html">Basic Tables </a></li>
                  <li><a class href="data-tables.html">Data Table </a></li>
                </ul>
              </li>
              <li class="menu-title">
                <span>Extras</span>
              </li>
              <li>
                <a href="#"
                  ><i class="la la-file-alt"></i> <span>Documentation</span></a
                >
              </li>
              <li>
                <a href="javascript:void(0);"
                  ><i class="la la-info"></i> <span>Change Log</span>
                  <span class="badge badge-primary ms-auto">v1.7.0</span></a
                >
              </li>
              <li class="submenu">
                <a href="javascript:void(0);"
                  ><i class="la la-level-up-alt"></i> <span>Multi Level</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li class="submenu">
                    <a href="javascript:void(0);">
                      <span>Level 1</span> <span class="menu-arrow"></span
                    ></a>
                    <ul>
                      <li>
                        <a href="javascript:void(0);"><span>Level 2</span></a>
                      </li>
                      <li class="submenu">
                        <a href="javascript:void(0);">
                          <span> Level 2</span> <span class="menu-arrow"></span
                        ></a>
                        <ul>
                          <li><a href="javascript:void(0);">Level 3</a></li>
                          <li><a href="javascript:void(0);">Level 3</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0);"> <span>Level 2</span></a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:void(0);"> <span>Level 1</span></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div> --}}
{{-- 
      <div class="two-col-bar" id="two-col-bar">
        <div class="sidebar sidebar-twocol" id="navbar-nav">
          <div class="sidebar-left slimscroll">
            <div
              class="nav flex-column nav-pills"
              id="v-pills-tab"
              role="tablist"
              aria-orientation="vertical"
            >
              <a
                class="nav-link"
                id="v-pills-dashboard-tab"
                title="Dashboard"
                data-bs-toggle="pill"
                href="#v-pills-dashboard"
                role="tab"
                aria-controls="v-pills-dashboard"
                aria-selected="true"
              >
                <span class="material-icons-outlined"> home </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-apps-tab"
                title="Apps"
                data-bs-toggle="pill"
                href="#v-pills-apps"
                role="tab"
                aria-controls="v-pills-apps"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> dashboard </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-employees-tab"
                title="Employees"
                data-bs-toggle="pill"
                href="#v-pills-employees"
                role="tab"
                aria-controls="v-pills-employees"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> people </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-clients-tab"
                title="Clients"
                data-bs-toggle="pill"
                href="#v-pills-clients"
                role="tab"
                aria-controls="v-pills-clients"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> person </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-projects-tab"
                title="Projects"
                data-bs-toggle="pill"
                href="#v-pills-projects"
                role="tab"
                aria-controls="v-pills-projects"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> topic </span>
              </a>
              <a
                class="nav-link active"
                id="v-pills-leads-tab"
                title="CRM"
                data-bs-toggle="pill"
                href="#v-pills-leads"
                role="tab"
                aria-controls="v-pills-leads"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> leaderboard </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-tickets-tab"
                title="Tickets"
                data-bs-toggle="pill"
                href="#v-pills-tickets"
                role="tab"
                aria-controls="v-pills-tickets"
                aria-selected="false"
              >
                <span class="material-icons-outlined">
                  confirmation_number
                </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-sales-tab"
                title="Sales"
                data-bs-toggle="pill"
                href="#v-pills-sales"
                role="tab"
                aria-controls="v-pills-sales"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> shopping_bag </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-accounting-tab"
                title="Accounting"
                data-bs-toggle="pill"
                href="#v-pills-accounting"
                role="tab"
                aria-controls="v-pills-accounting"
                aria-selected="false"
              >
                <span class="material-icons-outlined">
                  account_balance_wallet
                </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-payroll-tab"
                title="Payroll"
                data-bs-toggle="pill"
                href="#v-pills-payroll"
                role="tab"
                aria-controls="v-pills-payroll"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> request_quote </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-policies-tab"
                title="Policies"
                data-bs-toggle="pill"
                href="#v-pills-policies"
                role="tab"
                aria-controls="v-pills-policies"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> verified_user </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-reports-tab"
                title="Reports"
                data-bs-toggle="pill"
                href="#v-pills-reports"
                role="tab"
                aria-controls="v-pills-reports"
                aria-selected="false"
              >
                <span class="material-icons-outlined">
                  report_gmailerrorred
                </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-performance-tab"
                title="Performance"
                data-bs-toggle="pill"
                href="#v-pills-performance"
                role="tab"
                aria-controls="v-pills-performance"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> shutter_speed </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-goals-tab"
                title="Goals"
                data-bs-toggle="pill"
                href="#v-pills-goals"
                role="tab"
                aria-controls="v-pills-goals"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> track_changes </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-training-tab"
                title="Training"
                data-bs-toggle="pill"
                href="#v-pills-training"
                role="tab"
                aria-controls="v-pills-training"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> checklist_rtl </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-promotion-tab"
                title="Promotions"
                data-bs-toggle="pill"
                href="#v-pills-promotion"
                role="tab"
                aria-controls="v-pills-promotion"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> auto_graph </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-resignation-tab"
                title="Resignation"
                data-bs-toggle="pill"
                href="#v-pills-resignation"
                role="tab"
                aria-controls="v-pills-resignation"
                aria-selected="false"
              >
                <span class="material-icons-outlined">
                  do_not_disturb_alt
                </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-termination-tab"
                title="Termination"
                data-bs-toggle="pill"
                href="#v-pills-termination"
                role="tab"
                aria-controls="v-pills-termination"
                aria-selected="false"
              >
                <span class="material-icons-outlined">
                  indeterminate_check_box
                </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-assets-tab"
                title="Assets"
                data-bs-toggle="pill"
                href="#v-pills-assets"
                role="tab"
                aria-controls="v-pills-assets"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> web_asset </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-jobs-tab"
                title="Jobs"
                data-bs-toggle="pill"
                href="#v-pills-jobs"
                role="tab"
                aria-controls="v-pills-jobs"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> work_outline </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-knowledgebase-tab"
                title="Knowledgebase"
                data-bs-toggle="pill"
                href="#v-pills-knowledgebase"
                role="tab"
                aria-controls="v-pills-knowledgebase"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> school </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-activities-tab"
                title="Activities"
                data-bs-toggle="pill"
                href="#v-pills-activities"
                role="tab"
                aria-controls="v-pills-activities"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> toggle_off </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-users-tab"
                title="Users"
                data-bs-toggle="pill"
                href="#v-pills-users"
                role="tab"
                aria-controls="v-pills-users"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> group_add </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-settings-tab"
                title="Settings"
                data-bs-toggle="pill"
                href="#v-pills-settings"
                role="tab"
                aria-controls="v-pills-settings"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> settings </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-profile-tab"
                title="Profile"
                data-bs-toggle="pill"
                href="#v-pills-profile"
                role="tab"
                aria-controls="v-pills-profile"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> manage_accounts </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-authentication-tab"
                title="Authentication"
                data-bs-toggle="pill"
                href="#v-pills-authentication"
                role="tab"
                aria-controls="v-pills-authentication"
                aria-selected="false"
              >
                <span class="material-icons-outlined">
                  perm_contact_calendar
                </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-errorpages-tab"
                title="Error Pages"
                data-bs-toggle="pill"
                href="#v-pills-errorpages"
                role="tab"
                aria-controls="v-pills-errorpages"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> announcement </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-subscriptions-tab"
                title="Subscriptions"
                data-bs-toggle="pill"
                href="#v-pills-subscriptions"
                role="tab"
                aria-controls="v-pills-subscriptions"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> loyalty </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-pages-tab"
                title="Pages"
                data-bs-toggle="pill"
                href="#v-pills-pages"
                role="tab"
                aria-controls="v-pills-pages"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> layers </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-baseui-tab"
                title="Base UI"
                data-bs-toggle="pill"
                href="#v-pills-baseui"
                role="tab"
                aria-controls="v-pills-baseui"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> foundation </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-elements-tab"
                title="Advanced UI"
                data-bs-toggle="pill"
                href="#v-pills-elements"
                role="tab"
                aria-controls="v-pills-elements"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> bento </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-charts-tab"
                title="Charts"
                data-bs-toggle="pill"
                href="#v-pills-charts"
                role="tab"
                aria-controls="v-pills-charts"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> bar_chart </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-icons-tab"
                title="Icons"
                data-bs-toggle="pill"
                href="#v-pills-icons"
                role="tab"
                aria-controls="v-pills-icons"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> grading </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-forms-tab"
                title="Forms"
                data-bs-toggle="pill"
                href="#v-pills-forms"
                role="tab"
                aria-controls="v-pills-forms"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> view_day </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-tables-tab"
                title="Tables"
                data-bs-toggle="pill"
                href="#v-pills-tables"
                role="tab"
                aria-controls="v-pills-tables"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> table_rows </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-documentation-tab"
                title="Documentation"
                data-bs-toggle="pill"
                href="#v-pills-documentation"
                role="tab"
                aria-controls="v-pills-documentation"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> description </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-changelog-tab"
                title="Changelog"
                data-bs-toggle="pill"
                href="#v-pills-changelog"
                role="tab"
                aria-controls="v-pills-changelog"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> sync_alt </span>
              </a>
              <a
                class="nav-link"
                id="v-pills-multilevel-tab"
                title="Multilevel"
                data-bs-toggle="pill"
                href="#v-pills-multilevel"
                role="tab"
                aria-controls="v-pills-multilevel"
                aria-selected="false"
              >
                <span class="material-icons-outlined"> library_add_check </span>
              </a>
            </div>
          </div>
          <div class="sidebar-right">
            <div class="tab-content" id="v-pills-tabContent">
              <div
                class="tab-pane fade show"
                id="v-pills-dashboard"
                role="tabpanel"
                aria-labelledby="v-pills-dashboard-tab"
              >
                <p>Dashboard</p>
                <ul>
                  <li>
                    <a class href="{{route('admin-dashboard')}}">Admin Dashboard</a>
                  </li>
                  <li>
                    <a class href="employee-dashboard.html"
                      >Employee Dashboard</a
                    >
                  </li>
                  <li>
                    <a class href="deals-dashboard.html">Deals Dashboard</a>
                  </li>
                  <li>
                    <a class href="leads-dashboard.html">Leads Dashboard</a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-apps"
                role="tabpanel"
                aria-labelledby="v-pills-apps-tab"
              >
                <p>App</p>
                <ul>
                  <li>
                    <a class href="chat.html">Chat</a>
                  </li>
                  <li class="sub-menu">
                    <a href="#">Calls <span class="menu-arrow"></span></a>
                    <ul>
                      <li><a class href="voice-call.html">Voice Call</a></li>
                      <li><a class href="video-call.html">Video Call</a></li>
                      <li>
                        <a class href="outgoing-call.html">Outgoing Call</a>
                      </li>
                      <li>
                        <a class href="incoming-call.html">Incoming Call</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class href="events.html">Calendar</a>
                  </li>
                  <li>
                    <a class href="contacts.html">Contacts</a>
                  </li>
                  <li>
                    <a class href="inbox.html">Email</a>
                  </li>
                  <li>
                    <a class href="file-manager.html">File Manager</a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-employees"
                role="tabpanel"
                aria-labelledby="v-pills-employees-tab"
              >
                <p>Employees</p>
                <ul>
                  <li><a class href="employees.html">All Employees</a></li>
                  <li><a class href="holidays.html">Holidays</a></li>
                  <li>
                    <a class href="leaves.html"
                      >Leaves (Admin)
                      <span class="badge rounded-pill bg-primary float-end"
                        >1</span
                      ></a
                    >
                  </li>
                  <li>
                    <a class href="leaves-employee.html">Leaves (Employee)</a>
                  </li>
                  <li>
                    <a class href="leave-settings.html">Leave Settings</a>
                  </li>
                  <li>
                    <a class href="attendance.html">Attendance (Admin)</a>
                  </li>
                  <li>
                    <a class href="attendance-employee.html"
                      >Attendance (Employee)</a
                    >
                  </li>
                  <li><a class href="departments.html">Departments</a></li>
                  <li><a class href="designations.html">Designations</a></li>
                  <li><a class href="timesheet.html">Timesheet</a></li>
                  <li>
                    <a class href="shift-scheduling.html">Shift & Schedule</a>
                  </li>
                  <li><a class href="overtime.html">Overtime</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-clients"
                role="tabpanel"
                aria-labelledby="v-pills-clients-tab"
              >
                <p>Clients</p>
                <ul>
                  <li><a class href="clients.html">Clients</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-projects"
                role="tabpanel"
                aria-labelledby="v-pills-projects-tab"
              >
                <p>Projects</p>
                <ul>
                  <li><a class href="projects.html">Projects</a></li>
                  <li><a class href="tasks.html">Tasks</a></li>
                  <li><a class href="task-board.html">Task Board</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show active"
                id="v-pills-leads"
                role="tabpanel"
                aria-labelledby="v-pills-leads-tab"
              >
                <p>CRM</p>
                <ul>
                  <li>
                    <a class="active" href="contact-list.html"> Contacts</a>
                  </li>
                  <li>
                    <a class href="companies.html">Companies</a>
                  </li>
                  <li>
                    <a class href="deals.html"> Deals</a>
                  </li>
                  <li>
                    <a class href="leads.html"> Leads </a>
                  </li>
                  <li>
                    <a class href="pipeline.html">Pipeline </a>
                  </li>
                  <li>
                    <a class href="analytics.html">Analytics</a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-tickets"
                role="tabpanel"
                aria-labelledby="v-pills-tickets-tab"
              >
                <p>Tickets</p>
                <ul>
                  <li><a class href="tickets.html">Tickets</a></li>
                  <li>
                    <a class href="ticket-details.html">Ticket Details</a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-sales"
                role="tabpanel"
                aria-labelledby="v-pills-sales-tab"
              >
                <p>Sales</p>
                <ul>
                  <li><a class href="estimates.html">Estimates</a></li>
                  <li><a class href="invoices.html">Invoices</a></li>
                  <li><a class href="payments.html">Payments</a></li>
                  <li><a class href="expenses.html">Expenses</a></li>
                  <li>
                    <a class href="provident-fund.html">Provident Fund</a>
                  </li>
                  <li><a class href="taxes.html">Taxes</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-accounting"
                role="tabpanel"
                aria-labelledby="v-pills-accounting-tab"
              >
                <p>Accounting</p>
                <ul>
                  <li><a class href="categories.html">Categories</a></li>
                  <li><a class href="budgets.html">Budgets</a></li>
                  <li>
                    <a class href="budget-expenses.html">Budget Expenses</a>
                  </li>
                  <li>
                    <a class href="budget-revenues.html">Budget Revenues</a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-payroll"
                role="tabpanel"
                aria-labelledby="v-pills-payroll-tab"
              >
                <p>Payroll</p>
                <ul>
                  <li><a class href="salary.html"> Employee Salary </a></li>
                  <li><a class href="salary-view.html"> Payslip </a></li>
                  <li>
                    <a class href="payroll-items.html"> Payroll Items </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-policies"
                role="tabpanel"
                aria-labelledby="v-pills-policies-tab"
              >
                <p>Policies</p>
                <ul>
                  <li><a class href="policies.html"> Policies </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-reports"
                role="tabpanel"
                aria-labelledby="v-pills-reports-tab"
              >
                <p>Reports</p>
                <ul>
                  <li>
                    <a class href="expense-reports.html"> Expense Report </a>
                  </li>
                  <li>
                    <a class href="invoice-reports.html"> Invoice Report </a>
                  </li>
                  <li>
                    <a class href="payments-reports.html"> Payments Report </a>
                  </li>
                  <li>
                    <a class href="project-reports.html"> Project Report </a>
                  </li>
                  <li><a class href="task-reports.html"> Task Report </a></li>
                  <li><a class href="user-reports.html"> User Report </a></li>
                  <li>
                    <a class href="employee-reports.html"> Employee Report </a>
                  </li>
                  <li>
                    <a class href="payslip-reports.html"> Payslip Report </a>
                  </li>
                  <li>
                    <a class href="attendance-reports.html">
                      Attendance Report
                    </a>
                  </li>
                  <li><a class href="leave-reports.html"> Leave Report </a></li>
                  <li><a class href="daily-reports.html"> Daily Report </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-performance"
                role="tabpanel"
                aria-labelledby="v-pills-performance-tab"
              >
                <p>Performance</p>
                <ul>
                  <li>
                    <a class href="performance-indicator.html">
                      Performance Indicator
                    </a>
                  </li>
                  <li>
                    <a class href="performance.html"> Performance Review </a>
                  </li>
                  <li>
                    <a class href="performance-appraisal.html">
                      Performance Appraisal
                    </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-goals"
                role="tabpanel"
                aria-labelledby="v-pills-goals-tab"
              >
                <p>Goals</p>
                <ul>
                  <li><a class href="goal-tracking.html"> Goal List </a></li>
                  <li><a class href="goal-type.html"> Goal Type </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-training"
                role="tabpanel"
                aria-labelledby="v-pills-training-tab"
              >
                <p>Training</p>
                <ul>
                  <li><a class href="training.html"> Training List </a></li>
                  <li><a class href="trainers.html"> Trainers</a></li>
                  <li>
                    <a class href="training-type.html"> Training Type </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-promotion"
                role="tabpanel"
                aria-labelledby="v-pills-promotion-tab"
              >
                <p>Promotion</p>
                <ul>
                  <li><a class href="promotion.html"> Promotion </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-resignation"
                role="tabpanel"
                aria-labelledby="v-pills-resignation-tab"
              >
                <p>Resignation</p>
                <ul>
                  <li><a class href="resignation.html"> Resignation </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-termination"
                role="tabpanel"
                aria-labelledby="v-pills-termination-tab"
              >
                <p>Termination</p>
                <ul>
                  <li><a class href="termination.html"> Termination </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-assets"
                role="tabpanel"
                aria-labelledby="v-pills-assets-tab"
              >
                <p>Assets</p>
                <ul>
                  <li><a class href="assets1.html"> Assets </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-jobs"
                role="tabpanel"
                aria-labelledby="v-pills-jobs-tab"
              >
                <p>Jobs</p>
                <ul>
                  <li>
                    <a class href="user-dashboard.html" class="active">
                      User Dasboard
                    </a>
                  </li>
                  <li>
                    <a class href="jobs-dashboard.html"> Jobs Dasboard </a>
                  </li>
                  <li><a class href="jobs.html"> Manage Jobs </a></li>
                  <li>
                    <a class href="job-applicants.html"> Applied Jobs </a>
                  </li>
                  <li>
                    <a class href="manage-resumes.html"> Manage Resumes </a>
                  </li>
                  <li>
                    <a class href="shortlist-candidates.html">
                      Shortlist Candidates
                    </a>
                  </li>
                  <li>
                    <a class href="interview-questions.html">
                      Interview Questions
                    </a>
                  </li>
                  <li>
                    <a class href="offer_approvals.html"> Offer Approvals </a>
                  </li>
                  <li>
                    <a class href="experiance-level.html"> Experience Level </a>
                  </li>
                  <li><a class href="candidates.html"> Candidates List </a></li>
                  <li>
                    <a class href="schedule-timing.html"> Schedule timing </a>
                  </li>
                  <li>
                    <a class href="apptitude-result.html"> Aptitude Results </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-knowledgebase"
                role="tabpanel"
                aria-labelledby="v-pills-knowledgebase-tab"
              >
                <p>Knowledgebase</p>
                <ul>
                  <li>
                    <a class href="knowledgebase.html"> Knowledgebase </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-activities"
                role="tabpanel"
                aria-labelledby="v-pills-activities-tab"
              >
                <p>Activities</p>
                <ul>
                  <li><a class href="activities.html"> Activities </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-users"
                role="tabpanel"
                aria-labelledby="v-pills-activities-tab"
              >
                <p>Users</p>
                <ul>
                  <li><a class href="users.html"> Users </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-settings"
                role="tabpanel"
                aria-labelledby="v-pills-settings-tab"
              >
                <p>Settings</p>
                <ul>
                  <li><a class href="settings.html"> Settings </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-profile"
                role="tabpanel"
                aria-labelledby="v-pills-profile-tab"
              >
                <p>Profile</p>
                <ul>
                  <li><a class href="profile.html"> Employee Profile </a></li>
                  <li>
                    <a class href="client-profile.html"> Client Profile </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-authentication"
                role="tabpanel"
                aria-labelledby="v-pills-authentication-tab"
              >
                <p>Authentication</p>
                <ul>
                  <li><a class href="index.html"> Login </a></li>
                  <li><a class href="register.html"> Register </a></li>
                  <li>
                    <a class href="forgot-password.html"> Forgot Password </a>
                  </li>
                  <li><a class href="otp.html"> OTP </a></li>
                  <li><a class href="lock-screen.html"> Lock Screen </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-errorpages"
                role="tabpanel"
                aria-labelledby="v-pills-errorpages-tab"
              >
                <p>Error Pages</p>
                <ul>
                  <li><a class href="error-404.html">404 Error </a></li>
                  <li><a class href="error-500.html">500 Error </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-subscriptions"
                role="tabpanel"
                aria-labelledby="v-pills-subscriptions-tab"
              >
                <p>Subscriptions</p>
                <ul>
                  <li>
                    <a class href="subscriptions.html">
                      Subscriptions (Admin)
                    </a>
                  </li>
                  <li>
                    <a class href="subscriptions-company.html">
                      Subscriptions (Company)
                    </a>
                  </li>
                  <li>
                    <a class href="subscribed-companies.html">
                      Subscribed Companies</a
                    >
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-pages"
                role="tabpanel"
                aria-labelledby="v-pills-pages-tab"
              >
                <p>Pages</p>
                <ul>
                  <li><a class href="search.html"> Search </a></li>
                  <li><a class href="faq.html"> FAQ </a></li>
                  <li><a class href="terms.html"> Terms </a></li>
                  <li>
                    <a class href="privacy-policy.html"> Privacy Policy </a>
                  </li>
                  <li><a class href="blank-page.html"> Blank Page </a></li>
                  <li><a class href="coming-soon.html"> Coming Soon </a></li>
                  <li>
                    <a class href="under-maintenance.html">
                      Under Maintanance
                    </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-baseui"
                role="tabpanel"
                aria-labelledby="v-pills-baseui-tab"
              >
                <p>Base UI</p>
                <ul>
                  <li><a class href="ui-alerts.html">Alerts</a></li>
                  <li><a class href="ui-accordion.html">Accordion</a></li>
                  <li><a class href="ui-avatar.html">Avatar</a></li>
                  <li><a class href="ui-badges.html">Badges</a></li>
                  <li><a class href="ui-borders.html">Border</a></li>
                  <li><a class href="ui-buttons.html">Buttons</a></li>
                  <li>
                    <a class href="ui-buttons-group.html">Button Group</a>
                  </li>
                  <li><a class href="ui-breadcrumb.html">Breadcrumb</a></li>
                  <li><a class href="ui-cards.html">Card</a></li>
                  <li><a class href="ui-carousel.html">Carousel</a></li>
                  <li><a class href="ui-colors.html">Colors</a></li>
                  <li><a class href="ui-dropdowns.html">Dropdowns</a></li>
                  <li><a class href="ui-grid.html">Grid</a></li>
                  <li><a class href="ui-images.html">Images</a></li>
                  <li><a class href="ui-lightbox.html">Lightbox</a></li>
                  <li><a class href="ui-media.html">Media</a></li>
                  <li><a class href="ui-modals.html">Modals</a></li>
                  <li><a class href="ui-notification.html">Notification</a></li>
                  <li><a class href="ui-offcanvas.html">Offcanvas</a></li>
                  <li><a class href="ui-pagination.html">Pagination</a></li>
                  <li><a class href="ui-popovers.html">Popovers</a></li>
                  <li><a class href="ui-progress.html">Progress</a></li>
                  <li><a class href="ui-placeholders.html">Placeholders</a></li>
                  <li><a class href="ui-rangeslider.html">Range Slider</a></li>
                  <li><a class href="ui-spinner.html">Spinner</a></li>
                  <li><a class href="ui-sweetalerts.html">Sweet Alerts</a></li>
                  <li><a class href="ui-nav-tabs.html">Tabs</a></li>
                  <li><a class href="ui-toasts.html">Toasts</a></li>
                  <li><a class href="ui-tooltips.html">Tooltips</a></li>
                  <li><a class href="ui-typography.html">Typography</a></li>
                  <li><a class href="ui-video.html">Video</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-elements"
                role="tabpanel"
                aria-labelledby="v-pills-elements-tab"
              >
                <p>Advanced UI</p>
                <ul>
                  <li><a class href="ui-ribbon.html">Ribbon</a></li>
                  <li><a class href="ui-clipboard.html">Clipboard</a></li>
                  <li><a class href="ui-drag-drop.html">Drag & Drop</a></li>
                  <li><a class href="ui-rangeslider.html">Range Slider</a></li>
                  <li><a class href="ui-rating.html">Rating</a></li>
                  <li><a class href="ui-text-editor.html">Text Editor</a></li>
                  <li><a class href="ui-counter.html">Counter</a></li>
                  <li><a class href="ui-scrollbar.html">Scrollbar</a></li>
                  <li><a class href="ui-stickynote.html">Sticky Note</a></li>
                  <li><a class href="ui-timeline.html">Timeline</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-charts"
                role="tabpanel"
                aria-labelledby="v-pills-charts-tab"
              >
                <p>Charts</p>
                <ul>
                  <li><a class href="chart-apex.html">Apex Charts</a></li>
                  <li><a class href="chart-js.html">Chart Js</a></li>
                  <li><a class href="chart-morris.html">Morris Charts</a></li>
                  <li><a class href="chart-flot.html">Flot Charts</a></li>
                  <li><a class href="chart-peity.html">Peity Charts</a></li>
                  <li><a class href="chart-c3.html">C3 Charts</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-icons"
                role="tabpanel"
                aria-labelledby="v-pills-icons-tab"
              >
                <p>Icons</p>
                <ul>
                  <li>
                    <a class href="icon-fontawesome.html">Fontawesome Icons</a>
                  </li>
                  <li><a class href="icon-feather.html">Feather Icons</a></li>
                  <li><a class href="icon-ionic.html">Ionic Icons</a></li>
                  <li><a class href="icon-material.html">Material Icons</a></li>
                  <li><a class href="icon-pe7.html">Pe7 Icons</a></li>
                  <li>
                    <a class href="icon-simpleline.html">Simpleline Icons</a>
                  </li>
                  <li><a class href="icon-themify.html">Themify Icons</a></li>
                  <li><a class href="icon-weather.html">Weather Icons</a></li>
                  <li><a class href="icon-typicon.html">Typicon Icons</a></li>
                  <li><a class href="icon-flag.html">Flag Icons</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-forms"
                role="tabpanel"
                aria-labelledby="v-pills-forms-tab"
              >
                <p>Forms</p>
                <ul>
                  <li>
                    <a class href="form-basic-inputs.html">Basic Inputs </a>
                  </li>
                  <li>
                    <a class href="form-input-groups.html">Input Groups </a>
                  </li>
                  <li>
                    <a class href="form-horizontal.html">Horizontal Form </a>
                  </li>
                  <li>
                    <a class href="form-vertical.html"> Vertical Form </a>
                  </li>
                  <li><a class href="form-mask.html"> Form Mask </a></li>
                  <li>
                    <a class href="form-validation.html"> Form Validation </a>
                  </li>
                  <li><a class href="form-select2.html">Form Select2 </a></li>
                  <li><a class href="form-fileupload.html">File Upload </a></li>
                  <li>
                    <a class href="horizontal-timeline.html"
                      >Horizontal Timeline</a
                    >
                  </li>
                  <li><a class href="form-wizard.html">Form Wizard</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-tables"
                role="tabpanel"
                aria-labelledby="v-pills-tables-tab"
              >
                <p>Tables</p>
                <ul>
                  <li><a class href="tables-basic.html">Basic Tables </a></li>
                  <li><a class href="data-tables.html">Data Table </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-documentation"
                role="tabpanel"
                aria-labelledby="v-pills-documentation-tab"
              >
                <p>Documentation</p>
                <ul>
                  <li><a href="#">Documentation </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-changelog"
                role="tabpanel"
                aria-labelledby="v-pills-changelog-tab"
              >
                <p>Change Log</p>
                <ul>
                  <li>
                    <a href="#"
                      ><span>Change Log</span>
                      <span class="badge badge-primary ms-auto">v1.7.0</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-multilevel"
                role="tabpanel"
                aria-labelledby="v-pills-multilevel-tab"
              >
                <p>Multi Level</p>
                <ul>
                  <li class="sub-menu">
                    <a href="javascript:void(0);"
                      >Level 1 <span class="menu-arrow"></span
                    ></a>
                    <ul class="ms-3">
                      <li class="sub-menu">
                        <a href="javascript:void(0);"
                          >Level 1 <span class="menu-arrow"></span
                        ></a>
                        <ul>
                          <li><a href="javascript:void(0);">Level 2</a></li>
                          <li><a href="javascript:void(0);">Level 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0);">Level 2</a></li>
                  <li><a href="javascript:void(0);">Level 3</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-md-4">
                <h3 class="page-title">Contact</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{route('admin-dashboard')}}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Contact</li>
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
                        <a href="{{route('contact-grid')}}"
                          ><i class="las la-arrow-left"></i> Contacts</a
                        >
                      </li>
                      <li>Jackson Daniel</li>
                    </ul>
                  </div>
                  <div class="col-sm-6 text-sm-end">
                    <div class="contact-pagination">
                      <p>1 of 40</p>
                      <ul>
                        <li>
                          <a href="{{route('contact-details')}}"
                            ><i class="las la-arrow-left"></i
                          ></a>
                        </li>
                        <li>
                          <a href="{{route('contact-details')}}"
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
                  <div class="avatar avatar-xxl">
                    <img src="assets/img/avatar/avatar-19.jpg" alt="Img" />
                    <span class="status online"></span>
                  </div>
                  <div class="name-user">
                    <h4>Jackson Daniel</h4>
                    <p>Facility Manager, Global INC</p>
                    <div class="badge-rate">
                      <span class="badge badge-light"
                        ><i class="las la-lock"></i>Private</span
                      >
                      <p><i class="fa-solid fa-star"></i> 5.0</p>
                    </div>
                  </div>
                </div>
                <div class="contacts-action">
                  <a href="#" class="btn-icon text-warning"
                    ><i class="fa-solid fa-star"></i
                  ></a>
                  <a
                    href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#add_deals"
                    class="btn btn-pink"
                    ><i class="feather-plus-circle"></i>Add Deal</a
                  >
                  <a
                    href="#"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#add_compose"
                    ><i class="feather-mail"></i>Send Email</a
                  >
                  <a href="chat.html" class="btn-icon"
                    ><i class="feather-message-circle"></i
                  ></a>
                  <a
                    href="#"
                    class="btn-icon"
                    data-bs-toggle="modal"
                    data-bs-target="#edit_contact"
                    ><i class="feather-edit"></i
                  ></a>
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
                        data-bs-toggle="modal"
                        data-bs-target="#delete_contact"
                        >Delete</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3">
              <div class="card contact-sidebar">
                <h5>Basic Information</h5>
                <ul class="basic-info">
                  <li>
                    <span>
                      <i class="feather-mail"></i>
                    </span>
                    <p>
                      <a
                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                        class="__cf_email__"
                        data-cfemail="185c796a747d7d77587d60797568747d367b7775"
                        >[email&#160;protected]</a
                      >
                    </p>
                  </li>
                  <li>
                    <span>
                      <i class="feather-phone"></i>
                    </span>
                    <p>+1 12445-47878</p>
                  </li>
                  <li>
                    <span>
                      <i class="feather-map-pin"></i>
                    </span>
                    <p>22, Ave Street, Newyork, USA</p>
                  </li>
                  <li>
                    <span>
                      <i class="las la-calendar-week"></i>
                    </span>
                    <p>Created on 5 Jan 2024, 10:30 am</p>
                  </li>
                </ul>
                <h5>Other Information</h5>
                <ul class="other-info">
                  <li>
                    <span class="other-title">Language</span
                    ><span>Language</span>
                  </li>
                  <li>
                    <span class="other-title">Currency</span
                    ><span>United States dollar</span>
                  </li>
                  <li>
                    <span class="other-title">Last Modified</span
                    ><span>27 Sep 2023, 11:45 pm</span>
                  </li>
                  <li>
                    <span class="other-title">Source</span
                    ><span>Paid Campaign</span>
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
                  <h5>Company</h5>
                  <a
                    href="javascript:void(0);"
                    class="com-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_contact"
                    ><i class="las la-plus-circle me-1"></i>Add New</a
                  >
                </div>
                <ul class="company-info">
                  <li>
                    <span>
                      <img src="assets/img/icons/google-icon.svg" alt="Img" />
                    </span>
                    <div>
                      <h6>
                        Google. Inc
                        <i class="fa-solid fa-circle-check text-success"></i>
                      </h6>
                      <p>www.google.com</p>
                    </div>
                  </li>
                </ul>
                <h5>Social Profile</h5>
                <ul class="social-info">
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fa-brands fa-youtube"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fa-brands fa-whatsapp"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fa-brands fa-pinterest"></i
                    ></a>
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="fa-brands fa-linkedin"></i
                    ></a>
                  </li>
                </ul>
                <h5>Settings</h5>
                <ul class="set-info">
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="las la-upload"></i>Share Contact</a
                    >
                  </li>
                  <li>
                    <a href="javascript:void(0);"
                      ><i class="feather-star"></i>Add to Favourite</a
                    >
                  </li>
                  <li>
                    <a
                      href="javascript:void(0);"
                      data-bs-toggle="modal"
                      data-bs-target="#delete_contact"
                      ><i class="feather-trash-2"></i>Delete Contact</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-9">
              <div class="contact-tab-wrap">
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
                                  <h6>090224.jpg')}}</h6>
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
                                ><i class="las la-file-alt"></i
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                        data-cfemail="385d40595548545d785d40595548545d165b5755"
                        >[email&#160;protected]</a
                      >”. Now you can access email.
                    </p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a href="{{route('contact-details')}}" class="btn btn-primary"
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
            id="add_contact"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Add Company</h5>
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
                  <h5 class="mb-3">Sync emails from</h5>
                  <ul class="nav email-item">
                    <li class="nav-item">
                      <span
                        class="active mb-0"
                        data-bs-toggle="tab"
                        data-bs-target="#existing-company"
                      >
                        <input
                          type="radio"
                          class="status-radio"
                          id="mail1"
                          name="email"
                          checked
                        />
                        <label for="mail1">Existing Company</label>
                      </span>
                    </li>
                    <li class="nav-item">
                      <span
                        class="mb-0"
                        data-bs-toggle="pill"
                        data-bs-target="#new-company"
                      >
                        <input
                          type="radio"
                          class="status-radio"
                          id="mail2"
                          name="email"
                        />
                        <label for="mail2">New Company</label>
                      </span>
                    </li>
                  </ul>
                  <div class="tab-content pt-0">
                    <div class="tab-pane show active" id="existing-company">
                      <form
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
                      >
                        <div class="existing-company mb-3">
                          <div class="input-block mb-0">
                            <label class="col-form-label"
                              >Company
                              <span class="text-danger"> *</span></label
                            >
                            <select class="select">
                              <option>SilverHawk</option>
                              <option>NovaWaveLLC</option>
                            </select>
                            <p>
                              Use this field to associate existing deal instead
                              of creating new one.
                            </p>
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
                          <button class="btn btn-primary" type="submit">
                            Save
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="new-company">
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
                            action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                                        <span class="text-danger">
                                          *</span
                                        ></label
                                      >
                                      <div
                                        class="status-toggle small-toggle-btn d-flex align-items-center"
                                      >
                                        <span class="me-2 label-text"
                                          >Option</span
                                        >
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
                                        <span class="text-danger"
                                          >*</span
                                        ></label
                                      >
                                      <a href="#" class="add-new"
                                        ><i class="la la-plus-circle me-2"></i
                                        >Add New</a
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
                                <div
                                  class="col-lg-12 text-end form-wizard-button"
                                >
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
                            action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                                <div
                                  class="col-lg-12 text-end form-wizard-button"
                                >
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
                            action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
                          >
                            <div class="contact-input-set">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="input-block mb-3">
                                    <label class="col-form-label"
                                      >Facebook</label
                                    >
                                    <input class="form-control" type="text" />
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="input-block mb-3">
                                    <label class="col-form-label"
                                      >Twitter</label
                                    >
                                    <input class="form-control" type="text" />
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="input-block mb-3">
                                    <label class="col-form-label"
                                      >Linkedin</label
                                    >
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
                                    <label class="col-form-label"
                                      >Whatsapp</label
                                    >
                                    <input class="form-control" type="text" />
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="input-block mb-3">
                                    <label class="col-form-label"
                                      >Instagram</label
                                    >
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
                                <div
                                  class="col-lg-12 text-end form-wizard-button"
                                >
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
                            action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                                        <span class="checkmark"></span>
                                        Public</span
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
                                      <a href="#" class="btn danger-btn"
                                        >Confirm</a
                                      >
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
                                    id="test7"
                                    name="radio-group"
                                    checked
                                  />
                                  <label for="test7">Active</label>
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
                              <div
                                class="col-lg-12 text-end form-wizard-button"
                              >
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
            id="add_compose"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Add Compose</h5>
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
                  <form action="#">
                    <div class="input-block mb-3">
                      <input
                        type="email"
                        placeholder="To"
                        class="form-control"
                      />
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <input
                            type="email"
                            placeholder="Cc"
                            class="form-control"
                          />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-block mb-3">
                          <input
                            type="email"
                            placeholder="Bcc"
                            class="form-control"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="input-block mb-3">
                      <input
                        type="text"
                        placeholder="Subject"
                        class="form-control"
                      />
                    </div>
                    <div class="input-block mb-3">
                      <div id="summernote"></div>
                    </div>
                    <div class="input-block mb-3 mb-0">
                      <div class="text-center">
                        <button class="btn btn-primary">
                          <span>Send</span>
                          <i class="fa-solid fa-paper-plane m-l-5"></i>
                        </button>
                        <button class="btn btn-success m-l-5" type="button">
                          <span>Draft</span>
                          <i class="fa-regular fa-floppy-disk m-l-5"></i>
                        </button>
                        <button class="btn btn-success m-l-5" type="button">
                          <span>Delete</span>
                          <i class="fa-regular fa-trash-can m-l-5"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div
            class="modal custom-modal fade custom-modal-two modal-padding"
            id="edit_contact"
            role="dialog"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div
                  class="modal-header header-border justify-content-between p-0"
                >
                  <h5 class="modal-title">Edit Contact</h5>
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
                      >
                        <div class="form-upload-profile">
                          <h6 class>Profile Image <span> *</span></h6>
                          <div class="profile-pic-upload">
                            <div class="profile-pic">
                              <span
                                ><img
                                  src="assets/img/avatar/avatar-19.jpg"
                                  class="rounded-circle"
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
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Darlee"
                                />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Last Name
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Robertson"
                                />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Job Title
                                  <span class="text-danger"> *</span></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="Facility Manager"
                                />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Company Name
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
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
                                      id="user1"
                                      class="check"
                                      checked
                                    />
                                    <label
                                      for="user1"
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
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
                              <div class="input-block mb-3">
                                <label class="col-form-label"
                                  >Phone Number 2<span class="text-danger">
                                    *</span
                                  ></label
                                >
                                <input
                                  class="form-control"
                                  type="text"
                                  value="+1 895455455"
                                />
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
                                <input
                                  class="form-control"
                                  type="text"
                                  value="02-05-1998"
                                />
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
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
                            <div class="col-lg-4 col-md-6">
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
                                  >Currency
                                  <span class="text-danger">*</span></label
                                >
                                <select class="select">
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
                                  id="inputBox2"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                        action="https://smarthr.dreamstechnologies.com/laravel/template/public/contact-details"
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
                                id="test10"
                                name="radio-group"
                                checked
                              />
                              <label for="test10">Active</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test8"
                                name="radio-group"
                              />
                              <label for="test8">Private</label>
                            </div>
                            <div class="people-status-radio">
                              <input
                                type="radio"
                                class="status-radio"
                                id="test9"
                                name="radio-group"
                              />
                              <label for="test9">Inactive</label>
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
                    <p>Contact ”Jackson Daniel” from your Account</p>
                    <div class="col-lg-12 text-center form-wizard-button">
                      <a
                        href="#"
                        class="button btn-lights"
                        data-bs-dismiss="modal"
                        >Not Now</a
                      >
                      <a href="{{route('contact-details')}}" class="btn btn-primary"
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
  
  <!-- Cloudflare Email Decode -->
<script data-cfasync="false" src="{{ asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>

<!-- jQuery & Bootstrap -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- UI & Theme -->
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Cloudflare Rocket Loader -->
<script src="{{ asset('../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="798090201b2a93ab9fd2641c-|49" defer></script>

  
  
  </body>

  <!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/contact-details by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:24:48 GMT -->
</html>
