<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classification_codes', function (Blueprint $table) {
            $table->id();
            $table->string('main_code')->unique();
            $table->string('main_name')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classification_codes');
    }
};
