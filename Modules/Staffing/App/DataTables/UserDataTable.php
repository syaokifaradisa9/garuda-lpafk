<?php

namespace Modules\Staffing\App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
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
            ->addColumn('unit', function($user){
                return $user->unit->name;
            })
            ->addColumn('action', function($user){
                $editRoute = route('staffing.user.edit', [
                    'id' => $user->id,
                ]);

                return "
                    <a href='$editRoute' class='text-primary'>Edit</a>
                    | 
                    <a href='' class='text-danger btn-delete' id='$user->id'>Hapus</a>
                ";
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery()->with('unit');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('user-datatable')
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
                'title' => 'Nama Pegawai',
                'data' => 'name',
            ],
            [
                'title' => 'NIP',
                'data' => 'nip',
            ],
            [
                'title' => 'Nomor Telepon',
                'data' => 'phone',
            ],
            [
                'title' => 'Email',
                'data' => 'email',
            ],
            [
                'title' => 'Unit',
                'data' => 'unit',
                'orderable' => false,
                'searchable' => false,
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
        return 'Data Pegawai';
    }
}
