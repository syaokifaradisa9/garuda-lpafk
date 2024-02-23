<?php

namespace Modules\Archieve\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubClassificationCode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'classification_code_id',
        'sub_code',
        'sub_name',
    ];

    public function classification_code(){
        return $this->belongsTo(ClassificationCode::class);
    }
}
