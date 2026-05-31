<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'role_master';

    protected $fillable = [
        'role_name',
        'role_code',
        'status'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
