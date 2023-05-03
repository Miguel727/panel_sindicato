<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Model
{
    use HasFactory, Notifiable;

    protected $table ='usuarios';

    protected $primaryKey = 'id';

    public $timestamps=true; //si esta en true hace auditoria de fechas??

    
    protected $fillable=[
        'cedula' => '',
        'username',
        'password',
        'rol',
        'estado',
       
    ];

    protected $guarded = [

    ];
    public function setPassword($pass){
        $this->attributes['password']=bcrypt(($pass));
    }
}
