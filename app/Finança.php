<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finança extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'salario',
        'gastoPD',
        'valorAtual',
        'status',
        'duração'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
