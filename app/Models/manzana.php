<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manzana extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['slug','abreviatura','descripcion','estado','sector_id'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    ///Relacion uno a muchos
    public function sector_manzana(){
        return $this->hasMany(sector::class,'id','sector_id');
    }

    ///Relacion uno a muchos Inversa
    public function direccionn(){
        return $this->belongsTo(direccionn::class);
    }
}
