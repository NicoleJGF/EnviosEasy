<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccionn extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = ['slugd','nombred','numerod','piso_dpto','estadod','cliente_id ','cuadra_id ','manzana_id '];

    public function getRouteKeyName()
    {
        return "slugd";
    }
    
    /*
    ///Relacion uno a uno
    public function cliente(){
        return $this->hasOne(cliente::class);
    }
    */

    ///Relacion uno a muchos
    public function cliente(){
        return $this->hasMany(cliente::class,'id','cliente_id');
    }
    public function manzana(){
        return $this->hasMany(manzana::class,'id','manzana_id');
    }
    public function cuadra(){
        return $this->hasMany(cuadra::class,'id','cuadra_id');
    }

}
