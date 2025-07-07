<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrController extends Controller
{
    public function categories()
    {
        return view('hr.accounting.categories');
    }

    public function budgets()
    {
        return view('hr.accounting.budgets');
    }

    public function budgetExpenses()
    {
        return view('hr.accounting.budget-expenses');
    }

    public function budgetRevenues()
    {
        return view('hr.accounting.budget-revenues');
    }

    public function salary()
    {
        return view('hr.payroll.salary');
    }

    public function salaryView()
    {
        return view('hr.payroll.salary-view');
    }

    public function payrollItems()
    {
        return view('hr.payroll.payroll-items');
    }

    public function policies()
    {
        return view('hr.policies');
    }

    public function payslipReports()
    {
        return view('hr.reports.payslip-reports');
    }

    public function expenseReports()
    {
        return view('hr.reports.expense-reports');
    }
    public function invoices()
    {
        return view('hr.invoices');
    }
    public function invoiceReports()
    {
        return view('hr.reports.invoice-reports');
    }

    public function payments()
    {
        return view('hr.payments');
    }

    public function paymentReports()
    {
        return view('hr.reports.payment-reports');
    }
    public function projectView()
    {
        return view('hr.project-view');
    }

    public function projectReports()
    {
        return view('hr.reports.project-reports');
    }

    public function taskReports()
    {
        return view('hr.reports.task-reports');
    }

    public function userReports()
    {
        return view('hr.reports.user-reports');
    }

    public function employeeReports()
    {
        return view('hr.reports.employee-reports');
    }

    public function attendanceReports()
    {
        return view('hr.reports.attendance-reports');
    }

    public function leaveReports()
    {
        return view('hr.reports.leave-reports');
    }

    public function dailyReports()
    {
        return view('hr.reports.daily-reports');
    }
}
