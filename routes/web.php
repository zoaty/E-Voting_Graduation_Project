<?php

use Illuminate\Support\Facades\Route;


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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('show.about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('show.contact');

Route::middleware('auth')->group(function(){
  Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');

  Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
  Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
  Route::post('/admin/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

  Route::get('/admin/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
  Route::delete('/admin/posts/{post}/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
  Route::patch('/admin/posts/{post}/update', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

  Route::get('/admin/users/{user}/profile', [App\Http\Controllers\UserController::class, 'show'])->name('user.profile.show');
  Route::put('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.profile.update');

  Route::get('/create-topic', [App\Http\Controllers\VoteController::class, 'createTopic'])->name('create.topic');
  Route::get('/topics', [App\Http\Controllers\VoteController::class, 'showTopics'])->name('show.topics');

  Route::get('/results', [App\Http\Controllers\VoteController::class, 'index'])->name('results.index');
  Route::get('/results-redirected', [App\Http\Controllers\VoteController::class, 'redirect'])->name('vote');

});

Route::middleware('role:Admin','auth')->group(function(){
  Route::get('admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
  Route::put('admin/users/{user}/attach', [App\Http\Controllers\UserController::class, 'attach'])->name('user.role.attach');
  Route::put('admin/users/{user}/detach', [App\Http\Controllers\UserController::class, 'detach'])->name('user.role.detach');

  Route::get('admin/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
  Route::post('admin/roles', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
  Route::delete('admin/roles/{role}/destroy', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');
  Route::get('admin/roles/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
  Route::put('admin/roles/{role}/update', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
  Route::put('admin/roles/{role}/attach', [App\Http\Controllers\RoleController::class, 'attach_permission'])->name('role.permission.attach');
  Route::put('admin/roles/{role}/detach', [App\Http\Controllers\RoleController::class, 'detach_permission'])->name('role.permission.detach');

  Route::get('admin/permissions', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
  Route::post('admin/permissions', [App\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');
  Route::delete('admin/permissions/{permission}/destroy', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.destroy');
  Route::get('admin/permissions/{permission}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');
  Route::put('admin/permissions/{permission}/update', [App\Http\Controllers\PermissionController::class, 'update'])->name('permissions.update');
});

Route::middleware('voteStatus:Voted','auth')->group(function(){
  Route::get('/vote-page', [App\Http\Controllers\VoteController::class, 'voteMain'])->name('vote.index');
  Route::post('/vote', [App\Http\Controllers\VoteController::class, 'store'])->name('vote.store');
});