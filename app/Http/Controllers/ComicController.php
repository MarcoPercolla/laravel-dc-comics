<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $libro = $request->all();

        $nuovo_libro = new Comic();
        $nuovo_libro->title = $libro["title"];
        $nuovo_libro->description = $libro["description"];
        $nuovo_libro->thumb = $libro["thumb"];
        $nuovo_libro->price = $libro["price"];
        $nuovo_libro->series = $libro["series"];
        $nuovo_libro->sale_date = $libro["sale_date"];
        $nuovo_libro->type = $libro["type"];
        $nuovo_libro->save();

        return redirect()->route("comics.show", $nuovo_libro->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
