<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/project-view by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:24:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Project View - HRMS admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Hospital Admin</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Project</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-plus"></i> Edit
                                Project</a>
                            <a href="{{ route('task-board') }}" class="btn btn-white float-end me-3" data-bs-toggle="tooltip" title="Task Board"><i class="fa-solid fa-bars"></i></a>
                            <div class="view-icons">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="project-title">
                                    <h5 class="card-title">Hospital Administration</h5>
                                    <small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">open
                                            tasks, </span><span class="text-xs">5</span> <span class="text-muted">tasks
                                            completed</span></small>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti
                                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                                    libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id
                                    pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique
                                    lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et
                                    pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam
                                    aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus
                                    nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa
                                    porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum
                                    at. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti
                                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                                    libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id
                                    pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique
                                    lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et
                                    pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam
                                    aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus
                                    nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa
                                    porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum
                                    at. </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-20">Uploaded image files</h5>
                                <div class="row">
                                    <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                        <div class="uploaded-box">
                                            <div class="uploaded-img">
                                                <img src="assets/img/placeholder.jpg" class="img-fluid" alt>
                                            </div>
                                            <div class="uploaded-img-name">
                                                demo.png
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                        <div class="uploaded-box">
                                            <div class="uploaded-img">
                                                <img src="assets/img/placeholder.jpg" class="img-fluid" alt>
                                            </div>
                                            <div class="uploaded-img-name">
                                                demo.png
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                        <div class="uploaded-box">
                                            <div class="uploaded-img">
                                                <img src="assets/img/placeholder.jpg" class="img-fluid" alt>
                                            </div>
                                            <div class="uploaded-img-name">
                                                demo.png
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                                        <div class="uploaded-box">
                                            <div class="uploaded-img">
                                                <img src="assets/img/placeholder.jpg" class="img-fluid" alt>
                                            </div>
                                            <div class="uploaded-img-name">
                                                demo.png
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-20">Uploaded files</h5>
                                <ul class="files-list">
                                    <li>
                                        <div class="files-cont">
                                            <div class="file-type">
                                                <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                            </div>
                                            <div class="files-info">
                                                <span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application
                                                        Test-Cases.xls</a></span>
                                                <span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                <div class="file-size">Size: 14.8Mb</div>
                                            </div>
                                            <ul class="files-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href class="dropdown-toggle btn btn-link" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#share_files">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="files-cont">
                                            <div class="file-type">
                                                <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                            </div>
                                            <div class="files-info">
                                                <span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application
                                                        Test-Cases.xls</a></span>
                                                <span class="file-author"><a href="#">Richard Miles</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                                <div class="file-size">Size: 14.8Mb</div>
                                            </div>
                                            <ul class="files-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href class="dropdown-toggle btn btn-link" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#share_files">Share</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="project-task">
                            <ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
                                <li class="nav-item"><a class="nav-link active" href="#all_tasks" data-bs-toggle="tab" aria-expanded="true">All Tasks</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pending_tasks" data-bs-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
                                <li class="nav-item"><a class="nav-link" href="#completed_tasks" data-bs-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="all_tasks">
                                    <div class="task-wrapper">
                                        <div class="task-list-container">
                                            <div class="task-list-body">
                                                <ul id="task-list">
                                                    <li class="task">
                                                        <div class="task-container">
                                                            <span class="task-action-btn task-check">
                                                                <span class="action-circle large complete-btn" title="Mark Complete">
                                                                    <i class="material-icons">check</i>
                                                                </span>
                                                            </span>
                                                            <span class="task-label" contenteditable="true">Patient appointment
                                                                booking</span>
                                                            <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                                <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="task">
                                                        <div class="task-container">
                                                            <span class="task-action-btn task-check">
                                                                <span class="action-circle large complete-btn" title="Mark Complete">
                                                                    <i class="material-icons">check</i>
                                                                </span>
                                                            </span>
                                                            <span class="task-label" contenteditable="true">Appointment booking with
                                                                payment gateway</span>
                                                            <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                                <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="completed task">
                                                        <div class="task-container">
                                                            <span class="task-action-btn task-check">
                                                                <span class="action-circle large complete-btn" title="Mark Complete">
                                                                    <i class="material-icons">check</i>
                                                                </span>
                                                            </span>
                                                            <span class="task-label">Doctor available module</span>
                                                            <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                                <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="task">
                                                        <div class="task-container">
                                                            <span class="task-action-btn task-check">
                                                                <span class="action-circle large complete-btn" title="Mark Complete">
                                                                    <i class="material-icons">check</i>
                                                                </span>
                                                            </span>
                                                            <span class="task-label" contenteditable="true">Patient and Doctor video
                                                                conferencing</span>
                                                            <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                                <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="task">
                                                        <div class="task-container">
                                                            <span class="task-action-btn task-check">
                                                                <span class="action-circle large complete-btn" title="Mark Complete">
                                                                    <i class="material-icons">check</i>
                                                                </span>
                                                            </span>
                                                            <span class="task-label" contenteditable="true">Private chat module</span>
                                                            <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                                <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="task">
                                                        <div class="task-container">
                                                            <span class="task-action-btn task-check">
                                                                <span class="action-circle large complete-btn" title="Mark Complete">
                                                                    <i class="material-icons">check</i>
                                                                </span>
                                                            </span>
                                                            <span class="task-label" contenteditable="true">Patient Profile add</span>
                                                            <span class="task-action-btn task-btn-right">
                                                                <span class="action-circle large" title="Assign">
                                                                    <i class="material-icons">person_add</i>
                                                                </span>
                                                                <span class="action-circle large delete-btn" title="Delete Task">
                                                                    <i class="material-icons">delete</i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="task-list-footer">
                                                <div class="new-task-wrapper">
                                                    <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                                                    <span class="error-message hidden">You need to enter a task first</span>
                                                    <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                                    <span class="btn" id="close-task-panel">Close</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pending_tasks"></div>
                                <div class="tab-pane" id="completed_tasks"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title m-b-15">Project details</h6>
                                <table class="table table-striped table-border">
                                    <tbody>
                                        <tr>
                                            <td>Cost:</td>
                                            <td class="text-end">$1200</td>
                                        </tr>
                                        <tr>
                                            <td>Total Hours:</td>
                                            <td class="text-end">100 Hours</td>
                                        </tr>
                                        <tr>
                                            <td>Created:</td>
                                            <td class="text-end">25 Feb, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Deadline:</td>
                                            <td class="text-end">12 Jun, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>Priority:</td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="#" class="badge badge-danger dropdown-toggle" data-bs-toggle="dropdown">Highest </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Highest priority</a>
                                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> High priority</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-primary"></i> Normal priority</a>
                                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Low priority</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Created by:</td>
                                            <td class="text-end"><a href="{{route('profile')}}">Barry Cuda</a></td>
                                        </tr>
                                        <tr>
                                            <td>Status:</td>
                                            <td class="text-end">Working</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-success" role="progressbar" data-bs-toggle="tooltip" title="40%" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card project-user">
                            <div class="card-body">
                                <h6 class="card-title m-b-20">Assigned Leader <button type="button" class="float-end btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#assign_leader"><i class="fa fa-plus"></i> Add</button></h6>
                                <ul class="list-box">
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar"><img alt src="assets/img/profiles/avatar-11.jpg"></span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Wilmer Deluna</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Team Leader</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar"><img alt src="assets/img/profiles/avatar-01.jpg"></span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Lesley Grauer</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Team Leader</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card project-user">
                            <div class="card-body">
                                <h6 class="card-title m-b-20">
                                    Assigned users
                                    <button type="button" class="float-end btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#assign_user"><i class="fa fa-plus"></i> Add</button>
                                </h6>
                                <ul class="list-box">
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar"><img alt src="assets/img/profiles/avatar-02.jpg"></span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">John Doe</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <div class="list-item">
                                                <div class="list-left">
                                                    <span class="avatar"><img alt src="assets/img/profiles/avatar-09.jpg"></span>
                                                </div>
                                                <div class="list-body">
                                                    <span class="message-author">Richard Miles</span>
                                                    <div class="clearfix"></div>
                                                    <span class="message-content">Web Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="assign_leader" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Assign Leader to this project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group m-b-30">
                                <input placeholder="Search to add a leader" class="form-control search-input" type="text">
                                <button class="btn btn-primary">Search</button>
                            </div>
                            <div>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></span>
                                                <div class="media-body align-self-center text-nowrap">
                                                    <div class="user-name">Richard Miles</div>
                                                    <span class="designation">Web Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></span>
                                                <div class="media-body align-self-center text-nowrap">
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
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                </span>
                                                <div class="media-body align-self-center text-nowrap">
                                                    <div class="user-name">Jeffery Lalor</div>
                                                    <span class="designation">Team Leader</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="assign_user" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Assign the user to this project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group m-b-30">
                                <input placeholder="Search a user to assign" class="form-control search-input" type="text">
                                <button class="btn btn-primary">Search</button>
                            </div>
                            <div>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></span>
                                                <div class="media-body align-self-center text-nowrap">
                                                    <div class="user-name">Richard Miles</div>
                                                    <span class="designation">Web Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></span>
                                                <div class="media-body align-self-center text-nowrap">
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
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                </span>
                                                <div class="media-body align-self-center text-nowrap">
                                                    <div class="user-name">Jeffery Lalor</div>
                                                    <span class="designation">Team Leader</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="edit_project" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Project Name</label>
                                            <input class="form-control" value="Project Management" type="text">
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
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">End Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Rate</label>
                                            <input placeholder="$50" class="form-control" value="$5000" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">&nbsp;</label>
                                            <select class="select">
                                                <option>Hourly</option>
                                                <option selected>Fixed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Priority</label>
                                            <select class="select">
                                                <option selected>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Add Project Leader</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Team Leader</label>
                                            <div class="project-members">
                                                <a class="avatar" href="#" data-bs-toggle="tooltip" title="Jeffery Lalor">
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Add Team</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Team Members</label>
                                            <div class="project-members">
                                                <a class="avatar" href="#" data-bs-toggle="tooltip" title="John Doe">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                </a>
                                                <a class="avatar" href="#" data-bs-toggle="tooltip" title="Richard Miles">
                                                    <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                </a>
                                                <a class="avatar" href="#" data-bs-toggle="tooltip" title="John Smith">
                                                    <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                </a>
                                                <a class="avatar" href="#" data-bs-toggle="tooltip" title="Mike Litorus">
                                                    <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
                                                </a>
                                                <span class="all-team">+2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Description</label>
                                    <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Upload Files</label>
                                    <input class="form-control" type="file">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Save</button>
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
        <span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span>
    </div>
    <div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas">
        <div class="sidebar-headerset">
            <div class="sidebar-headersets">
                <h2>Customizer</h2>
                <h3>Customize your overview Page layout</h3>
            </div>
            <div class="sidebar-headerclose">
                <a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="Close Icon"></a>
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
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label avatar-md w-100" for="customizer-layout01">
                                    <img src="assets/img/vertical.png" alt="Layout Image">
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio p-0">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label  avatar-md w-100" for="customizer-layout02">
                                    <img src="assets/img/horizontal.png" alt="Layout Image">
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio p-0">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
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
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange">
                                    <label class="form-check-label  avatar-md w-100 " for="layout-mode-orange">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Orange</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
                                    <label class="form-check-label  avatar-md w-100" for="layout-mode-light">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio dark  p-0 ">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label avatar-md w-100 " for="layout-mode-dark">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio blue  p-0 ">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue">
                                    <label class="form-check-label  avatar-md w-100" for="layout-mode-blue">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Blue</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio maroon p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon">
                                    <label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Maroon</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio purple p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple">
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
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label avatar-md w-100" for="layout-width-fluid">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio p-0 ">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
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
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <div class="layout-head pt-3">
                        <h5>Topbar Color</h5>
                        <h6>Choose Light or Dark Topbar Color.</h6>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio  p-0">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="form-check-label avatar-md w-100" for="topbar-color-light">
                                    <img src="assets/img/vertical.png" alt="Layout Image">
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio p-0">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
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
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-size-default">
                                        <img src="assets/img/vertical.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-size-compact">
                                        <img src="assets/img/compact.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0 ">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
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
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-view-default">
                                        <img src="assets/img/compact.png" alt="Layout Image">
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
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
                                <div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-color-light">
                                        <span class="bg-light bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label  avatar-md w-100" for="sidebar-color-dark">
                                        <span class="bg-darks bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio p-0">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label avatar-md w-100" for="sidebar-color-gradient">
                                        <span class="bg-gradients bg-sidebarcolor"></span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                            </div>
                            <div class="col-4 d-none">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false">
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
                    <a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Core JS Libraries -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/task.js') }}"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Template Scripts -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js/greedynav.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Cloudflare Rocket Loader (Optional) -->
    <script src="{{ asset('../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="d92f15482f43b441c5170c82-|49" defer></script>


</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/project-view by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:24:46 GMT -->

</html>