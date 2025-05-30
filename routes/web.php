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

 
use App\Http\Controllers\Dashboards_Controller;
route::get('/dashboards', [Dashboards_Controller::class, 'index']) ->name('dashboards.index');
route::post('/dashboards/create', [Dashboards_Controller::class, 'create']) ->name('dashboards.create');
route::get('/dashboards/{id}', [Dashboards_Controller::class, 'detail']) ->name('dashboards.detail');
route::put('/dashboards/{id}', [Dashboards_Controller::class,'edit']) ->name('dashboards.edit');
route::delete('/dashboards/{id}', [Dashboards_Controller::class,'delete'])->name('dashboards.delete');