<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Inventory\App\Models\Inventory;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_sharings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Inventory::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_sharings');
    }
};
