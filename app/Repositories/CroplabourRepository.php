<?php

namespace App\Repositories;

use App\Models\Croplabour;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CroplabourRepository
 * @package App\Repositories
 * @version August 2, 2019, 9:06 pm EAT
 *
 * @method Croplabour findWithoutFail($id, $columns = ['*'])
 * @method Croplabour find($id, $columns = ['*'])
 * @method Croplabour first($columns = ['*'])
*/
class CroplabourRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'crop_name_id',
        'labourers_full_name',
        'responsibility'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Croplabour::class;
    }
}
