<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/voice-call by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Voice Call - HRMS admin template</title>
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

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <nav class="greedy">
                        <ul class="link-item">
                            <li>
                                <a class href="{{ url('admin-dashboard') }}"><i class="la la-home"></i> <span>Back to
                                        Home</span></a>
                            </li>
                            <li class="menu-title"><span>Chat Groups</span> <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#add_group"><i class="fa-solid fa-plus"></i></a></li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image">
                                    </span>
                                    <span class="chat-user">#General</span>
                                </a>
                            </li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image">
                                    </span>
                                    <span class="chat-user">#Video Responsive Survey</span>
                                </a>
                            </li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image')}}">
                                    </span>
                                    <span class="chat-user">#500rs</span>
                                </a>
                            </li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image">
                                    </span>
                                    <span class="chat-user">#warehouse</span>
                                </a>
                            </li>
                            <li class="menu-title">Direct Chats <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#add_chat_user"><i class="fa-solid fa-plus"></i></a></li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg"
                                            alt="User Image"><span class="status online"></span>
                                    </span>
                                    <span class="chat-user">John Doe</span> <span
                                        class="badge rounded-pill bg-danger">1</span>
                                </a>
                            </li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-09.jpg"
                                            alt="User Image"><span class="status offline"></span>
                                    </span>
                                    <span class="chat-user">Richard Miles</span> <span
                                        class="badge rounded-pill bg-danger">7</span>
                                </a>
                            </li>
                            <li>
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-10.jpg"
                                            alt="User Image"><span class="status away"></span>
                                    </span>
                                    <span class="chat-user">John Smith</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class href="chat.html">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-05.jpg"
                                            alt="User Image"><span class="status online"></span>
                                    </span>
                                    <span class="chat-user">Mike Litorus</span> <span
                                        class="badge rounded-pill bg-danger">2</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    



        <div class="page-wrapper">

            <div class="chat-main-row">

                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view task-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details me-auto">
                                        <div class="float-start user-img">
                                            <a class="avatar" href="profile.html" title="Mike Litorus">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt
                                                    class="rounded-circle">
                                                <span class="status online"></span>
                                            </a>
                                        </div>
                                        <div class="user-info float-start">
                                            <a href="profile.html"><span>Mike Litorus</span></a>
                                            <span class="last-seen">Online</span>
                                        </div>
                                    </div>
                                    <ul class="nav float-end custom-menu">
                                        <li class="nav-item">
                                            <a href="#task_window" id="task_chat"
                                                class="task-chat profile-rightbar float-end"><i
                                                    class="fa fa-comments"></i></a>
                                        </li>
                                        <li class="nav-item dropdown dropdown-action">
                                            <a href="#" class="nav-link dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fa fa-cog"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-contents">
                                <div class="chat-content-wrap">
                                    <div class="voice-call-avatar">
                                        <img src="assets/img/profiles/avatar-02.jpg" alt class="call-avatar">
                                        <span class="username">John Doe</span>
                                        <span class="call-timing-count">00:59</span>
                                    </div>
                                    <div class="call-users">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/img/profiles/avatar-03.jpg" class="img-fluid"
                                                        alt>
                                                    <span class="call-mute"><i
                                                            class="fa fa-microphone-slash"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/img/profiles/avatar-08.jpg" class="img-fluid"
                                                        alt>
                                                    <span class="call-mute"><i
                                                            class="fa fa-microphone-slash"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="assets/img/profiles/avatar-05.jpg" class="img-fluid"
                                                        alt>
                                                    <span class="call-mute"><i
                                                            class="fa fa-microphone-slash"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="call-icons">
                                    <ul class="call-items">
                                        <li class="call-item">
                                            <a href="#" title="Enable Video" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-video-camera camera"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href="#" title="Mute" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-microphone microphone"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href="#" title="Add User" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="end-call">
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">call_end</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="task_window">
                        <div class="chat-window video-window">
                            <div class="fixed-header">
                                <ul class="nav nav-tabs nav-tabs-bottom">
                                    <li class="nav-item"><a class="nav-link active" href="#calls_tab"
                                            data-bs-toggle="tab">Calls</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#chats_tab"
                                            data-bs-toggle="tab">Chats</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#profile_tab"
                                            data-bs-toggle="tab">Profile</a></li>
                                </ul>
                            </div>
                            <div class="tab-content chat-contents">
                                <div class="content-full tab-pane show active" id="calls_tab">
                                    <div class="chat-wrap-inner">
                                        <div class="chat-box">
                                            <div class="chats">
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt="John Doe"
                                                                src="assets/img/profiles/avatar-02.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">You</span> <span
                                                                    class="chat-time">8:35
                                                                    am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">Jeffrey
                                                                                Warden missed the
                                                                                call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt src="assets/img/profiles/avatar-02.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">John Doe</span> <span
                                                                    class="chat-time">8:35
                                                                    am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">call_end</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details"><span
                                                                                class="call-description">This
                                                                                call has ended</span></div>
                                                                        <div class="call-timing">Duration: <strong>5
                                                                                min 57 sec</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat-line">
                                                    <span class="chat-date">January 29th, 2019</span>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt src="assets/img/profiles/avatar-09.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">Richard Miles</span> <span
                                                                    class="chat-time">8:35 am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">phone_missed</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <span class="call-description">You missed
                                                                                the call</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="profile.html" class="avatar">
                                                            <img alt src="assets/img/profiles/avatar-02.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">You</span> <span
                                                                    class="chat-time">8:35
                                                                    am</span>
                                                                <div class="call-details">
                                                                    <i class="material-icons">ring_volume</i>
                                                                    <div class="call-info">
                                                                        <div class="call-user-details">
                                                                            <a href="#"
                                                                                class="call-description call-description--linked"
                                                                                data-qa="call_attachment_link">Calling
                                                                                John Smith ...</a>
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
                                <div class="content-full tab-pane" id="chats_tab">
                                    <div class="chat-window">
                                        <div class="chat-contents">
                                            <div class="chat-content-wrap">
                                                <div class="chat-wrap-inner">
                                                    <div class="chat-box">
                                                        <div class="chats">
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.html" class="avatar">
                                                                        <img alt
                                                                            src="assets/img/profiles/avatar-02.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="task-chat-user">John
                                                                                Doe</span> <span class="chat-time">8:35
                                                                                am</span>
                                                                            <p>I'm just looking around.</p>
                                                                            <p>Will you tell me something about
                                                                                yourself? </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.html" class="avatar">
                                                                        <img alt
                                                                            src="assets/img/profiles/avatar-02.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="task-chat-user">John
                                                                                Doe</span> <span
                                                                                class="file-attached">attached 3 files
                                                                                <i class="fa fa-paperclip"></i></span>
                                                                            <span class="chat-time">Feb 17, 2019 at
                                                                                4:32am</span>
                                                                            <ul class="attach-list">
                                                                                <li><i class="fa fa-file"></i> <a
                                                                                        href="#">project_document.avi</a>
                                                                                </li>
                                                                                <li><i class="fa fa-file"></i> <a
                                                                                        href="#">video_conferencing.psd</a>
                                                                                </li>
                                                                                <li><i class="fa fa-file"></i> <a
                                                                                        href="#">landing_page.psd</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-line">
                                                                <span class="chat-date">January 29th, 2019</span>
                                                            </div>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.html" class="avatar">
                                                                        <img alt
                                                                            src="assets/img/profiles/avatar-16.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="task-chat-user">Jeffery
                                                                                Lalor</span> <span
                                                                                class="file-attached">attached file <i
                                                                                    class="fa fa-paperclip"></i></span>
                                                                            <span class="chat-time">Yesterday at
                                                                                9:16pm</span>
                                                                            <ul class="attach-list">
                                                                                <li class="pdf-file"><i
                                                                                        class="fa-regular fa-file-pdf"></i>
                                                                                    <a
                                                                                        href="#">Document_2016.pdf</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="profile.html" class="avatar">
                                                                        <img alt
                                                                            src="assets/img/profiles/avatar-16.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="task-chat-user">Jeffery
                                                                                Lalor</span> <span
                                                                                class="file-attached">attached file <i
                                                                                    class="fa fa-paperclip"></i></span>
                                                                            <span class="chat-time">Today at
                                                                                12:42pm</span>
                                                                            <ul class="attach-list">
                                                                                <li class="img-file">
                                                                                    <div class="attach-img-download">
                                                                                        <a
                                                                                            href="#">avatar-1.jpg</a>
                                                                                    </div>
                                                                                    <div class="task-attach-img"><img
                                                                                            src="assets/img/user.jpg"
                                                                                            alt></div>
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
                                        </div>
                                        <div class="chat-footer">
                                            <div class="message-bar">
                                                <div class="message-inner">
                                                    <a class="link attach-icon" href="#"
                                                        data-bs-toggle="modal" data-bs-target="#drag_files"><img
                                                            src="assets/img/attachment.png" alt></a>
                                                    <div class="message-area">
                                                        <div class="input-group">
                                                            <textarea class="form-control" placeholder="Type message..."></textarea>
                                                            <button class="btn btn-primary" type="button"><i
                                                                    class="fa-solid fa-paper-plane"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-full tab-pane" id="profile_tab">
                                    <div class="display-table">
                                        <div class="table-row">
                                            <div class="table-body">
                                                <div class="table-content">
                                                    <div class="chat-profile-img">
                                                        <div class="edit-profile-img">
                                                            <img src="assets/img/profiles/avatar-02.jpg" alt>
                                                            <span class="change-img">Change Image</span>
                                                        </div>
                                                        <h3 class="user-name m-t-10 mb-0">John Doe</h3>
                                                        <small class="text-muted">Web Designer</small>
                                                        <a href="javascript:void(0);"
                                                            class="btn btn-primary edit-btn"><i
                                                                class="fa fa-pencil"></i></a>
                                                    </div>
                                                    <div class="chat-profile-info">
                                                        <ul class="user-det-list">
                                                            <li>
                                                                <span>Username:</span>
                                                                <span class="float-end text-muted">johndoe</span>
                                                            </li>
                                                            <li>
                                                                <span>DOB:</span>
                                                                <span class="float-end text-muted">24 July</span>
                                                            </li>
                                                            <li>
                                                                <span>Email:</span>
                                                                <span class="float-end text-muted"><a
                                                                        href="https://smarthr.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                                        class="__cf_email__"
                                                                        data-cfemail="d6bcb9beb8b2b9b396b3aeb7bba6bab3f8b5b9bb">[email&#160;protected]</a></span>
                                                            </li>
                                                            <li>
                                                                <span>Phone:</span>
                                                                <span class="float-end text-muted">9876543210</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
                                                            <li class="nav-item"><a class="nav-link active"
                                                                    href="#all_files" data-bs-toggle="tab">All
                                                                    Files</a></li>
                                                            <li class="nav-item"><a class="nav-link"
                                                                    href="#my_files" data-bs-toggle="tab">My
                                                                    Files</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="all_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i
                                                                                        class="fa-regular fa-file-pdf"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span
                                                                                    class="file-name text-ellipsis">AHA
                                                                                    Selfcare Mobile
                                                                                    Application Test-Cases.xls</span>
                                                                                <span class="file-author"><a
                                                                                        href="#">Loren
                                                                                        Gatlin</a></span> <span
                                                                                    class="file-date">May 31st
                                                                                    at 6:53 PM</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href class="dropdown-toggle"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="false"><i
                                                                                            class="material-icons">more_horiz</i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#share_files">Share</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="tab-pane" id="my_files">
                                                                <ul class="files-list">
                                                                    <li>
                                                                        <div class="files-cont">
                                                                            <div class="file-type">
                                                                                <span class="files-icon"><i
                                                                                        class="fa-regular fa-file-pdf"></i></span>
                                                                            </div>
                                                                            <div class="files-info">
                                                                                <span
                                                                                    class="file-name text-ellipsis">AHA
                                                                                    Selfcare Mobile
                                                                                    Application Test-Cases.xls</span>
                                                                                <span class="file-author"><a
                                                                                        href="#">John
                                                                                        Doe</a></span> <span
                                                                                    class="file-date">May 31st at
                                                                                    6:53 PM</span>
                                                                            </div>
                                                                            <ul class="files-action">
                                                                                <li class="dropdown dropdown-action">
                                                                                    <a href class="dropdown-toggle"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="false"><i
                                                                                            class="material-icons">more_horiz</i></a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item"
                                                                                            href="javascript:void(0)">Download</a>
                                                                                        <a class="dropdown-item"
                                                                                            href="#"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#share_files">Share</a>
                                                                                    </div>
                                                                                </li>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="drag_files" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Drag and drop files upload</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="js-upload-form">
                                <div class="upload-drop-zone" id="drop-zone">
                                    <i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and
                                        drop files
                                        here</span>
                                </div>
                                <h4>Uploading</h4>
                                <ul class="upload-list">
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-photo"></i>
                                                photo.png
                                            </div>
                                            <div class="file-size">1.07 gb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-file"></i>
                                                task.doc
                                            </div>
                                            <div class="file-size">5.8 kb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">37% done</div>
                                    </li>
                                    <li class="file-list">
                                        <div class="upload-wrap">
                                            <div class="file-name">
                                                <i class="fa fa-photo"></i>
                                                dashboard.png
                                            </div>
                                            <div class="file-size">2.1 mb</div>
                                            <button type="button" class="file-close">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </div>
                                        <div class="progress progress-xs progress-striped">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 65%"></div>
                                        </div>
                                        <div class="upload-process">Completed</div>
                                    </li>
                                </ul>
                            </form>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="add_group" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create a group</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Groups are where your team communicates. They’re best when organized around a topic —
                                #leads, for
                                example.</p>
                            <form>
                                <div class="input-block mb-3">
                                    <label>Group Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="input-block mb-3">
                                    <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div id="add_chat_user" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Direct Chat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="input-group m-b-30">
                                <input placeholder="Search to start a chat" class="form-control search-input"
                                    type="text">
                                <button class="btn btn-primary">Search</button>
                            </div>
                            <div>
                                <h5>Recent Conversations</h5>
                                <ul class="chat-user-list">
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar align-self-center flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
                                                </span>
                                                <div class="media-body align-self-center text-nowrap flex-grow-1">
                                                    <div class="user-name">Jeffery Lalor</div>
                                                    <span class="designation">Team Leader</span>
                                                </div>
                                                <div class="text-nowrap align-self-center">
                                                    <div class="online-date">1 day ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar align-self-center flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
                                                </span>
                                                <div class="media-body align-self-center text-nowrap flex-grow-1">
                                                    <div class="user-name">Bernardo Galaviz</div>
                                                    <span class="designation">Web Developer</span>
                                                </div>
                                                <div class="align-self-center text-nowrap">
                                                    <div class="online-date">3 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="chat-block d-flex">
                                                <span class="avatar align-self-center flex-shrink-0">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                                </span>
                                                <div class="media-body text-nowrap align-self-center flex-grow-1">
                                                    <div class="user-name">John Doe</div>
                                                    <span class="designation">Web Designer</span>
                                                </div>
                                                <div class="align-self-center text-nowrap">
                                                    <div class="online-date">7 months ago</div>
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


            <div id="share_files" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Share File</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="files-share-list">
                                <div class="files-cont">
                                    <div class="file-type">
                                        <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                    </div>
                                    <div class="files-info">
                                        <span class="file-name text-ellipsis">AHA Selfcare Mobile Application
                                            Test-Cases.xls</span>
                                        <span class="file-author"><a href="#">Bernardo Galaviz</a></span>
                                        <span class="file-date">May 31st at 6:53 PM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-block mb-3">
                                <label>Share With</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Share</button>
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


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/theme-settings.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/greedynav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="fca5c96b6b3d9cbaee4e0be1-|49" defer></script>

</body>
<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/voice-call by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:21 GMT -->

</html>
