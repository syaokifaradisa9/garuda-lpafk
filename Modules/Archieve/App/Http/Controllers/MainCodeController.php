<?php

namespace Modules\Archieve\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Archieve\App\DataTables\ClassificationCodeDataTable;

class MainCodeController extends Controller
{
    public function index(ClassificationCodeDataTable $datatable){
        return $datatable->render('archieve::classification_code.index');
    }
}
