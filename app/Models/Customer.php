<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_name',
        'customer_code',
        'contact_person',
        'email',
        'mobile',
        'gst_number',
        'address',
        'status'
    ];

    public function salesOrders()
    {
        return $this->hasMany(SalesOrder::class, 'customer_id');
    }
}
