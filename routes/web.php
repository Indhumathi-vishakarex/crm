<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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


Route::get('/admin-dashboard',[MainController::class, 'adminDashboard'])->name('admin-dashboard');



Route::get('/employee-dashboard', [MainController::class, 'employeeDashboard'])->name('employee-dashboard');

Route::get('/chat', [MainController::class, 'chat'])->name('chat');

Route::get('/events', [MainController::class, 'events'])->name('events');

Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

Route::get('/inbox', [MainController::class, 'inbox'])->name('inbox');

Route::get('/file-manager', [MainController::class, 'fileManager'])->name('file-manager');




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










Route::get('/client-list', function () {
    return view('client.client-list');
});
Route::get('/clients', function () {
    return view('client.clients');
});

Route::get('/contact-list', function () {
    return view('contacts.contact-list');
});

Route::get('/contact-details', function () {
    return view('contacts.contact-details');
});

Route::get('/contact-grid', function () {
    return view('contacts.contact-grid');
});

Route::get('/companies', function () {
    return view('companies.companies');
});

Route::get('/company-details', function () {
    return view('companies.company-details');
});

Route::get('/companies-grid', function () {
    return view('companies.companies-grid');
});


Route::get('/employees-list', function () {
    return view('employees.employees-list');
});
Route::get('/employees', function () {
    return view('employees.employees');
});


Route::get('/projects', function () {
    return view('projects.projects');
});


Route::get('/project-list', function () {
    return view('projects.project-list');
});





// Route::get('/project-view', function () {
//     return view('projects.project-view');
// });


Route::get('/leads', function () {
    return view('leads.leads');
});


Route::get('/leads-details', function () {
    return view('leads.leads-details');
});



Route::get('/leads-kanban', function () {
    return view('leads.leads-kanban');
});



Route::get('/deals', function () {
    return view('deals.deals');
});


Route::get('/deals-details', function () {
    return view('deals.deals-details');
});

Route::get('/deals-kanban', function () {
    return view('deals.deals-kanban');
});


Route::get('/analytics', function () {
    return view('analytics');
});


Route::get('/activities', function () {
    return view('activities');
});

Route::get('/attendance', function () {
    return view('attendance.attendance');
});




Route::get('/attendance-employee', function () {
    return view('attendance.attendance-employee');
});

Route::get('/voice-call', function () {
    return view('apps.voice-call');
});