<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|string|unique:comics',
                'series' => 'required|string',
                'thumb' => 'required|string',
                'price' => 'required|string',
                'sale_date' => 'string',
                'type' => 'required|string',
                'description' => 'string',
                'artists' => 'string|required',
                'writers' => 'string|required',
            ],
            [
                'title.unique' => "Il titolo $request->title é già presente",
                'title.required' => 'Il campo title è obbligatorio',
                'series.required' => 'Il campo series è obbligatorio',
                'thumb.required' => 'Il campo thumb è obbligatorio',
                'price.required' => 'Il campo price è obbligatorio',
                'type.required' => 'Il campo type è obbligatorio',
                'artists.required' => 'Il campo artists è obbligatorio',
                'writers.required' => 'Il campo writers è obbligatorio',
            ]
        );
        $data = $request->all();

        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
                'series' => 'required|string',
                'thumb' => 'required|string',
                'price' => 'required|string',
                'sale_date' => 'string',
                'type' => 'required|string',
                'description' => 'string',
                'artists' => 'string|required',
                'writers' => 'string|required',
            ],
            [
                'title.unique' => "Il titolo $request->title é già presente",
                'title.required' => 'Il campo title è obbligatorio',
                'series.required' => 'Il campo series è obbligatorio',
                'thumb.required' => 'Il campo thumb è obbligatorio',
                'price.required' => 'Il campo price è obbligatorio',
                'type.required' => 'Il campo type è obbligatorio',
                'artists.required' => 'Il campo artists è obbligatorio',
                'writers.required' => 'Il campo writers è obbligatorio',
            ]
        );
        $data = $request->all();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('delete', "Il comic $comic->title è stato eliminato con successo");
    }
}
