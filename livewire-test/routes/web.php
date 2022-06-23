<?php

use App\Http\Livewire\ParamComponent;
use App\Http\Livewire\Product;
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
    return view('welcome');
});

// Route::get('livewire',function(){
//     return view('layouts.app');
// });

Route::get('livewire',Product::class);
Route::get('livewire-param/{param?}',ParamComponent::class);
