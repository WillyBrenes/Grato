<?php

namespace App\Http\Controllers;

use App\User;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class UsuarioController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();
        date_default_timezone_set('America/Costa_Rica');
        $date = Carbon::now()->locale('es_ES');
        return view('usuarios\Asistentes', ['users' => $users]);
    }

    public function principal()
    {

        date_default_timezone_set('America/Costa_Rica');
        $date = Carbon::now()->locale('es_ES');
        return view('Principal');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\t_usuario  $t_usuario
     * @return \Illuminate\Http\Response
     */
    public function show(t_usuario $t_usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\t_usuario  $t_usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(t_usuario $t_usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\t_usuario  $t_usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, t_usuario $t_usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\t_usuario  $t_usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(t_usuario $t_usuario)
    {
        //
    }
}
