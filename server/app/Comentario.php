<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'conteudo_id',
        'texto',
        'data',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function conteudo()
    {
        return $this->belongsTo(Conteudo::class);
    }
}
