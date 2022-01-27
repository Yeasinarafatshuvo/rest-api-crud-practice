<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function getEmployee()
    {
        return response()->json(Employee::all(), 200);
    }

    public function getEmployeId($id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        return response()->json($employee);
    }
    
    public function addEmploye(Request $request)
    {
         $employee = Employee::create([
             'name' => $request->name,
             'email' => $request->email,
             'salary' => $request->salary,
         ]);
    
        return response($employee, 201);
    }

     public function updaeteEmployee(Request $request, $id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'salary' => $request->salary,
        ]);

        return response($employee, 201);

   
    }

    public function deleteEmployee($id)
    {
        $employee = Employee::find($id);
        if(is_null($employee)){
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        $employee->delete();
        return response()->json(['message' => 'Employee Deleted  Successfully'], 201);
    }


}
