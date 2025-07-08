<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/projects by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Projects - HRMS admin template</title>

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
            <div class="content container-fluid pb-0">



                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Projects</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal"
                                data-bs-target="#create_project"><i class="fa fa-plus"></i> Create
                                Project</a>
                            <div class="view-icons">
                                <a href="{{route('projects')}}" class="grid-view btn btn-link active"><i
                                        class="fa fa-th"></i></a>
                                <a href="{{route('project-list')}}" class="list-view btn btn-link"><i
                                        class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Project Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Employee Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="input-block mb-3 form-focus select-focus">
                            <select class="select floating">
                                <option>Select Designation</option>
                                <option>Web Developer</option>
                                <option>Web Designer</option>
                                <option>Android Developer</option>
                                <option>Ios Developer</option>
                            </select>
                            <label class="focus-label">Designation</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success w-100"> Search </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="dropdown dropdown-action profile-action">
                                    <a href="#" class="action-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                    src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Doe"><img
                                                    src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                    src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                    src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                    src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                        </li>
                                        <li class="dropdown avatar-dropdown">
                                            <a href="#" class="all-users dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="avatar-group">
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-02.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-09.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-10.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-05.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-11.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-13.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-01.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-16.jpg"
                                                            alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="avatar-pagination">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                                <span class="visually-hidden">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-success w-40" role="progressbar"
                                        data-bs-toggle="tooltip" title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="dropdown dropdown-action profile-action">
                                    <a href="#" class="action-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">2</span> <span clasRs="text-muted">open tasks, </span>
                                    <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                    src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Doe"><img
                                                    src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                    src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                    src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                    src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                        </li>
                                        <li class="dropdown avatar-dropdown">
                                            <a href="#" class="all-users dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="avatar-group">
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-02.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-09.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-10.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-05.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-11.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-13.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-01.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-16.jpg"
                                                            alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="avatar-pagination">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                                <span class="visually-hidden">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-success w-40" role="progressbar"
                                        data-bs-toggle="tooltip" title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="dropdown dropdown-action profile-action">
                                    <a href="#" class="action-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                    src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Doe"><img
                                                    src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                    src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                    src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                    src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                        </li>
                                        <li class="dropdown avatar-dropdown">
                                            <a href="#" class="all-users dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="avatar-group">
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-02.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-09.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-10.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-05.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-11.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-13.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-01.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-16.jpg"
                                                            alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="avatar-pagination">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                                <span class="visually-hidden">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-success w-40" role="progressbar"
                                        data-bs-toggle="tooltip" title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="dropdown dropdown-action profile-action">
                                    <a href="#" class="action-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                <h4 class="project-title"><a href="project-view.html">Hospital Administration</a>
                                </h4>
                                <small class="block text-ellipsis m-b-15">
                                    <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                                    <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                                </small>
                                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. When an unknown printer took a galley of type and
                                    scrambled it...
                                </p>
                                <div class="pro-deadline m-b-15">
                                    <div class="sub-title">
                                        Deadline:
                                    </div>
                                    <div class="text-muted">
                                        17 Apr 2019
                                    </div>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Project Leader :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                    src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="project-members m-b-15">
                                    <div>Team :</div>
                                    <ul class="team-members">
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Doe"><img
                                                    src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img
                                                    src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="John Smith"><img
                                                    src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img
                                                    src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
                                        </li>
                                        <li class="dropdown avatar-dropdown">
                                            <a href="#" class="all-users dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="avatar-group">
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-02.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-09.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-10.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-05.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-11.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-12.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-13.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-01.jpg"
                                                            alt="User Image">
                                                    </a>
                                                    <a class="avatar avatar-xs" href="#">
                                                        <img src="assets/img/profiles/avatar-16.jpg"
                                                            alt="User Image">
                                                    </a>
                                                </div>
                                                <div class="avatar-pagination">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                                <span class="visually-hidden">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                                <div class="progress progress-xs mb-0">
                                    <div class="progress-bar bg-success w-40" role="progressbar"
                                        data-bs-toggle="tooltip" title="40%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="create_project" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
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
                                            <input class="form-control" type="text">
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
                                            <input placeholder="$50" class="form-control" type="text">
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
                                            <label class="col-form-label">Add Project Leader</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Team Leader</label>
                                            <div class="project-members">
                                                <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"
                                                    class="avatar">
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
                                                <a href="#" data-bs-toggle="tooltip" title="John Doe"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                </a>
                                                <a href="#" data-bs-toggle="tooltip" title="Richard Miles"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                </a>
                                                <a href="#" data-bs-toggle="tooltip" title="John Smith"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                </a>
                                                <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
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
                                    <input class="form-control" type="file">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
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
                                            <input placeholder="$50" class="form-control" value="$5000"
                                                type="text">
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
                                                <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"
                                                    class="avatar">
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
                                                <a href="#" data-bs-toggle="tooltip" title="John Doe"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                </a>
                                                <a href="#" data-bs-toggle="tooltip" title="Richard Miles"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
                                                </a>
                                                <a href="#" data-bs-toggle="tooltip" title="John Smith"
                                                    class="avatar">
                                                    <img src="assets/img/profiles/avatar-10.jpg" alt="User Image">
                                                </a>
                                                <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"
                                                    class="avatar">
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


            <div class="modal custom-modal fade" id="delete_project" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Project</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);"
                                            class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal"
                                            class="btn btn-primary cancel-btn">Cancel</a>
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
<script src="{{ asset('assets/js/ckeditor.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="5b93660b55760a279dcccafe-|49" defer></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/projects by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:45 GMT -->

</html>
