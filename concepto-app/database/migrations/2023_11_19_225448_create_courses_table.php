<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('name', 100);
            $table->string('cover')->nullable();
            $table->text('short_description');
            $table->text('description');
            $table->unsignedInteger('price');
            $table->string('rating', 100);
            $table->unsignedInteger('students');
            $table->unsignedInteger('duration');
            $table->string('level', 100);
            $table->text('requirements');
            $table->string('tags');
            $table->string('learnings');
            $table->boolean('trending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};