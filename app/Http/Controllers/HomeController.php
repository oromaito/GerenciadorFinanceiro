<?php

namespace App\Http\Controllers;

use App\Finança;
use App\Http\Requests\storeMoneyRequest;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function create()
    {
        return view('home.registrarDados');
    }

    public function store(storeMoneyRequest $request, Finança $finança)
    {
        $request['user_id'] = auth()->user()->id;

        $finança->create($request->all());

        return redirect('/');
    }

    public function show(User $user, Finança $finança)
    {
        $id = auth()->user()->id;

        $user = $user->where('id', $id)->first();

        $finanças = $user->finanças->all();

        $datas = [];
        $dinheiroRestante = [];
        $i = 0;

        foreach ($finanças as $finança) {
            // calculo de datas
            if($finança->status == 'ativa'){
                array_push($datas, date('d')-$finança->created_at->format('d'));
                $dinheiroCalc = $finança->salario - ($finança->gastoPD*($datas[$i]));
                array_push($dinheiroRestante, $dinheiroCalc);
                $finança->valorAtual = $dinheiroCalc;
                $finança->save();
                $i++;
            }
            else{
                break;
            }
        }

        return view('home.MostrarTabela', compact('finanças', 'user'));
    }

}
