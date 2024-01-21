<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
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

Route::resource('titles', C_titles::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function(){
//   return view('myroute');
      $data = ['val_a' => 'Hello World4'];
     $data['val_b'] = "Laravel";
     return view('myfolder.mypage',$data);
});


Route::get('/multiply', function () {
    return view('multiply');
});

Route::get('/my-controller',[MyController::class,'index']);

Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');

Route :: resource('/my-controller4',MyController::class);


Route::post('/my-route2',function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute',$data);
});

