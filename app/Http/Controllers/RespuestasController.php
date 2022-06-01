<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuestas;

class RespuestasController extends Controller
{
    protected $respuestas;

    public function __construct(Respuestas $respuestas)
    {
        $this->respuestas = $respuestas;
    }

    public function index()
    {
        // $respuestas = $this->respuestas->obtenerrespuestass();

        // return view('respuestass.respuestass', ['respuestass' => $respuestas]);

        // dd($respuestas);
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

        $respuestas = new Respuestas;
        $respuestas->email_usuario=$request->input('email_usuario');
        $respuestas->id_comentario=$request->input('id_comentario');
        $respuestas->texto=$request->input('texto');
        $respuestas->save();

        return redirect()->back()->withSuccess('Se ha respondido el comentario');
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

        $respuestas = Respuestas::findOrFail($id);

        $respuestas->delete();

        return "Se ha eliminado la Respuesta del Comentario";
    }

    public function getRespuestas(Request $request)
    {
        // $respuestas = respuestas::get($id);

        // dd($request);

        $id = $request->input('id');

        $respuestas = $this->respuestas->obtenerRespuestasIdComentario($id);

        return response(json_encode($respuestas),200)->header('Content-type','text-plain');

    }

}
