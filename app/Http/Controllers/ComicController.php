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

        // Prendiamo il contenuto di request(ovvvero i nostri dati passati in post) e li diamo ad una variabile data

        $data = $request->all(); 

        // Prendiamo l ultimo id della tabella,in modo da aggiungerlo al nostro slug

        $lastComicId = (Comic::orderBy('id','desc')->first()->id)+1; 

        //Aggiungiamo al titolo l'id dell ultimo elemento 

        $data['slug'] = Str::slug($data['title'], '-')."-". $lastComicId; 

        $newComic = new Comic();

        $newComic->create($data);  
        return redirect()->route('comics.index');//Redirect to  index
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

         // Passiamo lo slug con il click sul titolo che a sua volta chiama show(), e ritorniamo il comic in cui lo slug è uguale a quello che abbiamo passato

        $comic = Comic::where('slug',$slug)->first(); 
       
        return view('comics.show', compact('comic'));
    }

    /**
     * Il click che chiama l edit passa lo slug,controlliamo a quale riga corrisponde e la ritorniamo alla view
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $comic = Comic::where('slug',$slug)->first();
        return view('comics.edit',compact('comic'));
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
        $curr_comic = $request->all();
        $curr_comic['slug'] = Str::slug($curr_comic['title'], '-')."-".$id;
        $comic = Comic::findOrFail($id);

        $comic->update($curr_comic); // Facciamo il fill di comic con i dati di curr_comic

        return redirect()->route('comics.index')->with('update',$comic->title); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('delete',$comic->title);
    }
}
