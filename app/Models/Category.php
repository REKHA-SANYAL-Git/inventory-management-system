<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_name',
        'category_code',
        'status',
        'created_by',
        'updated_by'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
