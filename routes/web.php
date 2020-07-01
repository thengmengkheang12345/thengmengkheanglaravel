<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Model\Post;

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
//eloquent

Route::get('eloquent',function(){
    $post = new Post;
    $post ->title='this is the first of eloquent';
    $post->content='this is content';
    $post->Save();

});


Route::get('insert', function(){
    DB::insert('insert into users (name, email, password) values (?,?,?)', ['RKO','rko@gmail.com',bcrypt('12345678')]);
    echo 'insert done';
});

Route::get('update', function(){
    DB::update('update users set email = "mengkheangtheng123@gmail.com" where id = ?',[3]);
    echo 'update done';
});

Route:: get('delete', function(){
    $u= DB:: delete('delete from users where id = ? ', ['5']);
    return "delete done" .$u;
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('selectdb', 'HomeController@selectDB');
