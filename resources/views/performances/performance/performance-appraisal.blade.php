<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Performance Appraisal - HRMS admin template</title>

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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Performance Appraisal</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Performance</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal"
                                data-bs-target="#add_appraisal"><i class="fa fa-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 30px;">#</th>
                                        <th>Employee</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Appraisal Date</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img
                                                        src="assets/img/profiles/avatar-02.jpg"
                                                        alt="User Image"></a>
                                                <a href="profile.html">John Doe </a>
                                            </h2>
                                        </td>
                                        <td>Web Designer </td>
                                        <td>Designing</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                    href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-success"></i>
                                                        Active</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-danger"></i>
                                                        Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_appraisal"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_appraisal"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img
                                                        src="assets/img/profiles/avatar-05.jpg"
                                                        alt="User Image"></a>
                                                <a href="profile.html">Mike Litorus </a>
                                            </h2>
                                        </td>
                                        <td>IOS Developer </td>
                                        <td>IOS</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                    href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-success"></i>
                                                        Active</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-danger"></i>
                                                        Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_appraisal"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_appraisal"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img
                                                        src="assets/img/profiles/avatar-13.jpg"
                                                        alt="User Image"></a>
                                                <a href="profile.html">Bernardo Galaviz </a>
                                            </h2>
                                        </td>
                                        <td>Web Developer </td>
                                        <td>Designing</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                    href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-success"></i>
                                                        Active</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-danger"></i>
                                                        Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_appraisal"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_appraisal"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img
                                                        src="assets/img/profiles/avatar-12.jpg"
                                                        alt="User Image"></a>
                                                <a href="profile.html">Jeffrey Warden </a>
                                            </h2>
                                        </td>
                                        <td>Web Developer </td>
                                        <td>Designing</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                    href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-success"></i>
                                                        Active</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-danger"></i>
                                                        Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_appraisal"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_appraisal"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar"><img
                                                        src="assets/img/profiles/avatar-11.jpg"
                                                        alt="User Image"></a>
                                                <a href="profile.html">Wilmer Deluna </a>
                                            </h2>
                                        </td>
                                        <td>Team Leader </td>
                                        <td>IOS</td>
                                        <td>
                                            7 May 2019
                                        </td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                    href="#" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="fa-regular fa-circle-dot text-success"></i> Active
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-success"></i>
                                                        Active</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fa-regular fa-circle-dot text-danger"></i>
                                                        Inactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#edit_appraisal"><i
                                                            class="fa-solid fa-pencil m-r-5"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#delete_appraisal"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
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


            <div id="add_appraisal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Give Performance Appraisal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employee</label>
                                            <select class="select">
                                                <option>Select Employee</option>
                                                <option>John Doe</option>
                                                <option>Mike Litorus</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Select Date <span
                                                    class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker"
                                                    type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="tab-box">
                                                    <div class="row user-tabs">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                                <li class="nav-item"><a href="#appr_technical"
                                                                        data-bs-toggle="tab"
                                                                        class="nav-link active">Technical</a></li>
                                                                <li class="nav-item"><a href="#appr_organizational"
                                                                        data-bs-toggle="tab"
                                                                        class="nav-link">Organizational</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="appr_technical"
                                                        class="pro-overview tab-pane fade show active">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Technical Competencies</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Customer Experience
                                                                                </td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td><select name="customer_experience"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Marketing</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td><select name="marketing"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Management</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td><select name="management"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Administration</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td><select name="administration"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Presentation Skill
                                                                                </td>
                                                                                <td colspan="2">Expert / Leader
                                                                                </td>
                                                                                <td><select name="presentation_skill"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Quality Of Work
                                                                                </td>
                                                                                <td colspan="2">Expert / Leader
                                                                                </td>
                                                                                <td><select name="quality_of_work"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Efficiency</td>
                                                                                <td colspan="2">Expert / Leader
                                                                                </td>
                                                                                <td><select name="efficiency"
                                                                                        class="form-control form-select select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="appr_organizational">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Organizational Competencies</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Integrity</td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="integrity"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Professionalism
                                                                                </td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="professionalism"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Team Work</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="team_work"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Critical Thinking
                                                                                </td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="critical_thinking"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Conflict Management
                                                                                </td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="conflict_management"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Attendance</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="attendance"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Ability To Meet
                                                                                    Deadline
                                                                                </td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select
                                                                                        name="ability_to_meet_deadline"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
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
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
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


            <div id="edit_appraisal" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Performance Appraisal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Employee</label>
                                            <select class="select">
                                                <option>Select Employee</option>
                                                <option>John Doe</option>
                                                <option selected>Mike Litorus</option>
                                            </select>
                                        </div>
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Select Date <span
                                                    class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker"
                                                    value="7/08/2019" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="tab-box">
                                                    <div class="row user-tabs">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                                            <ul class="nav nav-tabs nav-tabs-solid">
                                                                <li class="nav-item"><a href="#appr_technical1"
                                                                        data-bs-toggle="tab"
                                                                        class="nav-link active">Technical</a></li>
                                                                <li class="nav-item"><a href="#appr_organizational1"
                                                                        data-bs-toggle="tab"
                                                                        class="nav-link">Organizational</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="appr_technical1"
                                                        class="pro-overview tab-pane fade show active">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Technical Competencies</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Customer Experience
                                                                                </td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="customer_experience"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Marketing</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="marketing"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Management</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="management"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Administration</td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="administration"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Presentation Skill
                                                                                </td>
                                                                                <td colspan="2">Expert / Leader
                                                                                </td>
                                                                                <td>
                                                                                    <select name="presentation_skill"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Quality Of Work
                                                                                </td>
                                                                                <td colspan="2">Expert / Leader
                                                                                </td>
                                                                                <td>
                                                                                    <select name="quality_of_work"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Efficiency</td>
                                                                                <td colspan="2">Expert / Leader
                                                                                </td>
                                                                                <td>
                                                                                    <select name="efficiency"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                        <option value="4"> Expert
                                                                                            /
                                                                                            Leader</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="appr_organizational1">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="bg-white">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Organizational Competencies</th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th colspan="2">Indicator</th>
                                                                                <th colspan="2">Expected Value</th>
                                                                                <th>Set Value</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Integrity</td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="integrity"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Professionalism
                                                                                </td>
                                                                                <td colspan="2">Beginner</td>
                                                                                <td>
                                                                                    <select name="professionalism"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Team Work</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="team_work"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Critical Thinking
                                                                                </td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select name="critical_thinking"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Conflict Management
                                                                                </td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="conflict_management"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Attendance</td>
                                                                                <td colspan="2">Intermediate</td>
                                                                                <td>
                                                                                    <select name="attendance"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">Ability To Meet
                                                                                    Deadline
                                                                                </td>
                                                                                <td colspan="2">Advanced</td>
                                                                                <td>
                                                                                    <select
                                                                                        name="ability_to_meet_deadline"
                                                                                        class="form-control select">
                                                                                        <option value>None</option>
                                                                                        <option value="1">
                                                                                            Beginner
                                                                                        </option>
                                                                                        <option value="2">
                                                                                            Intermediate
                                                                                        </option>
                                                                                        <option value="3">
                                                                                            Advanced
                                                                                        </option>
                                                                                    </select>
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
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Status</label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
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


            <div class="modal custom-modal fade" id="delete_appraisal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Performance Appraisal List</h3>
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
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/layout.js') }}"></script>
<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
<script src="{{ asset('assets/js/greedynav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:23:09 GMT -->

</html>
