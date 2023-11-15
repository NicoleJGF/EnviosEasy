<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['slug','abreviatura','descripcion','estado'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    ///Relacion uno a muchos Inversa
    public function manzana(){
        return $this->belongsTo(manzana::class,'manzana_id','id');
    }
    public function jiron(){
        return $this->belongsTo(jiron::class,'jiron_id','id');
    }
}
