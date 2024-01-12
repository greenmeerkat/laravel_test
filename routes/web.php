<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
    //return phpinfo();
	// $data = [
    //     'name' => 'trest'
    //     ,'email' => 'tttttt@ttt@ttt'
    //     ,'password' => 'password'
    // ];
    // $res = User::create($data);
    $res = User::all();
    dd($res);
});
