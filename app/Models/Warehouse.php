<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'warehouse_name',
        'warehouse_code',
        'location',
        'status'
    ];

    public function inventoryStocks()
    {
        return $this->hasMany(InventoryStock::class, 'warehouse_id');
    }

    public function purchaseOrders()
    {
        return $this->hasMany(PurchaseOrder::class, 'warehouse_id');
    }

    public function salesOrders()
    {
        return $this->hasMany(SalesOrder::class, 'warehouse_id');
    }
}
