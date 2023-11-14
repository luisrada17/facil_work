<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CertificationController extends Controller
{
    public function index(): View
    {
        $certifications = Certification::all();
        return view('certifications.index', compact('certifications'));
    }

    public function create(): View
    {
        $users = User::all();
        return view('certifications.create', compact('users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'expiration_date' => 'required|date',
        ]);

        Certification::create($request->all());

        return redirect()->route('certifications.index')->with('success', 'Certificación creada exitosamente.');
    }

    public function show(Certification $certification): View
    {
        return view('certifications.show', compact('certification'));
    }

    public function edit(Certification $certification): View
    {
        $users = User::all();
        return view('certifications.edit', compact('certification', 'users'));
    }

    public function update(Request $request, Certification $certification): RedirectResponse
    {
        $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'expiration_date' => 'required|date',
        ]);

        $certification->update($request->all());

        return redirect()->route('certifications.index')->with('success', 'Certificación actualizada exitosamente.');
    }

    public function destroy(Certification $certification): RedirectResponse
    {
        $certification->delete();
        return redirect()->route('certifications.index')->with('success', 'Certificación eliminada exitosamente.');
    }
}
