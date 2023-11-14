<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class MessageController extends Controller
{
    public function create(JobRequest $jobRequest)
    {
        // Verificar si el usuario actual es el propietario de la solicitud de trabajo o el trabajador asociado
        if ($jobRequest->user_id !== Auth::user()->id && $jobRequest->worker_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return view('messages.create', compact('jobRequest'));
    }

    public function store(Request $request, JobRequest $jobRequest): RedirectResponse
    {
        // Verificar si el usuario actual es el propietario de la solicitud de trabajo o el trabajador asociado
        if ($jobRequest->user_id !== Auth::user()->id && $jobRequest->worker_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        $request->validate([
            'message' => 'required',
        ]);

        // Crear el mensaje en la base de datos
        $message = new Message([
            'job_request_id' => $jobRequest->id,
            'sender_id' => Auth::user()->id,
            'recipient_id' => $jobRequest->user_id === Auth::user()->id ? $jobRequest->worker_id : $jobRequest->user_id,
            'message' => $request->message,
        ]);
        $message->save();

        return redirect()->route('messages.show', $message)->with('success', 'Mensaje enviado exitosamente.');
    }

    public function show(Message $message)
    {
        // Verificar si el usuario actual es el remitente o el destinatario del mensaje
        if ($message->sender_id !== Auth::user()->id && $message->recipient_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return view('messages.show', compact('message'));
    }

    public function markAsRead(Message $message): RedirectResponse
    {
        // Verificar si el usuario actual es el destinatario del mensaje
        if ($message->recipient_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Marcar el mensaje como leído
        $message->read_at = now();
        $message->save();

        // Redireccionar al usuario a la página de detalles del mensaje
        return redirect()->route('messages.show', $message)->with('success', 'Mensaje marcado como leído.');
    }
}
