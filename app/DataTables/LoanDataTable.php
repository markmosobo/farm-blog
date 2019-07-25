<?php

namespace App\DataTables;

use App\Http\Controllers\LoggedUserController;
use App\Models\Loan;
use Carbon\Carbon;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class LoanDataTable extends DataTable
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
            ->editColumn('created_by',function($loan){
                return '<a data-toggle="modal" href="#details-modal" hint="'.url('lDetails/'.$loan->id).'" class="btn btn-success btn-xs loan-details">View Details</a>';
            })
            ->editColumn('loan_date',function($date){
                return Carbon::parse($date->loan_date)->toDateString();
            })
            ->editColumn('status',function($status){
                if($status->status){
                    return '<label class="label label-success">Fully Paid</label>';
                }
                return '<label class="label label-warning">Active</label>';
            })
            ->rawColumns(['action','created_by','status'])
            ->addColumn('action', 'loans.datatables_actions')
            ->addColumn('interest',function($loan){
                return $loan->rate/100 * $loan->principle;
            })
            ;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Loan $model)
    {
        return $model->newQuery()
            ->select('loans.*')
            ->orderByDesc('loans.id')
            ->with(['masterfile']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        if(LoggedUserController::isAllAccessGranted()){
            return $this->builder()
                ->columns($this->getColumns())
                ->minifiedAjax()
                ->addAction(['width' => '80px'])
                ->parameters([
//                'dom'     => 'Bfrtip',
                    'order'   => [[0, 'desc']],
                    'buttons' => [
                        'create',
                        'export',
                        'print',
                        'reset',
                        'reload',
                    ],
                ]);
        }else{
            return $this->builder()
                ->columns($this->getColumns())
                ->minifiedAjax()
//                ->addAction(['width' => '80px'])
                ->parameters([
//                'dom'     => 'Bfrtip',
                    'order'   => [[0, 'desc']],
                    'buttons' => [
                        'create',
                        'export',
                        'print',
                        'reset',
                        'reload',
                    ],
                ]);
        }
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'masterfile.full_name'=>[
                'title'=> 'Landlord'
            ],
            'principle',
            'rate',
            'loan_date',
            'status',
            'created_by'=>[
                'title'=>'View Details'
            ],
            'interest'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'loansdatatable_' . time();
    }
}