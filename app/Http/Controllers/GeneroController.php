<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Requests\GeneroRequest;
use Cinema\Genre;

class GeneroController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
        

    }


    public function index()
    {
      //return view('genero.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneroRequest $request)
    {
        if($request->ajax())
        {
            Genre::create($request->all());
            return response()->json([
                "mensaje"=>"Creado"
                ]);
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    public function showAll(Request $request)
    {   
        //return view('genero.list');

        $genero=Genre::paginate(5);

        if($request->ajax()){

            return response()->json(array ('vista'=>view('genero.listGeneroPaginate',['genero' => $genero])->render(), 'genero' =>$genero));

        }
        
        return view('genero.list',['genero' => $genero]);

        
    }


    // public function showAllPaginate(Request $request)
    // {   
        

    //     $genero=Genre::paginate(5);

    //     if($request->ajax()){

    //         return response()->json(array ('vista'=>view('genero.listGeneroPaginate',['genero' => $genero])->render(), 'genero' =>$genero));

    //     }

    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genero=Genre::find($id);
        return response()->json(
            $genero->toArray()
            );
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GeneroRequest $request, $id)
    {
         
        $genero=Genre::find($id);
        $genero->fill($request->all());
        $genero->save();

        return response()->json([
            "mensaje"=>"listo"
            ]);

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Genre::destroy($id);
        
        return response()->json([
            "mensaje"=>"listo"
            ]);
    }
}
