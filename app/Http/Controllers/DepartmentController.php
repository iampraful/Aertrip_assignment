<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return response()->json(['departments' => $departments], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'dept_name' => 'required|string|max:100',
        ]);

        $department = Department::create($request->all());
        return response()->json(['department' => $department], 201);
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return response()->json(['department' => $department], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'dept_name' => 'required|string|max:100',
        ]);

        $department = Department::findOrFail($id);
        $department->update($request->all());

        return response()->json(['department' => $department], 200);
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return response()->json(['message' => 'Department deleted successfully'], 200);
    }
}
