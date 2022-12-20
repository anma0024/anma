<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'product',
        'categories_id',
        ];
   
        public function sales_details(){
            return $this->hasMany(sales_detail::class,'products_id','id');
        }
    
}
