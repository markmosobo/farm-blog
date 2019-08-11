<?php

namespace App\Repositories;

use App\Models\Quote;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class QuoteRepository
 * @package App\Repositories
 * @version August 10, 2019, 5:55 am EAT
 *
 * @method Quote findWithoutFail($id, $columns = ['*'])
 * @method Quote find($id, $columns = ['*'])
 * @method Quote first($columns = ['*'])
*/
class QuoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quote'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Quote::class;
    }
}
