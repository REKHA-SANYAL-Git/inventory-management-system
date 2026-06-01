<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'product_name',
        'product_code',
        'status',
        'created_by',
        'updated_by'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function skus()
    {
        return $this->hasMany(Sku::class, 'product_id');
    }
}
