<?php

namespace App\Repositories;

use App\Models\About;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AboutRepository
 * @package App\Repositories
 * @version July 25, 2019, 4:45 am EAT
 *
 * @method About findWithoutFail($id, $columns = ['*'])
 * @method About find($id, $columns = ['*'])
 * @method About first($columns = ['*'])
*/
class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sub_title',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return About::class;
    }
}
