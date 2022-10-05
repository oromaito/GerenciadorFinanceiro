<?php

namespace App\Observers;

use App\Finança;
use App\User;

class FinançaObserver
{
    /**
     * Handle the finança "created" event.
     *
     * @param  \App\Finança  $finança
     * @return void
     */
    public function creating(Finança $finança)
    {
        $finança->status = 'Ativa';
        $duração = $finança->salario/$finança->gastoPD;
        $finança->duração = $duração;
    }

    /**
     * Handle the finança "updated" event.
     *
     * @param  \App\Finança  $finança
     * @return void
     */
    public function updating(Finança $finança)
    {
        if($finança->valorAtual <= 0 || $finança->valorAtual < $finança->gastoPD)
        {
            $finança->status = 'Encerrada';
        }
    }
}
