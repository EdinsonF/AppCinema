<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\User;
use Session;
use Redirect;

class UsuarioController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only'=>['create', 'destroy','edit']]);

    }

    public function index()
    {
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {   
        $user = new User;
        $user->fill($request->all());
        $user->save();

        Session::flash('mensaje','Usuario Registrado Exitosamente!');
        return redirect('/usuario/list');
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

    public function showAll(Request $request){
                    //::onlyTrashed()->paginate();->ELEMENTOS ELIMINADOS LOGICAMENTE
        $usuarios=User::paginate(5);
        if($request->ajax())
        {
            return response()->json(view('usuario.UsersPaginate',['usuarios'=>$usuarios])->render());
        }
        

        return view('usuario.list',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user=User::find($id);

        $user->fill($request->all());

        $user->save();
        Session::flash('mensaje','Usuario Editado Exitosamente!');
        return redirect('/usuario/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        Session::flash('mensaje','Usuario Eliminado Exitosamente!');
        return redirect('/usuario/list');
    }
 
}
