<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\JobRequest;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobRequests = JobRequest::all();
        return view('job_requests.index', compact('jobRequests'));
    }

    // Paso 1: Vista para ingresar la necesidad
    public function step1(): View
    {
        // Obtén todas las categorías y habilidades relacionadas
        $categoriesWithSkills = Category::with('skills')->get();
    
        // Crear un array de informe para almacenar la información
        $informe = [
            'categoriesWithSkills' => $categoriesWithSkills,
        ];
        return view('job_requests.step1', $informe);
    }

    // Almacenar datos del paso 1 en la sesión
    public function storeStep1(Request $request): RedirectResponse
    {
        $request->validate([
            'job_request' => 'required|string',
            'category' => 'required', // Asegúrate de que el campo se llame 'category' en el formulario
        ]);

        $jobRequestData = [
            'job_request' => $request->input('job_request'),
            'category' => $request->input('category'), // Guarda la categoría en la sesión
        ];

        session(['job_request_data' => $jobRequestData]);

        return redirect()->route('job-requests.step2');
    }

    // Paso 2: Vista para seleccionar la ubicación
    public function step2(): View
    {
        return view('job_requests.step2');
    }

    // Almacenar datos del paso 2 en la sesión
    public function storeStep2(Request $request): RedirectResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);

        $jobRequestData = session('job_request_data', []);

        $jobRequestData['location'] = $request->input('location');

        session(['job_request_data' => $jobRequestData]);

        return redirect()->route('job-requests.step3');
    }

    public function step3(): View
    {
        return view('job_requests.step3');
    }

    // Almacenar datos del paso 3 en la sesión
    public function storeStep3(Request $request): RedirectResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);

        $jobRequestData = session('job_request_data', []);

        $jobRequestData['location'] = $request->input('location');

        session(['job_request_data' => $jobRequestData]);

        return redirect()->route('job-requests.step4');
    }

    public function step4(): View
    {
        return view('job_requests.step4');
    }

    // Almacenar datos del paso 4 en la sesión
    public function storeStep4(Request $request): RedirectResponse
    {
        $request->validate([
            'location' => 'required|string',
        ]);

        $jobRequestData = session('job_request_data', []);

        $jobRequestData['location'] = $request->input('location');

        session(['job_request_data' => $jobRequestData]);

        return redirect()->route('job-requests.step5');
    }

    // Paso final: Almacenar la solicitud en la base de datos
    public function storeFinal(Request $request): RedirectResponse
    {
        // Validar los datos finales del formulario
        $request->validate([
            'category_id' => 'required',
            'skill_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        // Obtener los datos completos de la sesión
        $jobRequestData = session('job_request_data', []);

        // Combinar los datos del formulario final con los datos de la sesión
        $jobRequestData = array_merge($jobRequestData, $request->all());

        // Crear la solicitud de trabajo en la base de datos
        JobRequest::create($jobRequestData);

        // Limpiar los datos de la sesión después de guardar en la base de datos
        session()->forget('job_request_data');

        return redirect()->route('job-requests.index')->with('success', 'Solicitud de trabajo creada exitosamente.');
    }

    public function show(JobRequest $jobRequest): View
    {
        return view('job_requests.show', compact('jobRequest'));
    }

    public function edit(JobRequest $jobRequest): View
    {
        $categories = Category::all();
        $skills = Skill::all();
        return view('job_requests.edit', compact('jobRequest', 'categories', 'skills'));
    }

    public function update(Request $request, JobRequest $jobRequest): RedirectResponse
    {
        $request->validate([
            'category_id' => 'required',
            'skill_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $jobRequest->update($request->all());

        return redirect()->route('job_requests.index')->with('success', 'Solicitud de trabajo actualizada exitosamente.');
    }

    public function destroy(JobRequest $jobRequest): RedirectResponse
    {
        $jobRequest->delete();
        return redirect()->route('job_requests.index')->with('success', 'Solicitud de trabajo eliminada exitosamente.');
    }
}