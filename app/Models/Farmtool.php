<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Farmtool
 * @package App\Models
 * @version July 25, 2019, 4:17 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string tool_name
 * @property integer quantity
 * @property string usage
 * @property string image_path
 */
class Farmtool extends Model
{
    use SoftDeletes;

    public $table = 'farm_tools';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tool_name',
        'quantity',
        'usage',
        'image_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tool_name' => 'string',
        'quantity' => 'integer',
        'usage' => 'string',
        'image_path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
