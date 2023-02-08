<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\MyFirstController;

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

Route::get('/post/{category}/{slug?}', function ($category, $slug = null) {
    $miCategoria = $this->recuperarMiCategoria($category);
    if ($slug == null)
        $post = $this->recuperarMiUltimoPost();
    else
        $post = $this->recuperarMiPostMedianteSlug($slug);
    return $post;
});

Route::match(['GET', 'POST'],'/{slug?}/{subslug?}/{subsubslug?}',
    function ($slug = 'laravel-9', $subsubslug = null, $subslug = null) {
        $category = $this->recuperarMiPostMedianteSlug($slug);
        return $category;
    });


/* Creating a route that will return the home view. */
Route::view('/', 'home');
Route::get('/contacto', [MyFirstController::class, 'contactPage']);
Route::post('/contacto', [MyFirstController::class, 'processContact']);
Route::put('/contacto', [MyFirstController::class, 'processContactPut']);
//Route::patch('/contacto',[MyFirstController::class,'processContact']);
//Route::delete('/contacto',[MyFirstController::class,'processContact']);
//Route::head('/contacto',[MyFirstController::class,'processContact']);
//Route::options('/contacto',[MyFirstController::class,'processContact']);

//Route::match(['GET','POST'],'uri',[MyFirstController::class,'matchedFunction']);
//Route::any('/example',[MyFirstController::class,'index']);



/* Creating a route that will call the index method of the MyFirstController class. */
Route::get('/example', [MyFirstController::class, 'index']);
