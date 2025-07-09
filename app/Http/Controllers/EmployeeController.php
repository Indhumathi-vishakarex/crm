<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{


 public function employees()
    {
        return view('employees.employees');
    }

public function employeesList(){
    return view('employees.employees-list');
}

     public function holidays()
    {
       
    return view('employees.holidays');
    }
    
public function leavesAdmin(){

 return view('employees.leaves');
}

    
public function leavesEmployee(){

    return view('employees.leaves-employee');
}

public function leaveSettings(){

    return view('employees.leave-settings');
}

public function attendanceAdmin(){

     return view('employees.attendance');
}


public function attendanceEmployee(){

    return view('employees.attendance-employee');
}
public function departments(){
     return view('employees.departments');
}

public function designations(){
     return view('employees.designations');
}

public function timesheet(){
     return view('employees.timesheet');
}

public function shiftScheduling(){
        return view('employees.shift-scheduling');
}


public function shiftList(){
        return view('employees.shift-list');
}

public function overtime(){
        return view('employees.overtime');
}
public function clients(){
          return view('employees.client.clients');
}

public function clientsList(){
          return view('employees.client.clients-list');
}
public function projects(){
       return view('employees.projects.projects');
}

public function projectList(){
   return view('employees.projects.project-list');
}

public function projectView(){
return view('employees.projects.project-view');
}

public function tasks(){
       return view('employees.projects.tasks');
}
public function taskBoard(){
       return view('employees.projects.task-board');
}


public function taskView(){
       return view('employees.projects.task-view');
}


public function tickets(){
     return view('employees.tickets.tickets');
}

public function ticketDetails(){
    return view('employees.tickets.ticket-details');
}

}