<!DOCTYPE html>
<html
    lang="en"
    data-layout="vertical"
    data-topbar="light"
    data-sidebar="dark"
    data-sidebar-size="lg"
    data-sidebar-image="none">
<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/contacts by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:28 GMT -->
<!-- Added by HTTrack -->
<meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Smarthr - Bootstrap Admin Template" />
    <meta
        name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects" />
    <meta
        name="author"
        content="Dreamstechnologies - Bootstrap Admin Template" />
    <title>Contacts - HRMS admin template</title>

     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper">
         @include('layouts.header')

        @include('layouts.sidebar')


        <div class="page-wrapper">
            <div class="chat-main-row">
                <div class="chat-main-wrapper">
                    <div class="col-lg-12 message-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h4 class="page-title mb-0">Contacts</h4>
                                    </div>
                                    <div class="col-6">
                                        <div class="navbar justify-content-end">
                                            <div class="search-box m-t-0">
                                                <div class="input-group input-group-sm">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Search" />
                                                    <button class="btn" type="button">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <ul class="nav float-end custom-menu">
                                                <li class="nav-item dropdown dropdown-action">
                                                    <a
                                                        href
                                                        class="nav-link dropdown-toggle"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                                                    <div class="dropdown-menu custom-dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Menu 1</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Menu 2</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="chat-wrap-inner">
                                        <div class="contact-box">
                                            <div class="row">
                                                <div class="contact-cat col-sm-4 col-lg-3">
                                                    <a
                                                        href="#"
                                                        class="btn btn-primary w-100"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#add_contact"><i class="fa-solid fa-plus"></i> Add Contact</a>
                                                    <div class="roles-menu">
                                                        <ul>
                                                            <li class="active">
                                                                <a href="javascript:void(0);">All</a>
                                                            </li>
                                                            <li><a href="#">Company</a></li>
                                                            <li><a href="#">Client</a></li>
                                                            <li><a href="#">Staff</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="contacts-list col-sm-8 col-lg-9">
                                                    <ul class="contact-list">
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-02.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">John Doe</span>
                                                                    <span class="contact-date">Web Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-09.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Richard Miles</span>
                                                                    <span class="contact-date">Web Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-10.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">John Smith</span>
                                                                    <span class="contact-date">Android Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-05.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Mike Litorus</span>
                                                                    <span class="contact-date">IOS Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-11.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Wilmer Deluna</span>
                                                                    <span class="contact-date">Team Leader</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-12.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Jeffrey Warden</span>
                                                                    <span class="contact-date">Web Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-13.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Bernardo Galaviz</span>
                                                                    <span class="contact-date">Web Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-01.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Lesley Grauer</span>
                                                                    <span class="contact-date">Team Leader</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-16.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Jeffery Lalor</span>
                                                                    <span class="contact-date">Team Leader</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="contact-cont">
                                                                <div class="float-start user-img">
                                                                    <a
                                                                        href="contact-details.html"
                                                                        class="avatar">
                                                                        <img
                                                                            class="rounded-circle"
                                                                            src="assets/img/profiles/avatar-16.jpg"
                                                                            alt="User Image" />
                                                                        <span class="status online"></span>
                                                                    </a>
                                                                </div>
                                                                <div class="contact-info">
                                                                    <span class="contact-name text-ellipsis">Loren Gatlin</span>
                                                                    <span class="contact-date">Android Developer</span>
                                                                </div>
                                                                <ul class="contact-action">
                                                                    <li class="dropdown dropdown-action">
                                                                        <a
                                                                            href
                                                                            class="dropdown-toggle action-icon"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-right">
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#edit_contact">Edit</a>
                                                                            <a
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#delete_contact">Delete</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="contact-alphapets">
                                                    <div class="alphapets-inner">
                                                        <a href="#">A</a>
                                                        <a href="#">B</a>
                                                        <a href="#">C</a>
                                                        <a href="#">D</a>
                                                        <a href="#">E</a>
                                                        <a href="#">F</a>
                                                        <a href="#">G</a>
                                                        <a href="#">H</a>
                                                        <a href="#">I</a>
                                                        <a href="#">J</a>
                                                        <a href="#">K</a>
                                                        <a href="#">L</a>
                                                        <a href="#">M</a>
                                                        <a href="#">N</a>
                                                        <a href="#">O</a>
                                                        <a href="#">P</a>
                                                        <a href="#">Q</a>
                                                        <a href="#">R</a>
                                                        <a href="#">S</a>
                                                        <a href="#">T</a>
                                                        <a href="#">U</a>
                                                        <a href="#">V</a>
                                                        <a href="#">W</a>
                                                        <a href="#">X</a>
                                                        <a href="#">Y</a>
                                                        <a href="#">Z</a>
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

                <div class="modal custom-modal fade" id="add_contact" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Contact</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form
                                    action="https://smarthr.dreamstechnologies.com/laravel/template/public/contacts">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Email Address</label>
                                        <input class="form-control" type="email" />
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Contact Number
                                            <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="d-block col-form-label">Status</label>
                                        <div class="status-toggle">
                                            <input
                                                type="checkbox"
                                                id="contact_status"
                                                class="check" />
                                            <label for="contact_status" class="checktoggle">checkbox</label>
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

                <div class="modal custom-modal fade" id="edit_contact" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Contact</h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            value="John Doe" />
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Email Address</label>
                                        <input
                                            class="form-control"
                                            type="email"
                                            value="johndoe@example.com" />
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Contact Number
                                            <span class="text-danger">*</span></label>
                                        <input
                                            class="form-control"
                                            type="text"
                                            value="9876543210" />
                                    </div>
                                    <div class="input-block mb-3">
                                        <label class="d-block col-form-label">Status</label>
                                        <div class="status-toggle">
                                            <input
                                                type="checkbox"
                                                id="edit_contact_status"
                                                class="check" />
                                            <label for="edit_contact_status" class="checktoggle">checkbox</label>
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

                <div
                    class="modal custom-modal fade"
                    id="delete_contact"
                    role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Contact</h3>
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <a
                                                href="javascript:void(0);"
                                                class="btn btn-primary continue-btn">Delete</a>
                                        </div>
                                        <div class="col-6">
                                            <a
                                                href="javascript:void(0);"
                                                data-bs-dismiss="modal"
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
    <script src="{{ asset('assets/js/dropfiles.js') }}"></script>

    <!-- Feather Icons -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Layout and Settings -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/theme-settings.js') }}"></script>
    <script src="{{ asset('assets/js/greedynav.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/contacts by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:29 GMT -->

</html>