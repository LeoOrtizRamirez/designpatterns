<?php

use App\Http\Controllers\AbstractFactoryController;
use App\Http\Controllers\BuilderController;
use App\Http\Controllers\DecoratorController;
use App\Http\Controllers\FacadeController;
use App\Http\Controllers\FactoryMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/builder-product', [BuilderController::class, 'createProduct'])->name('builder.product');
Route::get('/builder-user', [BuilderController::class, 'createUser'])->name('builder.user');
Route::get('/builder-car', [BuilderController::class, 'createCar'])->name('builder.car');

Route::get('/singleton-conection', [SingletonController::class, 'getConnection'])->name('singleton.conection');
Route::get('/singleton-config', [SingletonController::class, 'getConfig'])->name('singleton.config');

Route::get('/factory-method-hamburguesa', [FactoryMethodController::class, 'hacerHamburguesa'])->name('factory.method.hamburguesa');

Route::get('/strategy-operation', [StrategyController::class, 'operation'])->name('strategy.operation');

Route::get('/facade-buscar-vuelo', [FacadeController::class, 'buscarVuelo'])->name('facade.bucar.vuelo');

Route::get('/decorator-cuenta', [DecoratorController::class, 'crearCuenta'])->name('decorator.crear.cuenta');

Route::get('/abstract-factory-conection', [AbstractFactoryController::class, 'conection'])->name('abstract.factory.conection');





