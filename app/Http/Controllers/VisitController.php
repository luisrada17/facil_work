<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class VisitController extends Controller
{
    public function create(JobRequest $jobRequest)
    {
        // Verificar si el usuario actual es el propietario de la solicitud de trabajo
        if ($jobRequest->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Verificar si la solicitud de trabajo ya tiene una visita programada
        if ($jobRequest->visit) {
            abort(403, 'Ya has programado una visita para esta solicitud de trabajo.');
        }

        return view('visits.create', compact('jobRequest'));
    }

    public function store(Request $request, JobRequest $jobRequest): RedirectResponse
    {
        // Validar que el usuario actual sea el propietario de la solicitud de trabajo
        if ($jobRequest->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Validar que la solicitud de trabajo no tenga una visita programada
        if ($jobRequest->visit) {
            abort(403, 'Ya has programado una visita para esta solicitud de trabajo.');
        }

        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Crear la visita en la base de datos
        $visit = new Visit([
            'user_id' => Auth::user()->id,
            'date' => $request->date,
            'time' => $request->time,
            'status' => 'pending',
        ]);
        $jobRequest->visits()->save($visit);

        return redirect()->route('visits.show', $visit)->with('success', 'La visita se ha programado exitosamente. Espera la confirmación del trabajador.');
    }

    public function show(Visit $visit)
    {
        // Verificar si el usuario actual es el propietario de la visita o el trabajador asociado a la solicitud de trabajo
        if ($visit->user_id !== Auth::user()->id && $visit->jobRequest->worker_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return view('visits.show', compact('visit'));
    }

    public function confirmVisit(Visit $visit): RedirectResponse
    {
        // Verificar si el usuario actual es el trabajador asociado a la solicitud de trabajo
        if ($visit->jobRequest->worker_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Cambiar el estado de la visita a 'confirmed'
        $visit->status = 'confirmed';
        $visit->save();

        // Redireccionar al usuario a la página de detalles de la solicitud de trabajo
        return redirect()->route('job_requests.show', $visit->jobRequest)->with('success', 'Has confirmado la visita exitosamente. Ahora puedes realizar la visita programada.');
    }

    public function completeVisit(Visit $visit): RedirectResponse
    {
        // Verificar si el usuario actual es el trabajador asociado a la solicitud de trabajo
        if ($visit->jobRequest->worker_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Cambiar el estado de la visita a 'completed'
        $visit->status = 'completed';
        $visit->save();

        // Redireccionar al usuario a la página de detalles de la solicitud de trabajo
        return redirect()->route('job_requests.show', $visit->jobRequest)->with('success', 'Has completado la visita exitosamente.');
    }
}
