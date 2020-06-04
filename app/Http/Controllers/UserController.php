<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::paginate(7);
        return view('adm.usuarios.index', compact('usuarios'));
    }

    public function showCreate(){
        return view('adm.usuarios.create');
    }

    public function store(Request $request)
    {
        $user = new User ();
        $user->name     = $request->name;
        $user->username = $request->username;
        $user->email    = $request->email;
        $user->isAdmin  = $request->isAdmin;
        $user->password = Hash::make($request->password);

        if($user->save())
            return redirect()->route('usuario')->with('alert', "Usuario registrado exitósamente" );
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar almacenar el registro" );
    }

    public function showEdit($id){
        $usuario         = User::find($id);
        return view('adm.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->isAdmin = $request->isAdmin;
        if ($request->password){
            $user->password = Hash::make($request->password);
        }else{
            $user->password= $user->password;
        }

        if($user->save()){
            return redirect()->route('usuario')->with('alert', "Usuario actualizado exitósamente" );
        }
            
        else
            return redirect()->back()->with('errors', "Ocurrió un error al intentar actualizar el registro" );
    }

    public function eliminar($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('usuario')->with('alert', "Usuario eliminado exitósamente" );
    }
}
