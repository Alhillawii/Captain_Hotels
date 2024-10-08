<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        
        // $employees = Employee::all();
        $employees = User::with('employee')
        ->whereHas('employee', function ($query) {
            $query->where('Role', 'Employee');
        })
        ->get();
        return view('dashboard.employee.index', compact('employees'));
                //    return dd($Employee);
        
    }

    public function create()
    {
        return view('dashboard.employee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Emp_position' => 'required',
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Age' => 'required|integer',
            'job-specific' => 'required',
            'employment_date' => 'required|date',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id); // Retrieve the employee by ID
        return view('dashboard.employee.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('dashboard.employee.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'Emp_position' => 'required',
            'First_Name' => 'required',
            'Last_Name' => 'required',
            'Age' => 'required|integer',
            'job-specific' => 'required',
            'employment_date' => 'required|date',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
                         ->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
                         ->with('success', 'Employee deleted successfully.');
    }
}
