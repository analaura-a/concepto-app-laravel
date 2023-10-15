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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('web.home');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'list'])->name('web.blog');

Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'post'])
    ->whereNumber('id')
    ->name('web.blog.post');



/*----------------------------
Panel de administración
----------------------------*/
Route::get('/admin/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('auth.login.form');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');

Route::get('/admin/blog', [\App\Http\Controllers\BlogController::class, 'admin'])->name('admin.blog');

// Route::get('/admin/blog/nueva-entrada', );

// Route::get('/admin/blog/editar-entrada', );

// Route::get('/admin/blog/eliminar-entrada', );


// Route::get('/admin/author', );