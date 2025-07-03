<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});


Route::get('/admin-dashboard',function(){
    return view('admin.admin-dashboard');
})->name('admin-dashboard');

Route::get('/employee-dashboard',function(){
    return view('admin.employee-dashboard');
})->name('employee-dashboard');

Route::get('/chat',function(){
    return view('apps.chat');
})->name('chat');
Route::get('/events',function(){
    return view('apps.events');
})->name('events');

Route::get('/contacts',function(){
    return view('apps.contacts');
})->name('contacts');

Route::get('/inbox',function(){
    return view('apps.inbox');
})->name('inbox');

Route::get('/file-manager',function(){
    return view('apps.file-manager');
})->name('file-manager');








Route::get('/salary',function(){
    return view('hr.salary');
})->name('salary');

Route::get('/salary-view',function(){
    return view('hr.salary-view');
})->name('salary-view');

Route::get('/payroll-items',function(){
    return view('hr.payroll-items');
})->name('payroll-items');

Route::get('/payslip-reports',function(){
    return view('hr.payslip-reports');
})->name('payslip-reports');

Route::get('/policies',function(){
    return view('hr.policies');
})->name('policies');




Route::get('/client-profile', function () {
    return view('client.client-profile');
});

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



Route::get('/employee-reports', function () {
    return view('employees.employee-reports');
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


Route::get('/project-reports', function () {
    return view('projects.project-reports');
});



Route::get('/project-view', function () {
    return view('projects.project-view');
});


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


Route::get('/attendance-reports', function () {
    return view('attendance.attendance-reports');
});

Route::get('/attendance-employee', function () {
    return view('attendance.attendance-employee');
});

Route::get('/voice-call', function () {
    return view('apps.voice-call');
});