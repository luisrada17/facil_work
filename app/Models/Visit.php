<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    // La propiedad $fillable indica qué atributos pueden ser asignados masivamente (mass assignable).
    protected $fillable = ['job_request_id', 'user_id', 'date', 'time', 'status'];

    // Relación muchos a uno con la solicitud de trabajo (JobRequest)
    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }

    // Relación muchos a uno con el usuario (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
