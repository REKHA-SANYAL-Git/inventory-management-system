<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hsn extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'hsn_master';

    protected $fillable = [
        'hsn_code',
        'hsn_description',
        'gst_rate',
        'effective_date',
        'status'
    ];

    public function skus()
    {
        return $this->hasMany(Sku::class, 'hsn_id');
    }
}
