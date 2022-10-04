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
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
