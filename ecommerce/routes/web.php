<?php

use App\Http\Controllers\UserController;
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

// Route::get('/request', function(\Illuminate\Http\Request $request) {

//     $r = $request->whenHas('keyword', function($input) {
//         dd('x', $input);
//     });

//     if ($r) {
//         dd('Faça alguma coisa');
//     }

//     dd($r);
//     return 'X';
// });

// Calling the controller, and passing a method as the second parameter
Route::get('user/{user}', [UserController::class, 'show']);

// Route::prefix('usuarios')->group(function() {
//     Route::get('', function() {
//         return 'usuario';
//     })->name('usuarios');
//     Route::get('/{id}', function() {
//         return 'Mostrar detalhes';
//     })->name('usuarios.show');
//     Route::get('/{id}/tags', function() {
//         return 'tags do usuario';
//     })->name('usuarios.tags');
// });


// Route::get('/a-empresa/{string?}', function ($string = null) {
//     return $string;
// })->name('a-empresa');


// Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
//     return $paramA . ' - ' . $paramB;
// });

// Route::get('/', function () {
//     return view('welcome');
// });
