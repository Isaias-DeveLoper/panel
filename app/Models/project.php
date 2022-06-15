<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class project
 * @package App\Models
 * @version June 15, 2022, 1:05 am UTC
 *
 * @property string $name
 * @property string $description
 * @property string $buy
 * @property string $duration
 * @property string $participant
 */
class project extends Model
{

    public $table = 'project';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'description',
        'buy',
        'duration',
        'participant'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'buy' => 'string',
        'duration' => 'date',
        'participant' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'buy' => 'required|string|max:255',
        'duration' => 'required',
        'participant' => 'required|string|max:255'
    ];

    
}
