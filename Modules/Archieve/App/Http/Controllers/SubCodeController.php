<?php

namespace Modules\Archieve\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Archieve\App\DataTables\SubClassificationCodeDataTable;

class SubCodeController extends Controller
{
    public function index(SubClassificationCodeDataTable $datatable){
        return $datatable->render('archieve::sub_classification_code.index');
    }
}
