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

Route::get('/user', function () {
   return "  <ul>
   <li>mostafa</li>
   <li>nnn</li>
   <li>mmmm</li>
   <li></li>
   <li></li>
   </ul>"
   ;

});
Route::get("/student", function () {
    $arr = ['Nehal', 'youmna', 'gogo'];
    
    return view("test", compact('arr'));
});

    
//اسم الكلاس::اسم الفانكشن اليعاوز انادي عليها
