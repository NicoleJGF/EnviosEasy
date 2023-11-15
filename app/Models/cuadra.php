<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuadra extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['slug','abreviatura','descripcion','estado','jiron_id'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    
    ///Relacion uno a muchos
    public function jiron_cuadra(){
        return $this->hasMany(jiron::class,'id','jiron_id');
    }
    
    ///Relacion uno a muchos Inversa
    public function direccionn(){
        return $this->belongsTo(direccionn::class,'id','cuadra_id');
    }
}
