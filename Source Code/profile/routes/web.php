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

Route::get('/', 'PostController@view')->name('user_view');


Route::get('/admin', 'AdminController@index')->name('admin_info');
  // $showProjects=true;

  // return view('admin',compact('showProjects'));
Route::get('/admin/edit/{admin}', 'AdminController@edit')->name('admin_edit');
//     $showProjects=true;
//   return view('edit',compact('showProjects'));
// });
Route::post('/admin/edit/{admin}', 'AdminController@update')->name('save');

Route::get('/admin/posts','PostController@index')->name('posts');

Route::get('/admin/posts/addpost', 'PostController@create')->name('add_post');

  // $showProjects=true;

  // return view('create_post',compact('showProjects'));

// });
Route::post('/admin/posts/addpost', 'PostController@store');

Route::get('/admin/posts/updatepost/{post}', 'PostController@edit')->name('edit');

//   $showProjects=true;
//
//   return view('update_post',compact('showProjects'));
//
// });
Route::post('/admin/posts/updatepost/{post}', 'PostController@update');

Route::delete('/admin/posts/delete/{post}', 'PostController@delete')->name('delete');

Route::get('/login', 'SessionsController@create');
