<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

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
        return view('home');
    }

    public function showAll()
    {
        $videogames = Videogame::all();
        return json_encode($videogames);
    }

    public function deleteVideogame($id)
    {
        $videogame = Videogame::findOrFail($id);
        $videogame->delete();
        return json_encode($videogame);
    }
}
