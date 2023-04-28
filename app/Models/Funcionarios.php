<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    use HasFactory;

    protected $table ='funcionarios';

    protected $primaryKey = 'id';

    public $timestamps=true; //si esta en true hace auditoria de fechas??

    protected $fillable=[
        'cedula',
        'celular',
        'ficha',
        'localidad',
        'nombreCompleto',
        'tipo'
    ];

    protected $guarded = [

    ];
}
