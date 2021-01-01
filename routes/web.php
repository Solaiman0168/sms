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

Route::get('/', function () {
//    return view('master');
    return redirect('login');
});


Route::get('/index', 'StudentController@index')->name('index');
Route::get('/create', 'StudentController@create')->name('create');
//Route::get('/create', 'StudentController@create');
Route::get('/edit/{id}', 'StudentController@edit')->name('edit');
Route::get('/show/{id}', 'StudentController@show')->name('show');

Route::get('/subject-index', 'SubjectController@index')->name('subject-index');
Route::get('/create-subject', 'SubjectController@create')->name('create-subject');

Route::get('/department-index', 'DepartmentController@index')->name('department-index');
Route::get('/create-department', 'DepartmentController@create')->name('create-department');

Route::get('/post/index', 'PostController@index')->name('post.index');
Route::get('/create/post', 'PostController@create')->name('create.post');
Route::get('/show/department/post/{id}', 'PostController@show')->name('post.show');


Route::post('/store', 'StudentController@store')->name('store');
//Route::post('/store', 'StudentController@store');
Route::post('/update/{id}', 'StudentController@update')->name('update');
Route::post('/student/delete/{id}', 'StudentController@delete')->name('student-delete');

Route::post('/view-subject', 'SubjectController@store')->name('view-subject');
Route::post('/subject/delete/{id}', 'SubjectController@delete')->name('subject-delete');

Route::post('/view-department', 'DepartmentController@store')->name('view-department');
Route::post('/department/delete/{id}', 'DepartmentController@delete')->name('department-delete');

Route::post('/view/post', 'PostController@store')->name('view.post');
//Route::post('/delete/{id}', 'DepartmentController@delete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
