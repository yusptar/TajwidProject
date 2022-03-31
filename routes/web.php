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
// ----------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});
// ----------------------------------------------------------------
Auth::routes();
// ----------------------------------------------------------------
// Navigation
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/qalqalah', 'QalqalahController@qalqalah');
Route::get('/mad', 'MadController@mad');
Route::get('/berita', 'BeritaController@berita');
Route::get('/quiz', 'QuizController@text');
// ----------------------------------------------------------------
// Berita 
Route::get('/article/{id}', 'ArticleController@article');
// ----------------------------------------------------------------
// Manage Data Article Packet Bundle
Route::get('/manage', 'ArticleController@index')->name('manage');
// Create Data 
Route::get('/articles/add','ArticleController@add')->name('create');
Route::post('/articles/create','ArticleController@create');
// Edit Data
Route::get('/articles/edit/{id}','ArticleController@edit');
Route::post('/articles/update/{id}','ArticleController@update');
// Delete Data
Route::get('/articles/delete/{id}','ArticleController@delete');
// ----------------------------------------------------------------
// Manage Data Users Packet Bundle
Route::get('/manageuser', 'UserController@index')->name('manageuser');
// Create User Data
Route::get('/manageuser/add','UserController@add')->name('createuser');
Route::post('/manageuser/create','UserController@create');
// Edit User Data
Route::get('/manageuser/edit/{id}','UserController@edit');
Route::post('/manageuser/update/{id}','UserController@update');
// Delete Dat
Route::get('/manageuser/delete/{id}','UserController@delete');
// ----------------------------------------------------------------
// Manage MimSukun, NunSukun, Qalqalah, & Mad Packet Bundle
Route::get('/managenun', 'HomeController@indexnun')->name('managenun');
Route::get('/managemim', 'HomeController@indexmim')->name('managemim');
Route::get('/manageqal', 'QalqalahController@index')->name('manageqal');
Route::get('/managemad', 'MadController@index')->name('managemad');
// Create 
Route::get('/managenun/addnun','HomeController@addnun')->name('createnun');
Route::post('/managenun/createnun','HomeController@createnun');

Route::get('/managemim/addmim','HomeController@addmim')->name('createmim');
Route::post('/managemim/createmim','HomeController@createmim');

Route::get('/manageqal/add','QalqalahController@add')->name('createqal');
Route::post('/manageqal/create','QalqalahController@createqal');

Route::get('/managemad/add','MadController@add')->name('createmad');
Route::post('/managemad/create','MadController@createmad');
// Edit 
Route::get('/managenun/editnun/{id}','HomeController@editnun');
Route::post('/managenun/updatenun/{id}','HomeController@updatenun');

Route::get('/managemim/editmim/{id}','HomeController@editmim');
Route::post('/managemim/updatemim/{id}','HomeController@updatemim');

Route::get('/manageqal/edit/{id}','QalqalahController@edit');
Route::post('/manageqal/update/{id}','QalqalahController@update');

Route::get('/managemad/edit/{id}','MadController@edit');
Route::post('/managemad/update/{id}','MadController@update');
// Delete 
Route::get('/managenun/deletenun/{id}','HomeController@deletenun');
Route::get('/managemim/deletemim/{id}','HomeController@deletemim');
Route::get('/manageqal/delete/{id}','QalqalahController@delete');
Route::get('/managemad/delete/{id}','MadController@delete');
// ----------------------------------------------------------------

