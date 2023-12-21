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
        'email',
        'password',
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
        'email' => 'required',
        'password' => 'required',
    ];

    public const CREATE_MESSAGES = [
        'email.required' => 'El correo electrónico no puede estar vacío.',
        'password.required' => 'La contraseña no puede estar vacía.',
    ];

    public const CREATE_RULES_REGISTER = [
        'email' => 'required',
        'password' => 'required|min:8',
    ];

    public const CREATE_MESSAGES_REGISTER = [
        'email.required' => 'El email no puede estar vacío.',
        'password.required' => 'La contraseña no puede estar vacía.',
        'password.min' => 'La contraseña debe tener al menos :min caracteres.',
    ];

    public const CREATE_RULES_EDIT = [
        'email' => 'required|email',
    ];

    public const CREATE_MESSAGES_EDIT = [
        'email.required' => 'El email no puede estar vacío.',
        'email.email' => 'Por favor ingresa un formato de correo electrónico válido.',
    ];

}
