<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @package App\Models
 * @version July 25, 2019, 5:09 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string author_name
 * @property string author_image_path
 * @property string author_description
 * @property string author_facebook
 * @property string author_twitter
 * @property string author_location
 * @property string author_background_image
 */
class Author extends Model
{
    use SoftDeletes;

    public $table = 'authors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'author_name',
        'author_image_path',
        'author_description',
        'author_facebook',
        'author_twitter',
        'author_location',
        'author_background_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'author_name' => 'string',
        'author_image_path' => 'string',
        'author_description' => 'string',
        'author_facebook' => 'string',
        'author_twitter' => 'string',
        'author_location' => 'string',
        'author_background_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
