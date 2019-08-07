<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Croplabour
 * @package App\Models
 * @version August 2, 2019, 9:06 pm EAT
 *
 * @property \App\Models\Crop crop
 * @property \Illuminate\Database\Eloquent\Collection CropLabourEconomic
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer crop_name_id
 * @property string labourers_full_name
 * @property string responsibility
 */
class Croplabour extends Model
{
    use SoftDeletes;

    public $table = 'crop_labour';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'crop_name_id',
        'labourers_full_name',
        'responsibility'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'crop_name_id' => 'integer',
        'labourers_full_name' => 'string',
        'responsibility' => 'string'
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
    public function crop()
    {
        return $this->belongsTo(\App\Models\Crop::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cropLabourEconomics()
    {
        return $this->hasMany(\App\Models\CropLabourEconomic::class);
    }
}
