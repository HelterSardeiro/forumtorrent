<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['texto', 'conteudo_id'];
    protected $guarded = ['id', 'created_at',  'update_at'];
    protected $table = 'comentario';
    // public static function busca($nome)
    // {
    //   return static::where('nome', 'LIKE', '%' . $nome . '%')->get();
    // }
}

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     * 
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}


