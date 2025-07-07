<?php

use Illuminate\Support\Facades\Route;
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












// Route::get('/', function () {
//     return view('welcome');project-root/app/Http/Controllers/EmployeeController.php

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







Route::get('/contact-details', function () {
    return view('contacts.contact-details');
});


Route::get('/company-details', function () {
    return view('companies.company-details');
});


Route::get('/employee-reports', function () {
    return view('employees.employee-reports');
});


Route::get('/client-profile', function () {
    return view('client.client-profile');
});

Route::get('/project-reports', function () {
    return view('projects.project-reports');
});



// Route::get('/project-view', function () {

// });





// ended.........


// Route::get('/deals-details', function () {
//     return view('deals.deals-details');
// });


// Route::get('/leads-details', function () {
//     return view('leads.leads-details');
// });

// CrmModuleController

  Route::get('/contact-list', [CrmModuleController::class, 'contactList'])->name('contact-list');
  Route::get('/contact-grid', [CrmModuleController::class, 'contactGrid'])->name('contact-grid');
  Route::get('/companies', [CrmModuleController::class, 'companies'])->name('companies');
 Route::get('/companies-grid', [CrmModuleController::class, 'companiesGrid'])->name('companies-grid');
  Route::get('/deals', [CrmModuleController::class, 'deals'])->name('deals');
  Route::get('/deals-kanban', [CrmModuleController::class, 'dealsKanban'])->name('deals-kanban');
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

























Route::get('/analytics', function () {
    return view('analytics');
});




Route::get('/attendance', function () {
    return view('attendance.attendance');
});


Route::get('/attendance-reports', function () {
    return view('attendance.attendance-reports');
});


Route::get('/voice-call', function () {
    return view('apps.voice-call');
});

Route::get('/video-call', function () {
    return view('apps.video-call');
});

Route::get('/incoming-call', function () {
    return view('apps.incoming-call');
});
Route::get('/outgoing-call', function () {
    return view('apps.outgoing-call');
    
});






















Route::get('/pipeline', function () {
    return view('pipeline');
});



Route::get('/analytics', function () {
    return view('analytics');
});



?>









