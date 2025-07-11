 <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <nav class="greedys sidebar-horizantal">
                        <ul class="list-inline-item list-unstyled links">
                            <li class="menu-title">
                                <span>Main</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-dashcube"></i> <span> Dashboard</span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class="active" href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
                                    <li><a class href="{{ route('employee-dashboard') }}">Employee Dashboard</a></li>
                                    
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('chat') }}">Chat</a></li>
                                    <li class="submenu">
                                        <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a class href="{{route('voice-call')}}">Voice Call</a></li>
                                            <li><a class href="{{route('video-call')}}">Video Call</a></li>
                                            <li><a class href="{{route('outgoing-call')}}">Outgoing Call</a></li>
                                            <li><a class href="{{route('incoming-call')}}">Incoming Call</a></li>
                                        </ul>
                                    </li>
                                    <li><a class href="{{ route('events') }}">Calendar</a></li>
                                    <li><a class href="{{ route('contacts') }}">Contacts</a></li>
                                    <li><a class href="{{ route('inbox') }}">Email</a></li>
                                    <li><a class href="{{ route('file-manager') }}">File Manager</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>Employees</span>
                            </li>
                            <li class="submenu">
                                <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{route('employees')}}">All Employees</a></li>
                                    <li><a class href="{{route('holidays')}}">Holidays</a></li>
                                    <li><a class href="{{route('leaves-admin')}}">Leaves (Admin) <span
                                                class="badge rounded-pill bg-primary float-end">1</span></a></li>
                                    <li><a class href="{{route('leaves-employee')}}">Leaves (Employee)</a></li>
                                    <li><a class href="{{route('leave-settings')}}">Leave Settings</a></li>
                                    <li><a class href="{{route('attendance-admin')}}">Attendance (Admin)</a></li>
                                    <li><a class href="{{route('attendance-employee')}}">Attendance (Employee)</a></li>
                                    <li><a class href="{{route('departments')}}">Departments</a></li>
                                    <li><a class href="{{route('designations')}}">Designations</a></li>
                                    <li><a class href="{{route('timesheet')}}">Timesheet</a></li>
                                    <li><a class href="{{route('shift-scheduling')}}">Shift & Schedule</a></li>
                                    <li><a class href="{{route('overtime')}}">Overtime</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class href="{{route('clients')}}"><i class="la la-users"></i> <span>Clients</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{route('projects')}}">Projects</a></li>
                                    <li><a class href="{{route('tasks')}}">Tasks</a></li>
                                    <li><a class href="{{route('task-board')}}">Task Board</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-ticket"></i> <span>Crm</span><span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li class>
                                        <a href="{{route('contact-list')}}"> Contacts</a>
                                    </li>
                                    <li class>
                                        <a href="{{route('companies')}}">Companies</a>
                                    </li>
                                    <li class>
                                        <a href="{{route('deals')}}"> Deals</a>
                                    </li>
                                    <li class>
                                        <a href="{{route('leads')}}"> Leads </a>
                                    </li>
                                    
                                    <li class>
                                        <a href="{{route('activities')}}"> Activities </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-ticket"></i> <span>Tickets</span><span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{route('tickets')}}">Tickets</a></li>
                                    <li><a class href="{{route('ticket-details')}}">Tickets Detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>HR</span>
                            </li>
                            
                        </ul>
                        <button class="viewmoremenu">More Menu</button>
                        <ul class="hidden-links hidden">
                            <li class="submenu">
                                <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('categories') }}">Categories</a></li>
                                    <li><a class href="{{ route('budgets') }}">Budgets</a></li>
                                    <li><a class href="{{ route('budget-expenses') }}">Budget Expenses</a></li>
                                    <li><a class href="{{ route('budget-revenues') }}">Budget Revenues</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('salary') }}"> Employee Salary </a></li>
                                    <li><a class href="{{ route('salary-view') }}"> Payslip </a></li>
                                    <li><a class href="{{ route('payroll-items') }}"> Payroll Items </a></li>
                                </ul>
                            </li>
                            <li>
                                <a class href="{{ route('policies') }}"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('expense-reports') }}"> Expense Report </a></li>
                                    <li><a class href="{{ route('invoice-reports') }}"> Invoice Report </a></li>
                                    <li><a class href="{{ route('payment-reports') }}"> Payments Report </a></li>
                                    <li><a class href="{{ route('project-reports') }}"> Project Report </a></li>
                                    <li><a class href="{{ route('task-reports') }}"> Task Report </a></li>
                                    <li><a class href="{{ route('user-reports') }}"> User Report </a></li>
                                    <li><a class href="{{ route('employee-reports') }}"> Employee Report </a></li>
                                    <li><a class href="{{ route('payslip-reports') }}"> Payslip Report </a></li>
                                    <li><a class href="{{ route('attendance-reports') }}"> Attendance Report </a></li>
                                    <li><a class href="{{ route('leave-reports') }}"> Leave Report </a></li>
                                    <li><a class href="{{ route('daily-reports') }}"> Daily Report </a></li>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>Performance</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('performance-indicator') }}"> Performance Indicator </a></li>
                                    <li><a class href="{{ route('performance') }}"> Performance Review </a></li>
                                    <li><a class href="{{ route('performance-appraisal') }}"> Performance Appraisal </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('goal-tracking') }}"> Goal List </a></li>
                                    <li><a class href="{{ route('goal-type') }}"> Goal Type </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-edit"></i> <span> Training </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('training') }}"> Training List </a></li>
                                    <li><a class href="{{ route('trainers') }}"> Trainers</a></li>
                                    <li><a class href="{{ route('training-type') }}"> Training Type </a></li>
                                </ul>
                            </li>
                            <li><a class href="{{ route('promotion') }}"><i class="la la-bullhorn"></i> <span>Promotion</span></a>
                            </li>
                            <li><a class href="{{ route('resignation') }}"><i class="la la-external-link-square"></i>
                                    <span>Resignation</span></a></li>
                            <li><a class href="{{ route('termination') }}"><i class="la la-times-circle"></i>
                                    <span>Termination</span></a></li>
                            <li class="menu-title">
                                <span>Administration</span>
                            </li>
                            <li>
                                <a class href="{{ route('assets1') }}"><i class="la la-object-ungroup"></i>
                                    <span>Assets</span></a>
                            </li>
                            
                            <li>
                                <a class href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
                            </li>
                            <li>
                                <a class href="{{ route('users') }}"><i class="la la-user-plus"></i> <span>Users</span></a>
                            </li>
                            <li>
                                <a class href="{{ route('settings') }}"><i class="la la-cog"></i> <span>Settings</span></a>
                            </li>
                            <li class="menu-title">
                                <span>Pages</span>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-user"></i> <span> Profile </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('profile') }}"> Employee Profile </a></li>
                                    <li><a class href="{{ route('client-profile') }}"> Client Profile </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('login') }}"> Login </a></li>
                                    <li><a class href="{{ route('register') }}"> Register </a></li>
                                    <li><a class href="{{ route('forgot-password') }}"> Forgot Password </a></li>
                                    <li><a class href="{{ route('otp') }}"> OTP </a></li>
                                    <li><a class href="{{ route('lock-screen') }}"> Lock Screen </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('error-404') }}">404 Error </a></li>
                                    <li><a class href="{{ route('error-500') }}">500 Error </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('subscriptions') }}"> Subscriptions (Admin) </a></li>
                                    <li><a class href="{{ route('subscription-company') }}"> Subscriptions (Company) </a></li>
                                    <li><a class href="{{ route('subscribed-companies') }}"> Subscribed Companies</a></li>
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </nav>
                    <ul class="sidebar-vertical">
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-dashcube"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="active" href="{{ route('admin-dashboard') }}" class="active">Admin Dashboard</a>
                                </li>
                                <li><a class href="{{ route('employee-dashboard') }}">Employee Dashboard</a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{route('chat')}}">Chat</a></li>
                                <li class="submenu">
                                    <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a class href="{{route('voice-call')}}">Voice Call</a></li>
                                        <li><a class href="{{route('video-call')}}">Video Call</a></li>
                                        <li><a class href="{{route('outgoing-call')}}">Outgoing Call</a></li>
                                        <li><a class href="{{route('incoming-call')}}">Incoming Call</a></li>
                                    </ul>
                                </li>
                                <li><a class href="{{ route('events') }}">Calendar</a></li>
                                <li><a class href="{{ route('contacts') }}">Contacts</a></li>
                                <li><a class href="{{ route('inbox') }}">Email</a></li>
                                <li><a class href="{{ route('file-manager') }}">File Manager</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Employees</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('employees') }}">All Employees</a></li>
                                <li><a class href="{{ route('holidays') }}">Holidays</a></li>
                                <li><a class href="{{ route('leaves-admin') }}">Leaves (Admin) <span
                                            class="badge rounded-pill bg-primary float-end">1</span></a></li>
                                <li><a class href="{{ route('leaves-employee') }}">Leaves (Employee)</a></li>
                                <li><a class href="{{ route('leave-settings') }}">Leave Settings</a></li>
                                <li><a class href="{{ route('attendance-admin') }}">Attendance (Admin)</a></li>
                                <li><a class href="{{ route('attendance-employee') }}">Attendance (Employee)</a></li>
                                <li><a class href="{{ route('departments') }}">Departments</a></li>
                                <li><a class href="{{ route('designations') }}">Designations</a></li>
                                <li><a class href="{{ route('timesheet') }}">Timesheet</a></li>
                                <li><a class href="{{ route('shift-scheduling') }}">Shift & Schedule</a></li>
                                <li><a class href="{{ route('overtime') }}">Overtime</a></li>
                            </ul>
                        </li>
                        <li class>
                            <a href="{{ route('clients') }}"><i class="la la-users"></i> <span>Clients</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('projects') }}">Projects</a></li>
                                <li><a class href="{{ route('tasks') }}">Tasks</a></li>
                                <li><a class href="{{ route('task-board') }}">Task Board</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-ticket"></i> <span>Tickets</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('tickets') }}">Tickets</a></li>
                                <li><a class href="{{ route('ticket-details') }}">Tickets Detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>CRM</span>
                            <small class="newly-added-features">New</small>
                        </li>
                        <li class>
                            <a href="{{route('contact-list')}}"><i class="la la-user-shield"></i> <span> Contacts </span></a>
                        </li>
                        <li class>
                            <a href="{{route('companies')}}"><i class="la la-building"></i> <span> Companies </span></a>
                        </li>
                        <li class>
                            <a href="{{route('deals')}}"><i class="la la-cubes"></i> <span> Deals </span></a>
                        </li>
                        <li class>
                            <a href="{{route('leads')}}"><i class="la la-chart-area"></i> <span> Leads </span></a>
                        </li>
                        
                        <li class>
                            <a href="{{route('activities')}}"><i class="la la-directions"></i> <span> Activities </span></a>
                        </li>
                        <li class="menu-title">
                            <span>HR</span>
                        </li>
                        
                        <li class="submenu">
                            <a href="#"><i class="la la-file-alt"></i> <span> Accounting </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('categories') }}">Categories</a></li>
                                <li><a class href="{{ route('budgets') }}">Budgets</a></li>
                                <li><a class href="{{ route('budget-expenses') }}">Budget Expenses</a></li>
                                <li><a class href="{{ route('budget-revenues') }}">Budget Revenues</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-money-bill-wave"></i> <span> Payroll </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('salary') }}"> Employee Salary </a></li>
                                <li><a class href="{{ route('salary-view') }}"> Payslip </a></li>
                                <li><a class href="{{ route('payroll-items') }}"> Payroll Items </a></li>
                            </ul>
                        </li>
                        <li class>
                            <a href="{{ route('policies') }}"><i class="la la-file-pdf"></i> <span>Policies</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-chart-pie"></i> <span> Reports </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('expense-reports') }}"> Expense Report </a></li>
                                <li><a class href="{{ route('invoice-reports') }}"> Invoice Report </a></li>
                                <li><a class href="{{ route('payment-reports') }}"> Payments Report </a></li>
                                <li><a class href="{{ route('project-reports') }}"> Project Report </a></li>
                                <li><a class href="{{ route('task-reports') }}"> Task Report </a></li>
                                <li><a class href="{{ route('user-reports') }}"> User Report </a></li>
                                <li><a class href="{{ route('employee-reports') }}"> Employee Report </a></li>
                                <li><a class href="{{ route('payslip-reports') }}"> Payslip Report </a></li>
                                <li><a class href="{{ route('attendance-reports') }}"> Attendance Report </a></li>
                                <li><a class href="{{ route('leave-reports') }}"> Leave Report </a></li>
                                <li><a class href="{{ route('daily-reports') }}"> Daily Report </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Performance</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-laptop-medical"></i> <span> Performance </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('performance-indicator') }}"> Performance Indicator </a></li>
                                <li><a class href="{{ route('performance') }}"> Performance Review </a></li>
                                <li><a class href="{{ route('performance-appraisal') }}"> Performance Appraisal </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('goal-tracking') }}"> Goal List </a></li>
                                <li><a class href="{{ route('goal-type') }}"> Goal Type </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-edit"></i> <span> Training </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('training') }}"> Training List </a></li>
                                <li><a class href="{{ route('trainers') }}"> Trainers</a></li>
                                <li><a class href="{{ route('training-type') }}"> Training Type </a></li>
                            </ul>
                        </li>
                        <li class><a href="{{ route('promotion') }}"><i class="la la-bullhorn"></i> <span>Promotion</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-external-link-square"></i> <span>Resignation</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('resignation') }}"> Resignation </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-user-times"></i> <span>Termination</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('termination') }}"> Termination </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Administration</span>
                        </li>
                        <li class>
                            <a href="{{ route('assets1') }}"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                        </li>
                       
                     
                        <li class>
                            <a href="{{ route('users') }}"><i class="la la-users-cog"></i> <span>Users</span></a>
                        </li>
                        <li>
                            <a class href="{{ route('settings') }}"><i class="la la-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-user-tag"></i> <span> Profile </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('profile') }}"> Employee Profile </a></li>
                                <li><a class href="{{ route('client-profile') }}"> Client Profile </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('login') }}"> Login </a></li>
                                <li><a class href="{{ route('register') }}"> Register </a></li>
                                <li><a class href="{{ route('forgot-password') }}"> Forgot Password </a></li>
                                <li><a class href="{{ route('otp') }}"> OTP </a></li>
                                <li><a class href="{{ route('lock-screen') }}"> Lock Screen </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('error-404') }}">404 Error </a></li>
                                <li><a class href="{{ route('error-500') }}">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-history"></i> <span> Subscriptions </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('subscriptions') }}"> Subscriptions (Admin) </a></li>
                                <li><a class href="{{ route('subscription-company') }}"> Subscriptions (Company) </a></li>
                                <li><a class href="{{ route('subscribed-companies') }}"> Subscribed Companies</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

<!-- two-col-bar -->

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
                class="nav-link"
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
                class="nav-link active"
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
              <!-- <a
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
              </a> -->
              <!-- <a
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
              </a> -->
              <!-- <a
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
              </a> -->
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
                    <a class href="{{ route('admin-dashboard') }}">Admin Dashboard</a>
                  </li>
                  <li>
                    <a class href="{{ route('employee-dashboard') }}"
                      >Employee Dashboard</a
                    >
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
                    <a class href="{{ route('chat') }}">Chat</a>
                  </li>
                  <li class="sub-menu">
                    <a href="#">Calls <span class="menu-arrow"></span></a>
                    <ul>
                      <li><a class href="{{route('voice-call')}}">Voice Call</a></li>
                      <li><a class href="{{route('video-call')}}">Video Call</a></li>
                      <li>
                        <a class href="{{route('outgoing-call')}}">Outgoing Call</a>
                      </li>
                      <li>
                        <a class href="{{route('incoming-call')}}">Incoming Call</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class href="{{route('events')}}">Calendar</a>
                  </li>
                  <li>
                    <a class href="{{route('contacts')}}">Contacts</a>
                  </li>
                  <li>
                    <a class href="{{route('inbox')}}">Email</a>
                  </li>
                  <li>
                    <a class href="{{ route('file-manager') }}">File Manager</a>
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
                  <li><a class href="{{ route('employees') }}">All Employees</a></li>
                  <li><a class href="{{ route('holidays') }}">Holidays</a></li>
                  <li>
                    <a class href="{{ route('leaves-admin') }}"
                      >Leaves (Admin)
                      <span class="badge rounded-pill bg-primary float-end"
                        >1</span
                      ></a
                    >
                  </li>
                  <li>
                    <a class href="{{ route('leaves-employee') }}">Leaves (Employee)</a>
                  </li>
                  <li>
                    <a class href="{{ route('leave-settings') }}">Leave Settings</a>
                  </li>
                  <li>
                    <a class href="{{ route('attendance-admin') }}">Attendance (Admin)</a>
                  </li>
                  <li>
                    <a class href="{{route('attendance-employee') }}"
                      >Attendance (Employee)</a
                    >
                  </li>
                  <li><a class href="{{ route('departments') }}">Departments</a></li>
                  <li><a class href="{{ route('designations') }}">Designations</a></li>
                  <li><a class href="{{ route('timesheet') }}">Timesheet</a></li>
                  <li>
                    <a class href="{{ route('shift-scheduling') }}">Shift & Schedule</a>
                  </li>
                  <li><a class href="{{ route('overtime') }}">Overtime</a></li>
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
                  <li><a class href="{{ route('clients') }}">Clients</a></li>
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
                  <li><a class href="{{ route('projects') }}">Projects</a></li>
                  <li><a class href="{{ route('tasks') }}">Tasks</a></li>
                  <li><a class href="{{ route('task-board') }}">Task Board</a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-leads"
                role="tabpanel"
                aria-labelledby="v-pills-leads-tab"
              >
                <p>CRM</p>
                <ul>
                  <li>
                    <a class href="{{ route('contact-list') }}"> Contacts</a>
                  </li>
                  <li>
                    <a class href="{{ route('companies') }}">Companies</a>
                  </li>
                  <li>
                    <a class href="{{ route('deals') }}"> Deals</a>
                  </li>
                  <li>
                    <a class href="{{ route('leads') }}"> Leads </a>
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
                  <li><a class href="{{ route('tickets') }}">Tickets</a></li>
                  <li>
                    <a class href="{{ route('ticket-details') }}">Ticket Details</a>
                  </li>
                </ul>
              </div>
              <div
                class="tab-pane fade show active"
                id="v-pills-sales"
                role="tabpanel"
                aria-labelledby="v-pills-sales-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-accounting"
                role="tabpanel"
                aria-labelledby="v-pills-accounting-tab"
              >
                <p>Accounting</p>
                <ul>
                  <li><a class href="{{ route('categories') }}">Categories</a></li>
                  <li><a class href="{{ route('budgets') }}">Budgets</a></li>
                  <li>
                    <a class href="{{ route('budget-expenses') }}">Budget Expenses</a>
                  </li>
                  <li>
                    <a class href="{{ route('budget-revenues') }}">Budget Revenues</a>
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
                  <li><a class href="{{ route('salary') }}"> Employee Salary </a></li>
                  <li><a class href="{{ route('salary-view') }}"> Payslip </a></li>
                  <li>
                    <a class href="{{ route('payroll-items') }}"> Payroll Items </a>
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
                  <li><a class href="{{ route('policies') }}"> Policies </a></li>
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
                    <a class href="{{ route('expense-reports') }}"> Expense Report </a>
                  </li>
                  <li>
                    <a class href="{{ route('invoice-reports') }}"> Invoice Report </a>
                  </li>
                  <li>
                    <a class href="{{ route('payment-reports') }}"> Payments Report </a>
                  </li>
                  <li>
                    <a class href="{{ route('project-reports') }}"> Project Report </a>
                  </li>
                  <li><a class href="{{ route('task-reports') }}"> Task Report </a></li>
                  <li><a class href="{{ route('user-reports') }}"> User Report </a></li>
                  <li>
                    <a class href="{{ route('employee-reports') }}"> Employee Report </a>
                  </li>
                  <li>
                    <a class href="{{ route('payslip-reports') }}"> Payslip Report </a>
                  </li>
                  <li>
                    <a class href="{{ route('attendance-reports') }}">
                      Attendance Report
                    </a>
                  </li>
                  <li><a class href="{{ route('leave-reports') }}"> Leave Report </a></li>
                  <li><a class href="{{ route('daily-reports') }}"> Daily Report </a></li>
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
                    <a class href="{{route('performance-indicator')}}">
                      Performance Indicator
                    </a>
                  </li>
                  <li>
                    <a class href="{{route('performance')}}">
                      Performance Review
                    </a>
                  </li>
                  <li>
                    <a class href="{{route('performance-appraisal')}}">
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
                  <li><a class href="{{ route('goal-tracking') }}"> Goal List </a></li>
                  <li><a class href="{{ route('goal-type') }}"> Goal Type </a></li>
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
                  <li><a class href="{{ route('training') }}"> Training List </a></li>
                  <li><a class href="{{ route('trainers') }}"> Trainers</a></li>
                  <li>
                    <a class href="{{ route('training-type') }}"> Training Type </a>
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
                  <li><a class href="{{ route('promotion') }}"> Promotion </a></li>
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
                  <li><a class href="{{ route('resignation') }}"> Resignation </a></li>
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
                  <li><a class href="{{ route('termination') }}"> Termination </a></li>
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
                  <li><a class href="{{ route('assets1') }}"> Assets </a></li>
                </ul>
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-jobs"
                role="tabpanel"
                aria-labelledby="v-pills-jobs-tab"
              >
                
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-knowledgebase"
                role="tabpanel"
                aria-labelledby="v-pills-knowledgebase-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-activities"
                role="tabpanel"
                aria-labelledby="v-pills-activities-tab"
              >
                <p>Activities</p>
                <ul>
                  <li><a class href="{{ route('activities') }}"> Activities </a></li>
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
                  <li><a class href="{{ route('users') }}"> Users </a></li>
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
                  <li><a class href="{{ route('settings') }}"> Settings </a></li>
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
                  <li><a class href="{{ route('profile') }}"> Employee Profile </a></li>
                  <li>
                    <a class href="{{ route('client-profile') }}"> Client Profile </a>
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
                  <li><a class href="{{ route('login') }}"> Login </a></li>
                  <li><a class href="{{ route('register') }}"> Register </a></li>
                  <li>
                    <a class href="{{ route('forgot-password') }}"> Forgot Password </a>
                  </li>
                  <li><a class href="{{ route('otp') }}"> OTP </a></li>
                  <li><a class href="{{ route('lock-screen') }}"> Lock Screen </a></li>
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
                  <li><a class href="{{ route('error-404') }}">404 Error </a></li>
                  <li><a class href="{{ route('error-500') }}">500 Error </a></li>
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
                    <a class href="{{ route('subscriptions') }}">
                      Subscriptions (Admin)
                    </a>
                  </li>
                  <li>
                    <a class href="{{ route('subscription-company') }}">
                      Subscriptions (Company)
                    </a>
                  </li>
                  <li>
                    <a class href="{{ route('subscribed-companies') }}">
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
               
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-baseui"
                role="tabpanel"
                aria-labelledby="v-pills-baseui-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-elements"
                role="tabpanel"
                aria-labelledby="v-pills-elements-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-charts"
                role="tabpanel"
                aria-labelledby="v-pills-charts-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-icons"
                role="tabpanel"
                aria-labelledby="v-pills-icons-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-forms"
                role="tabpanel"
                aria-labelledby="v-pills-forms-tab"
              >
                
              </div>
              <div
                class="tab-pane fade show"
                id="v-pills-tables"
                role="tabpanel"
                aria-labelledby="v-pills-tables-tab"
              >
                
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-documentation"
                role="tabpanel"
                aria-labelledby="v-pills-documentation-tab"
              >
                
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-changelog"
                role="tabpanel"
                aria-labelledby="v-pills-changelog-tab"
              >
                
              </div>
              <div
                class="tab-pane fade"
                id="v-pills-multilevel"
                role="tabpanel"
                aria-labelledby="v-pills-multilevel-tab"
              >
                
              </div>
            </div>
          </div>
        </div>
      </div>