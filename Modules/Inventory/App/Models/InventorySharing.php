<?php

namespace Modules\Inventory\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventorySharing extends Model
{
    use HasFactory;
    protected $fillable = [
        'inventory_id',
        'user_id',
    ];

    public function inventory(){
        return $this->belongsTo(Inventory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
