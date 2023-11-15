<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    const Activo = 1;
    const Suspendido = 2;

    /*******************/

    const Musica = 3;
    const Lectura = 4;
    const Deporte = 5;
    const Otro = 6;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /*
    ///Relacion uno a muchos
    public function post_publicado(){
        return $this->hasMany(post::class);
    }
    
    ///Relacion muchos a muchos
    public function post_mostrado(){
        return $this->belongsToMany(post::class);
    }

    ///////////////////////////////
    public function noticias(){
        return $this->hasMany(noticias::class);
    }

    ///////////////////////////////
    public function reviews(){
        return $this->hasMany(reviews::class);
    }

    public function likes(){
        return $this->morphMany(likes::class,'likeable');
    }
    */
}
