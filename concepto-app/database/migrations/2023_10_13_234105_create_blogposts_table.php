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
        Schema::create('blogposts', function (Blueprint $table) {
            $table->id();
            $table->string('category', 100);
            $table->string('title');
            $table->string('summary');
            $table->string('cover');
            $table->text('content');
            $table->timestamps();

            /*
                Cada blog tiene:
                -id
                -category (VARCHAR 100)
                -title (VARCHAR 255)
                -summary (VARCHAR 255)
                -cover (VARCHAR 255)
                -content (text)

                -author_id (por ahora no)
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogposts');
    }
};
