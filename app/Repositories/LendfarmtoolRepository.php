<?php

namespace App\Repositories;

use App\Models\Lendfarmtool;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LendfarmtoolRepository
 * @package App\Repositories
 * @version July 30, 2019, 5:20 am EAT
 *
 * @method Lendfarmtool findWithoutFail($id, $columns = ['*'])
 * @method Lendfarmtool find($id, $columns = ['*'])
 * @method Lendfarmtool first($columns = ['*'])
*/
class LendfarmtoolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'farm_tool_id',
        'lender',
        'lent_to',
        'lend_date',
        'return_date',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lendfarmtool::class;
    }
}
