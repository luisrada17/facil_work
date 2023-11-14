<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    protected $guarded = [];

    // Relación muchos a uno con el modelo JobRequest
    // Este método define la relación entre el pago y la solicitud de trabajo (JobRequest).
    // Un pago pertenece a una solicitud de trabajo.
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con el modelo User
    // Este método define la relación entre el pago y el usuario (User) que realizó el pago.
    // Un pago pertenece a un usuario.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a uno con el modelo Quotation
    // Este método define la relación entre el pago y la cotización (Quotation) asociada.
    // Un pago pertenece a una cotización.
    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
