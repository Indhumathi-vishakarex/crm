<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/shift-scheduling by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Shift & Schedule - HRMS admin template</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

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
                        <div class="col">
                            <h3 class="page-title">Daily Scheduling</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item">Employees</li>
                                <li class="breadcrumb-item active">Shift Scheduling</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="{{route('shift-list')}}" class="btn add-btn m-r-5">Shifts</a>
                            <a href="#" class="btn add-btn m-r-5" data-bs-toggle="modal"
                                data-bs-target="#add_schedule">
                                Assign Shifts</a>
                        </div>
                    </div>
                </div>


                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Employee</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus select-focus">
                            <select class="select floating">
                                <option>All Department</option>
                                <option value="1">Finance</option>
                                <option value="2">Finance and Management</option>
                                <option value="3">Hr & Finance</option>
                                <option value="4">ITech</option>
                            </select>
                            <label class="focus-label">Department</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="input-block mb-3 form-focus focused">
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                            <label class="focus-label">From</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="input-block mb-3 form-focus focused">
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" type="text">
                            </div>
                            <label class="focus-label">To</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <a href="#" class="btn btn-success w-100"> Search </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Scheduled Shift</th>
                                        <th>Fri 21</th>
                                        <th>Sat 22</th>
                                        <th>Sun 23</th>
                                        <th>Mon 24</th>
                                        <th>Tue 25</th>
                                        <th>Wed 26</th>
                                        <th>Thu 27</th>
                                        <th>Fri 28</th>
                                        <th>Sat 29</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-02.jpg"></a>
                                                <a href="{{route('profile')}}">John Doe <span>Web Designer</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-09.jpg"></a>
                                                <a href="{{route('profile')}}">Richard Miles <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-10.jpg"></a>
                                                <a href="{{route('profile')}}">John Smith <span>Android Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-05.jpg"></a>
                                                <a href="{{route('profile')}}">Mike Litorus <span>IOS Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-11.jpg"></a>
                                                <a href="{{route('profile')}}">Wilmer Deluna <span>Team Leader</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-12.jpg"></a>
                                                <a href="{{route('profile')}}">Jeffrey Warden <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="{{route('profile')}}" class="avatar"><img alt
                                                        src="assets/img/profiles/avatar-13.jpg"></a>
                                                <a href="{{route('profile')}}">Bernardo Galaviz <span>Web Developer</span></a>
                                            </h2>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <h2>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_schedule"
                                                        style="border:2px dashed #1eb53a">
                                                        <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs
                                                            15 mins)</span>
                                                        <span class="userrole-info">Web Designer - SMARTHR</span>
                                                    </a>
                                                </h2>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="user-add-shedule-list">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#add_schedule">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </a>
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


        <div id="add_schedule" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Schedule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Department <span
                                                class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value>Select</option>
                                            <option value>Development</option>
                                            <option value="1">Finance</option>
                                            <option value="2">Finance and Management</option>
                                            <option value="3">Hr & Finance</option>
                                            <option value="4">ITech</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Employee Name <span
                                                class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value>Select </option>
                                            <option value="1">Richard Miles </option>
                                            <option value="2">John Smith</option>
                                            <option value="3">Mike Litorus </option>
                                            <option value="4">Wilmer Deluna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Date</label>
                                        <div class="cal-icon"><input class="form-control datetimepicker"
                                                type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Shifts <span
                                                class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value>Select </option>
                                            <option value="1">10'o clock Shift</option>
                                            <option value="2">10:30 shift</option>
                                            <option value="3">Daily Shift </option>
                                            <option value="4">New Shift</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Min Start Time <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group time">
                                            <input class="form-control timepicker"><span class="input-group-text"><i
                                                    class="fa-regular fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Start Time <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group time">
                                            <input class="form-control timepicker"><span class="input-group-text"><i
                                                    class="fa-regular fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Max Start Time <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group time">
                                            <input class="form-control timepicker"><span class="input-group-text"><i
                                                    class="fa-regular fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Min End Time <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group time">
                                            <input class="form-control timepicker"><span class="input-group-text"><i
                                                    class="fa-regular fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">End Time <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group time">
                                            <input class="form-control timepicker"><span class="input-group-text"><i
                                                    class="fa-regular fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Max End Time <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group time">
                                            <input class="form-control timepicker"><span class="input-group-text"><i
                                                    class="fa-regular fa-clock"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Break Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Accept Extra Hours </label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="customSwitch1"
                                                checked>
                                            <label class="form-check-label" for="customSwitch1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Publish </label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="customSwitch2"
                                                checked>
                                            <label class="form-check-label" for="customSwitch2"></label>
                                        </div>
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


        <div id="edit_schedule" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Schedule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Department <span
                                                class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value>Select</option>
                                            <option selected value>Development</option>
                                            <option value="1">Finance</option>
                                            <option value="2">Finance and Management</option>
                                            <option value="3">Hr & Finance</option>
                                            <option value="4">ITech</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Employee Name <span
                                                class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value>Select </option>
                                            <option selected value="1">Richard Miles </option>
                                            <option value="2">John Smith</option>
                                            <option value="3">Mike Litorus </option>
                                            <option value="4">Wilmer Deluna</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Date <span
                                                class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker"
                                                type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Shifts <span
                                                class="text-danger">*</span></label>
                                        <select class="select">
                                            <option value>Select </option>
                                            <option value="1">10'o clock Shift</option>
                                            <option value="2">10:30 shift</option>
                                            <option value="3">Daily Shift </option>
                                            <option selected value="4">New Shift</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Min Start Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="06:11 am">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Start Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="06:30 am">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Max Start Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="08:12 am">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Min End Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="09:12 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">End Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="09:30 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Max End Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="09:45 pm">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Break Time <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control timepicker" type="text" value="45">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Recurring Shift</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Repeat Every</label>
                                        <select class="select">
                                            <option value>1 </option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option selected value="4">5</option>
                                            <option value="3">6</option>
                                        </select>
                                        <label class="col-form-label">Week(s)</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-3 wday-box">
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="monday" class="days recurring" checked
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Monday</span></label>
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="tuesday" class="days recurring" checked
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Tuesday</span></label>
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="wednesday" class="days recurring" checked
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Wednesday</span></label>
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="thursday" class="days recurring" checked
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Thursday</span></label>
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="friday" class="days recurring" checked
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Friday</span></label>
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="saturday" class="days recurring"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Saturday</span></label>
                                        <label class="checkbox-inline"><input type="checkbox" name="week_days[]"
                                                value="sunday" class="days recurring"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; return false;"
                                                data-cf-modified-5ae0bf2711d6f8021690ed02-><span
                                                class="checkmark ms-1">Sunday</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">End On <span
                                                class="text-danger">*</span></label>
                                        <div class="cal-icon"><input class="form-control datetimepicker"
                                                type="text"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">Indefinite</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Accept Extra Hours </label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="customSwitch3"
                                                checked>
                                            <label class="form-check-label" for="customSwitch3"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Publish </label>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" id="customSwitch4"
                                                checked>
                                            <label class="form-check-label" for="customSwitch4"></label>
                                        </div>
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

    </div>
    </div>

    </div>

    <div class="settings-icon">
        <span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
            aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span>
    </div>
    <div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas">
        <div class="sidebar-headerset">
            <div class="sidebar-headersets">
                <h2>Customizer</h2>
                <h3>Customize your overview Page layout</h3>
            </div>
            <div class="sidebar-headerclose">
                <a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png"
                        alt="Close Icon"></a>
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
                                <input id="customizer-layout01" name="data-layout" type="radio"
                                    value="vertical" class="form-check-input">
                                <label class="form-check-label avatar-md w-100" for="customizer-layout01">
                                    <img src="assets/img/vertical.png" alt="Layout Image">
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio p-0">
                                <input id="customizer-layout02" name="data-layout" type="radio"
                                    value="horizontal" class="form-check-input">
                                <label class="form-check-label  avatar-md w-100" for="customizer-layout02">
                                    <img src="assets/img/horizontal.png" alt="Layout Image">
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio p-0">
                                <input id="customizer-layout03" name="data-layout" type="radio"
                                    value="twocolumn" class="form-check-input">
                                <label class="form-check-label  avatar-md w-100" for="customizer-layout03">
                                    <img src="assets/img/two-col.png" alt="Layout Image">
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
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-orange" value="orange">
                                    <label class="form-check-label  avatar-md w-100 " for="layout-mode-orange">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Orange</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-light" value="light">
                                    <label class="form-check-label  avatar-md w-100" for="layout-mode-light">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio dark  p-0 ">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-dark" value="dark">
                                    <label class="form-check-label avatar-md w-100 " for="layout-mode-dark">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio blue  p-0 ">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-blue" value="blue">
                                    <label class="form-check-label  avatar-md w-100" for="layout-mode-blue">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Blue</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio maroon p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-maroon" value="maroon">
                                    <label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Maroon</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio purple p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-mode"
                                        id="layout-mode-purple" value="purple">
                                    <label class="form-check-label  avatar-md w-100 " for="layout-mode-purple">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
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
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label avatar-md w-100" for="layout-width-fluid">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio p-0 ">
                                    <input class="form-check-input" type="radio" name="data-layout-width"
                                        id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed">
                                        <img src="assets/img/boxed.png" alt="Layout Image">
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
                        <div class="btn-group bor-rad-50 overflow-hidden radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
                            <input type="radio" class="btn-check" name="data-layout-position"
                                id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0"
                                for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <div class="layout-head pt-3">
                        <h5>Topbar Color</h5>
                        <h6>Choose Light or Dark Topbar Color.</h6>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio  p-0">
                                <input class="form-check-input" type="radio" name="data-topbar"
                                    id="topbar-color-light" value="light">
                                <label class="form-check-label avatar-md w-100" for="topbar-color-light">
                                    <img src="assets/img/vertical.png" alt="Layout Image">
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio p-0">
                                <input class="form-check-input" type="radio" name="data-topbar"
                                    id="topbar-color-dark" value="dark">
                                <label class="form-check-label  avatar-md w-100" for="topbar-color-dark">
                                    <img src="assets/img/dark.png" alt="Layout Image">
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
                                <div class="form-check sidebar-setting card-radio  p-0 ">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-default" value="lg">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-size-default">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-compact" value="md">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-size-compact">
                                        <img src="assets/img/compact.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0 ">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size"
                                        id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover">
                                        <img src="assets/img/small-hover.png" alt="Layout Image">
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
                                <div class="form-check sidebar-setting card-radio  p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-default" value="default">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-view-default">
                                        <img src="assets/img/compact.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-style"
                                        id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-view-detached">
                                        <img src="assets/img/detached.png" alt="Layout Image">
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
                                <div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-light" value="light">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-color-light">
                                        <span class="bg-light bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse"
                                    data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-color-dark">
                                        <span class="bg-darks bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-sidebar"
                                        id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-color-gradient">
                                        <span class="bg-gradients bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                            </div>
                            <div class="col-4 d-none">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient"
                                    aria-expanded="false">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
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
                    <button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150"
                        target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a>
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
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Keep this external script as-is -->
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="5ae0bf2711d6f8021690ed02-|49" defer></script>



</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/shift-scheduling by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:39 GMT -->

</html>
