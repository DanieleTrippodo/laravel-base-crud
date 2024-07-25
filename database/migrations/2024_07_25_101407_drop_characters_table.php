<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::dropIfExists('characters');
    }

    public function down(): void {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('class_type');
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }
};
