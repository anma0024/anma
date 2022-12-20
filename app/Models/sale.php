<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sale extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'date',
        'clients_id'
        ];
    public function clients(){
        return $this->belongsTo(client::class,'clients_id')->withDefault([
            'name'=> 'No existe ningun usuario relacionado.'
        ]);
    }
}
