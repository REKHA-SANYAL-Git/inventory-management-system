<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_no',
        'transaction_type',
        'warehouse_id',
        'sku_id',
        'quantity',
        'reference_type',
        'reference_id',
        'remarks',
        'created_by'
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
