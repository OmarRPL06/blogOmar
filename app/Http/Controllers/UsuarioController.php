<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuario::orderBy('id')->get();

        return view('admin.usuarios.Usuarios', ['usuarios' => $usuarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("lector.registroUsuario");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','string','min:8'],
            'nombre' => ['required'],
            'tipo' => ['required'],
        ],[
            'email.required' => 'Debes ingresar tu direccion de correo electronico',
            'email.email' => 'La direccion de correo electronico no es valido',
            'email.unique' => 'La direccion de correo ya existe con otro usuario',
            'password.required'=>'Debes ingresar la contraseña de la cuenta',
            'password.min' => 'Debes ingresar una contraseña minino de 8 caracteres',
            'nombre.required' => 'De de Ingresar tu Nombre Completo',
            'tipo.required' => 'Debes seleccionar el tipo de usuario'
        ]);
        $usuario = new usuario;
        $usuario->name=$request->input('nombre');
        $usuario->email=$request->input('email');
        $usuario->password=Hash::make($request->input('password'));
        $usuario->tipo=$request->input('tipo');
        $usuario->save();

        if($request->input('root')){

            return redirect()->back()->withSuccess('Se registró un nuevo usuario');

        }else{

            return redirect("/login");

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
    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $post = usuario::findOrFail($id);

        $post->delete();

        return "Se ha eliminado el usuario";
    }
}
