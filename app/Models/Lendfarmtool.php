<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lendfarmtool
 * @package App\Models
 * @version July 30, 2019, 5:20 am EAT
 *
 * @property \App\Models\FarmTool farmTool
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer farm_tool_id
 * @property string lender
 * @property string lent_to
 * @property string|\Carbon\Carbon lend_date
 * @property string|\Carbon\Carbon return_date
 * @property string status
 */
class Lendfarmtool extends Model
{
    use SoftDeletes;

    public $table = 'lend_farm_tools';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'farm_tool_id',
        'lender',
        'lent_to',
        'lend_date',
        'return_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'farm_tool_id' => 'integer',
        'lender' => 'string',
        'lent_to' => 'string',
        'status' => 'string'
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
    public function farmTool()
    {
        return $this->belongsTo(\App\Models\FarmTool::class);
    }
}
