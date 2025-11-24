<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return Student::with('schoolclass', 'sports')->get();
    }

    public function show($id)
    {
        return Student::with('schoolclass', 'sports')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'DiákNév' => 'required|string|max:50',
            'SchoolclassId' => 'required|exists:schoolclasses,id',
            'Neme' => 'required|integer|in:0,1',
        ]);

        return Student::create($validated);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return $student;
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->noContent();
    }
}
