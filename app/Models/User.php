<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    // La propiedad $guarded indica qué atributos no pueden ser asignados masivamente (mass assignable).
    protected $guarded = [];

    // La propiedad $hidden indica qué atributos deben ser ocultados al serializar el modelo.
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    // La propiedad $casts indica cómo deben ser tratados ciertos atributos al acceder a ellos.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // La propiedad $appends indica qué atributos adicionales deben ser agregados al modelo al convertirlo a array.
    protected $appends = [
        'profile_photo_url',
    ];

    // Relación uno a muchos con certifications
    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    // Relación uno a muchos con job_requests
    public function jobRequests()
    {
        return $this->hasMany(JobRequest::class);
    }

    // Relación uno a muchos con quotations
    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    // Relación uno a muchos con payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // Relación uno a muchos con job_reviews
    public function jobReviews()
    {
        return $this->hasMany(JobReview::class);
    }

    // Relación uno a muchos con messages (como remitente)
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    // Relación uno a muchos con messages (como destinatario)
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }
}
