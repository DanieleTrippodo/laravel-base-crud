<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('animals', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('description');
            $table->string('image_path')->nullable()->after('image_url');
        });
    }

    public function down(): void {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn('image_url');
            $table->dropColumn('image_path');
        });
    }
};
