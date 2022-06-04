<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentarios;

class ComentariosController extends Controller
{
    protected $comentarios;

    public function __construct(Comentarios $comentarios)
    {
        $this->comentarios = $comentarios;
    }

    public function index()
    {
        // $comentarios = $this->comentarios->obtenercomentarioss();

        // return view('comentarioss.comentarioss', ['comentarioss' => $comentarios]);

        // dd($comentarios);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'texto' => 'required',
        ],[
            'texto.required' => 'Escribe tu comentario en el apartado de abajo',
        ]);

        $comentario = new Comentarios;
        $comentario->email_usuario=$request->input('email_usuario');
        $comentario->id_post=$request->input('id_post');
        $comentario->texto=$request->input('texto');
        $comentario->save();

        // return redirect()->back()->withSuccess('Se ha publicado tu comentario');

        return false;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');

        $comentario = Comentarios::findOrFail($id);

        $comentario->delete();

        return "Se ha eliminado el comentario";
    }

    public function getComentarios(Request $request)
    {
        // $comentarios = comentarios::get($id);

        // dd($request);

        $id = $request->input('id');

        $comentarios = $this->comentarios->obtenerComentariosIdPost($id);

        return response(json_encode($comentarios),200)->header('Content-type','text-plain');

    }

    public function getComentariosId(Request $request)
    {
        // $comentarios = comentarios::get($id);

        // dd($request);

        $id = $request->input('id');

        $comentarios = $this->comentarios->obtenerComentariosId($id);

        return response(json_encode($comentarios),200)->header('Content-type','text-plain');

    }

}
