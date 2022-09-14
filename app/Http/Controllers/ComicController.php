<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $comics = Comic::all();
            return view('comics.index',compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); // Prendiamo il contenuto di request(ovvvero i nostri dati passati in post) e li diamo ad una variabile data

        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $lastComicId = (Comic::orderBy('id','desc')->first()->id)+1; // Prendiamo l ultimo id della tabella,in modo da aggiungerlo al nostro slug

        $newComic->slug = Str::slug($newComic->title, '-')."-". $lastComicId; //Aggiungiamo al titolo l'id dell ultimo elemento

        $newComic->save();        
        return redirect()->route('comics.index');//Redirect to  index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where('slug',$slug)->first();
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
