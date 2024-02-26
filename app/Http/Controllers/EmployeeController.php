<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json(['employees' => $employees], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'emp_name' => 'required|string|max:100',
            'contact_numbers' => 'required|array',
            'addresses' => 'required|array',
        ]);

        try {
            $employee = new Employee;
            $employee->department_id = $request->department_id;
            $employee->emp_name = $request->emp_name;
            $employee->contact_numbers = json_encode($request->contact_numbers);
            $employee->addresses = json_encode($request->addresses);
            $employee->save();

            return response()->json(['employee' => $employee], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json(['employee' => $employee], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'emp_name' => 'required|string|max:100',
            'contact_numbers' => 'required',
            'addresses' => 'required',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return response()->json(['employee' => $employee], 200);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return response()->json(['message' => 'Employee deleted successfully'], 200);
    }
}
