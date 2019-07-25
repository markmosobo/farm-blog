<?php

namespace App\Repositories;

use App\Models\Story;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StoryRepository
 * @package App\Repositories
 * @version July 25, 2019, 5:23 am EAT
 *
 * @method Story findWithoutFail($id, $columns = ['*'])
 * @method Story find($id, $columns = ['*'])
 * @method Story first($columns = ['*'])
*/
class StoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'story_category',
        'story_background_image',
        'story_title',
        'story_author_id',
        'story_date',
        'story_image',
        'story_quote',
        'story_content'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Story::class;
    }
}
