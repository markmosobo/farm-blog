<?php

namespace App\Repositories;

use App\Models\Author;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AuthorRepository
 * @package App\Repositories
 * @version July 25, 2019, 5:09 am EAT
 *
 * @method Author findWithoutFail($id, $columns = ['*'])
 * @method Author find($id, $columns = ['*'])
 * @method Author first($columns = ['*'])
*/
class AuthorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author_name',
        'author_image_path',
        'author_description',
        'author_facebook',
        'author_twitter',
        'author_location',
        'author_background_image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Author::class;
    }
}
