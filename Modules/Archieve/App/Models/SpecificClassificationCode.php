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
        'specific_name',
        'specific_description'
    ];

    public function sub_classification_code(){
        return $this->belongsTo(SubClassificationCode::class);
    }
}
