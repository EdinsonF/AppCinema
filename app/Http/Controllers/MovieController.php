<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Genre;
use Cinema\Movie;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class MovieController extends Controller
{
   
    

    public function index()
    {
        $movies=Movie::CargarMovies();

        return view('movie.listMovies',['movies'=>$movies]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $genres=Genre::lists('genre','id');
        return view('movie.createMovie', ['genres'=>$genres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar la Reescritura en el modelo con un mutador

        Movie::create($request->all());
        Session::flash('mensaje','Pelicula Registrada Exitosamente!');
        return redirect('/movie/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie=Movie::find($id);
        $genres=Genre::lists('genre','id');
        return view('movie.editarMovie',['movie'=>$movie, 'genres'=>$genres]);
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
        $movie=Movie::find($id);
        $movie->fill($request->all());
        $movie->save();
        Session::flash('mensaje','Pelicula Modificada Exitosamente!');
        return redirect('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie=Movie::find($id);
        $movie->delete();
        \Storage::delete($movie->path);
        Session::flash('mensaje','Pelicula Eliminada Exitosamente!');
        return redirect('/movie');
    }
}
