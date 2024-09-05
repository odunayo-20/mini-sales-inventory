<?php

namespace App\Models;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    // public function purchaseDetails()
    // {
    //     return $this->hasMany(PurchaseDetail::class);
    // }
}
