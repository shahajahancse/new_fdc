<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    use HasFactory;
    protected $table = 'project_details';

    protected $fillable = [
        'producer_name',
        'production_house_name',
        'title',
        'budget_amount',
        'amount',
        'start_date',
        'end_date',
        'status',
        'service_type',
        'project_description',
        'created_by',
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'producer_name' => 'string',
        'production_house_name' => 'string',
        'title' => 'string',
        'budget_amount' => 'decimal:2',
        'amount' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'string',
        'service_type' => 'string',
        'project_description' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'created_by' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
