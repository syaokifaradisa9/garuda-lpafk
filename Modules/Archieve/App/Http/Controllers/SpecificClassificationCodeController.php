<?php

namespace Modules\Archieve\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Archieve\App\DataTables\SpecificClassificationCodeDataTable;

class SpecificClassificationCodeController extends Controller
{
    public function index(SpecificClassificationCodeDataTable $datatable){
        return $datatable->render('archieve::spesific_code.index');
    }
}
