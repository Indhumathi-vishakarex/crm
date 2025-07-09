<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/task-board by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Task Board - HRMS admin template</title>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Hospital Admin</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Task Board</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="row board-view-header">
                    <div class="col-4">
                        <div class="pro-teams">
                            <div class="pro-team-lead">
                                <h4>Lead</h4>
                                <div class="avatar-group">
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                            src="assets/img/profiles/avatar-11.jpg">
                                    </div>
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                            src="assets/img/profiles/avatar-01.jpg">
                                    </div>
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                            src="assets/img/profiles/avatar-16.jpg">
                                    </div>
                                    <div class="avatar">
                                        <a href class="avatar-title rounded-circle border border-white"
                                            data-bs-toggle="modal" data-bs-target="#assign_leader"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-team-members">
                                <h4>Team</h4>
                                <div class="avatar-group">
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                            src="assets/img/profiles/avatar-02.jpg">
                                    </div>
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                            src="assets/img/profiles/avatar-09.jpg">
                                    </div>
                                    <div class="avatar">
                                        <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                            src="assets/img/profiles/avatar-12.jpg">
                                    </div>
                                    <div class="avatar">
                                        <a href class="avatar-title rounded-circle border border-white"
                                            data-bs-toggle="modal" data-bs-target="#assign_user"><i
                                                class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 text-end">
                        <a href="#" class="btn btn-white float-end ms-2" data-bs-toggle="modal"
                            data-bs-target="#add_task_board"><i class="fa fa-plus"></i> Create List</a>
                        <a href="{{route('project-view')}}" class="btn btn-white float-end" title="View Board"><i
                                class="fa fa-link"></i></a>
                    </div>
                    <div class="col-12">
                        <div class="pro-progress">
                            <div class="pro-progress-bar">
                                <h4>Progress</h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%">
                                    </div>
                                </div>
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kanban-board card mb-0">
                    <div class="card-body">
                        <div class="kanban-cont">
                            <div class="kanban-list kanban-danger">
                                <div class="kanban-header">
                                    <span class="status-title">Pending</span>
                                    <div class="dropdown kanban-action">
                                        <a href data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_board">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-wrap">
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-danger">High</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Make a
                                                        wireframe</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-success">Low</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                        <span class="task-user-count">+2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-warning">Normal</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                        <span class="task-user-count">+2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-task">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_task_modal">Add New
                                        Task</a>
                                </div>
                            </div>
                            <div class="kanban-list kanban-info">
                                <div class="kanban-header">
                                    <span class="status-title">Progress</span>
                                    <div class="dropdown kanban-action">
                                        <a href data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_board">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-wrap">
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-warning">Normal</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-danger">High</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                        <span class="task-user-count">+2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-task">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_task_modal">Add New
                                        Task</a>
                                </div>
                            </div>
                            <div class="kanban-list kanban-success">
                                <div class="kanban-header">
                                    <span class="status-title">Completed</span>
                                    <div class="dropdown kanban-action">
                                        <a href data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_board">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-wrap ks-empty">
                                </div>
                                <div class="add-new-task">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_task_modal">Add New
                                        Task</a>
                                </div>
                            </div>
                            <div class="kanban-list kanban-warning">
                                <div class="kanban-header">
                                    <span class="status-title">Inprogress</span>
                                    <div class="dropdown kanban-action">
                                        <a href data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-wrap">
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-success">Low</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                        <span class="task-user-count">+2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-task">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_task_modal">Add New
                                        Task</a>
                                </div>
                            </div>
                            <div class="kanban-list kanban-purple">
                                <div class="kanban-header">
                                    <span class="status-title">On Hold</span>
                                    <div class="dropdown kanban-action">
                                        <a href data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_board">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-wrap">
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-danger">High</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                        <span class="task-user-count">+2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-task">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_task_modal">Add New
                                        Task</a>
                                </div>
                            </div>
                            <div class="kanban-list kanban-primary">
                                <div class="kanban-header">
                                    <span class="status-title">Review</span>
                                    <div class="dropdown kanban-action">
                                        <a href data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_board">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kanban-wrap">
                                    <div class="card panel">
                                        <div class="kanban-box">
                                            <div class="task-board-header">
                                                <span class="status-title"><a href="{{route('task-view')}}">Website
                                                        redesign</a></span>
                                                <div class="dropdown kanban-task-action">
                                                    <a href data-bs-toggle="dropdown">
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#edit_task_modal">Edit</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="task-board-body">
                                                <div class="kanban-info">
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <span>70%</span>
                                                </div>
                                                <div class="kanban-footer">
                                                    <span class="task-info-cont">
                                                        <span class="task-date"><i class="fa-regular fa-clock"></i>
                                                            Sep 26</span>
                                                        <span
                                                            class="task-priority badge bg-inverse-danger">High</span>
                                                    </span>
                                                    <span class="task-users">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            class="task-avatar" width="24" height="24" alt>
                                                        <span class="task-user-count">+2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-new-task">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#add_task_modal">Add New
                                        Task</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="add_task_board" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Task Board</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Board Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3 task-board-color">
                                    <label class="col-form-label">Task Board Color</label>
                                    <div class="board-color-list">
                                        <label class="board-control board-primary">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="primary" checked>
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-success">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="success">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-info">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="info">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-purple">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="purple">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-warning">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="warning">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-danger">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="danger">
                                            <span class="board-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="edit_task_board" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Task Board</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Board Name</label>
                                    <input type="text" class="form-control" value="Pending">
                                </div>
                                <div class="input-block mb-3 task-board-color">
                                    <label class="col-form-label">Task Board Color</label>
                                    <div class="board-color-list">
                                        <label class="board-control board-primary">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="primary" checked>
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-success">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="success">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-info">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="info">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-purple">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="purple">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-warning">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="warning">
                                            <span class="board-indicator"></span>
                                        </label>
                                        <label class="board-control board-danger">
                                            <input name="radio" type="radio" class="board-control-input"
                                                value="danger">
                                            <span class="board-indicator"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="new_project" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Create New Project</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Project Name</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Create Project</button>
                                </div>
                            </form>
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
                                <input placeholder="Search to add a leader" class="form-control search-input"
                                    type="text">
                                <button class="btn btn-primary">Search</button>
                            </div>
                            <div>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar flex-shrink-0"><img
                                                        src="assets/img/profiles/avatar-09.jpg"
                                                        alt="User Image"></span>
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
                                                <span class="avatar flex-shrink-0"><img
                                                        src="assets/img/profiles/avatar-10.jpg"
                                                        alt="User Image"></span>
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
                                                <span class="avatar flex-shrink-0">
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
                                <input placeholder="Search a user to assign" class="form-control search-input"
                                    type="text">
                                <button class="btn btn-primary">Search</button>
                            </div>
                            <div>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar flex-shrink-0"><img
                                                        src="assets/img/profiles/avatar-09.jpg"
                                                        alt="User Image"></span>
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
                                                <span class="avatar flex-shrink-0"><img
                                                        src="assets/img/profiles/avatar-10.jpg"
                                                        alt="User Image"></span>
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
                                                <span class="avatar flex-shrink-0">
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


            <div id="add_task_modal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Task</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Priority</label>
                                    <select class="form-control select">
                                        <option>Select</option>
                                        <option>High</option>
                                        <option>Normal</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Due Date</label>
                                    <div class="cal-icon"><input class="form-control datetimepicker"
                                            type="text">
                                    </div>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Followers</label>
                                    <input type="text" class="form-control" placeholder="Search to add">
                                    <div class="task-follower-list">
                                        <span data-bs-toggle="tooltip" title="John Doe">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="avatar"
                                                alt="John Doe" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span data-bs-toggle="tooltip" title="Richard Miles">
                                            <img src="assets/img/profiles/avatar-09.jpg" class="avatar"
                                                alt="Richard Miles" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span data-bs-toggle="tooltip" title="John Smith">
                                            <img src="assets/img/profiles/avatar-10.jpg" class="avatar"
                                                alt="John Smith" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span data-bs-toggle="tooltip" title="Mike Litorus">
                                            <img src="assets/img/profiles/avatar-05.jpg" class="avatar"
                                                alt="Mike Litorus" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="submit-section text-center">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id="edit_task_modal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Task</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Name</label>
                                    <input type="text" class="form-control" value="Website Redesign">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Priority</label>
                                    <select class="form-control select">
                                        <option>Select</option>
                                        <option selected>High</option>
                                        <option>Normal</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Due Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text"
                                            value="20/08/2019">
                                    </div>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Task Followers</label>
                                    <input type="text" class="form-control" placeholder="Search to add">
                                    <div class="task-follower-list">
                                        <span data-bs-toggle="tooltip" title="John Doe">
                                            <img src="assets/img/profiles/avatar-02.jpg" class="avatar"
                                                alt="John Doe" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span data-bs-toggle="tooltip" title="Richard Miles">
                                            <img src="assets/img/profiles/avatar-09.jpg" class="avatar"
                                                alt="Richard Miles" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span data-bs-toggle="tooltip" title="John Smith">
                                            <img src="assets/img/profiles/avatar-10.jpg" class="avatar"
                                                alt="John Smith" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                        <span data-bs-toggle="tooltip" title="Mike Litorus">
                                            <img src="assets/img/profiles/avatar-05.jpg" class="avatar"
                                                alt="Mike Litorus" width="20" height="20">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="submit-section text-center">
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
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script 
    src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" 
    data-cf-settings="21f6f47b21e14f3bc17657ab-|49" 
    defer>
</script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/task-board by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:48 GMT -->

</html>
