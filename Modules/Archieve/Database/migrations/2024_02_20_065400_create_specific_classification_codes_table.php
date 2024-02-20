<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Archieve\App\Models\SubClassificationCode;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('specific_classification_codes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SubClassificationCode::class)->constrained();
            $table->string('specific_code');
            $table->string('name');
            $table->text('description')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('specific_classification_codes');
    }
};
