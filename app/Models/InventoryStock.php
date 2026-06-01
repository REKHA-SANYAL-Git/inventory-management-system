<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryStock extends Model
{
    use HasFactory;

    protected $table = 'inventory_stock';

    protected $fillable = [
        'warehouse_id',
        'sku_id',
        'available_qty',
        'reserved_qty'
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class, 'warehouse_id');
    }

    public function sku()
    {
        return $this->belongsTo(Sku::class, 'sku_id');
    }
}
