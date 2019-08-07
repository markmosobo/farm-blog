<?php

namespace App\Repositories;

use App\Models\cropProduction;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class cropProductionRepository
 * @package App\Repositories
 * @version August 3, 2019, 5:20 am EAT
 *
 * @method cropProduction findWithoutFail($id, $columns = ['*'])
 * @method cropProduction find($id, $columns = ['*'])
 * @method cropProduction first($columns = ['*'])
*/
class cropProductionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'crop_name_id',
        'input_costs',
        'recurrent_costs',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return cropProduction::class;
    }
}
