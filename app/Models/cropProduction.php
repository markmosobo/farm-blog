<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cropProduction
 * @package App\Models
 * @version August 3, 2019, 5:20 am EAT
 *
 * @property \App\Models\Crop crop
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer crop_name_id
 * @property integer input_costs
 * @property integer recurrent_costs
 * @property string description
 */
class cropProduction extends Model
{
    use SoftDeletes;

    public $table = 'crop_production_costs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'crop_name_id',
        'input_costs',
        'recurrent_costs',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'crop_name_id' => 'integer',
        'input_costs' => 'integer',
        'recurrent_costs' => 'integer',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function crop()
    {
        return $this->belongsTo(\App\Models\Crop::class);
    }
}
