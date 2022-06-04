<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postsMochilas;

class PostsControllerMochilas extends Controller
{
    protected $post;

    public function __construct(postsMochilas $post)
    {
        $this->post = $post;
    }

    public function index(Request $request, $tipo)
    {
        $post = $this->post->obtenerMochila($tipo);

        return view('lectores.mochilas.postsMochilas', ['mochilas' => $post]);

        // dd($post);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $post = $this->post->obtenerPost($id);

        return view('lectores.mochilas.comentariosMochilas', ['mochilas' => $post]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function getPost(Request $request)
    {
        //Post $post = Post::get($id);return post;

        $id = $request->input('id');

        if($id == 1){

            return "Este es el Primer Comentario";

        }

        return "No hay comentarios, Sé en primer en comentar";
    }

}
