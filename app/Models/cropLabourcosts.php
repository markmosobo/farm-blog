<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cropLabourcosts
 * @package App\Models
 * @version August 3, 2019, 5:02 am EAT
 *
 * @property \App\Models\CropLabour cropLabour
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer labourers_full_name_id
 * @property string|\Carbon\Carbon date
 * @property integer quantity
 * @property bigInteger amount_due
 */
class cropLabourcosts extends Model
{
    use SoftDeletes;

    public $table = 'crop_labour_economics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'labourers_full_name_id',
        'date',
        'quantity',
        'amount_due'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'labourers_full_name_id' => 'integer',
        'quantity' => 'integer'
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
    public function cropLabour()
    {
        return $this->belongsTo(\App\Models\CropLabour::class);
    }
}
