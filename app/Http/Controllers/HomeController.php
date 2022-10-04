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

    public function show(User $user)
    {
        $id = auth()->user()->id;

        $user = $user->where('id', $id)->first();

        // dd($user->finanças->all());

        $finanças = $user->finanças->all();

        return view('home.MostrarTabela', compact('finanças', 'user'));
    }

}
