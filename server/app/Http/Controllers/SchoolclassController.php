<?php

namespace App\Http\Controllers;

use App\Models\Schoolclass;
use Illuminate\Http\Request;

class SchoolclassController extends Controller
{
    public function index()
    {
        return Schoolclass::with('students')->get();
    }

    public function show($id)
    {
        return Schoolclass::with('students')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'OsztályNev' => 'required|string|max:10',
        ]);

        return Schoolclass::create($validated);
    }

    public function update(Request $request, $id)
    {
        $class = Schoolclass::findOrFail($id);
        $class->update($request->all());
        return $class;
    }

    public function destroy($id)
    {
        $class = Schoolclass::findOrFail($id);
        $class->delete();
        return response()->noContent();
    }
}
