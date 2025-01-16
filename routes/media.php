<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Media Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Projects are on sub-domains
Route::domain('{project}.' . config('app.domain'))->name('project.')->group(function () {
    Route::get(config('images.route') . '/{path}', 'ImageController@project')->where('path', '.*');
    Route::get('assets/{path}', 'Project\ProjectController@asset')->where('path', '.*');
});

Route::get('assets/{path}', 'Main\AssetController@asset')->where('path', '.*');

// Images (works on any domain)
Route::get(config('images.route') . '/{path}', 'ImageController@show')->where('path', '.*');
