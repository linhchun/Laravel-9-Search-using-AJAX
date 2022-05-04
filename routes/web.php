<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController; 
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


Route::get('/', 'MemberController@index');

Route::get('/search', 'MemberController@search');
Route::get('/member/{id}', 'MemberController@viewmember');
Route::post('/find', 'MemberController@find');