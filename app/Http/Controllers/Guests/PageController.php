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
        foreach ($comics as $comic) {
            # code...
            dd($comic);
        }

        return view('home', compact('comics'));
    }
}
