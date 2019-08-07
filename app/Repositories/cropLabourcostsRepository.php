<?php

namespace App\Repositories;

use App\Models\cropLabourcosts;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class cropLabourcostsRepository
 * @package App\Repositories
 * @version August 3, 2019, 5:02 am EAT
 *
 * @method cropLabourcosts findWithoutFail($id, $columns = ['*'])
 * @method cropLabourcosts find($id, $columns = ['*'])
 * @method cropLabourcosts first($columns = ['*'])
*/
class cropLabourcostsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'labourers_full_name_id',
        'date',
        'quantity',
        'amount_due'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return cropLabourcosts::class;
    }
}
