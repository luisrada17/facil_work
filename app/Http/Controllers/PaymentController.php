<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class PaymentController extends Controller
{
    public function create(JobRequest $jobRequest)
    {
        // Verificar si el usuario actual es el propietario de la solicitud de trabajo
        if ($jobRequest->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Verificar si la solicitud de trabajo ya tiene una cotización seleccionada
        if ($jobRequest->quotation) {
            abort(403, 'Ya has seleccionado una cotización para esta solicitud de trabajo.');
        }

        return view('payments.create', compact('jobRequest'));
    }

    public function store(Request $request, JobRequest $jobRequest): RedirectResponse
    {
        // Validar que el usuario actual sea el propietario de la solicitud de trabajo
        if ($jobRequest->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Validar que la solicitud de trabajo no tenga una cotización seleccionada
        if ($jobRequest->quotation) {
            abort(403, 'Ya has seleccionado una cotización para esta solicitud de trabajo.');
        }

        $request->validate([
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|in:paypal', // Agregar otras opciones de pasarela de pagos si es necesario
        ]);

        // Crear el pago en la base de datos
        $payment = new Payment([
            'user_id' => Auth::user()->id,
            'quotation_id' => null,
            'amount' => $request->amount,
            'status' => 'pending',
            'payment_method' => $request->payment_method,
        ]);
        $jobRequest->payments()->save($payment);

        return redirect()->route('payments.show', $payment)->with('success', 'El pago se ha creado exitosamente. Por favor, completa el proceso de pago.');
    }

    public function show(Payment $payment)
    {
        // Verificar si el usuario actual es el propietario del pago
        if ($payment->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return view('payments.show', compact('payment'));
    }

    public function processPayment(Payment $payment): RedirectResponse
    {
        // Verificar si el usuario actual es el propietario del pago
        if ($payment->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Implementar la lógica de procesamiento de pagos con la pasarela de pagos seleccionada (por ejemplo, PayPal)

        // Simulación: Marcar el pago como completado después de un proceso exitoso
        $payment->status = 'completed';
        $payment->save();

        // Redireccionar al usuario a la página de confirmación de pago
        return redirect()->route('payments.show', $payment)->with('success', 'El pago se ha procesado correctamente. Por favor, confirma que el trabajo se realizó satisfactoriamente para liberar el pago al trabajador.');
    }

    public function confirmPayment(Payment $payment): RedirectResponse
    {
        // Verificar si el usuario actual es el propietario del pago
        if ($payment->user_id !== Auth::user()->id) {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        // Verificar que el pago esté en estado completado
        if ($payment->status !== 'completed') {
            abort(403, 'El pago no ha sido procesado correctamente.');
        }

        // Verificar si la solicitud de trabajo está en estado completado
        if ($payment->jobRequest->status !== 'completed') {
            abort(403, 'La solicitud de trabajo no ha sido marcada como completada.');
        }

        // Liberar el pago al trabajador

        // Calcular la comisión de la plataforma (15 o 20 por ciento del monto total de la cotización)
        $commission = $payment->amount * 0.15; // O cambiar el porcentaje según la regla de negocio

        // Calcular el monto que recibirá el trabajador
        $amountToWorker = $payment->amount - $commission;

        // Realizar el desembolso al trabajador (puedes implementar aquí la lógica para realizar el pago)

        // Cambiar el estado del pago a 'completed'
        $payment->status = 'completed';
        $payment->save();

        // Redireccionar al usuario a la página de confirmación de pago
        return redirect()->route('payments.show', $payment)->with('success', 'El pago ha sido desembolsado exitosamente al trabajador.');
    }
}
