<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        return Sport::with('students')->get();
    }

    public function show($id)
    {
        return Sport::with('students')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'SportNév' => 'required|string|max:50',
        ]);

        return Sport::create($validated);
    }

    public function update(Request $request, $id)
    {
        $sport = Sport::findOrFail($id);
        $sport->update($request->all());
        return $sport;
    }

    public function destroy($id)
    {
        $sport = Sport::findOrFail($id);
        $sport->delete();
        return response()->noContent();
    }
}
