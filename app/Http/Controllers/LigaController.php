<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\LigaFormRequest;
use App\Liga;
use App\UsuarioPorLiga;
use DB;
use Response;
use Illuminate\Support\Collection; 

class LigaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('liga/index');
    }
    public function create()
    { 
        return view('liga/Crear');
    }
    public function CrearApuesta()
    {
        return view('liga/CrearApuesta');
    }

    public function unirse()
    { 
        return view('liga/Unirse');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $liga = new Liga;
        $usuario = new UsuarioPorLiga;

        $liga->Nombre = $request->get('nombre');
        $liga->Sede = $request->get('sede');
        $liga->Year = $request->get('anio');
        $liga->EsApuesta = 0;
        $liga->save();

        
        $usuario->IdLiga =  $liga->IdLiga;
        $usuario->IdUsuario = Auth::id();
        $usuario->IsAdmin = 1;
        $usuario->save();

    
       
        return Redirect::to('marcador');
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
