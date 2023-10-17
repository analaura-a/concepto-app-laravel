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

Route::post('/admin/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcess'])->name('auth.login.process');

Route::post('/admin/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcess'])->name('auth.logout.process');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('auth');

Route::get('/admin/blog', [\App\Http\Controllers\BlogController::class, 'admin'])->name('admin.blog')->middleware('auth');

Route::get('/admin/blog/nueva-entrada', [\App\Http\Controllers\BlogController::class, 'createForm'])->name('admin.blog.create.form')->middleware('auth');

Route::post('/admin/blog/nueva-entrada', [\App\Http\Controllers\BlogController::class, 'createProcess'])->name('admin.blog.create.process')->middleware('auth');

Route::get('/admin/blog/{id}/editar-entrada', [\App\Http\Controllers\BlogController::class, 'editForm'])->name('admin.blog.edit.form')->middleware('auth');

Route::post('/admin/blog/{id}/editar-entrada', [\App\Http\Controllers\BlogController::class, 'editProcess'])->name('admin.blog.edit.process')->middleware('auth');

Route::get('/admin/blog/{id}/eliminar-entrada', [\App\Http\Controllers\BlogController::class, 'deleteForm'])->name('admin.blog.delete.form')->middleware('auth');

Route::post('/admin/blog/{id}/eliminar-entrada', [\App\Http\Controllers\BlogController::class, 'deleteProcess'])->name('admin.blog.delete.process')->middleware('auth');