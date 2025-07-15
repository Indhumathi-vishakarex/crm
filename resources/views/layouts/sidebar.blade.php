 <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <nav class="greedys sidebar-horizantal">
                        <ul class="list-inline-item list-unstyled links">
                            <li class="menu-title">
                                <span>Main</span>
                            </li>
                            <li class="submenu">
        <a href="#"><i class="la la-dashboard"></i> <span>Dashboard</span> <span class="menu-arrow"></span></a>
        <ul>
 <li><a href="{{ route('admin-dashboard') }}" class="{{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">Admin Dashboard</a></li>
<li><a href="{{ route('employee-dashboard') }}" class="{{ request()->routeIs('employee-dashboard') ? 'active' : '' }}">Employee Dashboard</a></li>

        </ul>
    </li>
                          <li class="submenu">
    <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('chat') }}" class="{{ request()->routeIs('chat') ? 'active' : '' }}">Chat</a></li>
        <li class="submenu">
            <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
            <ul>
                <li><a href="{{ route('voice-call') }}" class="{{ request()->routeIs('voice-call') ? 'active' : '' }}">Voice Call</a></li>
                <li><a href="{{ route('video-call') }}" class="{{ request()->routeIs('video-call') ? 'active' : '' }}">Video Call</a></li>
                <li><a href="{{ route('outgoing-call') }}" class="{{ request()->routeIs('outgoing-call') ? 'active' : '' }}">Outgoing Call</a></li>
                <li><a href="{{ route('incoming-call') }}" class="{{ request()->routeIs('incoming-call') ? 'active' : '' }}">Incoming Call</a></li>
            </ul>
        </li>
        <li><a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">Calendar</a></li>
        <li><a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">Contacts</a></li>
        <li><a href="{{ route('inbox') }}" class="{{ request()->routeIs('inbox') ? 'active' : '' }}">Email</a></li>
        <li><a href="{{ route('file-manager') }}" class="{{ request()->routeIs('file-manager') ? 'active' : '' }}">File Manager</a></li>
    </ul>
</li>

                            <li class="menu-title">
                                <span>Employees</span>
                            </li>
                           <li class="submenu">
    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('employees') }}" class="{{ request()->routeIs('employees') ? 'active' : '' }}">All Employees</a></li>
        <li><a href="{{ route('holidays') }}" class="{{ request()->routeIs('holidays') ? 'active' : '' }}">Holidays</a></li>
        <li><a href="{{ route('leaves-admin') }}" class="{{ request()->routeIs('leaves-admin') ? 'active' : '' }}">Leaves (Admin)</a></li>
        <li><a href="{{ route('leaves-employee') }}" class="{{ request()->routeIs('leaves-employee') ? 'active' : '' }}">Leaves (Employee)</a></li>
        <li><a href="{{ route('leave-settings') }}" class="{{ request()->routeIs('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>
        <li><a href="{{ route('attendance-admin') }}" class="{{ request()->routeIs('attendance-admin') ? 'active' : '' }}">Attendance (Admin)</a></li>
        <li><a href="{{ route('attendance-employee') }}" class="{{ request()->routeIs('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
        <li><a href="{{ route('departments') }}" class="{{ request()->routeIs('departments') ? 'active' : '' }}">Departments</a></li>
        <li><a href="{{ route('designations') }}" class="{{ request()->routeIs('designations') ? 'active' : '' }}">Designations</a></li>
        <li><a href="{{ route('timesheet') }}" class="{{ request()->routeIs('timesheet') ? 'active' : '' }}">Timesheet</a></li>
        <li><a href="{{ route('shift-scheduling') }}" class="{{ request()->routeIs('shift-scheduling') ? 'active' : '' }}">Shift & Schedule</a></li>
        <li><a href="{{ route('overtime') }}" class="{{ request()->routeIs('overtime') ? 'active' : '' }}">Overtime</a></li>
    </ul>
</li>
<li>
    <a href="{{ route('clients') }}" class="{{ request()->routeIs('clients') ? 'active' : '' }}">
        <i class="la la-users"></i> <span>Clients</span>
    </a>
</li>

<li class="submenu">
    <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('tasks') }}" class="{{ request()->routeIs('tasks') ? 'active' : '' }}">Tasks</a></li>
        <li><a href="{{ route('task-board') }}" class="{{ request()->routeIs('task-board') ? 'active' : '' }}">Task Board</a></li>
    </ul>
</li>













<li class="submenu">
  <a href="#" class="noti-dot">
    <i class="la la-ticket"></i>
    <span>CRM</span>
    <span class="menu-arrow"></span>
  </a>
  <ul>
    <li>
      <a href="{{ route('contact-list') }}" class="{{ request()->routeIs('contact-list') ? 'active' : '' }}">
        Contacts
      </a>
    </li>
    <li>
      <a href="{{ route('companies') }}" class="{{ request()->routeIs('companies') ? 'active' : '' }}">
        Companies
      </a>
    </li>
    <li>
      <a href="{{ route('deals') }}" class="{{ request()->routeIs('deals') ? 'active' : '' }}">
        Deals
      </a>
    </li>
    <li>
      <a href="{{ route('leads') }}" class="{{ request()->routeIs('leads') ? 'active' : '' }}">
        Leads
      </a>
    </li>
    <li>
      <a href="{{ route('crm-activities') }}" class="{{ request()->routeIs('crm-activities') ? 'active' : '' }}">
        Activities
      </a>
    </li>
  </ul>
</li>

                          
                            <li class="submenu">
                                <a href="#"><i class="la la-ticket"></i> <span>Tickets</span><span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{ route('tickets') }}" class="{{ request()->routeIs('tickets') ? 'active' : '' }}">Tickets</a></li>
        <li><a href="{{ route('ticket-details') }}" class="{{ request()->routeIs('ticket-details') ? 'active' : '' }}">Tickets Detail</a></li>
    </ul>
                                </ul>
                            </li>
                            <li class="menu-title">
                                <span>HR</span>
                            </li>
                            
                        </ul>
                        <button class="viewmoremenu">More Menu</button>
                        <ul class="hidden-links hidden">
                            <li class="submenu">
    <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
    <ul>
        <li>
            <a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">
                Categories
            </a>
        </li>
        <li>
            <a href="{{ route('budgets') }}" class="{{ request()->routeIs('budgets') ? 'active' : '' }}">
                Budgets
            </a>
        </li>
        <li>
            <a href="{{ route('budget-expenses') }}" class="{{ request()->routeIs('budget-expenses') ? 'active' : '' }}">
                Budget Expenses
            </a>
        </li>
        <li>
            <a href="{{ route('budget-revenues') }}" class="{{ request()->routeIs('budget-revenues') ? 'active' : '' }}">
                Budget Revenues
            </a>
        </li>
    </ul>
</li>

                            <li class="submenu">
                                <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                           <li>
            <a href="{{ route('salary') }}" class="{{ request()->routeIs('salary') ? 'active' : '' }}">
                Employee Salary
            </a>
        </li>
        <li>
            <a href="{{ route('salary-view') }}" class="{{ request()->routeIs('salary-view') ? 'active' : '' }}">
                Payslip
            </a>
        </li>
        <li>
            <a href="{{ route('payroll-items') }}" class="{{ request()->routeIs('payroll-items') ? 'active' : '' }}">
                Payroll Items
            </a>
        </li>
                                </ul>
                            </li>
                          
                            <li>
    <a href="{{ route('policies') }}" class="{{ request()->routeIs('policies') ? 'active' : '' }}">
        <i class="la la-file-pdf-o"></i> <span>Policies</span>
    </a>
</li>

<li class="submenu">
    <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('expense-reports') }}" class="{{ request()->routeIs('expense-reports') ? 'active' : '' }}">Expense Report</a></li>
        <li><a href="{{ route('invoice-reports') }}" class="{{ request()->routeIs('invoice-reports') ? 'active' : '' }}">Invoice Report</a></li>
        <li><a href="{{ route('payment-reports') }}" class="{{ request()->routeIs('payment-reports') ? 'active' : '' }}">Payments Report</a></li>
        <li><a href="{{ route('project-reports') }}" class="{{ request()->routeIs('project-reports') ? 'active' : '' }}">Project Report</a></li>
        <li><a href="{{ route('task-reports') }}" class="{{ request()->routeIs('task-reports') ? 'active' : '' }}">Task Report</a></li>
        <li><a href="{{ route('user-reports') }}" class="{{ request()->routeIs('user-reports') ? 'active' : '' }}">User Report</a></li>
        <li><a href="{{ route('employee-reports') }}" class="{{ request()->routeIs('employee-reports') ? 'active' : '' }}">Employee Report</a></li>
        <li><a href="{{ route('payslip-reports') }}" class="{{ request()->routeIs('payslip-reports') ? 'active' : '' }}">Payslip Report</a></li>
        <li><a href="{{ route('attendance-reports') }}" class="{{ request()->routeIs('attendance-reports') ? 'active' : '' }}">Attendance Report</a></li>
        <li><a href="{{ route('leave-reports') }}" class="{{ request()->routeIs('leave-reports') ? 'active' : '' }}">Leave Report</a></li>
        <li><a href="{{ route('daily-reports') }}" class="{{ request()->routeIs('daily-reports') ? 'active' : '' }}">Daily Report</a></li>
    </ul>
</li>



                   <li class="menu-title">
    <span>Performance</span>
</li>

<li class="submenu">
    <a href="#"><i class="la la-laptop-medical"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('performance-indicator') }}" class="{{ request()->routeIs('performance-indicator') ? 'active' : '' }}">Performance Indicator</a></li>
        <li><a href="{{ route('performance') }}" class="{{ request()->routeIs('performance') ? 'active' : '' }}">Performance Review</a></li>
        <li><a href="{{ route('performance-appraisal') }}" class="{{ request()->routeIs('performance-appraisal') ? 'active' : '' }}">Performance Appraisal</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('goal-tracking') }}" class="{{ request()->routeIs('goal-tracking') ? 'active' : '' }}">Goal List</a></li>
        <li><a href="{{ route('goal-type') }}" class="{{ request()->routeIs('goal-type') ? 'active' : '' }}">Goal Type</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('training') }}" class="{{ request()->routeIs('training') ? 'active' : '' }}">Training List</a></li>
        <li><a href="{{ route('trainers') }}" class="{{ request()->routeIs('trainers') ? 'active' : '' }}">Trainers</a></li>
        <li><a href="{{ route('training-type') }}" class="{{ request()->routeIs('training-type') ? 'active' : '' }}">Training Type</a></li>
    </ul>
</li>

<li>
    <a href="{{ route('promotion') }}" class="{{ request()->routeIs('promotion') ? 'active' : '' }}">
        <i class="la la-bullhorn"></i> <span>Promotion</span>
    </a>
</li>

<li class="submenu">
    <a href="#"><i class="la la-external-link-square"></i> <span>Resignation</span><span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('resignation') }}" class="{{ request()->routeIs('resignation') ? 'active' : '' }}">Resignation</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-user-times"></i> <span>Termination</span><span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('termination') }}" class="{{ request()->routeIs('termination') ? 'active' : '' }}">Termination</a></li>
    </ul>
</li>

                        





                        <li class="menu-title">
    <span>Administration</span>
</li>

<li>
    <a href="{{ route('assets1') }}" class="{{ request()->routeIs('assets1') ? 'active' : '' }}">
        <i class="la la-object-ungroup"></i> <span>Assets</span>
    </a>
</li>

<li>
    <a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'active' : '' }}">
        <i class="la la-bell"></i> <span>Activities</span>
    </a>
</li>

<li>
    <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">
        <i class="la la-user-plus"></i> <span>Users</span>
    </a>
</li>

<li>
    <a href="{{ route('settings') }}" class="{{ request()->routeIs('settings') ? 'active' : '' }}">
        <i class="la la-cog"></i> <span>Settings</span>
    </a>
</li>
<li class="menu-title">
    <span>Pages</span>
</li>

<li class="submenu">
    <a href="#">
        <i class="la la-user-tag"></i> 
        <span>Profile</span> 
        <span class="menu-arrow"></span>
    </a>
    <ul>
        <li>
            <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                Employee Profile
            </a>
        </li>
        <li>
            <a href="{{ route('client-profile') }}" class="{{ request()->routeIs('client-profile') ? 'active' : '' }}">
                Client Profile
            </a>
        </li>
    </ul>
</li>

                          <li class="submenu">
    <a href="#">
        <i class="la la-key"></i>
        <span> Authentication </span>
        <span class="menu-arrow"></span>
    </a>
    <ul>
        <li>
            <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a>
        </li>
        <li>
            <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a>
        </li>
        <li>
            <a href="{{ route('forgot-password') }}" class="{{ request()->routeIs('forgot-password') ? 'active' : '' }}">Forgot Password</a>
        </li>
        <li>
            <a href="{{ route('otp') }}" class="{{ request()->routeIs('otp') ? 'active' : '' }}">OTP</a>
        </li>
        <li>
            <a href="{{ route('lock-screen') }}" class="{{ request()->routeIs('lock-screen') ? 'active' : '' }}">Lock Screen</a>
        </li>
    </ul>
</li>

                            {{-- <li class="submenu">
                                <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span
                                        class="menu-arrow"></span></a>
                                <ul>
                                    <li><a class href="{{ route('error-404') }}">404 Error </a></li>
                                    <li><a class href="{{ route('error-500') }}">500 Error </a></li>
                                </ul>
                            </li> --}}
                           <li class="submenu">
    <a href="#">
        <i class="la la-hand-o-up"></i>
        <span> Subscriptions </span>
        <span class="menu-arrow"></span>
    </a>
    <ul>
        <li>
            <a href="{{ route('subscriptions') }}" class="{{ request()->routeIs('subscriptions') ? 'active' : '' }}">
                Subscriptions (Admin)
            </a>
        </li>
        <li>
            <a href="{{ route('subscription-company') }}" class="{{ request()->routeIs('subscription-company') ? 'active' : '' }}">
                Subscriptions (Company)
            </a>
        </li>
        <li>
            <a href="{{ route('subscribed-companies') }}" class="{{ request()->routeIs('subscribed-companies') ? 'active' : '' }}">
                Subscribed Companies
            </a>
        </li>
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
                                {{-- <li><a class="active" href="{{ route('admin-dashboard') }}" class="active">Admin Dashboard</a> --}}
                              <li><a href="{{ route('admin-dashboard') }}" class="{{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">Admin Dashboard</a></li>
<li><a href="{{ route('employee-dashboard') }}" class="{{ request()->routeIs('employee-dashboard') ? 'active' : '' }}">Employee Dashboard</a></li>

                            </ul>
                        </li>
                       <li class="submenu">
    <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('chat') }}" class="{{ request()->routeIs('chat') ? 'active' : '' }}">Chat</a></li>
        <li class="submenu">
            <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
            <ul>
                <li><a href="{{ route('voice-call') }}" class="{{ request()->routeIs('voice-call') ? 'active' : '' }}">Voice Call</a></li>
                <li><a href="{{ route('video-call') }}" class="{{ request()->routeIs('video-call') ? 'active' : '' }}">Video Call</a></li>
                <li><a href="{{ route('outgoing-call') }}" class="{{ request()->routeIs('outgoing-call') ? 'active' : '' }}">Outgoing Call</a></li>
                <li><a href="{{ route('incoming-call') }}" class="{{ request()->routeIs('incoming-call') ? 'active' : '' }}">Incoming Call</a></li>
            </ul>
        </li>
        <li><a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">Calendar</a></li>
        <li><a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">Contacts</a></li>
        <li><a href="{{ route('inbox') }}" class="{{ request()->routeIs('inbox') ? 'active' : '' }}">Email</a></li>
        <li><a href="{{ route('file-manager') }}" class="{{ request()->routeIs('file-manager') ? 'active' : '' }}">File Manager</a></li>
    </ul>
</li>

                        <li class="menu-title">
                            <span>Employees</span>
                        </li>
                      <li class="submenu">
    <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('employees') }}" class="{{ request()->routeIs('employees') ? 'active' : '' }}">All Employees</a></li>
        <li><a href="{{ route('holidays') }}" class="{{ request()->routeIs('holidays') ? 'active' : '' }}">Holidays</a></li>
        <li><a href="{{ route('leaves-admin') }}" class="{{ request()->routeIs('leaves-admin') ? 'active' : '' }}">Leaves (Admin)</a></li>
        <li><a href="{{ route('leaves-employee') }}" class="{{ request()->routeIs('leaves-employee') ? 'active' : '' }}">Leaves (Employee)</a></li>
        <li><a href="{{ route('leave-settings') }}" class="{{ request()->routeIs('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>
        <li><a href="{{ route('attendance-admin') }}" class="{{ request()->routeIs('attendance-admin') ? 'active' : '' }}">Attendance (Admin)</a></li>
        <li><a href="{{ route('attendance-employee') }}" class="{{ request()->routeIs('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
        <li><a href="{{ route('departments') }}" class="{{ request()->routeIs('departments') ? 'active' : '' }}">Departments</a></li>
        <li><a href="{{ route('designations') }}" class="{{ request()->routeIs('designations') ? 'active' : '' }}">Designations</a></li>
        <li><a href="{{ route('timesheet') }}" class="{{ request()->routeIs('timesheet') ? 'active' : '' }}">Timesheet</a></li>
        <li><a href="{{ route('shift-scheduling') }}" class="{{ request()->routeIs('shift-scheduling') ? 'active' : '' }}">Shift & Schedule</a></li>
        <li><a href="{{ route('overtime') }}" class="{{ request()->routeIs('overtime') ? 'active' : '' }}">Overtime</a></li>
    </ul>
</li>

                    <li>
    <a href="{{ route('clients') }}" class="{{ request()->routeIs('clients') ? 'active' : '' }}">
        <i class="la la-users"></i> <span>Clients</span>
    </a>
</li>

<li class="submenu">
    <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('tasks') }}" class="{{ request()->routeIs('tasks') ? 'active' : '' }}">Tasks</a></li>
        <li><a href="{{ route('task-board') }}" class="{{ request()->routeIs('task-board') ? 'active' : '' }}">Task Board</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-ticket"></i> <span>Tickets</span><span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('tickets') }}" class="{{ request()->routeIs('tickets') ? 'active' : '' }}">Tickets</a></li>
        <li><a href="{{ route('ticket-details') }}" class="{{ request()->routeIs('ticket-details') ? 'active' : '' }}">Tickets Detail</a></li>
    </ul>
</li>
  
                       

                        <li class="menu-title">
                            <span>CRM</span>
                            <small class="newly-added-features">New</small>
                        </li>
                    
                        <li>
    <a href="{{ route('contact-list') }}" class="{{ request()->routeIs('contact-list') ? 'active' : '' }}">
        <i class="la la-user-shield"></i> <span> Contacts </span>
    </a>
</li>
<li>
    <a href="{{ route('companies') }}" class="{{ request()->routeIs('companies') ? 'active' : '' }}">
        <i class="la la-building"></i> <span> Companies </span>
    </a>
</li>
<li>
    <a href="{{ route('deals') }}" class="{{ request()->routeIs('deals') ? 'active' : '' }}">
        <i class="la la-cubes"></i> <span> Deals </span>
    </a>
</li>
<li>
    <a href="{{ route('leads') }}" class="{{ request()->routeIs('leads') ? 'active' : '' }}">
        <i class="la la-chart-area"></i> <span> Leads </span>
    </a>
</li>

<li>
  <a href="{{ route('crm-activities') }}" class="{{ request()->routeIs('crm-activities') ? 'active' : '' }}">
    <i class="la la-directions"></i> <span> Activities </span>
  </a>
</li>



<li class="menu-title">
    <span>HR</span>
</li>

                        
                  <li class="submenu">
    <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
    <ul>
        <li>
            <a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">
                Categories
            </a>
        </li>
        <li>
            <a href="{{ route('budgets') }}" class="{{ request()->routeIs('budgets') ? 'active' : '' }}">
                Budgets
            </a>
        </li>
        <li>
            <a href="{{ route('budget-expenses') }}" class="{{ request()->routeIs('budget-expenses') ? 'active' : '' }}">
                Budget Expenses
            </a>
        </li>
        <li>
            <a href="{{ route('budget-revenues') }}" class="{{ request()->routeIs('budget-revenues') ? 'active' : '' }}">
                Budget Revenues
            </a>
        </li>
    </ul>
</li>

                        <li class="submenu">
                            <a href="#"><i class="la la-money-bill-wave"></i> <span> Payroll </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                      <li>
            <a href="{{ route('salary') }}" class="{{ request()->routeIs('salary') ? 'active' : '' }}">
                Employee Salary
            </a>
        </li>
        <li>
            <a href="{{ route('salary-view') }}" class="{{ request()->routeIs('salary-view') ? 'active' : '' }}">
                Payslip
            </a>
        </li>
        <li>
            <a href="{{ route('payroll-items') }}" class="{{ request()->routeIs('payroll-items') ? 'active' : '' }}">
                Payroll Items
            </a>
        </li>
                            </ul>
                        </li>
                       <li>
    <a href="{{ route('policies') }}" class="{{ request()->routeIs('policies') ? 'active' : '' }}">
        <i class="la la-file-pdf-o"></i> <span>Policies</span>
    </a>
</li>

<li class="submenu">
    <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('expense-reports') }}" class="{{ request()->routeIs('expense-reports') ? 'active' : '' }}">Expense Report</a></li>
        <li><a href="{{ route('invoice-reports') }}" class="{{ request()->routeIs('invoice-reports') ? 'active' : '' }}">Invoice Report</a></li>
        <li><a href="{{ route('payment-reports') }}" class="{{ request()->routeIs('payment-reports') ? 'active' : '' }}">Payments Report</a></li>
        <li><a href="{{ route('project-reports') }}" class="{{ request()->routeIs('project-reports') ? 'active' : '' }}">Project Report</a></li>
        <li><a href="{{ route('task-reports') }}" class="{{ request()->routeIs('task-reports') ? 'active' : '' }}">Task Report</a></li>
        <li><a href="{{ route('user-reports') }}" class="{{ request()->routeIs('user-reports') ? 'active' : '' }}">User Report</a></li>
        <li><a href="{{ route('employee-reports') }}" class="{{ request()->routeIs('employee-reports') ? 'active' : '' }}">Employee Report</a></li>
        <li><a href="{{ route('payslip-reports') }}" class="{{ request()->routeIs('payslip-reports') ? 'active' : '' }}">Payslip Report</a></li>
        <li><a href="{{ route('attendance-reports') }}" class="{{ request()->routeIs('attendance-reports') ? 'active' : '' }}">Attendance Report</a></li>
        <li><a href="{{ route('leave-reports') }}" class="{{ request()->routeIs('leave-reports') ? 'active' : '' }}">Leave Report</a></li>
        <li><a href="{{ route('daily-reports') }}" class="{{ request()->routeIs('daily-reports') ? 'active' : '' }}">Daily Report</a></li>
    </ul>
</li>

<li class="menu-title">
    <span>Performance</span>
</li>

<li class="submenu">
    <a href="#"><i class="la la-laptop-medical"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('performance-indicator') }}" class="{{ request()->routeIs('performance-indicator') ? 'active' : '' }}">Performance Indicator</a></li>
        <li><a href="{{ route('performance') }}" class="{{ request()->routeIs('performance') ? 'active' : '' }}">Performance Review</a></li>
        <li><a href="{{ route('performance-appraisal') }}" class="{{ request()->routeIs('performance-appraisal') ? 'active' : '' }}">Performance Appraisal</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('goal-tracking') }}" class="{{ request()->routeIs('goal-tracking') ? 'active' : '' }}">Goal List</a></li>
        <li><a href="{{ route('goal-type') }}" class="{{ request()->routeIs('goal-type') ? 'active' : '' }}">Goal Type</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('training') }}" class="{{ request()->routeIs('training') ? 'active' : '' }}">Training List</a></li>
        <li><a href="{{ route('trainers') }}" class="{{ request()->routeIs('trainers') ? 'active' : '' }}">Trainers</a></li>
        <li><a href="{{ route('training-type') }}" class="{{ request()->routeIs('training-type') ? 'active' : '' }}">Training Type</a></li>
    </ul>
</li>

<li>
    <a href="{{ route('promotion') }}" class="{{ request()->routeIs('promotion') ? 'active' : '' }}">
        <i class="la la-bullhorn"></i> <span>Promotion</span>
    </a>
</li>

<li class="submenu">
    <a href="#"><i class="la la-external-link-square"></i> <span>Resignation</span><span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('resignation') }}" class="{{ request()->routeIs('resignation') ? 'active' : '' }}">Resignation</a></li>
    </ul>
</li>

<li class="submenu">
    <a href="#"><i class="la la-user-times"></i> <span>Termination</span><span class="menu-arrow"></span></a>
    <ul>
        <li><a href="{{ route('termination') }}" class="{{ request()->routeIs('termination') ? 'active' : '' }}">Termination</a></li>
    </ul>
</li>







                      <li class="menu-title">
    <span>Administration</span>
</li>

<li>
    <a href="{{ route('assets1') }}" class="{{ request()->routeIs('assets1') ? 'active' : '' }}">
        <i class="la la-object-ungroup"></i> <span>Assets</span>
    </a>
</li>

<li>
    <a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'active' : '' }}">
        <i class="la la-bell"></i> <span>Activities</span>
    </a>
</li>

<li>
    <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">
        <i class="la la-user-plus"></i> <span>Users</span>
    </a>
</li>

<li>
    <a href="{{ route('settings') }}" class="{{ request()->routeIs('settings') ? 'active' : '' }}">
        <i class="la la-cog"></i> <span>Settings</span>
    </a>
</li>
<li class="menu-title">
    <span>Pages</span>
</li>

<li class="submenu">
    <a href="#">
        <i class="la la-user-tag"></i> 
        <span>Profile</span> 
        <span class="menu-arrow"></span>
    </a>
    <ul>
        <li>
            <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">
                Employee Profile
            </a>
        </li>
        <li>
            <a href="{{ route('client-profile') }}" class="{{ request()->routeIs('client-profile') ? 'active' : '' }}">
                Client Profile
            </a>
        </li>
    </ul>
</li>
<li class="submenu">
    <a href="#">
        <i class="la la-key"></i>
        <span> Authentication </span>
        <span class="menu-arrow"></span>
    </a>
    <ul>
        <li>
            <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a>
        </li>
        <li>
            <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a>
        </li>
        <li>
            <a href="{{ route('forgot-password') }}" class="{{ request()->routeIs('forgot-password') ? 'active' : '' }}">Forgot Password</a>
        </li>
        <li>
            <a href="{{ route('otp') }}" class="{{ request()->routeIs('otp') ? 'active' : '' }}">OTP</a>
        </li>
        <li>
            <a href="{{ route('lock-screen') }}" class="{{ request()->routeIs('lock-screen') ? 'active' : '' }}">Lock Screen</a>
        </li>
    </ul>
</li>

                        {{-- <li class="submenu">
                            <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class href="{{ route('error-404') }}">404 Error </a></li>
                                <li><a class href="{{ route('error-500') }}">500 Error </a></li>
                            </ul>
                        </li> --}}
                     <li class="submenu">
    <a href="#">
        <i class="la la-hand-o-up"></i>
        <span> Subscriptions </span>
        <span class="menu-arrow"></span>
    </a>
    <ul>
        <li>
            <a href="{{ route('subscriptions') }}" class="{{ request()->routeIs('subscriptions') ? 'active' : '' }}">
                Subscriptions (Admin)
            </a>
        </li>
        <li>
            <a href="{{ route('subscription-company') }}" class="{{ request()->routeIs('subscription-company') ? 'active' : '' }}">
                Subscriptions (Company)
            </a>
        </li>
        <li>
            <a href="{{ route('subscribed-companies') }}" class="{{ request()->routeIs('subscribed-companies') ? 'active' : '' }}">
                Subscribed Companies
            </a>
        </li>
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
             <a class="nav-link {{ request()->routeIs('admin-dashboard', 'employee-dashboard') ? 'active' : '' }}"
   id="v-pills-dashboard-tab"
   data-bs-toggle="pill"
   href="#v-pills-dashboard"
   role="tab"
   aria-controls="v-pills-dashboard"
   aria-selected="{{ request()->routeIs('admin-dashboard', 'employee-dashboard') ? 'true' : 'false' }}">
  <span class="material-icons-outlined"> home </span>
</a>

  <a
  class="nav-link {{ request()->routeIs('chat', 'voice-call', 'video-call', 'outgoing-call', 'incoming-call', 'contacts', 'events', 'inbox', 'file-manager') ? 'active' : '' }}"
  id="v-pills-apps-tab"
  title="Apps"
  data-bs-toggle="pill"
  href="#v-pills-apps"
  role="tab"
  aria-controls="v-pills-apps"
  aria-selected="{{ request()->routeIs('chat', 'voice-call', 'video-call', 'outgoing-call', 'incoming-call', 'contacts', 'events', 'inbox', 'file-manager') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> dashboard </span>
</a>


        <a
  class="nav-link {{ request()->routeIs('employees', 'holidays', 'leaves-admin', 'leaves-employee', 'leave-settings', 'attendance-admin', 'attendance-employee', 'departments', 'designations', 'timesheet', 'shift-scheduling', 'overtime') ? 'active' : '' }}"
  id="v-pills-employees-tab"
  title="Employees"
  data-bs-toggle="pill"
  href="#v-pills-employees"
  role="tab"
  aria-controls="v-pills-employees"
  aria-selected="{{ request()->routeIs('employees', 'holidays', 'leaves-admin', 'leaves-employee', 'leave-settings', 'attendance-admin', 'attendance-employee', 'departments', 'designations', 'timesheet', 'shift-scheduling', 'overtime') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> people </span>
</a>

<a
  class="nav-link {{ request()->routeIs('clients') ? 'active' : '' }}"
  id="v-pills-clients-tab"
  title="Clients"
  data-bs-toggle="pill"
  href="#v-pills-clients"
  role="tab"
  aria-controls="v-pills-clients"
  aria-selected="{{ request()->routeIs('clients') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> person </span>
</a>

        
<a
  class="nav-link {{ request()->routeIs('projects', 'tasks', 'task-board') ? 'active' : '' }}"
  id="v-pills-projects-tab"
  title="Projects"
  data-bs-toggle="pill"
  href="#v-pills-projects"
  role="tab"
  aria-controls="v-pills-projects"
  aria-selected="{{ request()->routeIs('projects', 'tasks', 'task-board') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> topic </span>
</a>


<a
  class="nav-link {{ request()->routeIs('contact-list', 'companies', 'deals', 'leads', 'crm-activities') ? 'active' : '' }}"
  id="v-pills-crm-tab"
  title="CRM"
  data-bs-toggle="pill"
  href="#v-pills-crm"
  role="tab"
  aria-controls="v-pills-crm"
  aria-selected="{{ request()->routeIs('contact-list', 'companies', 'deals', 'leads', 'crm-activities') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined">leaderboard</span>
</a>

         
 
<a
  class="nav-link {{ request()->routeIs('tickets*') ? 'active' : '' }}"
  id="v-pills-tickets-tab"
  title="Tickets"
  data-bs-toggle="pill"
  href="#v-pills-tickets"
  role="tab"
  aria-controls="v-pills-tickets"
  aria-selected="{{ request()->routeIs('tickets*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> confirmation_number </span>
</a>
<a
  class="nav-link {{ request()->routeIs('accounting*') ? 'active' : '' }}"
  id="v-pills-accounting-tab"
  title="Accounting"
  data-bs-toggle="pill"
  href="#v-pills-accounting"
  role="tab"
  aria-controls="v-pills-accounting"
  aria-selected="{{ request()->routeIs('accounting*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> account_balance_wallet </span>
</a>
<a
  class="nav-link {{ request()->routeIs('payroll*') ? 'active' : '' }}"
  id="v-pills-payroll-tab"
  title="Payroll"
  data-bs-toggle="pill"
  href="#v-pills-payroll"
  role="tab"
  aria-controls="v-pills-payroll"
  aria-selected="{{ request()->routeIs('payroll*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> request_quote </span>
</a>
<a
  class="nav-link {{ request()->routeIs('policies*') ? 'active' : '' }}"
  id="v-pills-policies-tab"
  title="Policies"
  data-bs-toggle="pill"
  href="#v-pills-policies"
  role="tab"
  aria-controls="v-pills-policies"
  aria-selected="{{ request()->routeIs('policies*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> verified_user </span>
</a>
<a
  class="nav-link {{ request()->routeIs('reports*') ? 'active' : '' }}"
  id="v-pills-reports-tab"
  title="Reports"
  data-bs-toggle="pill"
  href="#v-pills-reports"
  role="tab"
  aria-controls="v-pills-reports"
  aria-selected="{{ request()->routeIs('reports*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> report_gmailerrorred </span>
</a>
<a
  class="nav-link {{ request()->routeIs('performance*') ? 'active' : '' }}"
  id="v-pills-performance-tab"
  title="Performance"
  data-bs-toggle="pill"
  href="#v-pills-performance"
  role="tab"
  aria-controls="v-pills-performance"
  aria-selected="{{ request()->routeIs('performance*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> shutter_speed </span>
</a>
<a
  class="nav-link {{ request()->routeIs('goal*') ? 'active' : '' }}"
  id="v-pills-goals-tab"
  title="Goals"
  data-bs-toggle="pill"
  href="#v-pills-goals"
  role="tab"
  aria-controls="v-pills-goals"
  aria-selected="{{ request()->routeIs('goal*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> track_changes </span>
</a>
<a
  class="nav-link {{ request()->routeIs('training*') ? 'active' : '' }}"
  id="v-pills-training-tab"
  title="Training"
  data-bs-toggle="pill"
  href="#v-pills-training"
  role="tab"
  aria-controls="v-pills-training"
  aria-selected="{{ request()->routeIs('training*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> checklist_rtl </span>
</a>

<a
  class="nav-link {{ request()->routeIs('promotion*') ? 'active' : '' }}"
  id="v-pills-promotion-tab"
  title="Promotions"
  data-bs-toggle="pill"
  href="#v-pills-promotion"
  role="tab"
  aria-controls="v-pills-promotion"
  aria-selected="{{ request()->routeIs('promotion*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined">trending_up</span>
</a>


<a
  class="nav-link {{ request()->routeIs('resignation*') ? 'active' : '' }}"
  id="v-pills-resignation-tab"
  title="Resignation"
  data-bs-toggle="pill"
  href="#v-pills-resignation"
  role="tab"
  aria-controls="v-pills-resignation"
  aria-selected="{{ request()->routeIs('resignation*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> do_not_disturb_alt </span>
</a>







<a
  class="nav-link {{ request()->routeIs('termination*') ? 'active' : '' }}"
  id="v-pills-termination-tab"
  title="Termination"
  data-bs-toggle="pill"
  href="#v-pills-termination"
  role="tab"
  aria-controls="v-pills-termination"
  aria-selected="{{ request()->routeIs('termination*') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> indeterminate_check_box </span>
</a>
<a
  class="nav-link {{ request()->routeIs('assets1') ? 'active' : '' }}"
  id="v-pills-assets-tab"
  title="Assets"
  data-bs-toggle="pill"
  href="#v-pills-assets"
  role="tab"
  aria-controls="v-pills-assets"
  aria-selected="{{ request()->routeIs('assets1') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> web_asset </span>
</a>
<a
  class="nav-link {{ request()->routeIs('activities') ? 'active' : '' }}"
  id="v-pills-activities-tab"
  title="Activities"
  data-bs-toggle="pill"
  href="#v-pills-activities"
  role="tab"
  aria-controls="v-pills-activities"
  aria-selected="{{ request()->routeIs('activities') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> toggle_off </span>
</a>
<a
  class="nav-link {{ request()->routeIs('users') ? 'active' : '' }}"
  id="v-pills-users-tab"
  title="Users"
  data-bs-toggle="pill"
  href="#v-pills-users"
  role="tab"
  aria-controls="v-pills-users"
  aria-selected="{{ request()->routeIs('users') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> group_add </span>
</a>
<a
  class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }}"
  id="v-pills-settings-tab"
  title="Settings"
  data-bs-toggle="pill"
  href="#v-pills-settings"
  role="tab"
  aria-controls="v-pills-settings"
  aria-selected="{{ request()->routeIs('settings') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> settings </span>
</a>
<a
  class="nav-link {{ request()->routeIs('profile') || request()->routeIs('client-profile') ? 'active' : '' }}"
  id="v-pills-profile-tab"
  title="Profile"
  data-bs-toggle="pill"
  href="#v-pills-profile"
  role="tab"
  aria-controls="v-pills-profile"
  aria-selected="{{ request()->routeIs('profile') || request()->routeIs('client-profile') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> manage_accounts </span>
</a>
<a
  class="nav-link {{ request()->routeIs('login') || request()->routeIs('register') || request()->routeIs('forgot-password') || request()->routeIs('otp') || request()->routeIs('lock-screen') ? 'active' : '' }}"
  id="v-pills-authentication-tab"
  title="Authentication"
  data-bs-toggle="pill"
  href="#v-pills-authentication"
  role="tab"
  aria-controls="v-pills-authentication"
  aria-selected="{{ request()->routeIs('login') || request()->routeIs('register') || request()->routeIs('forgot-password') || request()->routeIs('otp') || request()->routeIs('lock-screen') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> perm_contact_calendar </span>
</a>
<a
  class="nav-link {{ request()->routeIs('subscriptions') || request()->routeIs('subscription-company') || request()->routeIs('subscribed-companies') ? 'active' : '' }}"
  id="v-pills-subscriptions-tab"
  title="Subscriptions"
  data-bs-toggle="pill"
  href="#v-pills-subscriptions"
  role="tab"
  aria-controls="v-pills-subscriptions"
  aria-selected="{{ request()->routeIs('subscriptions') || request()->routeIs('subscription-company') || request()->routeIs('subscribed-companies') ? 'true' : 'false' }}"
>
  <span class="material-icons-outlined"> loyalty </span>
</a>
              
            </div>
          </div>
          <div class="sidebar-right">
            <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade {{ request()->routeIs('admin-dashboard', 'employee-dashboard') ? 'show active' : '' }}"
     id="v-pills-dashboard"
     role="tabpanel"
     aria-labelledby="v-pills-dashboard-tab">
  <ul>
    <li>
      <a href="{{ route('admin-dashboard') }}"
         class="{{ request()->routeIs('admin-dashboard') ? 'active' : '' }}">
         Admin Dashboard
      </a>
    </li>
    <li>
      <a href="{{ route('employee-dashboard') }}"
         class="{{ request()->routeIs('employee-dashboard') ? 'active' : '' }}">
         Employee Dashboard
      </a>
    </li>
  </ul>
</div>


<div
  class="tab-pane fade {{ request()->routeIs('chat', 'voice-call', 'video-call', 'outgoing-call', 'incoming-call', 'events', 'contacts', 'inbox', 'file-manager') ? 'show active' : '' }}"
  id="v-pills-apps"
  role="tabpanel"
  aria-labelledby="v-pills-apps-tab"
>
  <p>App</p>
  <ul>
    <li>
      <a href="{{ route('chat') }}" class="{{ request()->routeIs('chat') ? 'active' : '' }}">Chat</a>
    </li>
    <li class="sub-menu">
      <a href="#">Calls <span class="menu-arrow"></span></a>
      <ul>
        <li><a href="{{ route('voice-call') }}" class="{{ request()->routeIs('voice-call') ? 'active' : '' }}">Voice Call</a></li>
        <li><a href="{{ route('video-call') }}" class="{{ request()->routeIs('video-call') ? 'active' : '' }}">Video Call</a></li>
        <li><a href="{{ route('outgoing-call') }}" class="{{ request()->routeIs('outgoing-call') ? 'active' : '' }}">Outgoing Call</a></li>
        <li><a href="{{ route('incoming-call') }}" class="{{ request()->routeIs('incoming-call') ? 'active' : '' }}">Incoming Call</a></li>
      </ul>
    </li>
    <li>
      <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">Calendar</a>
    </li>
    <li>
      <a href="{{ route('contacts') }}" class="{{ request()->routeIs('contacts') ? 'active' : '' }}">Contacts</a>
    </li>
    <li>
      <a href="{{ route('inbox') }}" class="{{ request()->routeIs('inbox') ? 'active' : '' }}">Email</a>
    </li>
    <li>
      <a href="{{ route('file-manager') }}" class="{{ request()->routeIs('file-manager') ? 'active' : '' }}">File Manager</a>
    </li>
  </ul>
</div>

<div
  class="tab-pane fade {{ request()->routeIs('employees', 'holidays', 'leaves-admin', 'leaves-employee', 'leave-settings', 'attendance-admin', 'attendance-employee', 'departments', 'designations', 'timesheet', 'shift-scheduling', 'overtime') ? 'show active' : '' }}"
  id="v-pills-employees"
  role="tabpanel"
  aria-labelledby="v-pills-employees-tab"
>
  <p>Employees</p>
  <ul>
    <li><a href="{{ route('employees') }}" class="{{ request()->routeIs('employees') ? 'active' : '' }}">All Employees</a></li>
    <li><a href="{{ route('holidays') }}" class="{{ request()->routeIs('holidays') ? 'active' : '' }}">Holidays</a></li>
    <li>
      <a href="{{ route('leaves-admin') }}" class="{{ request()->routeIs('leaves-admin') ? 'active' : '' }}">
        Leaves (Admin)
        <span class="badge rounded-pill bg-primary float-end">1</span>
      </a>
    </li>
    <li><a href="{{ route('leaves-employee') }}" class="{{ request()->routeIs('leaves-employee') ? 'active' : '' }}">Leaves (Employee)</a></li>
    <li><a href="{{ route('leave-settings') }}" class="{{ request()->routeIs('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>
    <li><a href="{{ route('attendance-admin') }}" class="{{ request()->routeIs('attendance-admin') ? 'active' : '' }}">Attendance (Admin)</a></li>
    <li><a href="{{ route('attendance-employee') }}" class="{{ request()->routeIs('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
    <li><a href="{{ route('departments') }}" class="{{ request()->routeIs('departments') ? 'active' : '' }}">Departments</a></li>
    <li><a href="{{ route('designations') }}" class="{{ request()->routeIs('designations') ? 'active' : '' }}">Designations</a></li>
    <li><a href="{{ route('timesheet') }}" class="{{ request()->routeIs('timesheet') ? 'active' : '' }}">Timesheet</a></li>
    <li><a href="{{ route('shift-scheduling') }}" class="{{ request()->routeIs('shift-scheduling') ? 'active' : '' }}">Shift & Schedule</a></li>
    <li><a href="{{ route('overtime') }}" class="{{ request()->routeIs('overtime') ? 'active' : '' }}">Overtime</a></li>
  </ul>
</div>

<div
  class="tab-pane fade {{ request()->routeIs('clients') ? 'show active' : '' }}"
  id="v-pills-clients"
  role="tabpanel"
  aria-labelledby="v-pills-clients-tab"
>
  <p>Clients</p>
  <ul>
    <li>
      <a href="{{ route('clients') }}" class="{{ request()->routeIs('clients') ? 'active' : '' }}">
        Clients
      </a>
    </li>
  </ul>
</div>

         
             <div
  class="tab-pane fade {{ request()->routeIs('projects', 'tasks', 'task-board') ? 'show active' : '' }}"
  id="v-pills-projects"
  role="tabpanel"
  aria-labelledby="v-pills-projects-tab"
>
  <p>Projects</p>
  <ul>
    <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
    <li><a href="{{ route('tasks') }}" class="{{ request()->routeIs('tasks') ? 'active' : '' }}">Tasks</a></li>
    <li><a href="{{ route('task-board') }}" class="{{ request()->routeIs('task-board') ? 'active' : '' }}">Task Board</a></li>
  </ul>
</div>





<div
  class="tab-pane fade show {{ request()->routeIs('contact-list', 'companies', 'deals', 'leads', 'crm-activities') ? 'active' : '' }}"
  id="v-pills-crm"
  role="tabpanel"
  aria-labelledby="v-pills-crm-tab"
>
  <p>CRM</p>
  <ul>
    <li>
      <a href="{{ route('contact-list') }}" class="{{ request()->routeIs('contact-list') ? 'active' : '' }}">
        Contacts
      </a>
    </li>
    <li>
      <a href="{{ route('companies') }}" class="{{ request()->routeIs('companies') ? 'active' : '' }}">
        Companies
      </a>
    </li>
    <li>
      <a href="{{ route('deals') }}" class="{{ request()->routeIs('deals') ? 'active' : '' }}">
        Deals
      </a>
    </li>
    <li>
      <a href="{{ route('leads') }}" class="{{ request()->routeIs('leads') ? 'active' : '' }}">
        Leads
      </a>
    </li>
   <li>
  <a href="{{ route('crm-activities') }}" class="{{ request()->routeIs('crm-activities') ? 'active' : '' }}">
    Activities
  </a>
</li>

  </ul>
</div>





<div
  class="tab-pane fade show {{ request()->routeIs('promotion*') ? 'active' : '' }}"
  id="v-pills-promotion"
  role="tabpanel"
  aria-labelledby="v-pills-promotion-tab"
>
  <p>Promotion</p>
  <ul>
    <li>
      <a href="{{ route('promotion') }}" class="{{ request()->routeIs('promotion*') ? 'active' : '' }}">
        Promotion
      </a>
    </li>
  </ul>
</div>







          <div
  class="tab-pane fade {{ request()->routeIs('tickets', 'ticket-details') ? 'show active' : '' }}"
  id="v-pills-tickets"
  role="tabpanel"
  aria-labelledby="v-pills-tickets-tab"
>
  <p>Tickets</p>
  <ul>
    <li><a class="{{ request()->routeIs('tickets') ? 'active' : '' }}" href="{{ route('tickets') }}">Tickets</a></li>
    <li><a class="{{ request()->routeIs('ticket-details') ? 'active' : '' }}" href="{{ route('ticket-details') }}">Ticket Details</a></li>
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
  class="tab-pane fade {{ request()->routeIs('categories', 'budgets', 'budget-expenses', 'budget-revenues') ? 'show active' : '' }}"
  id="v-pills-accounting"
  role="tabpanel"
  aria-labelledby="v-pills-accounting-tab"
>
  <p>Accounting</p>
  <ul>
    <li>
      <a href="{{ route('categories') }}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">Categories</a>
    </li>
    <li>
      <a href="{{ route('budgets') }}" class="{{ request()->routeIs('budgets') ? 'active' : '' }}">Budgets</a>
    </li>
    <li>
      <a href="{{ route('budget-expenses') }}" class="{{ request()->routeIs('budget-expenses') ? 'active' : '' }}">Budget Expenses</a>
    </li>
    <li>
      <a href="{{ route('budget-revenues') }}" class="{{ request()->routeIs('budget-revenues') ? 'active' : '' }}">Budget Revenues</a>
    </li>
  </ul>
</div>
             @php
    function tabActive(...$routes) {
        return request()->routeIs(...$routes) ? 'tab-pane fade show active' : 'tab-pane fade show';
    }
@endphp

<div class="{{ tabActive('salary', 'salary-view', 'payroll-items') }}" id="v-pills-payroll" role="tabpanel" aria-labelledby="v-pills-payroll-tab">
  <p>Payroll</p>
  <ul>
    <li><a class="{{ request()->routeIs('salary') ? 'active' : '' }}" href="{{ route('salary') }}">Employee Salary</a></li>
    <li><a class="{{ request()->routeIs('salary-view') ? 'active' : '' }}" href="{{ route('salary-view') }}">Payslip</a></li>
    <li><a class="{{ request()->routeIs('payroll-items') ? 'active' : '' }}" href="{{ route('payroll-items') }}">Payroll Items</a></li>
  </ul>
</div>

<div class="{{ tabActive('policies') }}" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">
  <p>Policies</p>
  <ul>
    <li><a class="{{ request()->routeIs('policies') ? 'active' : '' }}" href="{{ route('policies') }}">Policies</a></li>
  </ul>
</div>

<div class="{{ tabActive('expense-reports', 'invoice-reports', 'payment-reports', 'project-reports', 'task-reports', 'user-reports', 'employee-reports', 'payslip-reports', 'attendance-reports', 'leave-reports', 'daily-reports') }}" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
  <p>Reports</p>
  <ul>
    <li><a class="{{ request()->routeIs('expense-reports') ? 'active' : '' }}" href="{{ route('expense-reports') }}">Expense Report</a></li>
    <li><a class="{{ request()->routeIs('invoice-reports') ? 'active' : '' }}" href="{{ route('invoice-reports') }}">Invoice Report</a></li>
    <li><a class="{{ request()->routeIs('payment-reports') ? 'active' : '' }}" href="{{ route('payment-reports') }}">Payments Report</a></li>
    <li><a class="{{ request()->routeIs('project-reports') ? 'active' : '' }}" href="{{ route('project-reports') }}">Project Report</a></li>
    <li><a class="{{ request()->routeIs('task-reports') ? 'active' : '' }}" href="{{ route('task-reports') }}">Task Report</a></li>
    <li><a class="{{ request()->routeIs('user-reports') ? 'active' : '' }}" href="{{ route('user-reports') }}">User Report</a></li>
    <li><a class="{{ request()->routeIs('employee-reports') ? 'active' : '' }}" href="{{ route('employee-reports') }}">Employee Report</a></li>
    <li><a class="{{ request()->routeIs('payslip-reports') ? 'active' : '' }}" href="{{ route('payslip-reports') }}">Payslip Report</a></li>
    <li><a class="{{ request()->routeIs('attendance-reports') ? 'active' : '' }}" href="{{ route('attendance-reports') }}">Attendance Report</a></li>
    <li><a class="{{ request()->routeIs('leave-reports') ? 'active' : '' }}" href="{{ route('leave-reports') }}">Leave Report</a></li>
    <li><a class="{{ request()->routeIs('daily-reports') ? 'active' : '' }}" href="{{ route('daily-reports') }}">Daily Report</a></li>
  </ul>
</div>

<div class="{{ tabActive('performance-indicator', 'performance', 'performance-appraisal') }}" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
  <p>Performance</p>
  <ul>
    <li><a class="{{ request()->routeIs('performance-indicator') ? 'active' : '' }}" href="{{ route('performance-indicator') }}">Performance Indicator</a></li>
    <li><a class="{{ request()->routeIs('performance') ? 'active' : '' }}" href="{{ route('performance') }}">Performance Review</a></li>
    <li><a class="{{ request()->routeIs('performance-appraisal') ? 'active' : '' }}" href="{{ route('performance-appraisal') }}">Performance Appraisal</a></li>
  </ul>
</div>

<div class="{{ tabActive('goal-tracking', 'goal-type') }}" id="v-pills-goals" role="tabpanel" aria-labelledby="v-pills-goals-tab">
  <p>Goals</p>
  <ul>
    <li><a class="{{ request()->routeIs('goal-tracking') ? 'active' : '' }}" href="{{ route('goal-tracking') }}">Goal List</a></li>
    <li><a class="{{ request()->routeIs('goal-type') ? 'active' : '' }}" href="{{ route('goal-type') }}">Goal Type</a></li>
  </ul>
</div>

<div class="{{ tabActive('training', 'trainers', 'training-type') }}" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab">
  <p>Training</p>
  <ul>
    <li><a class="{{ request()->routeIs('training') ? 'active' : '' }}" href="{{ route('training') }}">Training List</a></li>
    <li><a class="{{ request()->routeIs('trainers') ? 'active' : '' }}" href="{{ route('trainers') }}">Trainers</a></li>
    <li><a class="{{ request()->routeIs('training-type') ? 'active' : '' }}" href="{{ route('training-type') }}">Training Type</a></li>
  </ul>
</div>


<div
  class="tab-pane fade show {{ request()->routeIs('login', 'register', 'forgot-password', 'otp', 'lock-screen') ? 'active' : '' }}"
  id="v-pills-authentication"
  role="tabpanel"
  aria-labelledby="v-pills-authentication-tab"
>
  <p>Authentication</p>
  <ul>
    <li>
      <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a>
    </li>
    <li>
      <a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}">Register</a>
    </li>
    <li>
      <a href="{{ route('forgot-password') }}" class="{{ request()->routeIs('forgot-password') ? 'active' : '' }}">Forgot Password</a>
    </li>
    <li>
      <a href="{{ route('otp') }}" class="{{ request()->routeIs('otp') ? 'active' : '' }}">OTP</a>
    </li>
    <li>
      <a href="{{ route('lock-screen') }}" class="{{ request()->routeIs('lock-screen') ? 'active' : '' }}">Lock Screen</a>
    </li>
  </ul>
</div>

         <div
  class="tab-pane fade show {{ request()->routeIs('subscriptions', 'subscription-company', 'subscribed-companies') ? 'active' : '' }}"
  id="v-pills-subscriptions"
  role="tabpanel"
  aria-labelledby="v-pills-subscriptions-tab"
>
  <p>Subscriptions</p>
  <ul>
    <li>
      <a href="{{ route('subscriptions') }}" class="{{ request()->routeIs('subscriptions') ? 'active' : '' }}">
        Subscriptions (Admin)
      </a>
    </li>
    <li>
      <a href="{{ route('subscription-company') }}" class="{{ request()->routeIs('subscription-company') ? 'active' : '' }}">
        Subscriptions (Company)
      </a>
    </li>
    <li>
      <a href="{{ route('subscribed-companies') }}" class="{{ request()->routeIs('subscribed-companies') ? 'active' : '' }}">
        Subscribed Companies
      </a>
    </li>
  </ul>
</div>


<div
  class="tab-pane fade {{ request()->routeIs('resignation*') ? 'show active' : '' }}"
  id="v-pills-resignation"
  role="tabpanel"
  aria-labelledby="v-pills-resignation-tab"
>
  <p>Resignation</p>
  <ul>
    <li>
      <a href="{{ route('resignation') }}" class="{{ request()->routeIs('resignation') ? 'active' : '' }}">
        Resignation 
      </a>
    </li>
  </ul>
</div>


<div
  class="tab-pane fade {{ request()->routeIs('termination*') ? 'show active' : '' }}"
  id="v-pills-termination"
  role="tabpanel"
  aria-labelledby="v-pills-termination-tab"
>
  <p>Termination</p>
  <ul>
    <li>
      <a href="{{ route('termination') }}" class="{{ request()->routeIs('termination') ? 'active' : '' }}">
        Termination 
      </a>
    </li>
  </ul>
</div>




<div
  class="tab-pane fade {{ request()->routeIs('assets1') ? 'show active' : '' }}"
  id="v-pills-assets"
  role="tabpanel"
  aria-labelledby="v-pills-assets-tab"
>
  <p>Assets</p>
  <ul>
    <li>
      <a href="{{ route('assets1') }}" class="{{ request()->routeIs('assets1') ? 'active' : '' }}">
        Assets
      </a>
    </li>
  </ul>
</div>














<div
  class="tab-pane fade {{ request()->routeIs('activities') ? 'show active' : '' }}"
  id="v-pills-activities"
  role="tabpanel"
  aria-labelledby="v-pills-activities-tab"
>
  <p>Activities</p>
  <ul>
    <li>
      <a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'active' : '' }}">
        Activities
      </a>
    </li>
  </ul>
</div>

             












<div
  class="tab-pane fade {{ request()->routeIs('users') ? 'show active' : '' }}"
  id="v-pills-users"
  role="tabpanel"
  aria-labelledby="v-pills-users-tab"
>
  <p>Users</p>
  <ul>
    <li>
      <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">
        Users
      </a>
    </li>
  </ul>
</div>



<div
  class="tab-pane fade {{ request()->routeIs('settings') ? 'show active' : '' }}"
  id="v-pills-settings"
  role="tabpanel"
  aria-labelledby="v-pills-settings-tab"
>
  <p>Settings</p>
  <ul>
    <li>
      <a href="{{ route('settings') }}" class="{{ request()->routeIs('settings') ? 'active' : '' }}">
        Settings
      </a>
    </li>
  </ul>
</div>


<div
  class="tab-pane fade {{ request()->routeIs('profile') || request()->routeIs('client-profile') ? 'show active' : '' }}"
  id="v-pills-profile"
  role="tabpanel"
  aria-labelledby="v-pills-profile-tab"
>
  <p>Profile</p>
  <ul>
    <li>
      <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">
        Employee Profile
      </a>
    </li>
    <li>
      <a href="{{ route('client-profile') }}" class="{{ request()->routeIs('client-profile') ? 'active' : '' }}">
        Client Profile
      </a>
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


