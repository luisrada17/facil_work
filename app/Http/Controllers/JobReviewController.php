<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\JobReview;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class JobReviewController extends Controller
{
    public function create(JobRequest $jobRequest): View
    {
        // Verificar si el usuario actual es el propietario de la solicitud de trabajo y si el trabajo ha sido completado
        if ($jobRequest->user_id !== Auth::user()->id || $jobRequest->status !== 'completed') {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return view('job_reviews.create', compact('jobRequest'));
    }

    public function store(Request $request, JobRequest $jobRequest): RedirectResponse
    {
        // Verificar si el usuario actual es el propietario de la solicitud de trabajo y si el trabajo ha sido completado
        if ($jobRequest->user_id !== Auth::user()->id || $jobRequest->status !== 'completed') {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:255',
        ]);

        // Crear la reseña en la base de datos
        $jobReview = new JobReview([
            'job_request_id' => $jobRequest->id,
            'user_id' => Auth::user()->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        $jobReview->save();

        return redirect()->route('job_requests.show', $jobRequest)->with('success', 'Reseña enviada exitosamente.');
    }
}
