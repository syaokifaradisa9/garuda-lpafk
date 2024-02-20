<?php

namespace Modules\Archieve\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassificationCode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'code',
        'name',
    ];
}
