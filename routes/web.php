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
Route::get('/asignaturas/{universidad}/{modalidad}/{grupo}', [
    'uses' => 'Page\HomepageController@cursos',
    'as' => 'cursos_path',
]);
Route::get('/asignaturas/{universidad}/{modalidad}/{grupo}/{curso}', [
    'uses' => 'Page\HomepageController@clases',
    'as' => 'clases_path',
]);

Route::get('/curso/algebra/video', [
    'uses' => 'Page\HomepageController@video',
    'as' => 'video_path',
]);

Route::get('/clases-vivo/docente', [
    'uses' => 'Page\HomepageController@docente',
    'as' => 'docente_student_path',
]);

Route::get('/inscripcion', [
    'uses' => 'Page\HomepageController@inscripcion',
    'as' => 'inscripcion_path',
]);

//Auth
Auth::routes();
Route::get('/student/home', 'Student\HomepageController@index')->name('home');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/student/{idcurso}/video/{idvideo}', [
    'uses' => 'Student\HomepageController@video',
    'as' => 'video_student_path',
]);
Route::get('students/getCursosAlumnoVideo/{idcurso}/{idvideo}', [
    'uses' => 'Student\HomepageController@getCursosAlumnoVideo',
    'as' => 'getCursosAlumnoVideo_path',
]);

Route::get('/student/curso/video-list/{idcurso}', [
    'uses' => 'Student\HomepageController@videolist',
    'as' => 'video_list_student_path',
]);


Route::get('/student/profile', [
    'uses' => 'Student\HomepageController@profile',
    'as' => 'profile_student_path',
]);


Route::get('/student/suscripcion', [
    'uses' => 'Student\HomepageController@suscripcion',
    'as' => 'suscripcion_student_path',
]);

Route::get('/clases-vivo/temario', [
    'uses' => 'Student\HomepageController@temario',
    'as' => 'temario_student_path',
]);

Route::get('/clases-vivo/temario/curso', [
    'uses' => 'Student\HomepageController@temario_curso',
    'as' => 'temario_curso_student_path',
]);


Route::get('getmatricula', [
    'uses' => 'Student\HomepageController@getmatricula',
    'as' => 'getmatricula_path',
]);

Route::get('getCursos', [
    'uses' => 'Student\HomepageController@getCursos',
    'as' => 'getCursos_path',
]);

Route::get('getUniversidades', [
    'uses' => 'Student\HomepageController@getUniversidades',
    'as' => 'getUniversidades_path',
]);
Route::get('getModalidad/{id}', [
    'uses' => 'Student\HomepageController@getModalidad',
    'as' => 'getModalidad_path',
]);
Route::get('getGrupo/{id}', [
    'uses' => 'Student\HomepageController@getGrupo',
    'as' => 'getGrupo_path',
]);
Route::get('getCarreras/{id}', [
    'uses' => 'Student\HomepageController@getCarreras',
    'as' => 'getCarreras_path',
]);

Route::post('students/matricular', [
    'uses' => 'Student\HomepageController@matricular',
    'as' => 'matricular_path',
]);

Route::get('students/getCursosAlumno/{id}', [
    'uses' => 'Student\HomepageController@getCursosAlumno',
    'as' => 'getCursosAlumno_path',
]);


