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
        return view('comics.create', ['comic'=> new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request-> validate([
            'title' => 'unique:comics|string|required',
            'description' => 'required|string',
            'thumb' => 'nullable|url:http, https',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'nullable|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ]);
       

        $comic = new Comic();
        
        $comic->fill($data);
        
        $comic->save();

        return to_route('comics.show', $comic->id);
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
        
        $data = $request-> validate([
            'title' => [Rule::unique('comics')->ignore($comic->title), 'string', 'required'],
            'description' => ['required', 'string'],
            'thumb' => ['nullable', 'url:http, https'],
            'price' => ['required', 'numeric'],
            'series' => ['required', 'string'],
            'sale_date' => ['required', 'date'],
            'type' => ['nullable', 'string'],
            'artists' => ['required', 'string'],
            'writers' => ['required', 'string']
        ]);
       
        
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
        return to_route('comics.index');
    }
}
