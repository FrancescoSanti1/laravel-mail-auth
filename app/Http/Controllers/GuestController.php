<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class GuestController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
