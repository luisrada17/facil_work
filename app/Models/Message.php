<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // La propiedad $guarded indica qué atributos NO pueden ser asignados masivamente (mass assignable).
    protected $guarded = [];

    // Relación muchos a uno con el modelo JobRequest
    // Este método define la relación entre el mensaje y la solicitud de trabajo (JobRequest).
    // Un mensaje pertenece a una solicitud de trabajo.
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con el modelo User (remitente)
    // Este método define la relación entre el mensaje y el usuario remitente (sender).
    // Un mensaje pertenece a un usuario que lo envía.
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relación muchos a uno con el modelo User (destinatario)
    // Este método define la relación entre el mensaje y el usuario destinatario (recipient).
    // Un mensaje pertenece a un usuario que lo recibe.
    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
