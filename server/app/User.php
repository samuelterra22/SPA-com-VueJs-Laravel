<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'imagem'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function conteudos()
    {
        return $this->hasMany(Conteudo::class);
    }

    public function curtidas()
    {
        return $this->belongsToMany(Conteudo::class, 'curtidas', 'user_id', 'conteudo_id');
    }

    public function amigos()
    {
        return $this->belongsToMany(User::class, 'amigos', 'user_id', 'amigo_id');
    }
}
