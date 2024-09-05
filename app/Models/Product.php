<?php

namespace App\Models;

use App\Models\Tax;
use App\Models\Sale;
use App\Models\Unit;
use App\Models\Invoice;
use App\Models\Category;
use App\Models\ProductSupplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function category(){
        return $this->belongsTo(Category::class);
     }
     public function unit(){
         return $this->belongsTo(Unit::class);
     }
     public function tax(){
         return $this->belongsTo(Tax::class);
     }
 
     public function additionalProduct(){
         return $this->hasMany(ProductSupplier::class);
     }
 
     public function sale(){
         return $this->hasMany(Sale::class);
     }
 
     public function invoice(){
         return $this->belongsToMany(Invoice::class);
     }
 }
 