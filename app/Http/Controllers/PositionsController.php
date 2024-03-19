<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positions;

class PositionsController extends Controller
{
    public function index()
    {
        $positions = Positions::all();
        return response()->json($positions, 200);

    }

    public function store(Request $request)
    {
        $position = new Positions();
        $positiom->department_id = $request->department_id;
        $position->name = $request->name;
        $position->hourly_rate = $request->hourly_rate;
        $position->save();
        return response()->json('creado', 201);
    }

    public function show(string $id)
    {
        $position = Positions::find($id);
        return response()->json($position, 200);
    }


    public function update(Request $request, string $id)
    {
        $position = Positions::find($id);
        $position->department_id = $request->department_id;
        $position->name = $request->name;
        $position->hourly_rate = $request->hourly_rate;
        $position->save();
        return response()->json('Actualizado', 200);
    }

    public function destroy(string $id)
    {
        $position = Positions::find($id);
        $position->delete();
        return response()->json('Eliminado', 200);
    }
}
