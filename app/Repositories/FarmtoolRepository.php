<?php

namespace App\Repositories;

use App\Models\Farmtool;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FarmtoolRepository
 * @package App\Repositories
 * @version July 25, 2019, 4:17 am EAT
 *
 * @method Farmtool findWithoutFail($id, $columns = ['*'])
 * @method Farmtool find($id, $columns = ['*'])
 * @method Farmtool first($columns = ['*'])
*/
class FarmtoolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tool_name',
        'quantity',
        'usage',
        'image_path'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Farmtool::class;
    }
}
