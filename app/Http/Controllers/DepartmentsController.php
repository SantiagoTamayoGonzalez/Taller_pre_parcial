<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departments;


class DepartmentsController extends Controller
{

    public function index()
    {
        $departments = Departments::all();
        return response()->json($departments, 200);
    }

    public function store(Request $request)
    {
        $department = new Departments();
        $department->name = $request->name;
        $department->save();
        return response()->json('creado', 201);
    }

    public function show(string $id)
    {
        $department = Departments::find($id);
        return response()->json($department, 200);
    }


    public function update(Request $request, string $id)
    {
        $department = Departments::find($id);
        $department->name = $request->name;
        $department->save();
        return response()->json('Actualizado', 200);
    }

    public function destroy(string $id)
    {
        $department = Departments::find($id);
        $department->delete();
        return response()->json('Eliminado', 200);
    }
}
