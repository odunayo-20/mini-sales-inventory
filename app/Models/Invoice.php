<?php

namespace App\Models;

use App\Models\Sales;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sale(){
        return $this->hasMany(Sales::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

}
