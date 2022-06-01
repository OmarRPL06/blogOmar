<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    protected $post;

    public function __construct(Posts $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => ['required','email', 'max:255'],
            'titulo' => ['required', 'max:255'],
            'categoria' => ['required','string'],
            'tags' => 'required',
            'img' => 'required|image',
            'contenido' => 'required',
        ],[
            'titulo.required' => 'Debe de ingresar el titulo del produto',
            'categoria.required' => 'Debe de Seleccionar una categoria',
            'tags.required' => 'Ingrese al Menos un Tag',
            'img.required' => 'Debe de subir la imagen del producto en el formato correcto',
            'img.image' => 'No se permiten archivos de otro formato',
            'contenido.required' => 'Debes agregar descripción al producto',
        ]);

        $image = $request->file('img');
        $image->move('uploads', $image->getClientOriginalName());

        $post = new Posts;
        $post->email_redactor=$request->input('email');
        $post->titulo=$request->input('titulo');
        $post->categoria=$request->input('categoria');
        $post->tags=$request->input('tags');
        $post->imagen=$image->getClientOriginalName();
        $post->contenido=$request->input('contenido');
        $post->save();

        return redirect()->back()->withSuccess('Se publicó en el apartado de los posts');

    }

    public function show($id)
    {

        $post = $this->post->obtenerPostId($id);

        return view('posts.detalle', ['post' => $post]);

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

        $post = Posts::findOrFail($id);

        $post->delete();

        return "Se ha eliminado la publicación";
    }

    public function getPost(Request $request)
    {
        // $post = Post::get($id);

        $categoria = $request->input('categoria');

        $post_categ = $this->post->obtenerCategoriaPost($categoria);

        return response(json_encode($post_categ),200)->header('Content-type','text-plain');

    }

    public function detalles($id)
    {
        $post = $this->post->obtenerPostId($id);

        return view('admin.posts.detalle', ['post' => $post]);

    }

}
