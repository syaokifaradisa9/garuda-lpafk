<?php

namespace Modules\Inventory\App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'unit_id',
        'type',
    ];

    public function unit(){
        return $this->belongsTo(Unit::class);
    }

    public function inventory_sharing(){
        return $this->hasMany(InventorySharing::class);
    }
}
