<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perfil;
use App\Models\Rol;
use App\Models\Usuario;
use App\Models\UsuarioAdministrador;
use Illuminate\Http\Request;

class GestionAdminsController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }
    public function index(){
        $usuarios = UsuarioAdministrador::all();

        return view('admins.index')->with('usuarios', $usuarios);
    }

    public function show($id){
        $usuario = UsuarioAdministrador::find($id);
        return view('admins.show')->with('usuario', $usuario);
    }

    public function create(){
        return view('admins.create');
    }

    public function edit($id){
        $usuario = UsuarioAdministrador::find($id);
        return view('admins.edit')->with('usuario', $usuario);
    }

    public function update($id,Request $request){
        $user = UsuarioAdministrador::find($id);
        $user->fill($request->except('password'));
        if(null !==$request->get('password')){
            $user->password = \Hash::make($request->get('password'));
        }
        $user->save();
        return redirect(route('gestion-admins.index'));
    }

    public function store(Request $request){
        //dd($request->all());
        $user = new UsuarioAdministrador();
        $user->fill($request->all());
        $user->password = \Hash::make($request->get('password'));
        $user->agente_id = 1;
        $user->save();
        return redirect(route('gestion-admins.index'));
    }
}
