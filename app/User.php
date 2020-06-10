<?php

namespace App;

use App\Permisos\TienePermisosTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable, TienePermisosTrait;
    
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
     /**protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    **/

    protected $table = 'usuario';
    protected $primaryKey = 'id';
    //const CREATED_AT = 'createdAt';
   // const UPDATED_AT = 'updatedAt';

    protected $fillable = [
         'nombre','email', 'password',
    ];

    protected $hidden = [
        'password', 'rememberToken'
    ];
    public function getRememberToken()
    {
        return $this->rememberToken;    
    }

    public function setRememberToken($value)
    {
        $this->rememberToken = $value;
    }

    public function getRememberTokenName()
    {
        return 'rememberToken';
    }
    

    protected $casts = [
        'email_verificado_el' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol', 'usuario_id', 'rol_id');
    }
    public function permisos()
    {

        return $this->belongsToMany(Permiso::class, 'usuario_permiso', 'usuario_id', 'permiso_id');
    }
    

    

}
