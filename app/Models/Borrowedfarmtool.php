<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Borrowedfarmtool
 * @package App\Models
 * @version July 30, 2019, 5:25 am EAT
 *
 * @property \App\Models\FarmTool farmTool
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection roles
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property integer farm_tool_id
 * @property string borrower
 * @property string borrowed_from
 * @property string|\Carbon\Carbon borrowed_date
 * @property string|\Carbon\Carbon return_date
 * @property string status
 */
class Borrowedfarmtool extends Model
{
    use SoftDeletes;

    public $table = 'borrowed_farm_tools';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'farm_tool_id',
        'borrower',
        'borrowed_from',
        'borrowed_date',
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
        'borrower' => 'string',
        'borrowed_from' => 'string',
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
