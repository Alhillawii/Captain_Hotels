<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {

        $employees = User::with('employee')
            ->where('Role', 'Employee')
            ->get();

        return view('dashboard.employee.index', compact('employees'));
    }



    public function create()
    {
        $users = User::doesntHave('employee')->get(); 
        return view('dashboard.employee.create', compact('users'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'Emp_position' => 'required',
            'job_specific' => 'required',
            'employment_date' => 'required|date',
        ]);
    
        Employee::create([
            'user_id' => $request->user_id,
            'Emp_position' => $request->Emp_position,
            'job_specific' => $request->job_specific,
            'employment_date' => $request->employment_date,
        ]);
        
        return redirect()->route('employees.index');
    }
    

    public function show($id)
    {
        $employee = Employee::with('user')->findOrFail($id);    
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
            'job_specific' => 'required',
            'employment_date' => 'required|date',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }
    public function updateAPI(Request $request, $id )
{
    $employee = Employee::find($id);

    if (!$employee) {
        return response()->json([
            'success' => false,
            'message' => 'Employee not found.'
        ], 404);
    }

    $request->validate([
        'Emp_position' => 'required',
        'job_specific' => 'required',
        'employment_date' => 'required|date',
    ]);

    $employee->update($request->all());

    return response()->json([
        'success' => true,
        'message' => 'Employee updated successfully.',
        'employee' => $employee
    ]);
}


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}