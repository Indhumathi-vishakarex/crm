<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/video-call by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
    <title>Video Call - HRMS admin template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Line Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

    <!-- Material Icons -->
    <link rel="stylesheet" href="{{ asset('assets/css/material.css') }}">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>

    <div class="main-wrapper">

   @include('layouts.header')


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <nav class="greedy">
                        <ul class="link-item">
                            <li>
                                <a class href={{route('admin-dashboard')}}><i class="la la-home"></i> <span>Back to
                                        Home</span></a>
                            </li>
                            <li class="menu-title"><span>Chat Groups</span> <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#add_group"><i class="fa-solid fa-plus"></i></a></li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image">
                                    </span>
                                    <span class="chat-user">#General</span>
                                </a>
                            </li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image">
                                    </span>
                                    <span class="chat-user">#Video Responsive Survey</span>
                                </a>
                            </li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image')}}">
                                    </span>
                                    <span class="chat-user">#500rs</span>
                                </a>
                            </li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/user.jpg" alt="User Image">
                                    </span>
                                    <span class="chat-user">#warehouse</span>
                                </a>
                            </li>
                            <li class="menu-title">Direct Chats <a href="#" data-bs-toggle="modal"
                                    data-bs-target="#add_chat_user"><i class="fa-solid fa-plus"></i></a></li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg"
                                            alt="User Image"><span class="status online"></span>
                                    </span>
                                    <span class="chat-user">John Doe</span> <span
                                        class="badge rounded-pill bg-danger">1</span>
                                </a>
                            </li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-09.jpg"
                                            alt="User Image"><span class="status offline"></span>
                                    </span>
                                    <span class="chat-user">Richard Miles</span> <span
                                        class="badge rounded-pill bg-danger">7</span>
                                </a>
                            </li>
                            <li>
                                <a class href="{{route('chat')}}">
                                    <span class="chat-avatar-sm user-img">
                                        <img class="rounded-circle" src="assets/img/profiles/avatar-10.jpg"
                                            alt="User Image"><span class="status away"></span>
                                    </span>
                                    <span class="chat-user">John Smith</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class href="{{route('chat')}}">
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


        <div class="two-col-bar" id="two-col-bar">
            <div class="sidebar sidebar-twocol">
                <div class="sidebar-left slimscroll">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link" id="v-pills-dashboard-tab" title="Dashboard" data-bs-toggle="pill"
                            href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard"
                            aria-selected="true">
                            <span class="material-icons-outlined">
                                home
                            </span>
                        </a>
                        <a class="nav-link active" id="v-pills-apps-tab" title="Apps" data-bs-toggle="pill"
                            href="#v-pills-apps" role="tab" aria-controls="v-pills-apps" aria-selected="false">
                            <span class="material-icons-outlined">
                                dashboard
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-employees-tab" title="Employees" data-bs-toggle="pill"
                            href="#v-pills-employees" role="tab" aria-controls="v-pills-employees"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                people
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-clients-tab" title="Clients" data-bs-toggle="pill"
                            href="#v-pills-clients" role="tab" aria-controls="v-pills-clients"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                person
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-projects-tab" title="Projects" data-bs-toggle="pill"
                            href="#v-pills-projects" role="tab" aria-controls="v-pills-projects"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                topic
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-leads-tab" title="CRM" data-bs-toggle="pill"
                            href="#v-pills-leads" role="tab" aria-controls="v-pills-leads"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                leaderboard
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-tickets-tab" title="Tickets" data-bs-toggle="pill"
                            href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                confirmation_number
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-sales-tab" title="Sales" data-bs-toggle="pill"
                            href="#v-pills-sales" role="tab" aria-controls="v-pills-sales"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                shopping_bag
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-accounting-tab" title="Accounting" data-bs-toggle="pill"
                            href="#v-pills-accounting" role="tab" aria-controls="v-pills-accounting"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                account_balance_wallet
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-payroll-tab" title="Payroll" data-bs-toggle="pill"
                            href="#v-pills-payroll" role="tab" aria-controls="v-pills-payroll"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                request_quote
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-policies-tab" title="Policies" data-bs-toggle="pill"
                            href="#v-pills-policies" role="tab" aria-controls="v-pills-policies"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                verified_user
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-reports-tab" title="Reports" data-bs-toggle="pill"
                            href="#v-pills-reports" role="tab" aria-controls="v-pills-reports"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                report_gmailerrorred
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-performance-tab" title="Performance" data-bs-toggle="pill"
                            href="#v-pills-performance" role="tab" aria-controls="v-pills-performance"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                shutter_speed
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-goals-tab" title="Goals" data-bs-toggle="pill"
                            href="#v-pills-goals" role="tab" aria-controls="v-pills-goals"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                track_changes
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-training-tab" title="Training" data-bs-toggle="pill"
                            href="#v-pills-training" role="tab" aria-controls="v-pills-training"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                checklist_rtl
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-promotion-tab" title="Promotions" data-bs-toggle="pill"
                            href="#v-pills-promotion" role="tab" aria-controls="v-pills-promotion"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                auto_graph
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-resignation-tab" title="Resignation" data-bs-toggle="pill"
                            href="#v-pills-resignation" role="tab" aria-controls="v-pills-resignation"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                do_not_disturb_alt
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-termination-tab" title="Termination" data-bs-toggle="pill"
                            href="#v-pills-termination" role="tab" aria-controls="v-pills-termination"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                indeterminate_check_box
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-assets-tab" title="Assets" data-bs-toggle="pill"
                            href="#v-pills-assets" role="tab" aria-controls="v-pills-assets"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                web_asset
                            </span>
                        </a>
                        <a class="nav-link " id="v-pills-jobs-tab" title="Jobs" data-bs-toggle="pill"
                            href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">
                            <span class="material-icons-outlined">
                                work_outline
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-knowledgebase-tab" title="Knowledgebase"
                            data-bs-toggle="pill" href="#v-pills-knowledgebase" role="tab"
                            aria-controls="v-pills-knowledgebase" aria-selected="false">
                            <span class="material-icons-outlined">
                                school
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-activities-tab" title="Activities" data-bs-toggle="pill"
                            href="#v-pills-activities" role="tab" aria-controls="v-pills-activities"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                toggle_off
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-users-tab" title="Users" data-bs-toggle="pill"
                            href="#v-pills-users" role="tab" aria-controls="v-pills-users"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                group_add
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" title="Settings" data-bs-toggle="pill"
                            href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                settings
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" title="Profile" data-bs-toggle="pill"
                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                manage_accounts
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-authentication-tab" title="Authentication"
                            data-bs-toggle="pill" href="#v-pills-authentication" role="tab"
                            aria-controls="v-pills-authentication" aria-selected="false">
                            <span class="material-icons-outlined">
                                perm_contact_calendar
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-errorpages-tab" title="Error Pages" data-bs-toggle="pill"
                            href="#v-pills-errorpages" role="tab" aria-controls="v-pills-errorpages"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                announcement
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-subscriptions-tab" title="Subscriptions"
                            data-bs-toggle="pill" href="#v-pills-subscriptions" role="tab"
                            aria-controls="v-pills-subscriptions" aria-selected="false">
                            <span class="material-icons-outlined">
                                loyalty
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-pages-tab" title="Pages" data-bs-toggle="pill"
                            href="#v-pills-pages" role="tab" aria-controls="v-pills-pages"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                layers
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-baseui-tab" title="Base UI" data-bs-toggle="pill"
                            href="#v-pills-baseui" role="tab" aria-controls="v-pills-baseui"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                foundation
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-elements-tab" title="Advanced UI" data-bs-toggle="pill"
                            href="#v-pills-elements" role="tab" aria-controls="v-pills-elements"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                bento
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-charts-tab" title="Charts" data-bs-toggle="pill"
                            href="#v-pills-charts" role="tab" aria-controls="v-pills-charts"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                bar_chart
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-icons-tab" title="Icons" data-bs-toggle="pill"
                            href="#v-pills-icons" role="tab" aria-controls="v-pills-icons"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                grading
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-forms-tab" title="Forms" data-bs-toggle="pill"
                            href="#v-pills-forms" role="tab" aria-controls="v-pills-forms"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                view_day
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-tables-tab" title="Tables" data-bs-toggle="pill"
                            href="#v-pills-tables" role="tab" aria-controls="v-pills-tables"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                table_rows
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-documentation-tab" title="Documentation"
                            data-bs-toggle="pill" href="#v-pills-documentation" role="tab"
                            aria-controls="v-pills-documentation" aria-selected="false">
                            <span class="material-icons-outlined">
                                description
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-changelog-tab" title="Changelog" data-bs-toggle="pill"
                            href="#v-pills-changelog" role="tab" aria-controls="v-pills-changelog"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                sync_alt
                            </span>
                        </a>
                        <a class="nav-link" id="v-pills-multilevel-tab" title="Multilevel" data-bs-toggle="pill"
                            href="#v-pills-multilevel" role="tab" aria-controls="v-pills-multilevel"
                            aria-selected="false">
                            <span class="material-icons-outlined">
                                library_add_check
                            </span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-right">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel"
                            aria-labelledby="v-pills-dashboard-tab">
                            <p>Dashboard</p>
                            <ul>
                                <li><a class href={{route('admin-dashboard')}}>Admin Dashboard</a></li>
                                <li><a class href="employee-dashboard.html">Employee Dashboard</a></li>
                                <li><a class href="deals-dashboard.html">Deals Dashboard</a></li>
                                <li><a class href="leads-dashboard.html">Leads Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show active" id="v-pills-apps" role="tabpanel"
                            aria-labelledby="v-pills-apps-tab">
                            <p>App</p>
                            <ul>
                                <li>
                                    <a class href="{{route('chat')}}" class="active">Chat</a>
                                </li>
                                <li class="sub-menu">
                                    <a href="#">Calls <span class="menu-arrow"></span></a>
                                    <ul>

                                        <li><a class href="{{route('voice-call')}}">Voice Call</a></li>
                                        <li><a class="active" href="{{route('video-call')}}">Video Call</a></li>
                                        <li><a class href="{{route('outgoing-call')}}">Outgoing Call</a></li>
                                        <li><a class href="{{route('incoming-call')}}">Incoming Call</a></li>

                                       

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
                        <div class="tab-pane fade" id="v-pills-employees" role="tabpanel"
                            aria-labelledby="v-pills-employees-tab">
                            <p>Employees</p>
                            <ul>
                                <li><a class href="employees.html">All Employees</a></li>
                                <li><a class href="holidays.html">Holidays</a></li>
                                <li><a class href="leaves.html">Leaves (Admin) <span
                                            class="badge rounded-pill bg-primary float-end">1</span></a></li>
                                <li><a class href="leaves-employee.html">Leaves (Employee)</a></li>
                                <li><a class href="leave-settings.html">Leave Settings</a></li>
                                <li><a class href="attendance.html">Attendance (Admin)</a></li>
                                <li><a class href="attendance-employee.html">Attendance (Employee)</a></li>
                                <li><a class href="departments.html">Departments</a></li>
                                <li><a class href="designations.html">Designations</a></li>
                                <li><a class href="timesheet.html">Timesheet</a></li>
                                <li><a class href="shift-scheduling.html">Shift & Schedule</a></li>
                                <li><a class href="overtime.html">Overtime</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-clients" role="tabpanel"
                            aria-labelledby="v-pills-clients-tab">
                            <p>Clients</p>
                            <ul>
                                <li><a class href="clients.html">Clients</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-projects" role="tabpanel"
                            aria-labelledby="v-pills-projects-tab">
                            <p>Projects</p>
                            <ul>
                                <li><a class href="projects.html">Projects</a></li>
                                <li><a class href="tasks.html">Tasks</a></li>
                                <li><a class href="task-board.html">Task Board</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-leads" role="tabpanel"
                            aria-labelledby="v-pills-leads-tab">
                            <p>CRM</p>
                            <ul>
                                <li>
                                    <a class href="contact-list.html"> Contacts</a>
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
                        <div class="tab-pane fade" id="v-pills-tickets" role="tabpanel"
                            aria-labelledby="v-pills-tickets-tab">
                            <p>Tickets</p>
                            <ul>
                                <li><a class href="tickets.html">Tickets</a></li>
                                <li><a class href="ticket-details.html">Ticket Details</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-sales" role="tabpanel"
                            aria-labelledby="v-pills-sales-tab">
                            <p>Sales</p>
                            <ul>
                                <li><a class href="estimates.html">Estimates</a></li>
                                <li><a class href="invoices.html">Invoices</a></li>
                                <li><a class href="payments.html">Payments</a></li>
                                <li><a class href="expenses.html">Expenses</a></li>
                                <li><a class href="provident-fund.html">Provident Fund</a></li>
                                <li><a class href="taxes.html">Taxes</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-accounting" role="tabpanel"
                            aria-labelledby="v-pills-accounting-tab">
                            <p>Accounting</p>
                            <ul>
                                <li><a class href="categories.html">Categories</a></li>
                                <li><a class href="budgets.html">Budgets</a></li>
                                <li><a class href="budget-expenses.html">Budget Expenses</a></li>
                                <li><a class href="budget-revenues.html">Budget Revenues</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-payroll" role="tabpanel"
                            aria-labelledby="v-pills-payroll-tab">
                            <p>Payroll</p>
                            <ul>
                                <li><a class href="salary.html"> Employee Salary </a></li>
                                <li><a class href="salary-view.html"> Payslip </a></li>
                                <li><a class href="payroll-items.html"> Payroll Items </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-policies" role="tabpanel"
                            aria-labelledby="v-pills-policies-tab">
                            <p>Policies</p>
                            <ul>
                                <li><a class href="policies.html"> Policies </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-reports" role="tabpanel"
                            aria-labelledby="v-pills-reports-tab">
                            <p>Reports</p>
                            <ul>
                                <li><a class href="expense-reports.html"> Expense Report </a></li>
                                <li><a class href="invoice-reports.html"> Invoice Report </a></li>
                                <li><a class href="payments-reports.html"> Payments Report </a></li>
                                <li><a class href="project-reports.html"> Project Report </a></li>
                                <li><a class href="task-reports.html"> Task Report </a></li>
                                <li><a class href="user-reports.html"> User Report </a></li>
                                <li><a class href="employee-reports.html"> Employee Report </a></li>
                                <li><a class href="payslip-reports.html"> Payslip Report </a></li>
                                <li><a class href="attendance-reports.html"> Attendance Report </a></li>
                                <li><a class href="leave-reports.html"> Leave Report </a></li>
                                <li><a class href="daily-reports.html"> Daily Report </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-performance" role="tabpanel"
                            aria-labelledby="v-pills-performance-tab">
                            <p>Performance</p>
                            <ul>
                                <li><a class href="performance-indicator.html"> Performance Indicator </a></li>
                                <li><a class href="performance.html"> Performance Review </a></li>
                                <li><a class href="performance-appraisal.html"> Performance Appraisal </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-goals" role="tabpanel"
                            aria-labelledby="v-pills-goals-tab">
                            <p>Goals</p>
                            <ul>
                                <li><a class href="goal-tracking.html"> Goal List </a></li>
                                <li><a class href="goal-type.html"> Goal Type </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-training" role="tabpanel"
                            aria-labelledby="v-pills-training-tab">
                            <p>Training</p>
                            <ul>
                                <li><a class href="training.html"> Training List </a></li>
                                <li><a class href="trainers.html"> Trainers</a></li>
                                <li><a class href="training-type.html"> Training Type </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-promotion" role="tabpanel"
                            aria-labelledby="v-pills-promotion-tab">
                            <p>Promotion</p>
                            <ul>
                                <li><a class href="promotion.html"> Promotion </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-resignation" role="tabpanel"
                            aria-labelledby="v-pills-resignation-tab">
                            <p>Resignation</p>
                            <ul>
                                <li><a class href="resignation.html"> Resignation </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-termination" role="tabpanel"
                            aria-labelledby="v-pills-termination-tab">
                            <p>Termination</p>
                            <ul>
                                <li><a class href="termination.html"> Termination </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-assets" role="tabpanel"
                            aria-labelledby="v-pills-assets-tab">
                            <p>Assets</p>
                            <ul>
                                <li><a class href="assets1.html"> Assets </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="v-pills-jobs" role="tabpanel"
                            aria-labelledby="v-pills-jobs-tab">
                            <p>Jobs</p>
                            <ul>
                                <li><a class href="user-dashboard.html" class="active"> User Dasboard </a></li>
                                <li><a class href="jobs-dashboard.html"> Jobs Dasboard </a></li>
                                <li><a class href="jobs.html"> Manage Jobs </a></li>
                                <li><a class href="job-applicants.html"> Applied Jobs </a></li>
                                <li><a class href="manage-resumes.html"> Manage Resumes </a></li>
                                <li><a class href="shortlist-candidates.html"> Shortlist Candidates </a></li>
                                <li><a class href="interview-questions.html"> Interview Questions </a></li>
                                <li><a class href="offer_approvals.html"> Offer Approvals </a></li>
                                <li><a class href="experiance-level.html"> Experience Level </a></li>
                                <li><a class href="candidates.html"> Candidates List </a></li>
                                <li><a class href="schedule-timing.html"> Schedule timing </a></li>
                                <li><a class href="apptitude-result.html"> Aptitude Results </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-knowledgebase" role="tabpanel"
                            aria-labelledby="v-pills-knowledgebase-tab">
                            <p>Knowledgebase</p>
                            <ul>
                                <li><a class href="knowledgebase.html"> Knowledgebase </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-activities" role="tabpanel"
                            aria-labelledby="v-pills-activities-tab">
                            <p>Activities</p>
                            <ul>
                                <li><a class href="activities.html"> Activities </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-users" role="tabpanel"
                            aria-labelledby="v-pills-activities-tab">
                            <p>Users</p>
                            <ul>
                                <li><a class href="users.html"> Users </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <p>Settings</p>
                            <ul>
                                <li><a class href="settings.html"> Settings </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <p>Profile</p>
                            <ul>
                                <li><a class href="profile.html"> Employee Profile </a></li>
                                <li><a class href="client-profile.html"> Client Profile </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-authentication" role="tabpanel"
                            aria-labelledby="v-pills-authentication-tab">
                            <p>Authentication</p>
                            <ul>
                                <li><a class href="index.html"> Login </a></li>
                                <li><a class href="register.html"> Register </a></li>
                                <li><a class href="forgot-password.html"> Forgot Password </a></li>
                                <li><a class href="otp.html"> OTP </a></li>
                                <li><a class href="lock-screen.html"> Lock Screen </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-errorpages" role="tabpanel"
                            aria-labelledby="v-pills-errorpages-tab">
                            <p>Error Pages</p>
                            <ul>
                                <li><a class href="error-404.html">404 Error </a></li>
                                <li><a class href="error-500.html">500 Error </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-subscriptions" role="tabpanel"
                            aria-labelledby="v-pills-subscriptions-tab">
                            <p>Subscriptions</p>
                            <ul>
                                <li><a class href="subscriptions.html"> Subscriptions (Admin) </a></li>
                                <li><a class href="subscriptions-company.html"> Subscriptions (Company) </a></li>
                                <li><a class href="subscribed-companies.html"> Subscribed Companies</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-pages" role="tabpanel"
                            aria-labelledby="v-pills-pages-tab">
                            <p>Pages</p>
                            <ul>
                                <li><a class href="search.html"> Search </a></li>
                                <li><a class href="faq.html"> FAQ </a></li>
                                <li><a class href="terms.html"> Terms </a></li>
                                <li><a class href="privacy-policy.html"> Privacy Policy </a></li>
                                <li><a class href="blank-page.html"> Blank Page </a></li>
                                <li><a class href="coming-soon.html">Coming Soon </a></li>
                                <li><a class href="under-maintenance.html">Under Maintanance </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-baseui" role="tabpanel"
                            aria-labelledby="v-pills-baseui-tab">
                            <p>Base UI</p>
                            <ul>
                                <li><a class href="ui-alerts.html">Alerts</a></li>
                                <li><a class href="ui-accordion.html">Accordion</a></li>
                                <li><a class href="ui-avatar.html">Avatar</a></li>
                                <li><a class href="ui-badges.html">Badges</a></li>
                                <li><a class href="ui-borders.html">Border</a></li>
                                <li><a class href="ui-buttons.html">Buttons</a></li>
                                <li><a class href="ui-buttons-group.html">Button Group</a></li>
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
                        <div class="tab-pane fade" id="v-pills-elements" role="tabpanel"
                            aria-labelledby="v-pills-elements-tab">
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
                        <div class="tab-pane fade" id="v-pills-charts" role="tabpanel"
                            aria-labelledby="v-pills-charts-tab">
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
                        <div class="tab-pane fade" id="v-pills-icons" role="tabpanel"
                            aria-labelledby="v-pills-icons-tab">
                            <p>Icons</p>
                            <ul>
                                <li><a class href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a class href="icon-feather.html">Feather Icons</a></li>
                                <li><a class href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a class href="icon-material.html">Material Icons</a></li>
                                <li><a class href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a class href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a class href="icon-themify.html">Themify Icons</a></li>
                                <li><a class href="icon-weather.html">Weather Icons</a></li>
                                <li><a class href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a class href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-forms" role="tabpanel"
                            aria-labelledby="v-pills-forms-tab">
                            <p>Forms</p>
                            <ul>
                                <li><a class href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a class href="form-input-groups.html">Input Groups </a></li>
                                <li><a class href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a class href="form-vertical.html"> Vertical Form </a></li>
                                <li><a class href="form-mask.html"> Form Mask </a></li>
                                <li><a class href="form-validation.html"> Form Validation </a></li>
                                <li><a class href="form-select2.html">Form Select2 </a></li>
                                <li><a class href="form-fileupload.html">File Upload </a></li>
                                <li><a class href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a class href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-tables" role="tabpanel"
                            aria-labelledby="v-pills-tables-tab">
                            <p>Tables</p>
                            <ul>
                                <li><a class href="tables-basic.html">Basic Tables </a></li>
                                <li><a class href="data-tables.html">Data Table </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-documentation" role="tabpanel"
                            aria-labelledby="v-pills-documentation-tab">
                            <p>Documentation</p>
                            <ul>
                                <li><a href="#">Documentation </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-changelog" role="tabpanel"
                            aria-labelledby="v-pills-changelog-tab">
                            <p>Change Log</p>
                            <ul>
                                <li><a href="#"><span>Change Log</span> <span
                                            class="badge badge-primary ms-auto">v1.7.0</span> </a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-multilevel" role="tabpanel"
                            aria-labelledby="v-pills-multilevel-tab">
                            <p>Multi Level</p>
                            <ul>
                                <li class="sub-menu">
                                    <a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
                                    <ul class="ms-3">
                                        <li class="sub-menu">
                                            <a href="javascript:void(0);">Level 1 <span
                                                    class="menu-arrow"></span></a>
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
        </div>



        <div class="page-wrapper">

            <div class="chat-main-row">

                <div class="chat-main-wrapper">
                    <div class="col-lg-9 message-view task-view">
                        <div class="chat-window">
                            <div class="fixed-header">
                                <div class="navbar">
                                    <div class="user-details">
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
                                    <div class="user-video">
                                        <img src="assets/img/video-call.jpg" alt>
                                    </div>
                                    <div class="my-video">
                                        <ul>
                                            <li>
                                                <img src="assets/img/profiles/avatar-01.jpg" class="img-fluid" alt>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer">
                                <div class="call-icons">
                                    <span class="call-duration">00:59</span>
                                    <ul class="call-items">
                                        <li class="call-item">
                                            <a href title="Enable Video" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-video-camera camera"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href title="Mute Audio" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-microphone microphone"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href title="Add User" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </li>
                                        <li class="call-item">
                                            <a href title="Full Screen" data-placement="top"
                                                data-bs-toggle="tooltip">
                                                <i class="fa fa-arrows-v full-screen"></i>
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
                                                            <img alt src="assets/img/profiles/avatar-09.jpg"
                                                                class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <span class="task-chat-user">Richard Miles</span>
                                                                <span class="chat-time">8:35 am</span>
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
                                                            <img alt src="assets/img/profiles/avatar-09.jpg">
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
                                                                            src="assets/img/profiles/avatar-09.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <span class="task-chat-user">John
                                                                                Doe</span> <span
                                                                                class="chat-time">8:35 am</span>
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
                                                                            src="assets/img/profiles/avatar-09.jpg">
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
                                                            <img src="assets/img/profiles/avatar-09.jpg" alt>
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
                                                                        data-cfemail="214b4e494f454e44614459404c514d440f424e4c">[email&#160;protected]</a></span>
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
    <!-- Cloudflare Email Decode -->
    <script data-cfasync="false"
        src="{{ asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Bundle -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Feather Icons -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Layout Script -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>

    <!-- Theme Settings -->
    <script src="{{ asset('assets/js/theme-settings.js') }}"></script>

    <!-- Greedy Nav -->
    <script src="{{ asset('assets/js/greedynav.js') }}"></script>

    <!-- Main App Script -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Cloudflare Rocket Loader (optional, only if you use Cloudflare Rocket Loader) -->
    <script src="{{ asset('../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="63ec3e11dc7b7e364e8b3956-|49" defer></script>

</body>
<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/video-call by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 02:22:23 GMT -->

</html>
