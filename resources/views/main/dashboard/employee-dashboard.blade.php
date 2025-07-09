<!DOCTYPE html>
<html
    lang="en"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none">
<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/employee-dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:21:57 GMT -->
<!-- Added by HTTrack -->
<meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template" />
    <title>Employee Dashboard - HRMS admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="page-wrapper">
            <div class="content container-fluid pb-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="employee-alert-box">
                            <div
                                class="alert alert-outline-success alert-dismissible fade show">
                                <div class="employee-alert-request">
                                    <i class="far fa-circle-question"></i>
                                    Your Leave Request on <span>“24th April 2024”</span> has
                                    been Approved!!!
                                </div>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-xmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-8 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card employee-welcome-card flex-fill">
                                    <div class="card-body">
                                        <div class="welcome-info">
                                            <div class="welcome-content">
                                                <h4>Welcome Back, Darlee</h4>
                                                <p>You have <span>4 meetings</span> today,</p>
                                            </div>
                                            <div class="welcome-img">
                                                <img
                                                    src="assets/img/avatar/avatar-19.jpg"
                                                    class="img-fluid"
                                                    alt="User" />
                                            </div>
                                        </div>
                                        <div class="welcome-btn">
                                            <a href="{{ route('profile') }}" class="btn">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card flex-fill">
                                    <div class="card-body">
                                        <div class="statistic-header">
                                            <h4>Statistics</h4>
                                            <div class="dropdown statistic-dropdown">
                                                <a
                                                    class="dropdown-toggle"
                                                    data-bs-toggle="dropdown"
                                                    href="javascript:void(0);">
                                                    Today
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        Week
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        Month
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        Year
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clock-in-info">
                                            <div class="clock-in-content">
                                                <p>Work Time</p>
                                                <h4>6 Hrs : 54 Min</h4>
                                            </div>
                                            <div class="clock-in-btn">
                                                <a href="javascript:void(0);" class="btn btn-primary">
                                                    <img
                                                        src="assets/img/icons/clock-in.svg"
                                                        alt="Icon" />
                                                    Clock-In
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clock-in-list">
                                            <ul class="nav">
                                                <li>
                                                    <p>Remaining</p>
                                                    <h6>2 Hrs 36 Min</h6>
                                                </li>
                                                <li>
                                                    <p>Overtime</p>
                                                    <h6>0 Hrs 00 Min</h6>
                                                </li>
                                                <li>
                                                    <p>Break</p>
                                                    <h6>1 Hrs 20 Min</h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="view-attendance">
                                            <a href="{{route('attendance-admin')}}">
                                                View Attendance
                                                <i class="fe fe-arrow-right-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card info-card flex-fill">
                                    <div class="card-body">
                                        <h4>Upcoming Holidays</h4>
                                        <div class="holiday-details">
                                            <div class="holiday-calendar">
                                                <div class="holiday-calendar-icon">
                                                    <img
                                                        src="assets/img/icons/holiday-calendar.svg"
                                                        alt="Icon" />
                                                </div>
                                                <div class="holiday-calendar-content">
                                                    <h6>Ramzan</h6>
                                                    <p>Mon 20 May 2024</p>
                                                </div>
                                            </div>
                                            <div class="holiday-btn">
                                                <a href="{{route('holidays')}}" class="btn">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="card flex-fill">
                                    <div class="card-body">
                                        <div class="statistic-header">
                                            <h4>Attendance & Leaves</h4>
                                            <div class="dropdown statistic-dropdown">
                                                <a
                                                    class="dropdown-toggle"
                                                    data-bs-toggle="dropdown"
                                                    href="javascript:void(0);">
                                                    2024
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        2025
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        2026
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        2027
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="attendance-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="attendance-details">
                                                        <h4 class="text-primary">9</h4>
                                                        <p>Total Leaves</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="attendance-details">
                                                        <h4 class="text-pink">5.5</h4>
                                                        <p>Leaves Taken</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="attendance-details">
                                                        <h4 class="text-success">04</h4>
                                                        <p>Leaves Absent</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="attendance-details">
                                                        <h4 class="text-purple">0</h4>
                                                        <p>Pending Approval</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="attendance-details">
                                                        <h4 class="text-info">214</h4>
                                                        <p>Working Days</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="attendance-details">
                                                        <h4 class="text-danger">2</h4>
                                                        <p>Loss of Pay</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="view-attendance">
                                            <a href="{{route('leaves-employee')}}">
                                                Apply Leave <i class="fe fe-arrow-right-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card flex-fill">
                                    <div class="card-body">
                                        <div class="statistic-header">
                                            <h4>Working hours</h4>
                                            <div class="dropdown statistic-dropdown">
                                                <a
                                                    class="dropdown-toggle"
                                                    data-bs-toggle="dropdown"
                                                    href="javascript:void(0);">
                                                    This Week
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        Last Week
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        This Month
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        Last 30 Days
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="working-hour-info">
                                            <div id="working_chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-4 col-lg-12 col-md-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="statistic-header">
                                    <h4>Important</h4>
                                    <div class="important-notification">
                                        <a href="{{route('activities')}}">
                                            View All <i class="fe fe-arrow-right-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="notification-tab">
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a
                                                href="#"
                                                class="active"
                                                data-bs-toggle="tab"
                                                data-bs-target="#notification_tab">
                                                <i class="la la-bell"></i> Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="#"
                                                data-bs-toggle="tab"
                                                data-bs-target="#schedule_tab">
                                                <i class="la la-list-alt"></i> Schedules
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="notification_tab">
                                            <div class="employee-noti-content">
                                                <ul class="employee-notification-list">
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="badge-soft-danger rounded-circle">HR</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Your leave request has been
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>02:10 PM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="badge-soft-info rounded-circle">ER</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    You’re enrolled in upcom....
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>12:40 PM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span
                                                                    class="badge-soft-warning rounded-circle">SM</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Your annual compliance trai
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>11:00 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="rounded-circle">
                                                                    <img
                                                                        src="assets/img/avatar/avatar-1.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="User" />
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Jessica has requested feedba
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>10:30 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span
                                                                    class="badge-soft-warning rounded-circle">DT</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Gentle remainder about train
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>09:00 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="badge-soft-danger rounded-circle">AU</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Our HR system will be down
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>11:50 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="schedule_tab">
                                            <div class="employee-noti-content">
                                                <ul class="employee-notification-list">
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="rounded-circle">
                                                                    <img
                                                                        src="assets/img/avatar/avatar-2.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="User" />
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    John has requested feedba
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>10:30 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="badge-soft-danger rounded-circle">HR</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Your leave request has been
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>02:10 PM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="badge-soft-info rounded-circle">ER</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    You’re enrolled in upcom....
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>12:40 PM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span
                                                                    class="badge-soft-warning rounded-circle">SM</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Your annual compliance trai
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>11:00 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span
                                                                    class="badge-soft-warning rounded-circle">DT</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Gentle remainder about train
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>09:00 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="employee-notification-grid">
                                                        <div class="employee-notification-icon">
                                                            <a href="{{route('activities')}}">
                                                                <span class="badge-soft-danger rounded-circle">AU</span>
                                                            </a>
                                                        </div>
                                                        <div class="employee-notification-content">
                                                            <h6>
                                                                <a href="{{route('activities')}}">
                                                                    Our HR system will be down
                                                                </a>
                                                            </h6>
                                                            <ul class="nav">
                                                                <li>11:50 AM</li>
                                                                <li>21 Apr 2024</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <div class="statistic-header">
                                            <h4>On Going Projects</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-end">
                                        <div class="owl-nav project-nav nav-control"></div>
                                    </div>
                                </div>
                                <div class="project-slider owl-carousel">
                                    <div class="project-grid">
                                        <div class="project-top">
                                            <h6>
                                                <a href="{{route('project-view')}}">Deadline : 10 Feb 2024</a>
                                            </h6>
                                            <h5>
                                                <a href="{{route('project-view')}}">Office Management</a>
                                            </h5>
                                            <p>
                                                Creating an online platform that enables various
                                                administrative tasks within an organization
                                            </p>
                                        </div>
                                        <div class="project-middle">
                                            <ul class="nav">
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>20</h4>
                                                        <p>Total Tasks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>15</h4>
                                                        <p>Total Completed</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="project-bottom">
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Project Leader :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-19.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Members :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Lesley Grauer"
                                                            data-bs-original-title="Lesley Grauer">
                                                            <img
                                                                src="assets/img/avatar/avatar-20.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Richard Miles"
                                                            data-bs-original-title="Richard Miles">
                                                            <img
                                                                src="assets/img/avatar/avatar-21.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Loren Gatlin"
                                                            data-bs-original-title="Loren Gatlin">
                                                            <img
                                                                src="assets/img/avatar/avatar-1.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-16.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Tarah Shropshire"
                                                            data-bs-original-title="Tarah Shropshire">
                                                            <img
                                                                src="assets/img/avatar/avatar-23.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="javascript:void(0);"
                                                            class="more-team-members">+16</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-grid">
                                        <div class="project-top">
                                            <h6>
                                                <a href="{{route('project-view')}}">Deadline : 15 Feb 2024</a>
                                            </h6>
                                            <h5>
                                                <a href="{{route('project-view')}}">Video Calling App</a>
                                            </h5>
                                            <p>
                                                Design and developing a software application that
                                                enables users to make video calls over the internet.
                                            </p>
                                        </div>
                                        <div class="project-middle">
                                            <ul class="nav">
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>30</h4>
                                                        <p>Total Tasks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>12</h4>
                                                        <p>Total Completed</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="project-bottom">
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Project Leader :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Catherine Manseau"
                                                            data-bs-original-title="Catherine Manseau">
                                                            <img
                                                                src="assets/img/avatar/avatar-18.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Members :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Richard Miles"
                                                            data-bs-original-title="Richard Miles">
                                                            <img
                                                                src="assets/img/avatar/avatar-21.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-16.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Lesley Grauer"
                                                            data-bs-original-title="Lesley Grauer">
                                                            <img
                                                                src="assets/img/avatar/avatar-20.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Loren Gatlin"
                                                            data-bs-original-title="Loren Gatlin">
                                                            <img
                                                                src="assets/img/avatar/avatar-1.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Tarah Shropshire"
                                                            data-bs-original-title="Tarah Shropshire">
                                                            <img
                                                                src="assets/img/avatar/avatar-23.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="javascript:void(0);"
                                                            class="more-team-members">+10</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-grid">
                                        <div class="project-top">
                                            <h6>
                                                <a href="{{route('project-view')}}">Deadline : 12 Apr 2024</a>
                                            </h6>
                                            <h5>
                                                <a href="{{route('project-view')}}">Hospital Administration</a>
                                            </h5>
                                            <p>
                                                Creating an online platform that serves as a central
                                                hub for hospital admin, staff, patients.
                                            </p>
                                        </div>
                                        <div class="project-middle">
                                            <ul class="nav">
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>40</h4>
                                                        <p>Total Tasks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>02</h4>
                                                        <p>Total Completed</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="project-bottom">
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Project Leader :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="John Smith"
                                                            data-bs-original-title="John Smith">
                                                            <img
                                                                src="assets/img/avatar/avatar-4.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Members :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Richard Miles"
                                                            data-bs-original-title="Richard Miles">
                                                            <img
                                                                src="assets/img/avatar/avatar-6.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-13.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Lesley Grauer"
                                                            data-bs-original-title="Lesley Grauer">
                                                            <img
                                                                src="assets/img/avatar/avatar-18.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Tarah Shropshire"
                                                            data-bs-original-title="Tarah Shropshire">
                                                            <img
                                                                src="assets/img/avatar/avatar-23.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Loren Gatlin"
                                                            data-bs-original-title="Loren Gatlin">
                                                            <img
                                                                src="assets/img/avatar/avatar-1.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="javascript:void(0);"
                                                            class="more-team-members">+12</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-grid">
                                        <div class="project-top">
                                            <h6>
                                                <a href="{{route('project-view')}}">Deadline : 25 Apr 2024</a>
                                            </h6>
                                            <h5>
                                                <a href="{{route('project-view')}}">Digital Marketpace</a>
                                            </h5>
                                            <p>
                                                Creating an online platform that connects sellers with
                                                buyers, facilitating the exchange of goods,
                                            </p>
                                        </div>
                                        <div class="project-middle">
                                            <ul class="nav">
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>50</h4>
                                                        <p>Total Tasks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>10</h4>
                                                        <p>Total Completed</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="project-bottom">
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Project Leader :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-1.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Members :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Loren Gatlin"
                                                            data-bs-original-title="Loren Gatlin">
                                                            <img
                                                                src="assets/img/avatar/avatar-26.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Lesley Grauer"
                                                            data-bs-original-title="Lesley Grauer">
                                                            <img
                                                                src="assets/img/avatar/avatar-18.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Richard Miles"
                                                            data-bs-original-title="Richard Miles">
                                                            <img
                                                                src="assets/img/avatar/avatar-6.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-13.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Tarah Shropshire"
                                                            data-bs-original-title="Tarah Shropshire">
                                                            <img
                                                                src="assets/img/avatar/avatar-8.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="javascript:void(0);"
                                                            class="more-team-members">+13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-grid">
                                        <div class="project-top">
                                            <h6>
                                                <a href="{{route('project-view')}}">Deadline : 15 Feb 2024</a>
                                            </h6>
                                            <h5>
                                                <a href="{{route('project-view')}}">Video Calling App</a>
                                            </h5>
                                            <p>
                                                Design and developing a software application that
                                                enables users to make video calls over the internet.
                                            </p>
                                        </div>
                                        <div class="project-middle">
                                            <ul class="nav">
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>30</h4>
                                                        <p>Total Tasks</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="project-tasks">
                                                        <h4>12</h4>
                                                        <p>Total Completed</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="project-bottom">
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Project Leader :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Catherine Manseau"
                                                            data-bs-original-title="Catherine Manseau">
                                                            <img
                                                                src="assets/img/avatar/avatar-18.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="project-leader">
                                                <ul class="nav">
                                                    <li>Members :</li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Richard Miles"
                                                            data-bs-original-title="Richard Miles">
                                                            <img
                                                                src="assets/img/avatar/avatar-21.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Jeffery Lalor"
                                                            data-bs-original-title="Jeffery Lalor">
                                                            <img
                                                                src="assets/img/avatar/avatar-16.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Lesley Grauer"
                                                            data-bs-original-title="Lesley Grauer">
                                                            <img
                                                                src="assets/img/avatar/avatar-20.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Loren Gatlin"
                                                            data-bs-original-title="Loren Gatlin">
                                                            <img
                                                                src="assets/img/avatar/avatar-1.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="{{route('project-view')}}"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Tarah Shropshire"
                                                            data-bs-original-title="Tarah Shropshire">
                                                            <img
                                                                src="assets/img/avatar/avatar-23.jpg"
                                                                alt="User" />
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="javascript:void(0);"
                                                            class="more-team-members">+10</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12 d-flex">
                        <div class="card employee-month-card flex-fill">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-md-12">
                                        <div class="employee-month-details">
                                            <h4>Employee of the month</h4>
                                            <p>
                                                We are really proud of the difference you have made
                                                which gives everybody the reason to applaud &
                                                appreciate
                                            </p>
                                        </div>
                                        <div class="employee-month-content">
                                            <h6>Congrats, Hanna</h6>
                                            <p>UI/UX Team Lead</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="employee-month-img">
                                            <img
                                                src="assets/img/employee-img.png"
                                                class="img-fluid"
                                                alt="User" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <div class="statistic-header">
                                            <h4>Company Policy</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-end">
                                        <div class="owl-nav company-nav nav-control"></div>
                                    </div>
                                </div>
                                <div class="company-slider owl-carousel">
                                    <div class="company-grid company-soft-tertiary">
                                        <div class="company-top">
                                            <div class="company-icon">
                                                <span class="company-icon-tertiary rounded-circle">HR</span>
                                            </div>
                                            <div class="company-link">
                                                <a href="{{route('companies')}}">HR Policy</a>
                                            </div>
                                        </div>
                                        <div class="company-bottom d-flex">
                                            <ul>
                                                <li>Policy Name : Work policy</li>
                                                <li>Updated on : Today</li>
                                            </ul>
                                            <div class="company-bottom-links">
                                                <a href="#"><i class="la la-download"></i></a>
                                                <a href="#"><i class="la la-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="company-grid company-soft-success">
                                        <div class="company-top">
                                            <div class="company-icon">
                                                <span class="company-icon-success rounded-circle">EP</span>
                                            </div>
                                            <div class="company-link">
                                                <a href="{{route('companies')}}">Employer Policy</a>
                                            </div>
                                        </div>
                                        <div class="company-bottom d-flex">
                                            <ul>
                                                <li>Policy Name : Parking</li>
                                                <li>Updated on : 25 Jan 2024</li>
                                            </ul>
                                            <div class="company-bottom-links">
                                                <a href="#"><i class="la la-download"></i></a>
                                                <a href="#"><i class="la la-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="company-grid company-soft-info">
                                        <div class="company-top">
                                            <div class="company-icon">
                                                <span class="company-icon-info rounded-circle">LP</span>
                                            </div>
                                            <div class="company-link">
                                                <a href="{{route('companies')}}">Leave Policy</a>
                                            </div>
                                        </div>
                                        <div class="company-bottom d-flex">
                                            <ul>
                                                <li>Policy Name : Annual Leave</li>
                                                <li>Updated on : 25 Jan 2023</li>
                                            </ul>
                                            <div class="company-bottom-links">
                                                <a href="#"><i class="la la-download"></i></a>
                                                <a href="#"><i class="la la-eye"></i></a>
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
    </div>

    <div class="settings-icon">
        <span
            data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas"
            aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span>
    </div>
    <div
        class="offcanvas offcanvas-end border-0"
        tabindex="-1"
        id="theme-settings-offcanvas">
        <div class="sidebar-headerset">
            <div class="sidebar-headersets">
                <h2>Customizer</h2>
                <h3>Customize your overview Page layout</h3>
            </div>
            <div class="sidebar-headerclose">
                <a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="Close Icon" /></a>
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
                                    class="form-check-input" />
                                <label
                                    class="form-check-label avatar-md w-100"
                                    for="customizer-layout01">
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
                                    class="form-check-input" />
                                <label
                                    class="form-check-label avatar-md w-100"
                                    for="customizer-layout02">
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
                                    class="form-check-input" />
                                <label
                                    class="form-check-label avatar-md w-100"
                                    for="customizer-layout03">
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
                                        value="orange" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-mode-orange">
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
                                        value="light" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-mode-light">
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
                                        value="dark" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-mode-dark">
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
                                        value="blue" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-mode-blue">
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
                                        value="maroon" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-mode-maroon">
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
                                        value="purple" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-mode-purple">
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
                                        value="fluid" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="layout-width-fluid">
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
                                        value="boxed" />
                                    <label
                                        class="form-check-label avatar-md w-100 px-2"
                                        for="layout-width-boxed">
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
                            role="group">
                            <input
                                type="radio"
                                class="btn-check"
                                name="data-layout-position"
                                id="layout-position-fixed"
                                value="fixed" />
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
                            <input
                                type="radio"
                                class="btn-check"
                                name="data-layout-position"
                                id="layout-position-scrollable"
                                value="scrollable" />
                            <label
                                class="btn btn-light w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
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
                                    value="light" />
                                <label
                                    class="form-check-label avatar-md w-100"
                                    for="topbar-color-light">
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
                                    value="dark" />
                                <label
                                    class="form-check-label avatar-md w-100"
                                    for="topbar-color-dark">
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
                                        value="lg" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-size-default">
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
                                        value="md" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-size-compact">
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
                                        value="sm-hover" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-size-small-hover">
                                        <img
                                            src="assets/img/small-hover.png"
                                            alt="Layout Image" />
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
                                        value="default" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-view-default">
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
                                        value="detached" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-view-detached">
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
                                    data-bs-target="#collapseBgGradient.show">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="data-sidebar"
                                        id="sidebar-color-light"
                                        value="light" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-color-light">
                                        <span class="bg-light bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div
                                    class="form-check sidebar-setting card-radio p-0"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="data-sidebar"
                                        id="sidebar-color-dark"
                                        value="dark" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-color-dark">
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
                                        value="gradient" />
                                    <label
                                        class="form-check-label avatar-md w-100"
                                        for="sidebar-color-gradient">
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
                                    aria-expanded="false">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span
                                                class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span
                                                    class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                <span
                                                    class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span
                                                    class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span
                                                    class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
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
                        id="reset-layout">
                        Reset
                    </button>
                </div>
                <div class="col-6">
                    <a
                        href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150"
                        target="_blank"
                        class="btn btn-primary w-100 bor-rad-50">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

    <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js/greedynav.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/employee-dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:18 GMT -->

</html>