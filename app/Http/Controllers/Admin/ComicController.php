<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::orderByDesc('id')->get();
        //dd($comics);
        return view('admin.comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $val_data = $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required|max:65535',
                'thumb' => 'required|max:65535',
                'price' => 'required|max:255',
                'series' => 'required|max:255',
                'sale_date' => 'required|date',
                'type' => 'required|max:255',
            ],
            [
                'title.required' => 'La compilazione del campo Title è obbligatoria.',
                'description.required' => 'La compilazione del campo Description è obbligatoria.',
                'thumb.required' => 'La compilazione del campo Image è obbligatoria.',
                'price.required' => 'La compilazione del campo Price è obbligatoria.',
                'series.required' => 'La compilazione del campo Series è obbligatoria.',
                'sale_date.required' => 'La compilazione del campo Sale Date è obbligatoria.',
                'type.required' => 'La compilazione del campo Type è obbligatoria.',
            ]
        );

        //dd($val_data);

        #create new Instance
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->image = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        #save
        $comic->save();

        #redirect to another page
        return to_route('comic.index')->with('message', 'Comic added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //dd($comic);
        return view('admin.comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //dd($comic);
        return view('admin.comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $val_data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:65535',
            'thumb' => 'required|max:65535',
            'price' => 'required|max:255',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
        ],
        [
            'title.required' => 'La compilazione del campo Title è obbligatoria.',
            'description.required' => 'La compilazione del campo Description è obbligatoria.',
            'thumb.required' => 'La compilazione del campo Image è obbligatoria.',
            'price.required' => 'La compilazione del campo Price è obbligatoria.',
            'series.required' => 'La compilazione del campo Series è obbligatoria.',
            'sale_date.required' => 'La compilazione del campo Sale Date è obbligatoria.',
            'type.required' => 'La compilazione del campo Type è obbligatoria.',
        ]);
        //dd($val_data);
        //dd($request->all());
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->image = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        #save
        $comic->save();
        #update
        $comic->update();

        #redirect to another page
        return to_route('comic.index')->with('message', 'Comic Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return to_route('comic.index')->with('message', 'Comic deleted');
    }
}
