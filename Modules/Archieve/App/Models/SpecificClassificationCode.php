<?php

namespace Modules\Archieve\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecificClassificationCode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'sub_classification_code_id',
        'specific_code',
        'name',
        'description'
    ];

    public function sub_classification(){
        return $this->belongsTo(SubClassificationCode::class);
    }
}
