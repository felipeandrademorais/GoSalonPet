<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Racas;
use App\Servicos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $servicos = Servicos::all();
       
        return view('home', compact('servicos', 'servicosRacas'));
    }
}
