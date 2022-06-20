<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Aula;
use App\Http\Controllers\AulaController;
use App\Http\Resources\AulaResource;

use App\Models\Incidencias;
use App\Http\Controllers\IncidenciasController;
use App\Http\Resources\IncidenciasResource;

use App\Models\Usuarios;
use App\Http\Controllers\UsuariosController;
use App\Http\Resources\UsuariosResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/aula/{id}',function ($id){
    return new AulaResource(Aula::findOrFail($id));
});

Route::get('/aula',function (){
    return  AulaResource::collection(Aula::all());
});

Route::put('/aula/{id}', [AulaController::class, 'update']);    

Route::delete('/aula/{id}', [AulaController::class, 'destroy']);

Route::post('/aula', [AulaController::class, 'store']);

//INCIDENCIAS RUTAS

Route::get('/incidencias/{id}',function ($id){
    return new IncidenciasResource(Incidencias::findOrFail($id));
});


//Route::get('/inc/{correo}',function ($correo){
//    return new IncidenciasResource(Route::where('correo', $correo));
//});



Route::get('/incidencias',function (){
    return  IncidenciasResource::collection(Incidencias::all());
});

Route::put('/incidencias/{id}', [IncidenciasController::class, 'update']);

Route::delete('/incidencias/{id}', [IncidenciasController::class, 'destroy']);

Route::post('/incidencias', [IncidenciasController::class, 'store']);

Route::get('/usuarios/{id}',function ($id){
    return new UsuariosResource(Usuarios::findOrFail($id));
});

Route::get('/usuarios',function (){
    return  UsuariosResource::collection(Usuarios::all());
});

Route::put('/usuarios/{id}', [UsuariosController::class, 'update']);

Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy']);

Route::post('/usuarios', [UsuariosController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
