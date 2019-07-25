<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Story
 * @package App\Models
 * @version July 25, 2019, 5:23 am EAT
 *
 * @property \App\Models\Author author
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string story_category
 * @property string story_background_image
 * @property string story_title
 * @property integer story_author_id
 * @property string|\Carbon\Carbon story_date
 * @property string story_image
 * @property string story_quote
 * @property string story_content
 */
class Story extends Model
{
    use SoftDeletes;

    public $table = 'stories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'story_category' => 'string',
        'story_background_image' => 'string',
        'story_title' => 'string',
        'story_author_id' => 'integer',
        'story_image' => 'string',
        'story_quote' => 'string',
        'story_content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function author()
    {
        return $this->belongsTo(\App\Models\Author::class);
    }
}
