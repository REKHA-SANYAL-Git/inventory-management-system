<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_order_id',
        'sku_id',
        'ordered_qty',
        'received_qty',
        'unit_price',
        'line_total'
    ];

    public function purchaseOrder()
    {
        return $this->belongsTo(PurchaseOrder::class, 'purchase_order_id');
    }

    public function sku()
    {
        return $this->belongsTo(Sku::class, 'sku_id');
    }
}
