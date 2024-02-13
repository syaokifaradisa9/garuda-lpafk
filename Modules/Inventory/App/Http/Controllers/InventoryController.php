<?php

namespace Modules\Inventory\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Inventory\App\DataTables\InventoryDataTable;

class InventoryController extends Controller
{
    public function index(InventoryDataTable $datatable){
        return $datatable->render('inventory::inventory.index');
    }
}
