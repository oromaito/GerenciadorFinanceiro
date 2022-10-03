<?php

namespace App\Http\Controllers;

use App\Finança;
use App\Http\Requests\storeMoneyRequest;
use Illuminate\Http\Request;

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

    
}
