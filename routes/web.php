<?php

use App\Videojuego;
use App\Plataforma;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function() {
    $user = Auth::user();
    if ($user->EsAdmin()) {
        return view('welcomecrud');
    } else {
        return view('welcome');
    }
});



Route::get('/', "PaginasController@inicio");
Route::get('/InicioCRUD', "AdministradorController@index");

Route::resource('/plataformas', "PlataformaController");
Route::resource('/videojuegos', "VideojuegosController");
Route::resource('/accesorios', "AccesoriosController");
Route::resource('/reviews', "ReviewController");

Route::get('/verplataformas', "PlataformaController@index2");
Route::get('/vervideojuegos', "VideojuegosController@index2");
Route::get('/veraccesorios', "AccesoriosController@index2");

Route::get('/reviews', "ReviewController@reviews")->name('review');
Route::get('/reviews/{id}', 'ReviewController@show')->name('review');

Route::get('/verreviews', "ReviewController@reviews2")->name('verreview');
Route::get('/verreviews/{id}', 'ReviewController@show2')->name('verreview');

Route::get('/contactus', "PaginasController@contactus");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get("/plataformas/{id}/videojuegos", function ($id) {
    $videojuegos = Videojuego::find($id);
    foreach ($videojuegos->plataforma as $plataformas) {
        return $plataformas->Nombre_Plataforma;
    }
});

Route::get("/videojuegos/{id}/plataformas", function ($id) {
    $plataforma = Plataforma::find($id);
    return view('lista', compact('plataforma'));
});


Route::post('insertar_videojuego/{id}', 'PlataformaController@anadirplataformavideojuego')->name('plataformajuego');



route::get('/plataformavideojuego', function() {
    $plataforma = App\Videojuego::findOrFail(2);

    $plataforma->videojuegos()->attach(1);
});

Route::name('imprimir')->get('/imprimir', 'PDFController@imprimir');


/* $user = Auth::user();
    if ($user->esAdmin()) {
        echo "Eres usuario administrador";
    } else {
        echo "Eres usuario registrado";
    }*/ 

/*
if (Auth::check()) {
    return view('inicioCRUD');
} else {
    return view('welcome');
} */

/*
$user=Auth::user();
if(!$user->EsAdmin()){
	return redirect('/');
}
*/
