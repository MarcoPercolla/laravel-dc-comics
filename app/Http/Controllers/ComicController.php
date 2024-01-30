<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
        $dati_validati = $this->validation($libro);

        $nuovo_libro = new Comic();
        // $nuovo_libro->title = $libro["title"];
        // $nuovo_libro->description = $libro["description"];
        // $nuovo_libro->thumb = $libro["thumb"];
        // $nuovo_libro->price = $libro["price"];
        // $nuovo_libro->series = $libro["series"];
        // $nuovo_libro->sale_date = $libro["sale_date"];
        // $nuovo_libro->type = $libro["type"];
        $nuovo_libro->fill($dati_validati);
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
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $dati_validati = $this->validation($data);
        $comic->update($dati_validati);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }

    public function validation($data)
    {
        $validated = Validator::make(
            $data,
            [
                "title" => "required|min:5|max:50",
                "description" => "",
                "thumb" => "",
                "price" => "required",
                "series" => "required|min:5|max:50",
                "sale_date" => "required|min:5|max:20",
                "type" => "required|min:5|max:30"
            ],
            [
                'title.required' => 'Il titolo è necessario',
                'title.min' => 'Il titolo è troppo corto',
                'title.max' => 'Il titolo è troppo lungo',
                'price.required' => 'Il prezzo è necessario',
                'series.required' => 'Il nome della serie è necessario',
                'series.max' => 'Il testo è troppo lungo',
                'series.min' => 'Il testo è troppo corto',
                'sale_date.required' => 'La data di vendita è necessaria',
                'sale_date.max' => 'Una data non dovrebbe avere tutti questi caratteri',
                'sale_date.min' => 'Una data non dovrebbe avere cosi pochi caratteri',
                'type.required' => 'Il tipo di fumetto è necessario',
                'type.max' => 'Il tipo di fumetto è troppo lungo',
                'type.min' => 'Il tipo di fumetto è troppo corto',
            ]
        )->validate();

        return $validated;
    }
}
