<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Partido;
use DB;

class MarcadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userId = Auth::id();

        $ligas = DB::table('Liga as liga')
        ->select(
            'liga.IdLiga',
            'liga.Nombre'
            )   
        ->join('UsuarioPorLiga as userliga','liga.IdLiga','=','userliga.IdLiga')     
        ->where('userliga.IdUsuario','=',$userId)->get();

        return view('marcador/index',["ligas"=>$ligas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $userId = Auth::id();

       $grupoAPartido1 = new Partido;
       $grupoAPartido1->IdUsuario =  $userId;
       $grupoAPartido1->IdLiga = $request->get('idliga');
       $grupoAPartido1->IdGrupo = 'A';
       $grupoAPartido1->IdEquipo = 26;
       $grupoAPartido1->IdContrincante =  1;
       $grupoAPartido1->ResultadoEquipo = $request->get('resutadogrupoAequipo11');
       $grupoAPartido1->ResultadoContrincante = $request->get('resutadogrupoAequipo12');
       $grupoAPartido1->save();

       $grupoAPartido2 = new Partido;
       $grupoAPartido2->IdUsuario =  $userId;
       $grupoAPartido2->IdLiga = $request->get('idliga');
       $grupoAPartido2->IdGrupo = 'A';
       $grupoAPartido2->IdEquipo = 13;
       $grupoAPartido2->IdContrincante =  32;
       $grupoAPartido2->ResultadoEquipo = $request->get('resutadogrupoAequipo21');
       $grupoAPartido2->ResultadoContrincante = $request->get('resutadogrupoAequipo22');
       $grupoAPartido2->save();

    $grupoAPartido3 = new Partido;
    $grupoAPartido3->IdUsuario =  $userId;
    $grupoAPartido3->IdLiga = $request->get('idliga');
    $grupoAPartido3->IdGrupo = 'A';
    $grupoAPartido3->IdEquipo = 26;
    $grupoAPartido3->IdContrincante =  1;
    $grupoAPartido3->ResultadoEquipo = $request->get('resutadogrupoAequipo11');
    $grupoAPartido3->ResultadoContrincante = $request->get('resutadogrupoAequipo12');
    $grupoAPartido3->save();


        return Redirect::to('final');   
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
