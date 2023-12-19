<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    // use HasFactory; 
    protected $table = "courses";

    protected $primaryKey = "course_id";


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
    

    protected function price(): Attribute
    {
        return Attribute::make(
            function($value){
                return $value / 100;
            },
            function($value){
                return $value * 100;
            }
        );
    }
}
