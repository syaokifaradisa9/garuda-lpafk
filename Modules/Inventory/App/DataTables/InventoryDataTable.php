<?php

namespace Modules\Inventory\App\DataTables;
 
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Modules\Inventory\App\Models\Inventory;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class InventoryDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('unit', function($inventory){
                return $inventory->unit->name;
            })
            ->addColumn('owner', function($inventory){
                if($inventory->type == "SARPRAS"){
                    return "Unit " . $inventory->unit->name;
                }

                $owners = [];
                foreach($inventory->inventory_sharing as $inventorySharing){
                    $owners[] = $inventorySharing->user->name;
                }

                return implode(", ", $owners);
            })
            ->addColumn('action', function($inventory){
                $editRoute = '';

                $duplicateRoute = '';

                return "
                    <a href='$duplicateRoute' class='text-success'>Duplikat</a>
                    |
                    <a href='$editRoute' class='text-primary'>Edit</a>
                    | 
                    <a href='' class='text-danger btn-delete' id='$inventory->id'>Hapus</a>
                ";
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Inventory $model): QueryBuilder
    {
        return $model->newQuery()->with('unit', 'inventory_sharing');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('inventory-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            [
                'title' => 'Nama',
                'data' => 'name',
            ],
            [
                'title' => 'Unit',
                'data' => 'unit',
            ],
            [
                'title' => 'Tipe',
                'data' => 'type',
            ],
            [
                'title' => 'Pemilik',
                'data' => 'owner',
            ],
            [
                'title' => 'Aksi',
                'data' => 'action',
                'orderable' => false,
                'searchable' => false,
                'exportable' => false,
                'printable' => false,
            ]
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Inventory_' . date('YmdHis');
    }
}
