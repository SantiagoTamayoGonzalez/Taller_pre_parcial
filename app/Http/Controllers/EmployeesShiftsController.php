<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeesShifts;

class EmployeesShiftsController extends Controller
{
    public function index()
    {
        $employeesShifts = EmployeesShifts::all();
        return response()->json($employeesShifts);
    }

    public function store(Request $request)
    {
        $employeesShifts =new EmployeesShifts();
        $employeesShifts->employee_id = $request->employee_id;
        $employeesShifts->shifts_start = $request->shifts_start;
    }

    public function show(string $id)
    {
        $employeesShifts = EmployeesShifts::find($id);
        return response()->json($employeesShifts);
    }


    public function update(Request $request, string $id)
    {
        $employeesShifts = EmployeesShifts::find($id);
        $employeesShifts->employee_id = $request->employee_id;
        $employeesShifts->shifts_start = $request->shifts_start;
        $employeesShifts->save();
        return response()->json('Actualizado', 200);
    }

    public function destroy(string $id)
    {
        $employeesShifts = EmployeesShifts::find($id);
        $employeesShifts->delete();
        return response()->json('Eliminado', 200);
    }
}
