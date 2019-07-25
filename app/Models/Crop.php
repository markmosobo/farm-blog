<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Crop
 * @package App\Models
 * @version July 25, 2019, 4:14 am EAT
 *
 * @property \Illuminate\Database\Eloquent\Collection CropLabour
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string crop_name
 * @property string crop_type
 * @property string description
 */
class Crop extends Model
{
    use SoftDeletes;

    public $table = 'crops';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'crop_name',
        'crop_type',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'crop_name' => 'string',
        'crop_type' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cropLabours()
    {
        return $this->hasMany(\App\Models\CropLabour::class);
    }
}
