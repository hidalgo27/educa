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

//Route::get('/', function () {
//    return view('welcome');
//});

//page
Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);
Route::get('/cursos', [
    'uses' => 'Page\HomepageController@cursos',
    'as' => 'cursos_path',
]);
Route::get('/curso/algebra', [
    'uses' => 'Page\HomepageController@clases',
    'as' => 'clases_path',
]);

Route::get('/curso/algebra/video', [
    'uses' => 'Page\HomepageController@video',
    'as' => 'video_path',
]);



//Auth
Auth::routes();
Route::get('/home', 'Student\HomepageController@index')->name('home');

Route::get('/student/algebra/video', [
    'uses' => 'Student\HomepageController@video',
    'as' => 'video_student_path',
]);

Route::get('/student/algebra/video/list', [
    'uses' => 'Student\HomepageController@videolist',
    'as' => 'video_list_student_path',
]);
