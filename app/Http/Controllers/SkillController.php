<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('skills.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|unique:skills',
        ]);

        Skill::create($request->all());

        return redirect()->route('skills.index')->with('success', 'Habilidad creada exitosamente.');
    }

    public function show(Skill $skill): View
    {
        return view('skills.show', compact('skill'));
    }

    public function edit(Skill $skill): View
    {
        $categories = Category::all();
        return view('skills.edit', compact('skill', 'categories'));
    }

    public function update(Request $request, Skill $skill): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|unique:skills,name,' . $skill->id,
        ]);

        $skill->update($request->all());

        return redirect()->route('skills.index')->with('success', 'Habilidad actualizada exitosamente.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Habilidad eliminada exitosamente.');
    }
}
