<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return response()->json($employees, 200);
    }

    public function store(Request $request)
    {
        $employee = new Employees();
        $employee->position_id = $request->position_id;
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->card = $request->card;
        $employee->start_date = $request->start_date;
        $employee->save();
        return response()->json('creado', 201);
    }

    public function show(string $id)
    {
        $employee = Employees::find($id);
        return response()->json($employee, 200);
    }


    public function update(Request $request, string $id)
    {
        $employee = Employees::find($id);
        $employee->position_id = $request->position_id;
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->card = $request->card;
        $employee->start_date = $request->start_date;
        $employee->save();
        return response()->json('Actualizado', 200);
    }

    public function destroy(string $id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return response()->json('Eliminado', 200);
    }
}
