<?php

namespace App\Repositories;

use App\Models\Crop;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CropRepository
 * @package App\Repositories
 * @version July 25, 2019, 4:14 am EAT
 *
 * @method Crop findWithoutFail($id, $columns = ['*'])
 * @method Crop find($id, $columns = ['*'])
 * @method Crop first($columns = ['*'])
*/
class CropRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'crop_name',
        'crop_type',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Crop::class;
    }
}
