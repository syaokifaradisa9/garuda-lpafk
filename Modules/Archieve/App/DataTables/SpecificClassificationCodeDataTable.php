<?php

namespace Modules\Archieve\App\DataTables;

use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Modules\Archieve\App\Models\SpecificClassificationCode;

class SpecificClassificationCodeDataTable extends DataTable
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
            ->addColumn('main_code', function($specificCode){
                return $specificCode->sub_classification_code->classification_code->main_code;
            })
            ->addColumn('sub_code', function($specificCode){
                return $specificCode->sub_classification_code->sub_code;
            })->filter(function($query){
                if(request()->has('search.value')){
                    $searchValue = request('search.value');
                    $query->where('specific_code', 'like', "%$searchValue%")
                        ->orWhere('specific_name', 'like', "%$searchValue%")
                        ->orWhere('specific_description', 'like', "%$searchValue%")
                        ->orWhereHas('sub_classification_code', function($query) use ($searchValue){
                            $query->where('sub_name', 'like', "%$searchValue%")
                            ->orWhere('sub_code', 'like', "%$searchValue%")
                            ->orWhereHas('classification_code',
                                function($classificationCode) use ($searchValue){
                                    $classificationCode->where('main_code', 'like', "%$searchValue%");
                                }
                            );
                        }
                    );
                }
            })->order(function($query){
                $columnOrderIndex = request('order.0.column');
                $orderType = request('order.0.dir');

                switch($columnOrderIndex){
                    case 0:
                        $query->select(
                                'classification_codes.main_code as main_code',
                                'sub_classification_codes.sub_code as sub_code',
                                'specific_classification_codes.*'
                            )->join('sub_classification_codes', 'specific_classification_codes.sub_classification_code_id', '=', 'sub_classification_codes.id')
                            ->join('classification_codes', 'sub_classification_codes.classification_code_id', '=', 'classification_codes.id')
                            ->orderBy('main_code', $orderType);
                        break;
                    case 1:
                        $query->select(
                            'sub_classification_codes.sub_code',
                            'specific_classification_codes.*'
                        )->join('sub_classification_codes', 'specific_classification_codes.sub_classification_code_id', '=', 'sub_classification_codes.id')
                        ->orderBy('sub_code', $orderType);
                        break;
                    case 2:
                        $query->orderBy('specific_code', $orderType);
                        break;
                    case 3:
                        $query->orderBy('specific_name', $orderType);
                        break;
                    case 4:
                        $query->orderBy('specific_description', $orderType);
                        break;
                }
            }); 
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(SpecificClassificationCode $model): QueryBuilder
    {
        return $model->newQuery()->with([
            'sub_classification_code' => function($subClassification){
                $subClassification->with('classification_code');
            }
        ]);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('specific-classification-code-datatable')
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
                'title' => 'Kode Sub Masalah',
                'data' => 'sub_code',
            ],
            [
                'title' => 'Kode',
                'data' => 'specific_code',
            ],
            [
                'title' => 'Keterangan',
                'data' => 'specific_name',
            ],
            [
                'title' => 'Deskripsi',
                'data' => 'specific_description',
            ],
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Sub Sub Masalah Kode Arsip';
    }
}
