<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'service_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public const CREATE_RULES = [
        'username' => 'required',
        'password' => 'required',
    ];

    public const CREATE_MESSAGES = [
        'username.required' => 'El nombre de usuario no puede estar vacío.',
        'password.required' => 'La contraseña no puede estar vacía.',
    ];

    public const CREATE_RULES_REGISTER = [
        'username' => 'required|min:3',
        'email' => 'required',
        'password' => 'required|min:4',
    ];

    public const CREATE_MESSAGES_REGISTER = [
        'username.required' => 'El nombre de usuario no puede estar vacio en el registro',
        'username.min' => 'El nombre de usuario debe tener al menos :min caracteres.',
        'email.required' => 'El email no puede estar vacio en el registro.',
        'password.required' => 'La contraseña no puede estar vacia.',
        'password.min' => 'la contraseña debe tener al menos :min caracteres.',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'service_id');
    }
}
