<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/admin',function () {
  return view('admin');
});
Route::get('/admin/edit',function () {
  return view('edit');
});
Route::get('/admin/posts',function () {
  return view('posts');
});
Route::get('/admin/posts/addpost',function () {
  return view('create_post');
});
Route::get('/admin/posts/updatepost',function () {
  return view('update_post');
});
