<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;


class PageController extends Controller
{
    //
    function index()
    {
        $comics = Comic::all();
        //dd($comics);
        //$comics = config('comics');
        return view('home', compact('comics'));
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function comic (Comic $comic)
    {
        //dd($comic);
        return view('comic', compact('comic'));
    }
}
