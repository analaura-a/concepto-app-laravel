<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blogpost extends Model
{
    // use HasFactory;

    protected $fillable = ['category', 'title', 'summary', 'cover', 'content', 'author_id'];

    public const CREATE_RULES = [
        'category' => 'required',
        'title' => 'required',
        'summary' => 'required|min:100',
        'cover' => 'required',
        'content' => 'required',
        'author_id' => 'required'
    ];

    public const CREATE_MESSAGES = [
        'category.required' => 'La categoría no puede estar vacía.',
        'title.required' => 'El título no puede estar vacío.',
        'summary.required' => 'El resumen no puede estar vacío.',
        'summary.min' => 'El resumen debe tener al menos :min caracteres.',
        'cover.required' => 'La portada no puede estar vacía.',
        'content.required' => 'El contenido de la publicación no puede estar vacío.',
        'author_id.required' => 'Es necesario que elijas a un/a autor/a.',
    ];

    public const EDIT_RULES = [
        'category' => 'required',
        'title' => 'required',
        'summary' => 'required|min:100',
        'content' => 'required',
        'author_id' => 'required'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
