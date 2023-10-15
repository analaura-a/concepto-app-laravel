<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


/*----------------------------
 Sitio web
----------------------------*/

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index']);

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'list']);

Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'post'])
    ->whereNumber('id');



/*----------------------------
Panel de administración
----------------------------*/
// Route::get('/admin/iniciar-sesion', );

// Route::get('/admin/dashboard', );

// Route::get('/admin/blog', );

// Route::get('/admin/blog/nueva-entrada', );

// Route::get('/admin/blog/editar-entrada', );

// Route::get('/admin/blog/eliminar-entrada', );


// Route::get('/admin/author', );