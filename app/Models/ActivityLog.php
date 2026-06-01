<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'table_name',
        'record_id',
        'action',
        'old_data',
        'new_data',
        'user_id',
        'ip_address'
    ];

    protected $casts = [
        'old_data' => 'array',
        'new_data' => 'array'
    ];
}
