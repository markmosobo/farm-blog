<?php

namespace App\DataTables;

use App\Models\Lease;
use App\Models\Masterfile;
use App\Models\TerminatedLease;
use App\User;
use Carbon\Carbon;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class TerminatedLeaseDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->editColumn('start_date',function($lease){
                return Carbon::parse($lease->start_date)->toFormattedDateString();
            })
            ->editColumn('status',function($lease){
                if($lease->status){
                    return '<label class="label label-success">reversed/terminated</label>';
                }
                return '<label class="label label-danger">Terminated</label>';
            })
//            ->editColumn('reversed_by',function($lease){
//                if(!is_null($lease->reversed_by)){
//                    return User::find($lease->reversed_by)->name;
//                }
//            })
            ->addColumn('action', function($lease){
                if($lease->status){
                    return '<a href="#delete-modal" data-toggle="modal" action="'.url('leases/'.$lease->id).'" class="btn btn-danger btn-xs delete-common"><i class="fa fa-close"></i> terminate</a>';
                }
                return '<label class="label label-danger">Terminated</label>';
            })
            ->editColumn('client_id',function ($lease){
                if($lease->state == 'Terminated'){
                    return '<a href="#reverse-modal" data-toggle="modal" action="'.url('reverse-lease/'.$lease->id).'" class="btn btn-default btn-xs reverse-btn"><i class="fa fa-close"></i> reverse</a>';
                }
                return '<label class="label label-default">reversed/terminated</label>';
            })
            ->editColumn('state',function ($lease){
                if($lease->state == 'Reversed'){
                    return '<label class="label label-info">Reversed</label>';
                }elseif ($lease->state == 'Terminated'){
                    return '<label class="label label-info">Terminated</label>';
                }
                return '';
            })
            ->rawColumns(['action','status','client_id','state']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Lease $model)
    {
        return $model->newQuery()
            ->select('leases.*')
            ->where('leases.status',false)
            ->with(['masterfile','unit','property'])->orderByDesc('leases.id')
            ;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
//            ->addAction(['width' => '80px'])
            ->parameters([
                'scrollX'=>true,
//                'dom'     => 'Bfrtip',
//                'order'   => [[0, 'desc']],
                'buttons' => [
                    'create',
                    'export',
                    'print',
                    'reset',
                    'reload',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'property.name',
            'unit.unit_number'=>[
                'title'=>'House Number'
            ],
            'masterfile.full_name'=>[
                'title'=>'Tenant'
            ],
            'masterfile.phone_number'=>[
                'title'=>'Phone Number'
            ],
            'start_date',
            'state',
            'reversed_by'=>[
                'title'=>'Reversed/terminated By'
            ],
//            'client_id'=>[
//                'title'=>'Reverse'
//            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'terminated_leasesdatatable_' . time();
    }
}