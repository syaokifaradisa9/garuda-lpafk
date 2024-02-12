<?php

namespace Modules\Staffing\App\DataTables;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class UnitDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->addColumn('user_count', function($unit){
                return count($unit->users);
            })
            ->addColumn('action', function($unit){
                $editRoute = route('staffing.unit.edit', [
                    'id' => $unit->id,
                ]);

                return "
                    <a href='$editRoute' class='text-primary'>Edit</a>
                    | 
                    <a href='' class='text-danger btn-delete' id='$unit->id'>Hapus</a>
                ";
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Unit $model): QueryBuilder
    {
        return $model->newQuery()->with('users');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('unit-datatable')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            [
                'title' => 'Nama Unit',
                'data' => 'name',
            ],
            [
                'title' => 'Jumlah Pegawai',
                'data' => 'user_count',
            ],
            [
                'title' => 'Aksi',
                'data' => 'action',
            ]
        ];
    }

    protected function filename(): string
    {
        return 'Data Unit';
    }
}
