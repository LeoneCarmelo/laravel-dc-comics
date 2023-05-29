<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageController extends Controller
{
    //
    function index()
    {
        $comics = config('comics');
        return view('home', compact('comics'));
    }

    function card () {
        $comics = config('comics');
        //dd($comics);
        return view('card', compact('comics'));
    }
}
