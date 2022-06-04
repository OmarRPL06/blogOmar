<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\RespuestasController;


//Ruta a la pagina principal de los productos
Route::get('/', function () {
    return view('posts.posts');
});

// Suscribirse al blog
Route::get('/suscribirse', [UsuarioController::class, 'create']);
Route::post('/suscribirse', [UsuarioController::class, 'store'])->name('usuario.registro');


//Presentación asincrona de la categoria de los posts
Route::post('/posts/busca', [PostsController::class, 'getPost'])->name('posts.buscar');

//Ruta para ver los detalles de los productos
Route::get('/post_detalle/{id}', [PostsController::class, 'show']);

//Presentación asincrona de los comentarios
Route::post('/comentarios/busca', [ComentariosController::class, 'getComentarios'])->name('comentarios.buscar');

// mostrar respuestas
Route::post('/consultar/respuesta', [RespuestasController::class, 'getRespuestas'])->name('respuesta.buscar');

//cerrar session
Route::get('/logout', [AdministradorController::class, 'logout']);

//Presentación asincrona de los comentarios
// Route::post('/comentarios/buscaId', [ComentariosController::class, 'getComentariosId'])->name('comentarios.buscarId');


// ========APARTADO DEL ADMINISTRADOR===================

Route::group(['middleware' => 'admin'], function () {

    //Ruta para la pagina de los administradores
    Route::resource('/admin/home',AdministradorController::class);

    //autenticacion para acceder en las paginas
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');

    // Listar usuarios siendo ADMIN
    Route::get('/usuarios/admin', [UsuarioController::class, 'index']);

    // registrar usuarios siendo ADMIN
    Route::get('/registro/admin', function()
    {
        return View('admin.usuarios.registroUsuario');
    });

    //Ruta para eliminar usuario
    Route::post('/eliminar/usuario', [UsuarioController::class, 'destroy'])->name('eliminar.usuario');

    // vista para subir posts
    Route::get('/subir_post', function()
    {
        return View('admin.posts.SubirPostAdmin');
    });

    //Ruta para subir posts
    Route::post('/subir/post', [PostsController::class, 'store'])->name('post.subir');

    // ruta para ver admin comentarios posts
    Route::get('/post_detalle_admin/{id}', [PostsController::class, 'detalles']);

    //Presentación asincrona de la eliminacion de los posts
    Route::post('/posts/eliminar', [PostsController::class, 'destroy'])->name('posts.eliminar');

    //Presentación asincrona de la eliminacion de los comentarios
    Route::post('/comentarios/eliminar', [ComentariosController::class, 'destroy'])->name('comentario.eliminar');

    //Presentación asincrona de la eliminacion de las respuestas de los comentarios
    Route::post('/respuestas/eliminar', [RespuestasController::class, 'destroy'])->name('respuesta.eliminar');

    //Hacer Comentarios
    Route::post('/post/comentarios/admin', [ComentariosController::class, 'store'])->name('post.comentarios.admin');

    //responder comentarios
    Route::post('/post/respuesta/admin', [RespuestasController::class, 'store'])->name('post.respuesta.admin');

});

Route::group(['middleware' => 'lector'], function () {

    //Hacer Comentarios
    Route::post('/post/comentarios', [ComentariosController::class, 'store'])->name('post.comentarios');

    //responder comentarios
    Route::post('/post/respuesta', [RespuestasController::class, 'store'])->name('post.respuesta');

});











