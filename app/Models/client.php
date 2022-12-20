<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class client extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'client',
        
        ];
    public function sales(){
        return $this->hasMany(sale::class,'clients_id','id');
    }
}
