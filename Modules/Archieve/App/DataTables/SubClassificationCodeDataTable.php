<?php

namespace Modules\Archieve\App\DataTables;

use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Modules\Archieve\App\Models\SubClassificationCode;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class SubClassificationCodeDataTable extends DataTable
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
            ->addColumn('main_code', function($subClassificationCode){
                return $subClassificationCode->classification_code->main_code;
            })
            ->filter(function($query){
                if(request()->has('search.value')){
                    $searchValue = request('search.value');
                    $query->where(function($query) use ($searchValue){
                        $query->where('sub_name', 'like', "%$searchValue%")
                        ->orWhere('sub_code', 'like', "%$searchValue%")
                        ->orWhereHas('classification_code',
                            function($classificationCode) use ($searchValue){
                                $classificationCode->where('main_code', 'like', "%$searchValue%");
                            }
                        );
                    });
                }
            })->order(function($query){
                $columnOrderIndex = request('order.0.column');
                $orderType = request('order.0.dir');

                switch($columnOrderIndex){
                    case 0:
                        $query->select('classification_codes.main_code as main_code', 'sub_classification_codes.*')
                            ->join('classification_codes', 'sub_classification_codes.classification_code_id', '=', 'classification_codes.id')
                            ->orderBy('main_code', $orderType);
                        break;
                    case 1:
                        $query->orderBy('sub_code', $orderType);
                        break;
                    case 2:
                        $query->orderBy('sub_name', $orderType);
                        break;
                }
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(SubClassificationCode $model): QueryBuilder
    {
        return $model->newQuery()
            ->with('classification_code');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('sub-classification-code-datatable')
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
                'title' => 'Kode Pokok',
                'data' => 'main_code',
            ],
            [
                'title' => 'Kode',
                'data' => 'sub_code',
            ],
            [
                'title' => 'Keterangan',
                'data' => 'sub_name',
            ],
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Sub Kode Arsip';
    }
}
