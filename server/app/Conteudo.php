<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'texto',
        'imagem',
        'link',
        'data',
    ];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function curtidas()
    {
        return $this->belongsToMany(User::class, 'curtidas', 'conteudo_id', 'user_id');
    }
}
