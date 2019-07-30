<?php

namespace App\Repositories;

use App\Models\Borrowedfarmtool;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BorrowedfarmtoolRepository
 * @package App\Repositories
 * @version July 30, 2019, 5:25 am EAT
 *
 * @method Borrowedfarmtool findWithoutFail($id, $columns = ['*'])
 * @method Borrowedfarmtool find($id, $columns = ['*'])
 * @method Borrowedfarmtool first($columns = ['*'])
*/
class BorrowedfarmtoolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'farm_tool_id',
        'borrower',
        'borrowed_from',
        'borrowed_date',
        'return_date',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Borrowedfarmtool::class;
    }
}
