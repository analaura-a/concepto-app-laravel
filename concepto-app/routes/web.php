<?php

use Illuminate\Support\Facades\Route;
// use  App\Http\Controllers\Middleware\CheckVerificationUserAdmin;

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

Route::get('/cursos', [\App\Http\Controllers\CourseController::class, 'index'])->name('web.courses');

Route::get('/cursos/{id}', [\App\Http\Controllers\CourseController::class, 'courseDetail'])
    ->whereNumber('id')
    ->name('web.courses.detail');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'list'])->name('web.blog');

Route::get('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'post'])
    ->whereNumber('id')
    ->name('web.blog.post');

Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginFormUser'])->name('auth.web.login.form');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcessUser'])->name('auth.web.login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcessUser'])->name('auth.web.logout.process');

Route::get('/registrar', [\App\Http\Controllers\AuthController::class, 'createFormRegister'])->name('auth.web.register');

Route::post('/registrar', [\App\Http\Controllers\AuthController::class, 'createProcessRegister'])->name('auth.web.register');

Route::middleware('auth')
    ->group(function () {
        Route::get('/carrito', [\App\Http\Controllers\CartController::class, 'showCart'])
            ->name('web.cart');
    });


/*----------------------------
Panel de administración
----------------------------*/

Route::get('/admin/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginFormAdmin'])->name('auth.admin.login.form');

Route::post('/admin/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'loginProcessAdmin'])->name('auth.admin.login.process');

Route::post('/admin/cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logoutProcessAdmin'])->name('auth.admin.logout.process');

Route::middleware(['auth', 'userAdmin:Admin'])
    ->group(function () {
        Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');

        Route::get('/admin/blog', [\App\Http\Controllers\BlogController::class, 'admin'])->name('admin.blog');

        Route::get('/admin/usuarios/{id}', [\App\Http\Controllers\AuthController::class, 'viewDetailUser'])->name('admin.user');

        Route::get('/admin/usuarios', [\App\Http\Controllers\AuthController::class, 'userList'])->name('admin.user');

        Route::get('/admin/blog/nueva-entrada', [\App\Http\Controllers\BlogController::class, 'createForm'])->name('admin.blog.create.form');

        Route::post('/admin/blog/nueva-entrada', [\App\Http\Controllers\BlogController::class, 'createProcess'])->name('admin.blog.create.process');

        Route::get('/admin/blog/{id}/editar-entrada', [\App\Http\Controllers\BlogController::class, 'editForm'])->name('admin.blog.edit.form');

        Route::post('/admin/blog/{id}/editar-entrada', [\App\Http\Controllers\BlogController::class, 'editProcess'])->name('admin.blog.edit.process');

        Route::get('/admin/blog/{id}/eliminar-entrada', [\App\Http\Controllers\BlogController::class, 'deleteForm'])->name('admin.blog.delete.form');

        Route::post('/admin/blog/{id}/eliminar-entrada', [\App\Http\Controllers\BlogController::class, 'deleteProcess'])->name('admin.blog.delete.process');
    });
