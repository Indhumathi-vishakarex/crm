<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CrmModuleController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\EmployeeController;



Route::get('/employees',[EmployeeController::class, 'employees'])->name('employees');
Route::get('/employees-list',[EmployeeController::class, 'employeesList'])->name('employees-list');
Route::get('/holidays', [EmployeeController::class, 'holidays'])->name('holidays');
Route::get('/leaves-admin', [EmployeeController::class, 'leavesAdmin'])->name('leaves-admin');
Route::get('/leaves-employee', [EmployeeController::class, 'leavesEmployee'])->name('leaves-employee');
Route::get('/leave-settings', [EmployeeController::class, 'leaveSettings'])->name('leave-settings');
Route::get('/attendance-admin', [EmployeeController::class, 'attendanceAdmin'])->name('attendance-admin');
Route::get('/attendance-employee', [EmployeeController::class, 'attendanceEmployee'])->name('attendance-employee');
Route::get('/departments', [EmployeeController::class, 'departments'])->name('departments');
Route::get('/designations', [EmployeeController::class, 'designations'])->name('designations');
Route::get('/timesheet', [EmployeeController::class, 'timesheet'])->name('timesheet');
Route::get('/shift-scheduling', [EmployeeController::class, 'shiftScheduling'])->name('shift-scheduling');
Route::get('/shift-list', [EmployeeController::class, 'shiftList'])->name('shift-list');
Route::get('/overtime', [EmployeeController::class, 'overtime'])->name('overtime');
Route::get('/clients',[EmployeeController::class, 'clients'])->name('clients');
Route::get('/clients-list',[EmployeeController::class, 'clientsList'])->name('clients-list');
Route::get('/projects', [EmployeeController::class, 'projects'])->name('projects');
Route::get('/project-list', [EmployeeController::class, 'projectList'])->name('project-list');
Route::get('/project-view', [EmployeeController::class, 'projectView'])->name('project-view');
Route::get('/tasks', [EmployeeController::class, 'tasks'])->name('tasks');
Route::get('/task-board',[EmployeeController::class, 'taskBoard'])->name('task-board');
Route::get('/tickets',[EmployeeController::class, 'tickets'])->name('tickets');
Route::get('/ticket-details',[EmployeeController::class, 'ticketDetails'])->name('ticket-details');



Route::get('/',[PagesController::class, 'login'])->name('login');
Route::get('/register',[PagesController::class, 'register'])->name('register');
Route::get('/forgot-password',[PagesController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/otp',[PagesController::class, 'otp'])->name('otp');
Route::get('/lock-screen',[PagesController::class, 'lockScreen'])->name('lock-screen');
Route::get('/error-404',[PagesController::class, 'error404'])->name('error-404');
Route::get('/error-500',[PagesController::class, 'error500'])->name('error-500');
Route::get('/subscriptions',[PagesController::class, 'subscriptions'])->name('subscriptions');
Route::get('/subscription-company',[PagesController::class, 'subscriptionCompany'])->name('subscription-company');
Route::get('/subscribed-companies',[PagesController::class, 'subscribedCompanies'])->name('subscribed-companies');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');
Route::get('/client-profile',[PagesController::class, 'clientProfile'])->name('client-profile');
Route::get('/assets-details',[PagesController::class, 'assetsDetails'])->name('assets-details');
Route::get('/user-asset-details',[PagesController::class, 'UserassetDetails'])->name('user-asset-details');



Route::get('/admin-dashboard',[MainController::class, 'adminDashboard'])->name('admin-dashboard');
Route::get('/employee-dashboard', [MainController::class, 'employeeDashboard'])->name('employee-dashboard');
Route::get('/chat', [MainController::class, 'chat'])->name('chat');
Route::get('/events', [MainController::class, 'events'])->name('events');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/inbox', [MainController::class, 'inbox'])->name('inbox');
Route::get('/compose', [MainController::class, 'compose'])->name('compose');
Route::get('/file-manager', [MainController::class, 'fileManager'])->name('file-manager');
Route::get('/voice-call',[MainController::class, 'voiceCall'])->name('voice-call');
Route::get('/video-call',[MainController::class, 'videoCall'])->name('video-call');
Route::get('/incoming-call',[MainController::class, 'incomingCall'])->name('incoming-call');
Route::get('/outgoing-call',[MainController::class, 'outgoingCall'])->name('outgoing-call');



Route::get('/categories',[HrController::class, 'categories'])->name('categories');
Route::get('/budgets', [HrController::class, 'budgets'])->name('budgets');
Route::get('/budget-expenses', [HrController::class, 'budgetExpenses'])->name('budget-expenses');
Route::get('/budget-revenues', [HrController::class, 'budgetRevenues'])->name('budget-revenues');
Route::get('/salary', [HrController::class, 'salary'])->name('salary');
Route::get('/salary-view', [HrController::class, 'salaryView'])->name('salary-view');
Route::get('/payroll-items', [HrController::class, 'payrollItems'])->name('payroll-items');
Route::get('/policies', [HrController::class, 'policies'])->name('policies');
Route::get('/payslip-reports', [HrController::class, 'payslipReports'])->name('payslip-reports');
Route::get('/expense-reports', [HrController::class, 'expenseReports'])->name('expense-reports');
Route::get('/invoices', [HrController::class, 'invoices'])->name('invoices');
Route::get('/create-invoice', [HrController::class, 'createInvoice'])->name('create-invoice');
Route::get('/edit-invoice', [HrController::class, 'editInvoice'])->name('edit-invoice');
Route::get('/invoice-view', [HrController::class, 'invoiceView'])->name('invoice-view');

Route::get('/invoice-reports', [HrController::class, 'invoiceReports'])->name('invoice-reports');
Route::get('/payments', [HrController::class, 'paymentReports'])->name('payments');
Route::get('/payment-reports', [HrController::class, 'paymentReports'])->name('payment-reports');
Route::get('/project-reports', [HrController::class, 'projectReports'])->name('project-reports');
Route::get('/project-view', [HrController::class, 'projectView'])->name('project-view');
Route::get('/task-reports', [HrController::class, 'taskReports'])->name('task-reports');
Route::get('/user-reports', [HrController::class, 'userReports'])->name('user-reports');
Route::get('/employee-reports', [HrController::class, 'employeeReports'])->name('employee-reports');
Route::get('/attendance-reports', [HrController::class, 'attendanceReports'])->name('attendance-reports');
Route::get('/leave-reports', [HrController::class, 'leaveReports'])->name('leave-reports');
Route::get('/daily-reports', [HrController::class, 'dailyReports'])->name('daily-reports');
Route::get('/assets1',[AdministrationController::class, 'assets1'])->name('assets1');
Route::get('/users',[AdministrationController::class, 'users'])->name('users');
Route::get('/settings',[AdministrationController::class, 'settings'])->name('settings');

// CrmModuleController

  Route::get('/contact-list', [CrmModuleController::class, 'contactList'])->name('contact-list');
  Route::get('/contact-grid', [CrmModuleController::class, 'contactGrid'])->name('contact-grid');
  Route::get('/contact-details', [CrmModuleController::class, 'contactDetails'])->name('contact-details');
  Route::get('/companies', [CrmModuleController::class, 'companies'])->name('companies');
 Route::get('/companies-grid', [CrmModuleController::class, 'companiesGrid'])->name('companies-grid');
  Route::get('/company-details', [CrmModuleController::class, 'companysDetails'])->name('company-details');
  Route::get('/deals', [CrmModuleController::class, 'deals'])->name('deals');
    Route::get('/deals-details', [CrmModuleController::class, 'dealsDetails'])->name('deals-details');
  Route::get('/deals-kanban', [CrmModuleController::class, 'dealsKanban'])->name('deals-kanban');
    Route::get('/leads-details', [CrmModuleController::class, 'leadsDetails'])->name('leads-details');
  Route::get('/leads', [CrmModuleController::class, 'leads'])->name('leads');
 Route::get('/leads-kanban', [CrmModuleController::class, 'leadsKanban'])->name('leads-kanban');
  Route::get('/activities', [CrmModuleController::class, 'activities'])->name('activities');
   
// end

// PerformanceController

Route::get('/performance-indicator',[PerformanceController::class,'perfomanceIndicator'])->name('performance-indicator');
Route::get('/performance',[PerformanceController::class,'perfomanceReview'])->name('performance');
Route::get('/performance-appraisal',[PerformanceController::class,'perfomanceAppraisal'])->name('performance-appraisal');
Route::get('/goal-tracking',[PerformanceController::class,'goalList'])->name('goal-tracking');
Route::get('/goal-type',[PerformanceController::class,'goalType'])->name('goal-type');
Route::get('/training',[PerformanceController::class,'trainingList'])->name('training');
Route::get('/trainers',[PerformanceController::class,'trainers'])->name('trainers');
Route::get('/training-type',[PerformanceController::class,'trainingType'])->name('training-type');

Route::get('/promotion',[PerformanceController::class,'promotion'])->name('promotion');
Route::get('/resignation',[PerformanceController::class,'resignation'])->name('resignation');
Route::get('/termination',[PerformanceController::class,'termination'])->name('termination');



















?>









