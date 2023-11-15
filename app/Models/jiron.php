<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jiron extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['slug','abreviatura','descripcion','estado','sector_id', 'tipo'];

    public function getRouteKeyName()
    {
        return "slug";
    }
    ///Relacion uno a muchos
    public function sector_jiron(){
        return $this->hasMany(sector::class,'id','sector_id');
    }

    ///Relacion uno a muchos Inversa
    public function jiron_cuadra(){
        return $this->belongsTo(cuadra::class,'jiron_id');
    }

}
