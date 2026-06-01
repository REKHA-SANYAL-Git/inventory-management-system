<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'skus';

    protected $fillable = [
        'product_id',
        'hsn_id',
        'sku_code',
        'sku_name',
        'sku_description',
        'unit_of_measure',
        'reorder_level',
        'status',
        'created_by',
        'updated_by'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function hsn()
    {
        return $this->belongsTo(Hsn::class, 'hsn_id');
    }

    public function inventoryStocks()
    {
        return $this->hasMany(InventoryStock::class, 'sku_id');
    }

    public function inventoryTransactions()
    {
        return $this->hasMany(InventoryTransaction::class, 'sku_id');
    }
}
