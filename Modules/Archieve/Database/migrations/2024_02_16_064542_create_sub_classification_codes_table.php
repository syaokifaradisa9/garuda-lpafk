<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Archieve\App\Models\ClassificationCode;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sub_classification_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->foreignIdFor(ClassificationCode::class)
                ->constrained()
                ->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('sub_classification_codes');
    }
};
